<?php

namespace App\Service;

use App\Entity\Transport;
use App\Repository\ReservationTransportRepository;
use Knp\Snappy\Pdf;
use Twig\Environment;

class PdfService
{
    private Pdf $pdf;
    private Environment $twig;
    private ReservationTransportRepository $reservationRepo;

    public function __construct(Pdf $pdf, Environment $twig, ReservationTransportRepository $reservationRepo)
    {
        $this->pdf = $pdf;
        $this->twig = $twig;
        $this->reservationRepo = $reservationRepo;
    }

    public function generateTransportPdf(Transport $transport): string
    {
        // Get all reservations for this transport
        $reservations = $this->reservationRepo->findBy(['transport' => $transport]);

        // Render the HTML template
        $html = $this->twig->render('pdf/transport.html.twig', [
            'transport' => $transport,
            'reservations' => $reservations,
        ]);

        // Generate PDF using KnpSnappyBundle (wkhtmltopdf)
        return $this->pdf->getOutputFromHtml($html);
    }
}
