<?php

namespace App\Service;

use App\Entity\ReservationTransport;
use App\Repository\UserRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class EmailService
{
    private MailerInterface $mailer;
    private UserRepository $userRepository;
    private LoggerInterface $logger;

    public function __construct(MailerInterface $mailer, UserRepository $userRepository, LoggerInterface $logger)
    {
        $this->mailer = $mailer;
        $this->userRepository = $userRepository;
        $this->logger = $logger;
    }

    public function sendReservationConfirmation(ReservationTransport $reservation): void
    {
        $user = $this->userRepository->find($reservation->getIdUser());
        
        if (!$user || !$user->getEmail()) {
            $this->logger->warning('Email not sent: User or email not found', ['userId' => $reservation->getIdUser()]);
            return;
        }

        try {
            $email = (new Email())
                ->from('tahwissa@example.com')
                ->to($user->getEmail())
                ->subject('Confirmation de Réservation - Tahwissa')
                ->html($this->getConfirmationEmailTemplate($reservation, $user));

            $this->mailer->send($email);
            $this->logger->info('Confirmation email sent successfully', ['userId' => $user->getId(), 'email' => $user->getEmail()]);
        } catch (\Exception $e) {
            $this->logger->error('Failed to send confirmation email', ['error' => $e->getMessage()]);
        }
    }

    private function getConfirmationEmailTemplate(ReservationTransport $reservation, $user): string
    {
        $transport = $reservation->getTransport();
        $totalPrice = $reservation->getNbPlacesReservees() * $transport->getPrix();

        return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background-color: #f5f5f5; }
        .container { max-width: 600px; margin: 20px auto; background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .header { background-color: #4CAF50; color: white; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { padding: 20px; }
        .reservation-details { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #4CAF50; margin: 20px 0; }
        .detail-item { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #eee; }
        .detail-label { font-weight: bold; color: #333; }
        .detail-value { color: #666; }
        .footer { text-align: center; font-size: 12px; color: #999; margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Réservation Confirmée ✓</h1>
        </div>
        <div class="content">
            <p>Bonjour <strong>{$user->getName()}</strong>,</p>
            <p>Nous vous confirmons que votre réservation de transport a été acceptée et confirmée.</p>
            
            <div class="reservation-details">
                <h3 style="margin-top: 0; color: #333;">Détails de votre réservation</h3>
                <div class="detail-item">
                    <span class="detail-label">Numéro de réservation:</span>
                    <span class="detail-value">#R{$reservation->getIdReservation()}</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Type de transport:</span>
                    <span class="detail-value">{$transport->getTypeTransport()}</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Trajet:</span>
                    <span class="detail-value">{$transport->getVilleDepart()} → {$transport->getVilleArrivee()}</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Date de départ:</span>
                    <span class="detail-value">{$transport->getDateDepart()->format('d/m/Y')}</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Nombre de places:</span>
                    <span class="detail-value">{$reservation->getNbPlacesReservees()}</span>
                </div>
                <div class="detail-item">
                    <span class="detail-label">Prix unitaire:</span>
                    <span class="detail-value">{$transport->getPrix()} TND</span>
                </div>
                <div class="detail-item" style="border-bottom: none; padding-top: 15px; margin-top: 10px; border-top: 2px solid #4CAF50;">
                    <span class="detail-label" style="font-size: 1.1em;">Montant total:</span>
                    <span class="detail-value" style="font-size: 1.1em; color: #4CAF50; font-weight: bold;">{$totalPrice} TND</span>
                </div>
            </div>

            <p>Veuillez garder cette confirmation pour votre dossier. Nous vous remercions d'avoir choisi Tahwissa.</p>
            <p>Si vous avez des questions, n'hésitez pas à nous contacter.</p>

            <p>Cordialement,<br><strong>L'équipe Tahwissa</strong></p>
        </div>
        <div class="footer">
            <p>&copy; 2026 Tahwissa. Tous les droits réservés.</p>
        </div>
    </div>
</body>
</html>
HTML;
    }
}
