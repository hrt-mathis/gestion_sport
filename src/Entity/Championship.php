<?php

namespace App\Entity;

use App\Repository\ChampionshipRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChampionshipRepository::class)
 */
class Championship
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
    private $championshipName;

    /**
     * @ORM\Column(type="date")
     */
    private $championshipYear;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $championshipDescription;

    /**
     * @ORM\OneToMany(targetEntity=Stable::class, mappedBy="Championship")
     */
    private $stables;

    public function __construct()
    {
        $this->stables = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChampionshipName(): ?string
    {
        return $this->championshipName;
    }

    public function setChampionshipName(string $championshipName): self
    {
        $this->championshipName = $championshipName;

        return $this;
    }

    public function getChampionshipYear(): ?\DateTimeInterface
    {
        return $this->championshipYear;
    }

    public function setChampionshipYear(\DateTimeInterface $championshipYear): self
    {
        $this->championshipYear = $championshipYear;

        return $this;
    }

    public function getChampionshipDescription(): ?string
    {
        return $this->championshipDescription;
    }

    public function setChampionshipDescription(string $championshipDescription): self
    {
        $this->championshipDescription = $championshipDescription;

        return $this;
    }

    /**
     * @return Collection|Stable[]
     */
    public function getStables(): Collection
    {
        return $this->stables;
    }

    public function addStable(Stable $stable): self
    {
        if (!$this->stables->contains($stable)) {
            $this->stables[] = $stable;
            $stable->setChampionship($this);
        }

        return $this;
    }

    public function removeStable(Stable $stable): self
    {
        if ($this->stables->contains($stable)) {
            $this->stables->removeElement($stable);
            // set the owning side to null (unless already changed)
            if ($stable->getChampionship() === $this) {
                $stable->setChampionship(null);
            }
        }

        return $this;
    }
}
