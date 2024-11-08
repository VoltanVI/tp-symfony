<?php

namespace App\Entity;

use App\Repository\WatchHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WatchHistoryRepository::class)]
class WatchHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $last_watched = null;

    #[ORM\Column]
    private ?int $number_of_views = null;

    #[ORM\ManyToOne]
    private ?User $user_id = null;

    #[ORM\ManyToOne]
    private ?Media $media_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastWatched(): ?\DateTimeInterface
    {
        return $this->last_watched;
    }

    public function setLastWatched(\DateTimeInterface $last_watched): static
    {
        $this->last_watched = $last_watched;

        return $this;
    }

    public function getNumberOfViews(): ?int
    {
        return $this->number_of_views;
    }

    public function setNumberOfViews(int $number_of_views): static
    {
        $this->number_of_views = $number_of_views;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getMediaId(): ?Media
    {
        return $this->media_id;
    }

    public function setMediaId(?Media $media_id): static
    {
        $this->media_id = $media_id;

        return $this;
    }
}
