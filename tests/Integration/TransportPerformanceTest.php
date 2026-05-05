<?php

namespace App\Tests\Integration;

use App\Entity\Transport;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class TransportPerformanceTest extends KernelTestCase
{
    private ?EntityManagerInterface $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
            
        $schemaTool = new \Doctrine\ORM\Tools\SchemaTool($this->entityManager);
        $metadata = $this->entityManager->getMetadataFactory()->getAllMetadata();
        $schemaTool->updateSchema($metadata);
    }

    /**
     * Test de performance pour l'insertion en masse (Bulk Insert) de Transports.
     * Vérifie l'optimisation de Doctrine pour la gestion des transports.
     */
    public function testBulkInsertPerformance(): void
    {
        $startTime = microtime(true);
        $batchSize = 100;
        $totalToInsert = 1000;

        for ($i = 1; $i <= $totalToInsert; ++$i) {
            $transport = new Transport();
            $transport->setTypeTransport('Bus')
                ->setVilleDepart('VilleDepart_' . $i)
                ->setVilleArrivee('VilleArrivee_' . $i)
                ->setDateDepart(new \DateTime('2026-06-01'))
                ->setHeureDepart(new \DateTime('08:00:00'))
                ->setDuree(120)
                ->setPrix(1500)
                ->setNbPlaces(50);

            $this->entityManager->persist($transport);

            // Optimisation Doctrine : Flush et Clear par lots (batch)
            if (($i % $batchSize) === 0) {
                $this->entityManager->flush();
                $this->entityManager->clear();
            }
        }

        $this->entityManager->flush();
        $this->entityManager->clear();

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        // On s'attend à ce que l'insertion de 1000 entités soit rapide (ex: moins de 5 secondes)
        $this->assertLessThan(5.0, $executionTime, "L'insertion de 1000 transports a pris trop de temps : {$executionTime} secondes.");
    }

    /**
     * Test de performance pour la récupération (Select) des Transports.
     * Vérifie l'optimisation des requêtes Doctrine.
     */
    public function testFetchPerformance(): void
    {
        $startTime = microtime(true);

        // Récupérer un lot de données pour tester les performances de SELECT
        $repository = $this->entityManager->getRepository(Transport::class);
        $transports = $repository->findBy([], ['idTransport' => 'DESC'], 500);

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        // La récupération doit être très rapide (ex: moins de 1 seconde)
        $this->assertLessThan(1.0, $executionTime, "La récupération des transports a pris trop de temps : {$executionTime} secondes.");
        $this->assertIsArray($transports);
    }

    /**
     * Test statique unitaire (assertions simples sur l'entité)
     */
    public function testTransportStaticAssertions(): void
    {
        $transport = new Transport();
        $transport->setTypeTransport('Train')
            ->setPrix(2000.50)
            ->setNbPlaces(100);

        // Validation statique rapide en mémoire
        $this->assertEquals('Train', $transport->getTypeTransport());
        $this->assertEquals(2000.50, $transport->getPrix());
        $this->assertEquals(100, $transport->getNbPlaces());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // Important : fermer l'entityManager pour éviter les fuites de mémoire dans les tests
        if ($this->entityManager != null) {
            $this->entityManager->close();
            $this->entityManager = null;
        }
    }
}
