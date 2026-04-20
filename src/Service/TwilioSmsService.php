<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Twilio\Rest\Client as TwilioClient;

class TwilioSmsService
{
    private ?TwilioClient $twilio = null;

    public function __construct(
        private string $twilioSid,
        private string $twilioAuthToken,
        private string $twilioFromNumber,
        private LoggerInterface $logger,
    ) {
        $sid = trim($twilioSid);
        $token = trim($twilioAuthToken);
        if ($sid !== '' && $sid !== 'no_sid' && $token !== '' && $token !== 'no_token') {
            $this->twilio = new TwilioClient($sid, $token);
        }
    }

    public function isEnabled(): bool
    {
        return $this->twilio !== null && trim($this->twilioFromNumber) !== '' && $this->twilioFromNumber !== 'no_number';
    }

    /**
     * Send an SMS message.
     *
     * @return bool Whether the message was sent successfully
     */
    public function send(string $to, string $body): bool
    {
        if (!$this->isEnabled()) {
            $this->logger->warning('Twilio SMS not configured — skipping send to ' . $to);
            return false;
        }

        // Normalize phone number to E.164 format
        $to = preg_replace('/[^0-9+]/', '', trim($to));
        if ($to === '') {
            return false;
        }
        // If no country code, assume Tunisia (+216)
        if (!str_starts_with($to, '+')) {
            $to = '+216' . ltrim($to, '0');
        }

        try {
            $this->twilio->messages->create($to, [
                'from' => $this->twilioFromNumber,
                'body' => $body,
            ]);

            $this->logger->info('SMS sent to ' . $to);
            return true;
        } catch (\Throwable $e) {
            $this->logger->error('Twilio SMS failed: ' . $e->getMessage(), [
                'to' => $to,
            ]);
            return false;
        }
    }

    /**
     * Send reservation created SMS — booking received, pending payment.
     */
    public function sendReservationCreated(
        string $to,
        string $clientName,
        string $voyageTitre,
        string $destination,
        string $dateDepart,
        string $dateRetour,
        int $nbrPersonnes,
        string $montant,
        string $refId,
    ): bool {
        $body = "Bonjour {$clientName},\n\n"
            . "Votre réservation chez Tahwissa a bien été enregistrée.\n\n"
            . "Réf: #{$refId}\n"
            . "Voyage: {$voyageTitre}\n"
            . "Destination: {$destination}\n"
            . "Dates: {$dateDepart} — {$dateRetour}\n"
            . "Voyageurs: {$nbrPersonnes}\n"
            . "Montant total: {$montant} TND\n\n"
            . "Statut: En attente de paiement.\n"
            . "Veuillez procéder au paiement pour confirmer votre réservation.\n\n"
            . "Besoin d'aide ? Répondez à ce message ou contactez-nous à support@tahwissa.tn.\n"
            . "— L'équipe Tahwissa";

        return $this->send($to, $body);
    }

    /**
     * Send reservation confirmed SMS — payment successful.
     */
    public function sendReservationConfirmation(
        string $to,
        string $clientName,
        string $voyageTitre,
        string $destination,
        string $dateDepart,
        string $dateRetour,
        int $nbrPersonnes,
        string $montant,
        string $refId,
    ): bool {
        $body = "Bonjour {$clientName},\n\n"
            . "Votre paiement a été accepté. Votre réservation est confirmée !\n\n"
            . "Réf: #{$refId}\n"
            . "Voyage: {$voyageTitre}\n"
            . "Destination: {$destination}\n"
            . "Dates: {$dateDepart} — {$dateRetour}\n"
            . "Voyageurs: {$nbrPersonnes}\n"
            . "Montant payé: {$montant} TND\n\n"
            . "Prochaine étape: Consultez votre espace client pour télécharger votre confirmation et préparer votre voyage.\n\n"
            . "Nous vous souhaitons un excellent voyage !\n"
            . "— L'équipe Tahwissa";

        return $this->send($to, $body);
    }

    /**
     * Send reservation cancellation SMS.
     */
    public function sendReservationCancellation(
        string $to,
        string $clientName,
        string $voyageTitre,
        string $destination,
        string $montant,
        string $refId,
    ): bool {
        $body = "Bonjour {$clientName},\n\n"
            . "Votre réservation a été annulée.\n\n"
            . "Réf: #{$refId}\n"
            . "Voyage: {$voyageTitre}\n"
            . "Destination: {$destination}\n"
            . "Montant: {$montant} TND\n\n"
            . "Aucun montant n'a été débité de votre compte.\n\n"
            . "Si cette annulation est une erreur ou si vous souhaitez effectuer une nouvelle réservation, n'hésitez pas à consulter nos voyages disponibles sur votre espace client.\n\n"
            . "À bientôt sur Tahwissa !\n"
            . "— L'équipe Tahwissa";

        return $this->send($to, $body);
    }
}
