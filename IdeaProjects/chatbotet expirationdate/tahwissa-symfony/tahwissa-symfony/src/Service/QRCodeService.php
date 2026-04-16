<?php

namespace App\Service;

use App\Entity\ReservationVoyage;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

class QRCodeService
{
    /**
     * Generate a QR code data URI for a reservation.
     * Encodes a clean, readable text summary (like a boarding pass).
     */
    public function generateForReservation(ReservationVoyage $reservation): string
    {
        $voyage = $reservation->getVoyage();

        // Build a clean, readable text that looks great when scanned
        $lines = [];
        $lines[] = '══════════════════════';
        $lines[] = '   🌍 TAHWISSA';
        $lines[] = '   Agence de Voyages';
        $lines[] = '══════════════════════';
        $lines[] = '';
        $lines[] = '📋 RÉSERVATION #' . $reservation->getId();
        $lines[] = '──────────────────────';

        if ($voyage) {
            $lines[] = '✈️  Voyage : ' . $voyage->getTitre();
            $lines[] = '📍 Destination : ' . $voyage->getDestination();

            if ($voyage->getDateDepart()) {
                $lines[] = '📅 Départ : ' . $voyage->getDateDepart()->format('d/m/Y');
            }
            if ($voyage->getDateRetour()) {
                $lines[] = '📅 Retour : ' . $voyage->getDateRetour()->format('d/m/Y');
            }
        }

        $lines[] = '👥 Personnes : ' . $reservation->getNbrPersonnes();
        $lines[] = '💰 Montant : ' . number_format((float)$reservation->getMontantTotal(), 2, ',', ' ') . ' TND';
        $lines[] = '';
        $lines[] = '──────────────────────';

        $statut = match ($reservation->getStatut()) {
            'CONFIRMEE' => '✅ CONFIRMÉE',
            'EN_ATTENTE' => '⏳ EN ATTENTE',
            'ANNULEE' => '❌ ANNULÉE',
            'TERMINEE' => '🏁 TERMINÉE',
            default => $reservation->getStatut(),
        };
        $lines[] = '🔖 Statut : ' . $statut;

        if ($reservation->getDateReservation()) {
            $lines[] = '🕐 Réservé le : ' . $reservation->getDateReservation()->format('d/m/Y H:i');
        }

        $lines[] = '';
        $lines[] = '══════════════════════';
        $lines[] = 'Réf: TAHWISSA-RES-' . $reservation->getId();
        $lines[] = '══════════════════════';

        $data = implode("\n", $lines);

        $result = Builder::create()
            ->writer(new PngWriter())
            ->data($data)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::Medium)
            ->size(300)
            ->margin(12)
            ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
            ->foregroundColor(new Color(30, 41, 59))
            ->backgroundColor(new Color(255, 255, 255))
            ->build();

        return $result->getDataUri();
    }
}
