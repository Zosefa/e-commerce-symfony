<?php

namespace App\Entity;

use App\Repository\VenteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VenteRepository::class)]
class Vente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $numero = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateVente = null;

    #[ORM\Column(length: 255)]
    private ?string $acheteur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDateVente(): ?\DateTime
    {
        return $this->dateVente;
    }

    public function setDateVente(\DateTime $dateVente): static
    {
        $this->dateVente = $dateVente;

        return $this;
    }

    public function getAcheteur(): ?string
    {
        return $this->acheteur;
    }

    public function setAcheteur(string $acheteur): static
    {
        $this->acheteur = $acheteur;

        return $this;
    }
}
