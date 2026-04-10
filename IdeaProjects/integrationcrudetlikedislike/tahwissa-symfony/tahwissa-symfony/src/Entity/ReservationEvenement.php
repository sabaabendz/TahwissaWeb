<?php

namespace App\Entity;

use App\Repository\ReservationEvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationEvenementRepository::class)]
#[ORM\Table(name: 'reservation_evenement')]
class ReservationEvenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_reservation', type: Types::INTEGER)]
    private ?int $id = null;

    #[ORM\Column(name: 'date_reservation', type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'La date de réservation est obligatoire')]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\Column(name: 'nb_places_reservees', type: Types::INTEGER)]
    #[Assert\NotBlank(message: 'Le nombre de places est obligatoire')]
    #[Assert\Positive(message: 'Le nombre de places doit être au moins 1')]
    private ?int $nbPlacesReservees = null;

    #[ORM\Column(length: 50, nullable: true, options: ['default' => 'EN_ATTENTE'])]
    #[Assert\Choice(
        choices: ['EN_ATTENTE', 'CONFIRMEE', 'ANNULEE'],
        message: 'Le statut doit être EN_ATTENTE, CONFIRMEE ou ANNULEE'
    )]
    private ?string $statut = 'EN_ATTENTE';

    #[ORM\ManyToOne(targetEntity: Evenement::class, inversedBy: 'reservations')]
    #[ORM\JoinColumn(name: 'id_evenement', referencedColumnName: 'id_evenement', nullable: true, onDelete: 'CASCADE')]
    private ?Evenement $evenement = null;

    #[ORM\Column(name: 'id_user', type: Types::INTEGER, nullable: true)]
    private ?int $idUser = null;

    public function __construct()
    {
        $this->dateReservation = new \DateTime();
        $this->statut = 'EN_ATTENTE';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): static
    {
        $this->dateReservation = $dateReservation;
        return $this;
    }

    public function getNbPlacesReservees(): ?int
    {
        return $this->nbPlacesReservees;
    }

    public function setNbPlacesReservees(int $nbPlacesReservees): static
    {
        $this->nbPlacesReservees = $nbPlacesReservees;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;
        return $this;
    }

    public function getEvenement(): ?Evenement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenement $evenement): static
    {
        $this->evenement = $evenement;
        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(?int $idUser): static
    {
        $this->idUser = $idUser;
        return $this;
    }

    public function getStatutLabel(): string
    {
        return match ($this->statut) {
            'EN_ATTENTE' => 'En attente',
            'CONFIRMEE'  => 'Confirmée',
            'ANNULEE'    => 'Annulée',
            default      => $this->statut,
        };
    }

    public function getStatutBadgeClass(): string
    {
        return match ($this->statut) {
            'EN_ATTENTE' => 'warning',
            'CONFIRMEE'  => 'success',
            'ANNULEE'    => 'danger',
            default      => 'secondary',
        };
    }

    public function __toString(): string
    {
        $titre = $this->evenement ? $this->evenement->getTitre() : 'Événement inconnu';
        return 'Réservation #' . $this->id . ' - ' . $titre;
    }
}
