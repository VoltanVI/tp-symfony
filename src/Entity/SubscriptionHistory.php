<?php

namespace App\Entity;

use App\Repository\SubscriptionHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionHistoryRepository::class)]
class SubscriptionHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $start�_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $end_date = null;

    #[ORM\ManyToOne]
    private ?User $user_id = null;

    #[ORM\ManyToOne]
    private ?Subscriptions $subscription_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart�Date(): ?\DateTimeInterface
    {
        return $this->start�_date;
    }

    public function setStart�Date(\DateTimeInterface $start�_date): static
    {
        $this->start�_date = $start�_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): static
    {
        $this->end_date = $end_date;

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

    public function getSubscriptionId(): ?Subscriptions
    {
        return $this->subscription_id;
    }

    public function setSubscriptionId(?Subscriptions $subscription_id): static
    {
        $this->subscription_id = $subscription_id;

        return $this;
    }
}
