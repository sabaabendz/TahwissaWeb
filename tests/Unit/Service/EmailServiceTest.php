<?php

namespace App\Tests\Unit\Service;

use App\Entity\ReservationTransport;
use App\Entity\Transport;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\EmailService;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use DateTime;

class EmailServiceTest extends TestCase
{
    private EmailService $emailService;
    private MailerInterface $mailer;
    private UserRepository $userRepository;
    private LoggerInterface $logger;

    protected function setUp(): void
    {
        $this->mailer = $this->createMock(MailerInterface::class);
        $this->userRepository = $this->createMock(UserRepository::class);
        $this->logger = $this->createMock(LoggerInterface::class);

        $this->emailService = new EmailService(
            $this->mailer,
            $this->userRepository,
            $this->logger
        );
    }

    /**
     * Test création d'une instance EmailService
     */
    public function testEmailServiceCanBeInstantiated(): void
    {
        $this->assertInstanceOf(EmailService::class, $this->emailService);
    }

    /**
     * Test envoi d'un email de confirmation avec un utilisateur valide
     */
    public function testSendReservationConfirmationWithValidUser(): void
    {
        // Créer un user mock
        $user = new User();
        $user->setId(1);
        $user->setName('Ahmed Dupont');
        $user->setEmail('ahmed@example.com');

        // Créer une réservation
        $transport = new Transport();
        $transport->setTypeTransport('Bus')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Oran')
            ->setPrix(2500);

        $reservation = new ReservationTransport();
        $reservation->setIdReservation(1)
            ->setIdUser(1)
            ->setTransport($transport)
            ->setNbPlacesReservees(2)
            ->setStatut('CONFIRMEE');

        // Setup les mocks
        $this->userRepository
            ->expects($this->once())
            ->method('find')
            ->with(1)
            ->willReturn($user);

        $this->mailer
            ->expects($this->once())
            ->method('send');

        $this->logger
            ->expects($this->once())
            ->method('info')
            ->with('Confirmation email sent successfully', $this->anything());

        // Appeler la méthode
        $this->emailService->sendReservationConfirmation($reservation);
    }

    /**
     * Test que le logger enregistre un warning si l'utilisateur n'existe pas
     */
    public function testSendReservationConfirmationWithMissingUser(): void
    {
        $reservation = new ReservationTransport();
        $reservation->setIdUser(999);

        // Setup les mocks
        $this->userRepository
            ->expects($this->once())
            ->method('find')
            ->with(999)
            ->willReturn(null);

        $this->logger
            ->expects($this->once())
            ->method('warning')
            ->with('Email not sent: User or email not found', $this->anything());

        $this->mailer
            ->expects($this->never())
            ->method('send');

        // Appeler la méthode
        $this->emailService->sendReservationConfirmation($reservation);
    }

    /**
     * Test que le logger enregistre un warning si l'email est vide
     */
    public function testSendReservationConfirmationWithMissingEmail(): void
    {
        // Créer un user sans email
        $user = new User();
        $user->setId(2);
        $user->setName('Fatima Ben');
        // Email non défini

        $reservation = new ReservationTransport();
        $reservation->setIdUser(2);

        // Setup les mocks
        $this->userRepository
            ->expects($this->once())
            ->method('find')
            ->with(2)
            ->willReturn($user);

        $this->logger
            ->expects($this->once())
            ->method('warning')
            ->with('Email not sent: User or email not found', $this->anything());

        $this->mailer
            ->expects($this->never())
            ->method('send');

        // Appeler la méthode
        $this->emailService->sendReservationConfirmation($reservation);
    }

    /**
     * Test gestion d'erreur lors de l'envoi d'email
     */
    public function testSendReservationConfirmationWithMailerException(): void
    {
        // Créer un user valide
        $user = new User();
        $user->setId(3);
        $user->setName('Hassan Ali');
        $user->setEmail('hassan@example.com');

        $transport = new Transport();
        $transport->setTypeTransport('Train')
            ->setVilleDepart('Tunis')
            ->setVilleArrivee('Sfax')
            ->setPrix(3500);

        $reservation = new ReservationTransport();
        $reservation->setIdReservation(2)
            ->setIdUser(3)
            ->setTransport($transport)
            ->setNbPlacesReservees(1)
            ->setStatut('CONFIRMEE');

        // Setup les mocks
        $this->userRepository
            ->expects($this->once())
            ->method('find')
            ->with(3)
            ->willReturn($user);

        $exception = new \Exception('SMTP connection failed');
        $this->mailer
            ->expects($this->once())
            ->method('send')
            ->willThrowException($exception);

        $this->logger
            ->expects($this->once())
            ->method('error')
            ->with('Failed to send confirmation email', ['error' => 'SMTP connection failed']);

        // Appeler la méthode - ne doit pas lever d'exception
        $this->emailService->sendReservationConfirmation($reservation);
    }

    /**
     * Test qu'un email contient des informations de réservation valides
     */
    public function testEmailTemplateContainsReservationDetails(): void
    {
        $user = new User();
        $user->setId(4);
        $user->setName('Nadia Khelifi');
        $user->setEmail('nadia@example.com');

        $date = new DateTime('2026-06-01');
        $transport = new Transport();
        $transport->setTypeTransport('Minibus')
            ->setVilleDepart('Bizerte')
            ->setVilleArrivee('Sousse')
            ->setDateDepart($date)
            ->setPrix(1500);

        $reservation = new ReservationTransport();
        $reservation->setIdReservation(10)
            ->setIdUser(4)
            ->setTransport($transport)
            ->setNbPlacesReservees(3)
            ->setDateReservation(new DateTime())
            ->setStatut('CONFIRMEE');

        // Setup les mocks
        $this->userRepository
            ->expects($this->once())
            ->method('find')
            ->with(4)
            ->willReturn($user);

        // Capturer l'email envoyé
        $emailCaptured = null;
        $this->mailer
            ->expects($this->once())
            ->method('send')
            ->willReturnCallback(function (Email $email) use (&$emailCaptured) {
                $emailCaptured = $email;
            });

        $this->logger
            ->expects($this->once())
            ->method('info');

        // Appeler la méthode
        $this->emailService->sendReservationConfirmation($reservation);

        // Vérifier que l'email a été créé correctement
        if ($emailCaptured !== null) {
            $this->assertStringContainsString('nadia@example.com', $emailCaptured->getTo()[0]->getAddress());
            $this->assertStringContainsString('Confirmation de Réservation', $emailCaptured->getSubject());
        }
    }
}
