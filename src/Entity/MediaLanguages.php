<?php

namespace App\Entity;

use App\Repository\MediaLanguagesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MediaLanguagesRepository::class)]
class MediaLanguages
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Media $media_id = null;

    #[ORM\ManyToOne]
    private ?Languages $language_id = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLanguageId(): ?Languages
    {
        return $this->language_id;
    }

    public function setLanguageId(?Languages $language_id): static
    {
        $this->language_id = $language_id;

        return $this;
    }
}
