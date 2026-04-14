<?php

namespace App\Entity;

use App\Repository\ReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
#[ORM\Table(name: 'reclamation')]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_reclamation', type: Types::INTEGER)]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire')]
    #[Assert\Length(max: 150, maxMessage: 'Le titre ne peut pas dépasser {{ limit }} caractères')]
    private ?string $titre = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: 'La description est obligatoire')]
    private ?string $description = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 50, nullable: true, options: ['default' => 'EN_ATTENTE'])]
    #[Assert\Choice(
        choices: ['EN_ATTENTE', 'EN_COURS', 'TRAITEE', 'REJETEE'],
        message: 'Le statut doit être EN_ATTENTE, EN_COURS, TRAITEE ou REJETEE'
    )]
    private ?string $statut = 'EN_ATTENTE';

    #[ORM\Column(name: 'date_creation', type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(name: 'id_user', type: Types::INTEGER, nullable: true)]
    private ?int $idUser = null;

    public function __construct()
    {
        $this->dateCreation = new \DateTime();
        $this->statut = 'EN_ATTENTE';
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

    public function setDescription(string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;
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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;
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
            'EN_COURS'   => 'En cours',
            'TRAITEE'    => 'Traitée',
            'REJETEE'    => 'Rejetée',
            default      => $this->statut,
        };
    }

    public function getStatutBadgeClass(): string
    {
        return match ($this->statut) {
            'EN_ATTENTE' => 'warning',
            'EN_COURS'   => 'info',
            'TRAITEE'    => 'success',
            'REJETEE'    => 'danger',
            default      => 'secondary',
        };
    }

    public function __toString(): string
    {
        return $this->titre;
    }
}
