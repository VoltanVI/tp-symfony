<?php

namespace App\Entity;

use App\Repository\PlaylistMediaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlaylistMediaRepository::class)]
class PlaylistMedia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $added_at = null;

    #[ORM\ManyToOne]
    private ?Playlist $playlist_id = null;

    #[ORM\ManyToOne]
    private ?Media $media_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddedAt(): ?\DateTimeInterface
    {
        return $this->added_at;
    }

    public function setAddedAt(\DateTimeInterface $added_at): static
    {
        $this->added_at = $added_at;

        return $this;
    }

    public function getPlaylistId(): ?Playlist
    {
        return $this->playlist_id;
    }

    public function setPlaylistId(?Playlist $playlist_id): static
    {
        $this->playlist_id = $playlist_id;

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
