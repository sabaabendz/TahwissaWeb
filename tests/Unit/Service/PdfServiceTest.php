<?php

namespace App\Tests\Unit\Service;

use App\Entity\ReservationTransport;
use App\Entity\Transport;
use App\Repository\ReservationTransportRepository;
use App\Service\PdfService;
use Knp\Snappy\Pdf;
use PHPUnit\Framework\TestCase;
use Twig\Environment;
use DateTime;

class PdfServiceTest extends TestCase
{
    private PdfService $pdfService;
    private Pdf $pdf;
    private Environment $twig;
    private ReservationTransportRepository $reservationRepo;

    protected function setUp(): void
    {
        $this->pdf = $this->createMock(Pdf::class);
        $this->twig = $this->createMock(Environment::class);
        $this->reservationRepo = $this->createMock(ReservationTransportRepository::class);

        $this->pdfService = new PdfService(
            $this->pdf,
            $this->twig,
            $this->reservationRepo
        );
    }

    /**
     * Test création d'une instance PdfService
     */
    public function testPdfServiceCanBeInstantiated(): void
    {
        $this->assertInstanceOf(PdfService::class, $this->pdfService);
    }

    /**
     * Test génération de PDF pour un transport
     */
    public function testGenerateTransportPdf(): void
    {
        // Créer un transport
        $date = new DateTime('2026-06-01');
        $transport = new Transport();
        $transport->setTypeTransport('Bus')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Oran')
            ->setDateDepart($date)
            ->setHeureDepart(new DateTime('08:00:00'))
            ->setDuree(300)
            ->setPrix(2500)
            ->setNbPlaces(48);

        // Créer des réservations pour ce transport
        $reservation1 = new ReservationTransport();
        $reservation1->setIdReservation(1)
            ->setIdUser(1)
            ->setNbPlacesReservees(2)
            ->setStatut('CONFIRMEE')
            ->setTransport($transport);

        $reservation2 = new ReservationTransport();
        $reservation2->setIdReservation(2)
            ->setIdUser(2)
            ->setNbPlacesReservees(3)
            ->setStatut('CONFIRMEE')
            ->setTransport($transport);

        // Setup les mocks
        $this->reservationRepo
            ->expects($this->once())
            ->method('findBy')
            ->with(['transport' => $transport])
            ->willReturn([$reservation1, $reservation2]);

        $htmlContent = '<html><body>Test PDF</body></html>';
        $this->twig
            ->expects($this->once())
            ->method('render')
            ->with('pdf/transport.html.twig', [
                'transport' => $transport,
                'reservations' => [$reservation1, $reservation2],
            ])
            ->willReturn($htmlContent);

        $pdfBinary = 'PDF binary content';
        $this->pdf
            ->expects($this->once())
            ->method('getOutputFromHtml')
            ->with($htmlContent)
            ->willReturn($pdfBinary);

        // Appeler la méthode
        $result = $this->pdfService->generateTransportPdf($transport);

        // Vérifications
        $this->assertSame($pdfBinary, $result);
        $this->assertIsString($result);
    }

    /**
     * Test génération de PDF avec un transport sans réservations
     */
    public function testGenerateTransportPdfWithNoReservations(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Train')
            ->setVilleDepart('Tunis')
            ->setVilleArrivee('Sfax');

        // Setup les mocks
        $this->reservationRepo
            ->expects($this->once())
            ->method('findBy')
            ->with(['transport' => $transport])
            ->willReturn([]);

        $htmlContent = '<html><body>Transport sans réservations</body></html>';
        $this->twig
            ->expects($this->once())
            ->method('render')
            ->with('pdf/transport.html.twig', [
                'transport' => $transport,
                'reservations' => [],
            ])
            ->willReturn($htmlContent);

        $pdfBinary = 'PDF binary content';
        $this->pdf
            ->expects($this->once())
            ->method('getOutputFromHtml')
            ->with($htmlContent)
            ->willReturn($pdfBinary);

        // Appeler la méthode
        $result = $this->pdfService->generateTransportPdf($transport);

        // Vérifications
        $this->assertSame($pdfBinary, $result);
    }

    /**
     * Test génération de PDF avec plusieurs réservations
     */
    public function testGenerateTransportPdfWithMultipleReservations(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Avion')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Paris');

        // Créer 5 réservations
        $reservations = [];
        for ($i = 1; $i <= 5; $i++) {
            $reservation = new ReservationTransport();
            $reservation->setIdReservation($i)
                ->setIdUser($i)
                ->setNbPlacesReservees($i)
                ->setStatut('CONFIRMEE')
                ->setTransport($transport);
            $reservations[] = $reservation;
        }

        // Setup les mocks
        $this->reservationRepo
            ->expects($this->once())
            ->method('findBy')
            ->with(['transport' => $transport])
            ->willReturn($reservations);

        $htmlContent = '<html><body>5 réservations</body></html>';
        $this->twig
            ->expects($this->once())
            ->method('render')
            ->with('pdf/transport.html.twig', [
                'transport' => $transport,
                'reservations' => $reservations,
            ])
            ->willReturn($htmlContent);

        $pdfBinary = 'PDF binary content for 5 reservations';
        $this->pdf
            ->expects($this->once())
            ->method('getOutputFromHtml')
            ->with($htmlContent)
            ->willReturn($pdfBinary);

        // Appeler la méthode
        $result = $this->pdfService->generateTransportPdf($transport);

        // Vérifications
        $this->assertSame($pdfBinary, $result);
    }

    /**
     * Test gestion d'erreur lors du rendu du template Twig
     */
    public function testGenerateTransportPdfWithTwigException(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Bus')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Oran');

        // Setup les mocks
        $this->reservationRepo
            ->expects($this->once())
            ->method('findBy')
            ->with(['transport' => $transport])
            ->willReturn([]);

        $exception = new \Exception('Template not found');
        $this->twig
            ->expects($this->once())
            ->method('render')
            ->willThrowException($exception);

        // Appeler la méthode - doit lever une exception
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Template not found');

        $this->pdfService->generateTransportPdf($transport);
    }

    /**
     * Test que le repository est appelé avec le bon transport
     */
    public function testRepositoryIsCalledWithCorrectTransport(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Minibus')
            ->setVilleDepart('Bizerte')
            ->setVilleArrivee('Sousse');

        $this->reservationRepo
            ->expects($this->once())
            ->method('findBy')
            ->with(['transport' => $transport])
            ->willReturn([]);

        $this->twig
            ->expects($this->once())
            ->method('render')
            ->willReturn('<html></html>');

        $this->pdf
            ->expects($this->once())
            ->method('getOutputFromHtml')
            ->willReturn('PDF content');

        $this->pdfService->generateTransportPdf($transport);

        // Le test passe si le repository a été appelé correctement
    }

    /**
     * Test que le rendu Twig reçoit les bonnes données
     */
    public function testTwigReceivesCorrectData(): void
    {
        $date = new DateTime('2026-07-15');
        $transport = new Transport();
        $transport->setTypeTransport('Train')
            ->setVilleDepart('Tunis')
            ->setVilleArrivee('Sfax')
            ->setDateDepart($date)
            ->setPrix(3500);

        $reservation = new ReservationTransport();
        $reservation->setIdReservation(100)
            ->setNbPlacesReservees(4)
            ->setStatut('CONFIRMEE')
            ->setTransport($transport);

        $this->reservationRepo
            ->expects($this->once())
            ->method('findBy')
            ->willReturn([$reservation]);

        $this->twig
            ->expects($this->once())
            ->method('render')
            ->with(
                'pdf/transport.html.twig',
                [
                    'transport' => $transport,
                    'reservations' => [$reservation],
                ]
            )
            ->willReturn('<html></html>');

        $this->pdf
            ->expects($this->once())
            ->method('getOutputFromHtml')
            ->willReturn('PDF content');

        $this->pdfService->generateTransportPdf($transport);
    }
}
