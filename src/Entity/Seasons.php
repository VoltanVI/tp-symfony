<?php

namespace App\Entity;

use App\Repository\SeasonsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeasonsRepository::class)]
class Seasons
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $season_number = null;

    #[ORM\ManyToOne]
    private ?Serie $serie_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSeasonNumber(): ?int
    {
        return $this->season_number;
    }

    public function setSeasonNumber(int $season_number): static
    {
        $this->season_number = $season_number;

        return $this;
    }

    public function getSerieId(): ?Serie
    {
        return $this->serie_id;
    }

    public function setSerieId(?Serie $serie_id): static
    {
        $this->serie_id = $serie_id;

        return $this;
    }
}
