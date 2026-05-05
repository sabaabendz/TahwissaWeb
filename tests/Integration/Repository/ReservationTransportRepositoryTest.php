<?php

namespace App\Tests\Integration\Repository;

use App\Entity\Transport;
use App\Entity\ReservationTransport;
use App\Repository\ReservationTransportRepository;
use PHPUnit\Framework\TestCase;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;

/**
 * Tests d'intégration pour ReservationTransportRepository
 * 
 * Note: Ces tests supposent une base de données de test configurée.
 * Pour une utilisation complète, vous devez configurer une DB de test dans .env.test
 */
class ReservationTransportRepositoryTest extends TestCase
{
    private ReservationTransportRepository $repository;
    private EntityManagerInterface $em;
    private ManagerRegistry $registry;

    protected function setUp(): void
    {
        // Créer des mocks pour les dépendances
        $this->registry = $this->createMock(ManagerRegistry::class);
        $this->em = $this->createMock(EntityManagerInterface::class);

        // Setup le registry pour retourner l'entity manager
        $this->registry
            ->method('getManagerForClass')
            ->willReturn($this->em);

        $this->repository = new ReservationTransportRepository($this->registry);
    }

    /**
     * Test création d'une instance ReservationTransportRepository
     */
    public function testRepositoryCanBeInstantiated(): void
    {
        $this->assertInstanceOf(ReservationTransportRepository::class, $this->repository);
    }

    /**
     * Test méthode save avec flush
     */
    public function testSaveReservationWithFlush(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Bus')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Oran');

        $reservation = new ReservationTransport();
        $reservation->setIdUser(1)
            ->setNbPlacesReservees(3)
            ->setStatut('CONFIRMEE')
            ->setTransport($transport)
            ->setDateReservation(new DateTime());

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('persist')
            ->with($reservation);

        $this->em
            ->expects($this->once())
            ->method('flush');

        // Appeler la méthode
        $this->repository->save($reservation, true);
    }

    /**
     * Test méthode save sans flush
     */
    public function testSaveReservationWithoutFlush(): void
    {
        $reservation = new ReservationTransport();
        $reservation->setIdUser(2)
            ->setNbPlacesReservees(2);

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('persist')
            ->with($reservation);

        $this->em
            ->expects($this->never())
            ->method('flush');

        // Appeler la méthode
        $this->repository->save($reservation, false);
    }

    /**
     * Test méthode remove avec flush
     */
    public function testRemoveReservationWithFlush(): void
    {
        $reservation = new ReservationTransport();
        $reservation->setIdUser(3)
            ->setNbPlacesReservees(1);

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('remove')
            ->with($reservation);

        $this->em
            ->expects($this->once())
            ->method('flush');

        // Appeler la méthode
        $this->repository->remove($reservation, true);
    }

    /**
     * Test méthode remove sans flush
     */
    public function testRemoveReservationWithoutFlush(): void
    {
        $reservation = new ReservationTransport();
        $reservation->setIdUser(4)
            ->setNbPlacesReservees(4);

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('remove')
            ->with($reservation);

        $this->em
            ->expects($this->never())
            ->method('flush');

        // Appeler la méthode
        $this->repository->remove($reservation, false);
    }

    /**
     * Test flux complet : save et remove
     */
    public function testSaveAndRemoveReservation(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Train');

        $reservation = new ReservationTransport();
        $reservation->setIdUser(5)
            ->setNbPlacesReservees(2)
            ->setStatut('EN_ATTENTE')
            ->setTransport($transport);

        // Mock l'EntityManager pour save
        $this->em
            ->expects($this->exactly(2))
            ->method('persist');

        $this->em
            ->expects($this->exactly(2))
            ->method('flush');

        // Sauvegarder la réservation
        $this->repository->save($reservation, true);

        // Supprimer la réservation
        $this->repository->remove($reservation, true);
    }

    /**
     * Test qu'on peut mettre à jour le statut d'une réservation
     */
    public function testUpdateReservationStatus(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Minibus');

        $reservation = new ReservationTransport();
        $reservation->setIdUser(6)
            ->setNbPlacesReservees(3)
            ->setStatut('EN_ATTENTE')
            ->setTransport($transport);

        // Mise à jour du statut
        $reservation->setStatut('CONFIRMEE');

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('persist')
            ->with($reservation);

        $this->em
            ->expects($this->once())
            ->method('flush');

        $this->repository->save($reservation, true);

        // Vérifier le nouveau statut
        $this->assertSame('CONFIRMEE', $reservation->getStatut());
    }

    /**
     * Test annulation d'une réservation
     */
    public function testCancelReservation(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Avion');

        $reservation = new ReservationTransport();
        $reservation->setIdUser(7)
            ->setNbPlacesReservees(5)
            ->setStatut('CONFIRMEE')
            ->setTransport($transport);

        // Annuler la réservation
        $reservation->setStatut('ANNULEE');

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('persist')
            ->with($reservation);

        $this->em
            ->expects($this->once())
            ->method('flush');

        $this->repository->save($reservation, true);

        // Vérifier que le statut est ANNULEE
        $this->assertSame('ANNULEE', $reservation->getStatut());
    }

    /**
     * Test qu'on peut sauvegarder plusieurs réservations
     */
    public function testSaveMultipleReservations(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Bus');

        $reservation1 = new ReservationTransport();
        $reservation1->setIdUser(8)
            ->setNbPlacesReservees(2)
            ->setStatut('CONFIRMEE')
            ->setTransport($transport);

        $reservation2 = new ReservationTransport();
        $reservation2->setIdUser(9)
            ->setNbPlacesReservees(3)
            ->setStatut('EN_ATTENTE')
            ->setTransport($transport);

        $reservation3 = new ReservationTransport();
        $reservation3->setIdUser(10)
            ->setNbPlacesReservees(1)
            ->setStatut('CONFIRMEE')
            ->setTransport($transport);

        // Mock l'EntityManager
        $this->em
            ->expects($this->exactly(3))
            ->method('persist');

        $this->em
            ->expects($this->once())
            ->method('flush');

        // Sauvegarder les réservations
        $this->repository->save($reservation1, false);
        $this->repository->save($reservation2, false);
        $this->repository->save($reservation3, true);
    }

    /**
     * Test vérification des réservations pour un utilisateur
     */
    public function testReservationsForUser(): void
    {
        $userId = 11;

        $transport = new Transport();
        $transport->setTypeTransport('Bus');

        $reservation1 = new ReservationTransport();
        $reservation1->setIdUser($userId)
            ->setNbPlacesReservees(2)
            ->setTransport($transport);

        $reservation2 = new ReservationTransport();
        $reservation2->setIdUser($userId)
            ->setNbPlacesReservees(3)
            ->setTransport($transport);

        // Mock l'EntityManager pour sauvegarder
        $this->em
            ->expects($this->exactly(2))
            ->method('persist');

        $this->em
            ->expects($this->once())
            ->method('flush');

        // Sauvegarder les deux réservations pour le même utilisateur
        $this->repository->save($reservation1, false);
        $this->repository->save($reservation2, true);

        // Vérifier que les deux ont le même userId
        $this->assertSame($userId, $reservation1->getIdUser());
        $this->assertSame($userId, $reservation2->getIdUser());
    }
}
