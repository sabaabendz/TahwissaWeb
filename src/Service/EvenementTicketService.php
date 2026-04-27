<?php

namespace App\Service;

use App\Entity\ReservationEvenement;
use App\Repository\UserRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

/**
 * Generates a printable PDF ticket for a confirmed event reservation.
 *
 * Uses Dompdf (already installed) + the QRCodeService for the barcode
 * and Twig for the HTML template, following the same pattern as InvoiceService.
 */
final class EvenementTicketService
{
    public function __construct(
        private readonly Environment $twig,
        private readonly QRCodeService $qrCodeService,
        private readonly UserRepository $userRepository,
    ) {}

    /**
     * Renders the ticket HTML via Twig, converts it to PDF with Dompdf and
     * returns the raw PDF binary string ready to be streamed.
     */
    public function generatePdf(ReservationEvenement $reservation): string
    {
        $qrCode       = $this->qrCodeService->generateForEvenementReservation($reservation);
        $client       = $this->userRepository->find($reservation->getIdUser());
        $ticketNumber = 'BIL-' . date('Y') . '-' . str_pad((string) $reservation->getId(), 6, '0', STR_PAD_LEFT);

        $html = $this->twig->render('ticket/evenement_ticket.html.twig', [
            'reservation'  => $reservation,
            'client'       => $client,
            'qrCode'       => $qrCode,
            'ticketNumber' => $ticketNumber,
            'generatedAt'  => new \DateTime(),
        ]);

        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
        $options->setDefaultFont('DejaVu Sans');
        // Sharper rasterisation for embedded PNG (QR) when printing / zooming
        $options->set('dpi', 120);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }

    /**
     * Builds a safe ASCII filename for the Content-Disposition header.
     */
    public function buildFilename(ReservationEvenement $reservation): string
    {
        $titre = $reservation->getEvenement()?->getTitre() ?? 'evenement';
        $slug  = preg_replace('/[^a-zA-Z0-9]+/', '-', $titre) ?? 'evenement';
        $slug  = trim($slug, '-');

        return sprintf('billet-%s-%d.pdf', mb_strtolower($slug), $reservation->getId());
    }
}
