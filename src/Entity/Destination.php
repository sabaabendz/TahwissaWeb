<?php

namespace App\Entity;

use App\Repository\DestinationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DestinationRepository::class)]
#[ORM\Table(name: "destination")]
class Destination
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "id_destination", type: "integer")]
    private ?int $idDestination = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le nom est obligatoire")]
    #[Assert\Length(min: 2, max: 100, minMessage: "Le nom doit contenir au moins 2 caractères", maxMessage: "Le nom ne peut pas dépasser 100 caractères")]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s\-]+$/',
        message: 'Le nom ne doit contenir que des lettres, espaces et tirets'
    )]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le pays est obligatoire")]
    #[Assert\Length(min: 2, max: 100, minMessage: "Le pays doit contenir au moins 2 caractères", maxMessage: "Le pays ne peut pas dépasser 100 caractères")]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZÀ-ÿ\s\-]+$/',
        message: 'Le pays ne doit contenir que des lettres, espaces et tirets'
    )]
    private ?string $pays = null;

    #[ORM\Column(length: 100, nullable: true)]
    #[Assert\Length(max: 100, maxMessage: "La ville ne peut pas dépasser 100 caractères")]
    private ?string $ville = null;

    #[ORM\Column(type: "text", nullable: true)]
    #[Assert\Length(max: 2000, maxMessage: "La description ne peut pas dépasser 2000 caractères")]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Url(message: "L'URL de l'image n'est pas valide")]
    private ?string $imageUrl = null;

    #[ORM\Column(type: "decimal", precision: 10, scale: 8, nullable: true)]
    #[Assert\Range(min: -90, max: 90, notInRangeMessage: "La latitude doit être comprise entre -90 et 90")]
    private ?string $latitude = null;

    #[ORM\Column(type: "decimal", precision: 11, scale: 8, nullable: true)]
    #[Assert\Range(min: -180, max: 180, notInRangeMessage: "La longitude doit être comprise entre -180 et 180")]
    private ?string $longitude = null;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\OneToMany(mappedBy: "destination", targetEntity: PointInteret::class, cascade: ["remove"], orphanRemoval: true)]
    private Collection $pointsInteret;

    public function __construct()
    {
        $this->pointsInteret = new ArrayCollection();
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    // ===================== GETTERS & SETTERS =====================

    public function getIdDestination(): ?int 
    { 
        return $this->idDestination; 
    }
    
    public function getNom(): ?string 
    { 
        return $this->nom; 
    }
    
    public function setNom(string $nom): self 
    { 
        $this->nom = trim($nom);
        return $this; 
    }
    
    public function getPays(): ?string 
    { 
        return $this->pays; 
    }
    
    public function setPays(string $pays): self 
    { 
        $this->pays = trim($pays);
        return $this; 
    }
    
    public function getVille(): ?string 
    { 
        return $this->ville; 
    }
    
    public function setVille(?string $ville): self 
    { 
        $this->ville = $ville ? trim($ville) : null;
        return $this; 
    }
    
    public function getDescription(): ?string 
    { 
        return $this->description; 
    }
    
    public function setDescription(?string $description): self 
    { 
        $this->description = $description;
        return $this; 
    }
    
    public function getImageUrl(): ?string 
    { 
        return $this->imageUrl; 
    }
    
    public function setImageUrl(?string $imageUrl): self 
    { 
        $this->imageUrl = $imageUrl;
        return $this; 
    }
    
    public function getLatitude(): ?string 
    { 
        return $this->latitude; 
    }
    
    public function setLatitude(?string $latitude): self 
    { 
        $this->latitude = $latitude;
        return $this; 
    }
    
    public function getLongitude(): ?string 
    { 
        return $this->longitude; 
    }
    
    public function setLongitude(?string $longitude): self 
    { 
        $this->longitude = $longitude;
        return $this; 
    }
    
    public function getCreatedAt(): ?\DateTimeInterface 
    { 
        return $this->createdAt; 
    }
    
    public function setCreatedAt(?\DateTimeInterface $createdAt): self 
    { 
        $this->createdAt = $createdAt; 
        return $this; 
    }
    
    public function getUpdatedAt(): ?\DateTimeInterface 
    { 
        return $this->updatedAt; 
    }
    
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self 
    { 
        $this->updatedAt = $updatedAt; 
        return $this; 
    }
    
    public function getPointsInteret(): Collection 
    { 
        return $this->pointsInteret; 
    }
}