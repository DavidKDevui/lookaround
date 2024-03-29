<?php

namespace App\Entity;

use App\Repository\VisiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VisiteRepository::class)]
class Visite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $urlVitrine = null;

    #[ORM\Column(length: 255)]
    private ?string $urlAccess = null;

    #[ORM\Column(length: 255)]
    private ?string $typeVisite = null;

    #[ORM\Column(length: 255)]
    private ?string $companyName = null;

    #[ORM\Column(length: 255)]
    private ?string $companyAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $companyNPA = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrlVitrine(): ?string
    {
        return $this->urlVitrine;
    }

    public function setUrlVitrine(string $urlVitrine): static
    {
        $this->urlVitrine = $urlVitrine;

        return $this;
    }

    public function getUrlAccess(): ?string
    {
        return $this->urlAccess;
    }

    public function setUrlAccess(string $urlAccess): static
    {
        $this->urlAccess = $urlAccess;

        return $this;
    }

    public function getTypeVisite(): ?string
    {
        return $this->typeVisite;
    }

    public function setTypeVisite(string $typeVisite): static
    {
        $this->typeVisite = $typeVisite;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): static
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyAddress(): ?string
    {
        return $this->companyAddress;
    }

    public function setCompanyAddress(string $companyAddress): static
    {
        $this->companyAddress = $companyAddress;

        return $this;
    }

    public function getCompanyNPA(): ?string
    {
        return $this->companyNPA;
    }

    public function setCompanyNPA(string $companyNPA): static
    {
        $this->companyNPA = $companyNPA;

        return $this;
    }
}
