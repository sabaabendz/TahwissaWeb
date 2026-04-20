<?php

namespace App\Service;

use App\Entity\Evenement;
use App\Entity\ReservationEvenement;
use Doctrine\DBAL\LockMode;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Stripe\Exception\ApiErrorException;
use Stripe\StripeClient;
use Stripe\Webhook;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Stripe Checkout for event reservations (currency TND, amounts in millimes).
 */
final class StripeEvenementPaymentService
{
    private readonly ?StripeClient $stripe;

    private readonly string $webhookSecret;

    /** Last Stripe API error — surfaced in dev for easier debugging. */
    private ?string $lastStripeError = null;

    public function __construct(
        string $stripeSecretKey,
        string $stripeWebhookSecret,
        private readonly EntityManagerInterface $em,
        private readonly UrlGeneratorInterface $urlGenerator,
        private readonly LoggerInterface $logger,
        #[Autowire(param: 'kernel.environment')]
        private readonly string $env = 'prod',
    ) {
        $key = trim($stripeSecretKey);
        $this->stripe = ($key !== '' && str_starts_with($key, 'sk_')) ? new StripeClient($key) : null;
        $this->webhookSecret = trim($stripeWebhookSecret);
    }

    public function getLastStripeError(): ?string
    {
        return $this->lastStripeError;
    }

    public function isEnabled(): bool
    {
        return $this->stripe !== null;
    }

    public function computeTotalTnd(ReservationEvenement $reservation): float
    {
        $ev = $reservation->getEvenement();
        if (null === $ev) {
            return 0.0;
        }

        return round($ev->getPrixFinal() * $reservation->getNbPlacesReservees(), 3);
    }

    /**
     * Converts a TND amount to Stripe integer unit-amount for EUR (cents).
     * Stripe does not support TND natively on most accounts.
     * We use EUR as the charge currency; the TND amount is shown in the product description.
     * In production replace this with a real currency conversion service.
     */
    public function tndToStripeEurCents(float $totalTnd): int
    {
        if ($totalTnd <= 0) {
            return 0;
        }

        // Use 1 TND = 1 EUR for test/sandbox environments (avoids exchange-rate complexity).
        // In production, apply a real exchange rate (e.g. 1 TND ≈ 0.30 EUR).
        return (int) max(50, round($totalTnd * 100)); // minimum 0.50 EUR
    }

    public function createCheckoutSession(ReservationEvenement $reservation, Request $request): ?string
    {
        if (null === $this->stripe) {
            return null;
        }

        if (!$reservation->isSeatsHeld()) {
            $this->logger->error('createCheckoutSession: seats not held for reservation #' . ($reservation->getId() ?? '?'));

            return null;
        }

        $evenement = $reservation->getEvenement();
        if (null === $evenement || null === $reservation->getId()) {
            return null;
        }

        $totalTnd = $this->computeTotalTnd($reservation);
        $eurCents = $this->tndToStripeEurCents($totalTnd);
        if ($eurCents < 50) {
            return null;
        }

        $successUrl = $this->urlGenerator->generate(
            'client_reservation_evenement_payment_success',
            [],
            UrlGeneratorInterface::ABSOLUTE_URL
        ) . '?session_id={CHECKOUT_SESSION_ID}';

        $cancelUrl = $this->urlGenerator->generate(
            'client_reservation_evenement_payment_cancel',
            ['id' => $reservation->getId()],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        $title = 'Événement : ' . $evenement->getTitre();
        $desc = $reservation->getNbPlacesReservees() . ' place(s) — ' . $evenement->getLieu()
            . ' — ' . number_format($totalTnd, 3, ',', ' ') . ' TND';

        try {
            $session = $this->stripe->checkout->sessions->create([
                'mode' => 'payment',
                'client_reference_id' => 'reservation_evenement:' . $reservation->getId(),
                'success_url' => $successUrl,
                'cancel_url' => $cancelUrl,
                'metadata' => [
                    'reservation_evenement_id' => (string) $reservation->getId(),
                    'evenement_id' => (string) $evenement->getId(),
                    'user_id' => (string) ($reservation->getIdUser() ?? ''),
                    'montant_tnd' => (string) $totalTnd,
                ],
                'line_items' => [[
                    'quantity' => 1,
                    'price_data' => [
                        'currency' => 'eur',
                        'unit_amount' => $eurCents,
                        'product_data' => [
                            'name' => $title,
                            'description' => $desc,
                        ],
                    ],
                ]],
            ]);

            $reservation->setStripeCheckoutSessionId($session->id);
            $reservation->setMontantTotalTnd($totalTnd);
            $this->em->flush();

            return $session->url;
        } catch (ApiErrorException $e) {
            $this->lastStripeError = $e->getMessage();
            $this->logger->error('Stripe Checkout create failed: ' . $e->getMessage(), [
                'stripe_code' => $e->getStripeCode(),
                'http_status' => $e->getHttpStatus(),
                'reservation_id' => $reservation->getId(),
            ]);

            return null;
        }
    }

    public function fulfillFromCheckoutSessionId(string $checkoutSessionId, ?int $expectedUserId = null): bool
    {
        if (null === $this->stripe) {
            return false;
        }

        try {
            $session = $this->stripe->checkout->sessions->retrieve($checkoutSessionId, []);
        } catch (ApiErrorException $e) {
            $this->logger->error('Stripe session retrieve failed: ' . $e->getMessage());

            return false;
        }

        if ('paid' !== ($session->payment_status ?? '')) {
            return false;
        }

        $rid = $session->metadata['reservation_evenement_id'] ?? null;
        if (null === $rid || $rid === '') {
            return false;
        }

        $reservation = $this->em->find(ReservationEvenement::class, (int) $rid);
        if (!$reservation instanceof ReservationEvenement) {
            return false;
        }

        if (null !== $expectedUserId && $reservation->getIdUser() !== $expectedUserId) {
            return false;
        }

        if ($checkoutSessionId !== $reservation->getStripeCheckoutSessionId()) {
            return false;
        }

        return $this->finalizePaidReservation($reservation);
    }

    public function handleStripeWebhookPayload(string $payload, string $signatureHeader): bool
    {
        if ($this->webhookSecret === '') {
            $this->logger->warning('Stripe webhook refused: STRIPE_WEBHOOK_SECRET is empty.');

            return false;
        }

        try {
            $event = Webhook::constructEvent($payload, $signatureHeader, $this->webhookSecret);
        } catch (\UnexpectedValueException|\Stripe\Exception\SignatureVerificationException $e) {
            $this->logger->warning('Stripe webhook signature invalid: ' . $e->getMessage());

            return false;
        }

        if ('checkout.session.completed' === $event->type) {
            /** @var \Stripe\Checkout\Session $session */
            $session = $event->data->object;
            $sid = \is_string($session->id ?? null) ? $session->id : null;
            if (null !== $sid) {
                $this->fulfillFromCheckoutSessionId($sid, null);
            }

            return true;
        }

        if ('checkout.session.expired' === $event->type) {
            /** @var \Stripe\Checkout\Session $session */
            $session = $event->data->object;
            $sid = \is_string($session->id ?? null) ? $session->id : null;
            if (null !== $sid) {
                $this->abandonPendingReservationByStripeSession($sid);
            }

            return true;
        }

        return true;
    }

    public function abandonPendingReservationByStripeSession(string $checkoutSessionId): void
    {
        $reservation = $this->em->getRepository(ReservationEvenement::class)->findOneBy([
            'stripeCheckoutSessionId' => $checkoutSessionId,
        ]);
        if (!$reservation instanceof ReservationEvenement) {
            return;
        }
        $this->abandonPendingReservation($reservation);
    }

    public function abandonPendingReservation(ReservationEvenement $reservation): void
    {
        if ('EN_ATTENTE' !== $reservation->getStatut()) {
            return;
        }
        $this->releaseHeldSeats($reservation);
        $reservation->setStatut('ANNULEE');
        $this->em->flush();
    }

    /**
     * When creating a pending reservation, decrement event seats immediately (hold).
     */
    public function reserveHeldSeats(ReservationEvenement $reservation): bool
    {
        $evenement = $reservation->getEvenement();
        if (null === $evenement || null === $evenement->getId()) {
            return false;
        }

        $conn = $this->em->getConnection();
        $conn->beginTransaction();

        try {
            $e = $this->em->find(Evenement::class, $evenement->getId(), LockMode::PESSIMISTIC_WRITE);
            if (!$e instanceof Evenement) {
                $conn->rollBack();

                return false;
            }

            $nb = $reservation->getNbPlacesReservees();
            if ($e->getNbPlaces() < $nb) {
                $conn->rollBack();

                return false;
            }

            $e->setNbPlaces($e->getNbPlaces() - $nb);
            if ($e->getNbPlaces() <= 0) {
                $e->setStatut('COMPLET');
            }

            $reservation->setSeatsHeld(true);

            $this->em->flush();
            $conn->commit();

            return true;
        } catch (\Throwable $ex) {
            if ($conn->isTransactionActive()) {
                $conn->rollBack();
            }
            $this->logger->error('reserveHeldSeats failed: ' . $ex->getMessage());

            return false;
        }
    }

    /**
     * Restores seats when a pending reservation is abandoned (cancel / Stripe failure / expiry).
     */
    public function releaseHeldSeats(ReservationEvenement $reservation): void
    {
        if (!$reservation->isSeatsHeld()) {
            return;
        }

        $evenement = $reservation->getEvenement();
        if (null === $evenement || null === $evenement->getId()) {
            return;
        }

        $conn = $this->em->getConnection();
        $conn->beginTransaction();

        try {
            $e = $this->em->find(Evenement::class, $evenement->getId(), LockMode::PESSIMISTIC_WRITE);
            if (!$e instanceof Evenement) {
                $conn->rollBack();

                return;
            }

            $nb = $reservation->getNbPlacesReservees();
            $e->setNbPlaces($e->getNbPlaces() + $nb);
            if ($e->getNbPlaces() > 0 && 'COMPLET' === $e->getStatut()) {
                $e->setStatut('DISPONIBLE');
            }

            $reservation->setSeatsHeld(false);

            $this->em->flush();
            $conn->commit();
        } catch (\Throwable $ex) {
            if ($conn->isTransactionActive()) {
                $conn->rollBack();
            }
            $this->logger->error('releaseHeldSeats failed: ' . $ex->getMessage());
        }
    }

    /**
     * After successful Stripe payment: mark confirmed (seats were already held at reservation time).
     */
    public function finalizePaidReservation(ReservationEvenement $reservation): bool
    {
        if ('CONFIRMEE' === $reservation->getStatut()) {
            return true;
        }
        if ('EN_ATTENTE' !== $reservation->getStatut()) {
            return false;
        }

        if (null === $reservation->getId()) {
            return false;
        }

        $conn = $this->em->getConnection();
        $conn->beginTransaction();

        try {
            $r = $this->em->find(ReservationEvenement::class, $reservation->getId(), LockMode::PESSIMISTIC_WRITE);
            if (!$r instanceof ReservationEvenement) {
                $conn->rollBack();

                return false;
            }
            if ('CONFIRMEE' === $r->getStatut()) {
                $conn->commit();

                return true;
            }
            if ('EN_ATTENTE' !== $r->getStatut()) {
                $conn->rollBack();

                return false;
            }

            $r->setStatut('CONFIRMEE');

            $this->em->flush();
            $conn->commit();

            return true;
        } catch (\Throwable $ex) {
            if ($conn->isTransactionActive()) {
                $conn->rollBack();
            }
            $this->logger->error('finalizePaidReservation failed: ' . $ex->getMessage());

            return false;
        }
    }

    /** Free event: hold + confirm in one step (no Stripe). */
    public function finalizeFreeReservation(ReservationEvenement $reservation): bool
    {
        if (!$this->reserveHeldSeats($reservation)) {
            return false;
        }
        $reservation->setStatut('CONFIRMEE');
        $this->em->flush();

        return true;
    }
}
