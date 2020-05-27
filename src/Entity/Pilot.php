<?php

namespace App\Entity;

use App\Repository\PilotRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PilotRepository::class)
 */
class Pilot
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
    private $pilotFirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pilotLastName;

    /**
     * @ORM\Column(type="integer")
     */
    private $pilotAge;

    /**
     * @ORM\ManyToMany(targetEntity=Stable::class, inversedBy="pilots")
     */
    private $Stable;

    public function __construct()
    {
        $this->Stable = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPilotFirstName(): ?string
    {
        return $this->pilotFirstName;
    }

    public function setPilotFirstName(string $pilotFirstName): self
    {
        $this->pilotFirstName = $pilotFirstName;

        return $this;
    }

    public function getPilotLastName(): ?string
    {
        return $this->pilotLastName;
    }

    public function setPilotLastName(string $pilotLastName): self
    {
        $this->pilotLastName = $pilotLastName;

        return $this;
    }

    public function getPilotAge(): ?int
    {
        return $this->pilotAge;
    }

    public function setPilotAge(int $pilotAge): self
    {
        $this->pilotAge = $pilotAge;

        return $this;
    }

    /**
     * @return Collection|Stable[]
     */
    public function getStable(): Collection
    {
        return $this->Stable;
    }

    public function addStable(Stable $stable): self
    {
        if (!$this->Stable->contains($stable)) {
            $this->Stable[] = $stable;
        }

        return $this;
    }

    public function removeStable(Stable $stable): self
    {
        if ($this->Stable->contains($stable)) {
            $this->Stable->removeElement($stable);
        }

        return $this;
    }
}
