<?php

namespace App\Tests\Integration\Repository;

use App\Entity\Transport;
use App\Entity\ReservationTransport;
use App\Repository\TransportRepository;
use App\Repository\ReservationTransportRepository;
use PHPUnit\Framework\TestCase;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use DateTime;

/**
 * Tests d'intégration pour TransportRepository
 * 
 * Note: Ces tests supposent une base de données de test configurée.
 * Pour une utilisation complète, vous devez configurer une DB de test dans .env.test
 */
class TransportRepositoryTest extends TestCase
{
    private TransportRepository $repository;
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

        $this->repository = new TransportRepository($this->registry);
    }

    /**
     * Test création d'une instance TransportRepository
     */
    public function testRepositoryCanBeInstantiated(): void
    {
        $this->assertInstanceOf(TransportRepository::class, $this->repository);
    }

    /**
     * Test méthode save avec flush
     */
    public function testSaveTransportWithFlush(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Bus')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Oran')
            ->setDateDepart(new DateTime('2026-06-01'))
            ->setHeureDepart(new DateTime('08:00:00'))
            ->setDuree(300)
            ->setPrix(2500)
            ->setNbPlaces(48);

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('persist')
            ->with($transport);

        $this->em
            ->expects($this->once())
            ->method('flush');

        // Appeler la méthode
        $this->repository->save($transport, true);
    }

    /**
     * Test méthode save sans flush
     */
    public function testSaveTransportWithoutFlush(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Train');

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('persist')
            ->with($transport);

        $this->em
            ->expects($this->never())
            ->method('flush');

        // Appeler la méthode
        $this->repository->save($transport, false);
    }

    /**
     * Test méthode remove avec flush
     */
    public function testRemoveTransportWithFlush(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Bus');

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('remove')
            ->with($transport);

        $this->em
            ->expects($this->once())
            ->method('flush');

        // Appeler la méthode
        $this->repository->remove($transport, true);
    }

    /**
     * Test méthode remove sans flush
     */
    public function testRemoveTransportWithoutFlush(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Avion');

        // Mock l'EntityManager
        $this->em
            ->expects($this->once())
            ->method('remove')
            ->with($transport);

        $this->em
            ->expects($this->never())
            ->method('flush');

        // Appeler la méthode
        $this->repository->remove($transport, false);
    }

    /**
     * Test qu'on peut sauvegarder plusieurs transports
     */
    public function testSaveMultipleTransports(): void
    {
        $date = new DateTime('2026-06-01');

        $transport1 = new Transport();
        $transport1->setTypeTransport('Bus')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Oran')
            ->setDateDepart($date)
            ->setHeureDepart(new DateTime('08:00:00'))
            ->setDuree(300)
            ->setPrix(2500)
            ->setNbPlaces(48);

        $transport2 = new Transport();
        $transport2->setTypeTransport('Train')
            ->setVilleDepart('Tunis')
            ->setVilleArrivee('Sfax')
            ->setDateDepart($date)
            ->setHeureDepart(new DateTime('14:00:00'))
            ->setDuree(180)
            ->setPrix(3500)
            ->setNbPlaces(120);

        // Mock l'EntityManager
        $this->em
            ->expects($this->exactly(2))
            ->method('persist');

        $this->em
            ->expects($this->once())
            ->method('flush');

        // Appeler la méthode
        $this->repository->save($transport1, false);
        $this->repository->save($transport2, true);
    }
}
