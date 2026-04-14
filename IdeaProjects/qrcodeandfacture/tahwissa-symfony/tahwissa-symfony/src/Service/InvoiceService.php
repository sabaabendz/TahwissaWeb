<?php

namespace App\Service;

use App\Entity\ReservationVoyage;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class InvoiceService
{
    public function __construct(
        private Environment $twig,
        private QRCodeService $qrCodeService,
    ) {}

    /**
     * Generate a PDF invoice for a reservation
     */
    public function generatePdf(ReservationVoyage $reservation): string
    {
        $qrCode = $this->qrCodeService->generateForReservation($reservation);

        $html = $this->twig->render('invoice/reservation_invoice.html.twig', [
            'reservation'   => $reservation,
            'qrCode'        => $qrCode,
            'invoiceNumber' => 'FAC-' . date('Y') . '-' . str_pad($reservation->getId(), 6, '0', STR_PAD_LEFT),
            'invoiceDate'   => new \DateTime(),
        ]);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->setDefaultFont('DejaVu Sans');

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }
}
