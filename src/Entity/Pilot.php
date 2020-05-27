<?php

namespace App\Entity;

use App\Repository\PilotRepository;
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
}
