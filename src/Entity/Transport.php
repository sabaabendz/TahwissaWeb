<?php

namespace App\Entity;

use App\Repository\TransportRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TransportRepository::class)]
#[ORM\Table(name: '`transport`')]
class Transport
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "id_transport", type: Types::INTEGER)]
    private ?int $idTransport = null;

    #[ORM\Column(name: "type_transport", type: Types::STRING, length: 50)]
    #[Assert\NotBlank(message: "Le type de transport est obligatoire.")]
    #[Assert\Length(max: 50, maxMessage: "Le type de transport ne peut pas dépasser {{ limit }} caractères.")]
    #[Assert\Choice(choices: ['Bus', 'Minibus', 'Train', 'Avion'], message: "Le type de transport doit être Bus, Minibus, Train ou Avion.")]
    private ?string $typeTransport = null;

    #[ORM\Column(name: "ville_depart", type: Types::STRING, length: 100)]
    #[Assert\NotBlank(message: "La ville de départ est obligatoire.")]
    #[Assert\Length(max: 100, maxMessage: "La ville de départ ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $villeDepart = null;

    #[ORM\Column(name: "ville_arrivee", type: Types::STRING, length: 100)]
    #[Assert\NotBlank(message: "La ville d'arrivée est obligatoire.")]
    #[Assert\Length(max: 100, maxMessage: "La ville d'arrivée ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $villeArrivee = null;

    #[ORM\Column(name: "date_depart", type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de départ est obligatoire.")]
    #[Assert\GreaterThanOrEqual("today", message: "La date de départ doit être supérieure ou égale à la date d'aujourd'hui.")]
    private ?\DateTimeInterface $dateDepart = null;

    #[ORM\Column(name: "heure_depart", type: Types::TIME_MUTABLE)]
    #[Assert\NotBlank(message: "L'heure de départ est obligatoire.")]
    private ?\DateTimeInterface $heureDepart = null;

    #[ORM\Column(name: "duree", type: Types::INTEGER)]
    #[Assert\NotBlank(message: "La durée du trajet est obligatoire.")]
    #[Assert\Positive(message: "La durée du trajet doit être un nombre positif (en heures ou minutes).")]
    private ?int $duree = null;

    #[ORM\Column(name: "prix", type: Types::FLOAT)]
    #[Assert\NotBlank(message: "Le prix est obligatoire.")]
    #[Assert\Positive(message: "Le prix doit être strictement positif.")]
    private ?float $prix = null;

    #[ORM\Column(name: "nb_places", type: Types::INTEGER)]
    #[Assert\NotBlank(message: "Le nombre de places est obligatoire.")]
    #[Assert\Positive(message: "Le nombre de places doit être supérieur à zéro.")]
    private ?int $nbPlaces = null;

    public function getIdTransport(): ?int
    {
        return $this->idTransport;
    }

    public function getTypeTransport(): ?string
    {
        return $this->typeTransport;
    }

    public function setTypeTransport(?string $typeTransport): static
    {
        $this->typeTransport = $typeTransport;
        return $this;
    }

    public function getVilleDepart(): ?string
    {
        return $this->villeDepart;
    }

    public function setVilleDepart(?string $villeDepart): static
    {
        $this->villeDepart = $villeDepart;
        return $this;
    }

    public function getVilleArrivee(): ?string
    {
        return $this->villeArrivee;
    }

    public function setVilleArrivee(?string $villeArrivee): static
    {
        $this->villeArrivee = $villeArrivee;
        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(?\DateTimeInterface $dateDepart): static
    {
        $this->dateDepart = $dateDepart;
        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->heureDepart;
    }

    public function setHeureDepart(?\DateTimeInterface $heureDepart): static
    {
        $this->heureDepart = $heureDepart;
        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): static
    {
        $this->duree = $duree;
        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): static
    {
        $this->prix = $prix;
        return $this;
    }

    public function getNbPlaces(): ?int
    {
        return $this->nbPlaces;
    }

    public function setNbPlaces(?int $nbPlaces): static
    {
        $this->nbPlaces = $nbPlaces;
        return $this;
    }
}
