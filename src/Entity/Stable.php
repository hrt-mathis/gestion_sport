<?php

namespace App\Entity;

use App\Repository\StableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StableRepository::class)
 */
class Stable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stableName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stableFirstColor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stableSecondColor;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStableName(): ?string
    {
        return $this->stableName;
    }

    public function setStableName(string $stableName): self
    {
        $this->stableName = $stableName;

        return $this;
    }

    public function getStableFirstColor(): ?string
    {
        return $this->stableFirstColor;
    }

    public function setStableFirstColor(string $stableFirstColor): self
    {
        $this->stableFirstColor = $stableFirstColor;

        return $this;
    }

    public function getStableSecondColor(): ?string
    {
        return $this->stableSecondColor;
    }

    public function setStableSecondColor(string $stableSecondColor): self
    {
        $this->stableSecondColor = $stableSecondColor;

        return $this;
    }
}
