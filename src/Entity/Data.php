<?php

namespace App\Entity;

use App\Repository\DataRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DataRepository::class)]
class Data
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $label = null;

    #[ORM\Column]
    private ?int $donnees = null;

    #[ORM\Column(length: 255)]
    private ?string $background = null;

 

    public function getId(): ?int
    {
        return $this->id;
    }


    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getDonnees(): ?int
    {
        return $this->;
    }

    public function setDonnees(int $donnees): self
    {
        $this->donnees = $donnees;

        return $this;
    }

    public function getBackground(): ?string
    {
        return $this->background;
    }

    public function setBackground(string $background): self
    {
        $this->background = $background;

        return $this;
    }

}
