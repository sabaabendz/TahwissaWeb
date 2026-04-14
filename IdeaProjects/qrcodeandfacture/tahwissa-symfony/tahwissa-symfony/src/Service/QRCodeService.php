<?php

namespace App\Service;

use App\Entity\ReservationVoyage;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Writer\PngWriter;

class QRCodeService
{
    /**
     * Generate a QR code data URI for a reservation
     */
    public function generateForReservation(ReservationVoyage $reservation): string
    {
        $voyage = $reservation->getVoyage();

        $data = json_encode([
            'ref'         => 'TAHWISSA-RES-' . $reservation->getId(),
            'voyage'      => $voyage?->getTitre(),
            'destination' => $voyage?->getDestination(),
            'depart'      => $voyage?->getDateDepart()?->format('Y-m-d'),
            'retour'      => $voyage?->getDateRetour()?->format('Y-m-d'),
            'personnes'   => $reservation->getNbrPersonnes(),
            'montant'     => $reservation->getMontantTotal() . ' TND',
            'statut'      => $reservation->getStatut(),
        ], JSON_UNESCAPED_UNICODE);

        $result = Builder::create()
            ->writer(new PngWriter())
            ->data($data)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(250)
            ->margin(10)
            ->build();

        return $result->getDataUri();
    }
}
