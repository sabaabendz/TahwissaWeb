<?php

namespace App\Service;

use App\Entity\ReservationVoyage;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Stripe\Exception\ApiErrorException;
use Stripe\StripeClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Stripe Checkout for voyage reservations (currency TND displayed, charged in EUR).
 */
final class StripeVoyagePaymentService
{
    private readonly ?StripeClient $stripe;
    private ?string $lastStripeError = null;

    public function __construct(
        private readonly string $stripeSecretKey,
        private readonly EntityManagerInterface $em,
        private readonly UrlGeneratorInterface $urlGenerator,
        private readonly LoggerInterface $logger,
    ) {
        $key = trim($stripeSecretKey);
        $this->stripe = ($key !== '' && str_starts_with($key, 'sk_')) ? new StripeClient($key) : null;
    }

    public function getLastStripeError(): ?string
    {
        return $this->lastStripeError;
    }

    public function isEnabled(): bool
    {
        return $this->stripe !== null;
    }

    /**
     * Convert TND to EUR cents for Stripe (test: 1 TND = 1 EUR).
     */
    private function tndToEurCents(float $amount): int
    {
        return (int) max(50, round($amount * 100));
    }

    public function createCheckoutSession(ReservationVoyage $reservation, Request $request): ?string
    {
        if (null === $this->stripe || null === $reservation->getId()) {
            return null;
        }

        $voyage = $reservation->getVoyage();
        if (null === $voyage) {
            return null;
        }

        $totalTnd = (float) $reservation->getMontantTotal();
        $eurCents = $this->tndToEurCents($totalTnd);
        if ($eurCents < 50) {
            return null;
        }

        $successUrl = $this->urlGenerator->generate(
            'client_reservation_voyage_payment_success',
            [],
            UrlGeneratorInterface::ABSOLUTE_URL
        ) . '?session_id={CHECKOUT_SESSION_ID}';

        $cancelUrl = $this->urlGenerator->generate(
            'client_reservation_voyage_payment_cancel',
            ['id' => $reservation->getId()],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        $title = 'Voyage : ' . $voyage->getTitre();
        $desc = $reservation->getNbrPersonnes() . ' personne(s) — ' . $voyage->getDestination()
            . ' — ' . number_format($totalTnd, 2, ',', ' ') . ' TND';

        try {
            $session = $this->stripe->checkout->sessions->create([
                'mode' => 'payment',
                'client_reference_id' => 'reservation_voyage:' . $reservation->getId(),
                'success_url' => $successUrl,
                'cancel_url' => $cancelUrl,
                'metadata' => [
                    'reservation_voyage_id' => (string) $reservation->getId(),
                    'voyage_id' => (string) $voyage->getId(),
                    'user_id' => (string) ($reservation->getIdUtilisateur() ?? ''),
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

            $this->em->flush();

            return $session->url;
        } catch (ApiErrorException $e) {
            $this->lastStripeError = $e->getMessage();
            $this->logger->error('Stripe Voyage Checkout failed: ' . $e->getMessage(), [
                'reservation_id' => $reservation->getId(),
            ]);

            return null;
        }
    }

    /**
     * Fulfill a paid reservation from a Stripe Checkout Session ID.
     */
    public function fulfillFromCheckoutSessionId(string $checkoutSessionId, ?int $expectedUserId = null): ?ReservationVoyage
    {
        if (null === $this->stripe) {
            return null;
        }

        try {
            $session = $this->stripe->checkout->sessions->retrieve($checkoutSessionId);
        } catch (ApiErrorException $e) {
            $this->logger->error('Stripe session retrieve failed: ' . $e->getMessage());
            return null;
        }

        if ('paid' !== ($session->payment_status ?? '')) {
            return null;
        }

        $rid = $session->metadata['reservation_voyage_id'] ?? null;
        if (null === $rid || $rid === '') {
            return null;
        }

        $reservation = $this->em->find(ReservationVoyage::class, (int) $rid);
        if (!$reservation instanceof ReservationVoyage) {
            return null;
        }

        if (null !== $expectedUserId && $reservation->getIdUtilisateur() !== $expectedUserId) {
            return null;
        }

        if ('EN_ATTENTE' !== $reservation->getStatut()) {
            return 'CONFIRMEE' === $reservation->getStatut() ? $reservation : null;
        }

        $reservation->setStatut('CONFIRMEE');
        $this->em->flush();
        $this->logger->info('Voyage reservation confirmed via Stripe', ['id' => $reservation->getId()]);

        return $reservation;
    }
}
