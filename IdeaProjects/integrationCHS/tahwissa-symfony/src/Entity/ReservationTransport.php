<?php

namespace App\Entity;

use App\Repository\ReservationTransportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationTransportRepository::class)]
#[ORM\Table(name: '`reservation_transport`')]
class ReservationTransport
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "id_reservation", type: Types::INTEGER)]
    private ?int $idReservation = null;

    #[ORM\Column(name: "date_reservation", type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de réservation est obligatoire.")]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\Column(name: "nb_places_reservees", type: Types::INTEGER)]
    #[Assert\NotBlank(message: "Le nombre de places réservées est obligatoire.")]
    #[Assert\Positive(message: "Le nombre de places réservées doit être d'au moins 1.")]
    private ?int $nbPlacesReservees = null;

    #[ORM\Column(name: "statut", type: Types::STRING, length: 50, options: ["default" => "EN_ATTENTE"])]
    #[Assert\NotBlank(message: "Le statut est obligatoire.")]
    #[Assert\Choice(choices: ['EN_ATTENTE', 'CONFIRMEE', 'ANNULEE', 'TERMINEE'], message: "Le statut doit être EN_ATTENTE, CONFIRMEE, ANNULEE ou TERMINEE.")]
    private ?string $statut = 'EN_ATTENTE';

    #[ORM\ManyToOne(targetEntity: Transport::class)]
    #[ORM\JoinColumn(name: "id_transport", referencedColumnName: "id_transport", nullable: false)]
    #[Assert\NotNull(message: "Le transport est obligatoire.")]
    private ?Transport $transport = null;

    #[ORM\Column(name: "id_user", type: Types::INTEGER)]
    #[Assert\NotBlank(message: "L'identifiant de l'utilisateur est obligatoire.")]
    #[Assert\Positive(message: "L'identifiant de l'utilisateur doit être valide.")]
    private ?int $idUser = null;

    public function __construct()
    {
        $this->dateReservation = new \DateTime();
    }

    public function getIdReservation(): ?int
    {
        return $this->idReservation;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(?\DateTimeInterface $dateReservation): static
    {
        $this->dateReservation = $dateReservation;
        return $this;
    }

    public function getNbPlacesReservees(): ?int
    {
        return $this->nbPlacesReservees;
    }

    public function setNbPlacesReservees(?int $nbPlacesReservees): static
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

    public function getTransport(): ?Transport
    {
        return $this->transport;
    }

    public function setTransport(?Transport $transport): static
    {
        $this->transport = $transport;
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
}
