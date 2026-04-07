<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
#[ORM\Table(name: 'evenement')]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_evenement', type: Types::INTEGER)]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire')]
    #[Assert\Length(max: 150, maxMessage: 'Le titre ne peut pas dépasser {{ limit }} caractères')]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 120)]
    #[Assert\NotBlank(message: 'Le lieu est obligatoire')]
    private ?string $lieu = null;

    #[ORM\Column(name: 'date_event', type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: 'La date de l\'événement est obligatoire')]
    private ?\DateTimeInterface $dateEvent = null;

    #[ORM\Column(name: 'heure_event', type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank(message: 'L\'heure de l\'événement est obligatoire')]
    private ?\DateTimeInterface $heureEvent = null;

    #[ORM\Column(type: Types::FLOAT)]
    #[Assert\NotBlank(message: 'Le prix est obligatoire')]
    #[Assert\PositiveOrZero(message: 'Le prix doit être positif ou nul')]
    private ?float $prix = null;

    #[ORM\Column(name: 'nb_places', type: Types::INTEGER)]
    #[Assert\NotBlank(message: 'Le nombre de places est obligatoire')]
    #[Assert\Positive(message: 'Le nombre de places doit être positif')]
    private ?int $nbPlaces = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $categorie = null;

    #[ORM\Column(length: 50, nullable: true, options: ['default' => 'DISPONIBLE'])]
    #[Assert\Choice(
        choices: ['DISPONIBLE', 'COMPLET', 'ANNULE'],
        message: 'Le statut doit être DISPONIBLE, COMPLET ou ANNULE'
    )]
    private ?string $statut = 'DISPONIBLE';

    #[ORM\Column(name: 'image_filename', length: 255, nullable: true)]
    private ?string $imageFilename = null;

    #[ORM\Column(name: 'date_creation', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\OneToMany(mappedBy: 'evenement', targetEntity: ReservationEvenement::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
        $this->statut = 'DISPONIBLE';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;
        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(\DateTimeInterface $dateEvent): static
    {
        $this->dateEvent = $dateEvent;
        return $this;
    }

    public function getHeureEvent(): ?\DateTimeInterface
    {
        return $this->heureEvent;
    }

    public function setHeureEvent(\DateTimeInterface $heureEvent): static
    {
        $this->heureEvent = $heureEvent;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): static
    {
        $this->prix = $prix;
        return $this;
    }

    public function getNbPlaces(): ?int
    {
        return $this->nbPlaces;
    }

    public function setNbPlaces(int $nbPlaces): static
    {
        $this->nbPlaces = $nbPlaces;
        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): static
    {
        $this->categorie = $categorie;
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

    /**
     * @return Collection<int, ReservationEvenement>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(ReservationEvenement $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setEvenement($this);
        }
        return $this;
    }

    public function removeReservation(ReservationEvenement $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            if ($reservation->getEvenement() === $this) {
                $reservation->setEvenement(null);
            }
        }
        return $this;
    }

    public function isDisponible(): bool
    {
        return $this->statut === 'DISPONIBLE';
    }

    public function getStatutLabel(): string
    {
        return match ($this->statut) {
            'DISPONIBLE' => 'Disponible',
            'COMPLET'    => 'Complet',
            'ANNULE'     => 'Annulé',
            default      => $this->statut,
        };
    }

    public function getStatutBadgeClass(): string
    {
        return match ($this->statut) {
            'DISPONIBLE' => 'success',
            'COMPLET'    => 'warning',
            'ANNULE'     => 'danger',
            default      => 'secondary',
        };
    }

    public function getImageFilename(): ?string
    {
        return $this->imageFilename;
    }

    public function setImageFilename(?string $imageFilename): static
    {
        $this->imageFilename = $imageFilename;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    public function __toString(): string
    {
        return $this->titre . ' - ' . $this->lieu;
    }
}
