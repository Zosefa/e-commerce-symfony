<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournisseurRepository::class)]
class Fournisseur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $numeroFournisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $nomFournisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $siege = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroFournisseur(): ?string
    {
        return $this->numeroFournisseur;
    }

    public function setNumeroFournisseur(string $numeroFournisseur): static
    {
        $this->numeroFournisseur = $numeroFournisseur;

        return $this;
    }

    public function getNomFournisseur(): ?string
    {
        return $this->nomFournisseur;
    }

    public function setNomFournisseur(string $nomFournisseur): static
    {
        $this->nomFournisseur = $nomFournisseur;

        return $this;
    }

    public function getSiege(): ?string
    {
        return $this->siege;
    }

    public function setSiege(string $siege): static
    {
        $this->siege = $siege;

        return $this;
    }
}
