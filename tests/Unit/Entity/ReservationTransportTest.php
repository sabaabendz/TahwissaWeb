<?php

namespace App\Tests\Unit\Entity;

use App\Entity\ReservationTransport;
use App\Entity\Transport;
use PHPUnit\Framework\TestCase;
use DateTime;

class ReservationTransportTest extends TestCase
{
    private ReservationTransport $reservation;
    private Transport $transport;

    protected function setUp(): void
    {
        $this->reservation = new ReservationTransport();
        $this->transport = new Transport();
    }

    /**
     * Test creation d'une instance ReservationTransport
     */
    public function testReservationTransportCanBeInstantiated(): void
    {
        $this->assertInstanceOf(ReservationTransport::class, $this->reservation);
    }

    /**
     * Test que la date de réservation est définie au constructeur
     */
    public function testDateReservationIsSetInConstructor(): void
    {
        $now = new DateTime();
        $reservation = new ReservationTransport();

        $this->assertNotNull($reservation->getDateReservation());
        $this->assertInstanceOf(DateTime::class, $reservation->getDateReservation());
        // Vérifier que la date est proche de maintenant (à 1 seconde près)
        $diff = abs($now->getTimestamp() - $reservation->getDateReservation()->getTimestamp());
        $this->assertLessThan(2, $diff);
    }

    /**
     * Test que le statut par défaut est EN_ATTENTE
     */
    public function testDefaultStatutIsEnAttente(): void
    {
        $this->assertSame('EN_ATTENTE', $this->reservation->getStatut());
    }

    /**
     * Test des setters et getters pour dateReservation
     */
    public function testSetAndGetDateReservation(): void
    {
        $date = new DateTime('2026-05-15');
        $this->reservation->setDateReservation($date);
        $this->assertSame($date, $this->reservation->getDateReservation());
    }

    /**
     * Test des setters et getters pour nbPlacesReservees
     */
    public function testSetAndGetNbPlacesReservees(): void
    {
        $this->reservation->setNbPlacesReservees(5);
        $this->assertSame(5, $this->reservation->getNbPlacesReservees());
    }

    /**
     * Test des setters et getters pour statut
     */
    public function testSetAndGetStatut(): void
    {
        $this->reservation->setStatut('CONFIRMEE');
        $this->assertSame('CONFIRMEE', $this->reservation->getStatut());
    }

    /**
     * Test des setters et getters pour transport
     */
    public function testSetAndGetTransport(): void
    {
        $this->reservation->setTransport($this->transport);
        $this->assertSame($this->transport, $this->reservation->getTransport());
    }

    /**
     * Test des setters et getters pour idUser
     */
    public function testSetAndGetIdUser(): void
    {
        $this->reservation->setIdUser(123);
        $this->assertSame(123, $this->reservation->getIdUser());
    }

    /**
     * Test qu'un reservation sans ID est nul initialement
     */
    public function testIdReservationIsNullInitially(): void
    {
        $this->assertNull($this->reservation->getIdReservation());
    }

    /**
     * Test du fluent interface (method chaining)
     */
    public function testReservationFluentInterface(): void
    {
        $date = new DateTime('2026-05-20');

        $result = $this->reservation
            ->setDateReservation($date)
            ->setNbPlacesReservees(3)
            ->setStatut('CONFIRMEE')
            ->setTransport($this->transport)
            ->setIdUser(456);

        $this->assertSame($this->reservation, $result);
        $this->assertSame($date, $this->reservation->getDateReservation());
        $this->assertSame(3, $this->reservation->getNbPlacesReservees());
        $this->assertSame('CONFIRMEE', $this->reservation->getStatut());
        $this->assertSame($this->transport, $this->reservation->getTransport());
        $this->assertSame(456, $this->reservation->getIdUser());
    }

    /**
     * Test avec une réservation complète
     */
    public function testCompleteReservation(): void
    {
        $date = new DateTime('2026-05-25');
        
        $this->transport
            ->setTypeTransport('Bus')
            ->setVilleDepart('Alger')
            ->setVilleArrivee('Oran')
            ->setPrix(2500)
            ->setNbPlaces(48);

        $this->reservation
            ->setDateReservation($date)
            ->setNbPlacesReservees(4)
            ->setStatut('CONFIRMEE')
            ->setTransport($this->transport)
            ->setIdUser(789);

        $this->assertSame($date, $this->reservation->getDateReservation());
        $this->assertSame(4, $this->reservation->getNbPlacesReservees());
        $this->assertSame('CONFIRMEE', $this->reservation->getStatut());
        $this->assertSame($this->transport, $this->reservation->getTransport());
        $this->assertSame(789, $this->reservation->getIdUser());
        $this->assertSame('Bus', $this->reservation->getTransport()->getTypeTransport());
    }

    /**
     * Test changement de statut
     * @dataProvider validStatuts
     */
    public function testValidStatuts(string $statut): void
    {
        $this->reservation->setStatut($statut);
        $this->assertSame($statut, $this->reservation->getStatut());
    }

    public static function validStatuts(): array
    {
        return [
            'EN_ATTENTE' => ['EN_ATTENTE'],
            'CONFIRMEE' => ['CONFIRMEE'],
            'ANNULEE' => ['ANNULEE'],
            'TERMINEE' => ['TERMINEE'],
        ];
    }

    /**
     * Test avec différents nombres de places
     * @dataProvider validNbPlaces
     */
    public function testValidNbPlaces(int $nbPlaces): void
    {
        $this->reservation->setNbPlacesReservees($nbPlaces);
        $this->assertSame($nbPlaces, $this->reservation->getNbPlacesReservees());
    }

    public static function validNbPlaces(): array
    {
        return [
            'One place' => [1],
            'Few places' => [2],
            'Medium places' => [5],
            'Many places' => [20],
            'Full bus' => [48],
        ];
    }

    /**
     * Test changement de statut d'une réservation
     */
    public function testReservationStatusTransitions(): void
    {
        $this->assertSame('EN_ATTENTE', $this->reservation->getStatut());

        // Transition EN_ATTENTE -> CONFIRMEE
        $this->reservation->setStatut('CONFIRMEE');
        $this->assertSame('CONFIRMEE', $this->reservation->getStatut());

        // Transition CONFIRMEE -> TERMINEE
        $this->reservation->setStatut('TERMINEE');
        $this->assertSame('TERMINEE', $this->reservation->getStatut());
    }

    /**
     * Test annulation d'une réservation
     */
    public function testCancelReservation(): void
    {
        $this->reservation->setStatut('CONFIRMEE');
        $this->assertSame('CONFIRMEE', $this->reservation->getStatut());

        // Annuler la réservation
        $this->reservation->setStatut('ANNULEE');
        $this->assertSame('ANNULEE', $this->reservation->getStatut());
    }

    /**
     * Test qu'on peut mettre à jour une réservation existante
     */
    public function testUpdateReservation(): void
    {
        $initialDate = new DateTime('2026-05-20');
        $this->reservation
            ->setDateReservation($initialDate)
            ->setNbPlacesReservees(2)
            ->setStatut('EN_ATTENTE')
            ->setIdUser(100);

        // Mise à jour
        $newDate = new DateTime('2026-05-28');
        $this->reservation->setDateReservation($newDate);
        $this->reservation->setNbPlacesReservees(5);
        $this->reservation->setStatut('CONFIRMEE');

        $this->assertSame($newDate, $this->reservation->getDateReservation());
        $this->assertSame(5, $this->reservation->getNbPlacesReservees());
        $this->assertSame('CONFIRMEE', $this->reservation->getStatut());
        $this->assertSame(100, $this->reservation->getIdUser()); // Inchangé
    }

    /**
     * Test association avec un transport
     */
    public function testReservationWithMultipleTransports(): void
    {
        $transport1 = new Transport();
        $transport1->setTypeTransport('Bus')->setVilleDepart('Alger')->setVilleArrivee('Oran');

        $transport2 = new Transport();
        $transport2->setTypeTransport('Train')->setVilleDepart('Tunis')->setVilleArrivee('Sfax');

        $this->reservation->setTransport($transport1);
        $this->assertSame('Bus', $this->reservation->getTransport()->getTypeTransport());

        $this->reservation->setTransport($transport2);
        $this->assertSame('Train', $this->reservation->getTransport()->getTypeTransport());
    }
}
