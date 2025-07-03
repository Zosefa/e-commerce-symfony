<?php

namespace App\Entity;

use App\Repository\VenteProduitRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VenteProduitRepository::class)]
class VenteProduit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Vente $Vente = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Article $Article = null;

    #[ORM\Column]
    private ?int $qteVendus = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVente(): ?Vente
    {
        return $this->Vente;
    }

    public function setVente(?Vente $Vente): static
    {
        $this->Vente = $Vente;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->Article;
    }

    public function setArticle(?Article $Article): static
    {
        $this->Article = $Article;

        return $this;
    }

    public function getQteVendus(): ?int
    {
        return $this->qteVendus;
    }

    public function setQteVendus(int $qteVendus): static
    {
        $this->qteVendus = $qteVendus;

        return $this;
    }
}
