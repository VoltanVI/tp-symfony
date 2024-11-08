<?php

namespace App\Entity;

use App\Repository\CategoriesMediaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesMediaRepository::class)]
class CategoriesMedia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?Media $media_id = null;

    #[ORM\ManyToOne]
    private ?Categories $category_id = null;

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

    public function getCategoryId(): ?Categories
    {
        return $this->category_id;
    }

    public function setCategoryId(?Categories $category_id): static
    {
        $this->category_id = $category_id;

        return $this;
    }
}
