<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class EmailNotificationService
{
    public function __construct(
        private MailerInterface $mailer,
        private Environment $twig,
        private LoggerInterface $logger,
        private string $fromAddress,
    ) {}

    /**
     * Send reservation created email — booking received, pending confirmation.
     */
    public function sendReservationCreated(
        string $toEmail,
        string $clientName,
        string $voyageTitre,
        string $destination,
        string $dateDepart,
        string $dateRetour,
        int $nbrPersonnes,
        string $montant,
        string $refId,
    ): bool {
        return $this->sendEmail($toEmail, "Réservation #{$refId} — En attente de confirmation", 'emails/reservation_created.html.twig', [
            'clientName' => $clientName,
            'voyageTitre' => $voyageTitre,
            'destination' => $destination,
            'dateDepart' => $dateDepart,
            'dateRetour' => $dateRetour,
            'nbrPersonnes' => $nbrPersonnes,
            'montant' => $montant,
            'refId' => $refId,
        ]);
    }

    /**
     * Send reservation confirmed email — payment successful or manually confirmed.
     */
    public function sendReservationConfirmation(
        string $toEmail,
        string $clientName,
        string $voyageTitre,
        string $destination,
        string $dateDepart,
        string $dateRetour,
        int $nbrPersonnes,
        string $montant,
        string $refId,
    ): bool {
        return $this->sendEmail($toEmail, "Réservation #{$refId} — Confirmée ✅", 'emails/reservation_confirmed.html.twig', [
            'clientName' => $clientName,
            'voyageTitre' => $voyageTitre,
            'destination' => $destination,
            'dateDepart' => $dateDepart,
            'dateRetour' => $dateRetour,
            'nbrPersonnes' => $nbrPersonnes,
            'montant' => $montant,
            'refId' => $refId,
        ]);
    }

    /**
     * Send reservation cancellation email.
     */
    public function sendReservationCancellation(
        string $toEmail,
        string $clientName,
        string $voyageTitre,
        string $destination,
        string $montant,
        string $refId,
    ): bool {
        return $this->sendEmail($toEmail, "Réservation #{$refId} — Annulée", 'emails/reservation_cancelled.html.twig', [
            'clientName' => $clientName,
            'voyageTitre' => $voyageTitre,
            'destination' => $destination,
            'montant' => $montant,
            'refId' => $refId,
        ]);
    }

    /**
     * Send reservation expired email.
     */
    public function sendReservationExpired(
        string $toEmail,
        string $clientName,
        string $voyageTitre,
        string $destination,
        string $montant,
        string $refId,
    ): bool {
        return $this->sendEmail($toEmail, "Réservation #{$refId} — Expirée", 'emails/reservation_expired.html.twig', [
            'clientName' => $clientName,
            'voyageTitre' => $voyageTitre,
            'destination' => $destination,
            'montant' => $montant,
            'refId' => $refId,
        ]);
    }

    private function sendEmail(string $to, string $subject, string $template, array $context): bool
    {
        try {
            $html = $this->twig->render($template, $context);

            $email = (new Email())
                ->from($this->fromAddress)
                ->to($to)
                ->subject($subject)
                ->html($html);

            $this->mailer->send($email);
            $this->logger->info("Email sent to {$to}: {$subject}");
            return true;
        } catch (\Throwable $e) {
            $this->logger->error('Email send failed: ' . $e->getMessage(), [
                'to' => $to,
                'subject' => $subject,
            ]);
            return false;
        }
    }
}
