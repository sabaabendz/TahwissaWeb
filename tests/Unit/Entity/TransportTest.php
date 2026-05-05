<?php

namespace App\Tests\Unit\Entity;

use App\Entity\Transport;
use PHPUnit\Framework\TestCase;
use DateTime;

class TransportTest extends TestCase
{
    private Transport $transport;

    protected function setUp(): void
    {
        $this->transport = new Transport();
    }

    /**
     * Test creation d'une instance Transport
     */
    public function testTransportCanBeInstantiated(): void
    {
        $this->assertInstanceOf(Transport::class, $this->transport);
    }

    /**
     * Test des setters et getters pour typeTransport
     */
    public function testSetAndGetTypeTransport(): void
    {
        $this->transport->setTypeTransport('Bus');
        $this->assertSame('Bus', $this->transport->getTypeTransport());
    }

    /**
     * Test des setters et getters pour villeDepart
     */
    public function testSetAndGetVilleDepart(): void
    {
        $this->transport->setVilleDepart('Alger');
        $this->assertSame('Alger', $this->transport->getVilleDepart());
    }

    /**
     * Test des setters et getters pour villeArrivee
     */
    public function testSetAndGetVilleArrivee(): void
    {
        $this->transport->setVilleArrivee('Oran');
        $this->assertSame('Oran', $this->transport->getVilleArrivee());
    }

    /**
     * Test des setters et getters pour dateDepart
     */
    public function testSetAndGetDateDepart(): void
    {
        $date = new DateTime('2026-06-01');
        $this->transport->setDateDepart($date);
        $this->assertSame($date, $this->transport->getDateDepart());
    }

    /**
     * Test des setters et getters pour heureDepart
     */
    public function testSetAndGetHeureDepart(): void
    {
        $time = new DateTime('08:30:00');
        $this->transport->setHeureDepart($time);
        $this->assertSame($time, $this->transport->getHeureDepart());
    }

    /**
     * Test des setters et getters pour duree
     */
    public function testSetAndGetDuree(): void
    {
        $this->transport->setDuree(300); // 5 heures en minutes
        $this->assertSame(300, $this->transport->getDuree());
    }

    /**
     * Test des setters et getters pour prix
     */
    public function testSetAndGetPrix(): void
    {
        $this->transport->setPrix(2500.50);
        $this->assertSame(2500.50, $this->transport->getPrix());
    }

    /**
     * Test des setters et getters pour nbPlaces
     */
    public function testSetAndGetNbPlaces(): void
    {
        $this->transport->setNbPlaces(48);
        $this->assertSame(48, $this->transport->getNbPlaces());
    }

    /**
     * Test qu'un transport sans ID est nul initialement
     */
    public function testIdTransportIsNullInitially(): void
    {
        $this->assertNull($this->transport->getIdTransport());
    }

    /**
     * Test du fluent interface (method chaining)
     */
    public function testTransportFluentInterface(): void
    {
        $date = new DateTime('2026-06-01');
        $time = new DateTime('08:30:00');

        $result = $this->transport
            ->setTypeTransport('Bus')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Oran')
            ->setDateDepart($date)
            ->setHeureDepart($time)
            ->setDuree(300)
            ->setPrix(2500)
            ->setNbPlaces(48);

        $this->assertSame($this->transport, $result);
        $this->assertSame('Bus', $this->transport->getTypeTransport());
        $this->assertSame('Alger', $this->transport->getVilleDepart());
        $this->assertSame('Oran', $this->transport->getVilleArrivee());
        $this->assertSame(300, $this->transport->getDuree());
        $this->assertEquals(2500, $this->transport->getPrix());
        $this->assertSame(48, $this->transport->getNbPlaces());
    }

    /**
     * Test avec un transport complet
     */
    public function testCompleteTransport(): void
    {
        $date = new DateTime('2026-06-15');
        $time = new DateTime('14:00:00');

        $this->transport
            ->setTypeTransport('Train')
            ->setVilleDepart('Tunis')
            ->setVilleArrivee('Sfax')
            ->setDateDepart($date)
            ->setHeureDepart($time)
            ->setDuree(180)
            ->setPrix(3500.75)
            ->setNbPlaces(120);

        $this->assertSame('Train', $this->transport->getTypeTransport());
        $this->assertSame('Tunis', $this->transport->getVilleDepart());
        $this->assertSame('Sfax', $this->transport->getVilleArrivee());
        $this->assertSame($date, $this->transport->getDateDepart());
        $this->assertSame($time, $this->transport->getHeureDepart());
        $this->assertSame(180, $this->transport->getDuree());
        $this->assertSame(3500.75, $this->transport->getPrix());
        $this->assertSame(120, $this->transport->getNbPlaces());
    }

    /**
     * Test avec différents types de transport
     * @dataProvider validTransportTypes
     */
    public function testValidTransportTypes(string $type): void
    {
        $this->transport->setTypeTransport($type);
        $this->assertSame($type, $this->transport->getTypeTransport());
    }

    public static function validTransportTypes(): array
    {
        return [
            'Bus' => ['Bus'],
            'Minibus' => ['Minibus'],
            'Train' => ['Train'],
            'Avion' => ['Avion'],
        ];
    }

    /**
     * Test avec différents prix
     * @dataProvider validPrices
     */
    public function testValidPrices(float $price): void
    {
        $this->transport->setPrix($price);
        $this->assertSame($price, $this->transport->getPrix());
    }

    public static function validPrices(): array
    {
        return [
            'Small price' => [100.0],
            'Medium price' => [2500.50],
            'Large price' => [5000.99],
            'Very large price' => [10000.0],
        ];
    }

    /**
     * Test qu'on peut mettre à jour un transport existant
     */
    public function testUpdateTransport(): void
    {
        $initialDate = new DateTime('2026-06-01');
        $this->transport->setTypeTransport('Bus')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Oran')
            ->setDateDepart($initialDate)
            ->setPrix(2500);

        // Mise à jour
        $this->transport->setTypeTransport('Minibus');
        $this->transport->setPrix(3000);
        $newDate = new DateTime('2026-06-10');
        $this->transport->setDateDepart($newDate);

        $this->assertSame('Minibus', $this->transport->getTypeTransport());
        $this->assertEquals(3000, $this->transport->getPrix());
        $this->assertSame($newDate, $this->transport->getDateDepart());
    }
}
