<?php

namespace App\Service;

use App\Entity\ReservationVoyage;
use App\Entity\User;
use App\Repository\UserRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class InvoiceService
{
    public function __construct(
        private Environment $twig,
        private QRCodeService $qrCodeService,
        private UserRepository $userRepository,
    ) {}

    /**
     * Generate a PDF invoice for a reservation
     */
    public function generatePdf(ReservationVoyage $reservation): string
    {
        $qrCode = $this->qrCodeService->generateForReservation($reservation);
        $client = $this->userRepository->find($reservation->getIdUtilisateur());

        $html = $this->twig->render('invoice/reservation_invoice.html.twig', [
            'reservation'   => $reservation,
            'client'        => $client,
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
