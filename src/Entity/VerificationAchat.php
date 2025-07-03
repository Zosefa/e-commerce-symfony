<?php

namespace App\Entity;

use App\Repository\VerificationAchatRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VerificationAchatRepository::class)]
class VerificationAchat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $dateArriver = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Achat $Achat = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Article $Article = null;

    #[ORM\Column]
    private ?int $qteArriver = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateArriver(): ?\DateTime
    {
        return $this->dateArriver;
    }

    public function setDateArriver(\DateTime $dateArriver): static
    {
        $this->dateArriver = $dateArriver;

        return $this;
    }

    public function getAchat(): ?Achat
    {
        return $this->Achat;
    }

    public function setAchat(?Achat $Achat): static
    {
        $this->Achat = $Achat;

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

    public function getQteArriver(): ?int
    {
        return $this->qteArriver;
    }

    public function setQteArriver(int $qteArriver): static
    {
        $this->qteArriver = $qteArriver;

        return $this;
    }
}
