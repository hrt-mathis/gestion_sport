<?php

namespace App\Entity;

use App\Repository\StableRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToMany(targetEntity=Pilot::class, mappedBy="Stable")
     */
    private $pilots;

    /**
     * @ORM\ManyToOne(targetEntity=Championship::class, inversedBy="stables")
     */
    private $Championship;

    public function __construct()
    {
        $this->pilots = new ArrayCollection();
    }

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

    /**
     * @return Collection|Pilot[]
     */
    public function getPilots(): Collection
    {
        return $this->pilots;
    }

    public function addPilot(Pilot $pilot): self
    {
        if (!$this->pilots->contains($pilot)) {
            $this->pilots[] = $pilot;
            $pilot->addStable($this);
        }

        return $this;
    }

    public function removePilot(Pilot $pilot): self
    {
        if ($this->pilots->contains($pilot)) {
            $this->pilots->removeElement($pilot);
            $pilot->removeStable($this);
        }

        return $this;
    }

    public function getChampionship(): ?Championship
    {
        return $this->Championship;
    }

    public function setChampionship(?Championship $Championship): self
    {
        $this->Championship = $Championship;

        return $this;
    }
}
