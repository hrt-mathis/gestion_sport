<?php

namespace App\Entity;

use App\Repository\ChampionshipRepository;
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
}
