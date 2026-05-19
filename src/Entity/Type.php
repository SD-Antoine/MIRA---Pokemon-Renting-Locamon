<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeRepository::class)]
class Type
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\Column(length: 255)]
    private ?string $name_fr = null;
    
    #[ORM\Column(length: 255)]
    private ?string $name_en = null;

    #[ORM\Column(length: 255)]
    private ?string $sprite = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $color = null;

    #[ORM\OneToMany(mappedBy: 'type1', targetEntity: Pokemon::class)]
    private Collection $pokemonsType1;

    #[ORM\OneToMany(mappedBy: 'type2', targetEntity: Pokemon::class)]
    private Collection $pokemonsType2;


    public function __construct()
    {
        $this->pokemonsType1 = new ArrayCollection();
        $this->pokemonsType2 = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameEN(): ?string
    {
        return $this->name_en;
    }

    public function setNameEN(string $name): static
    {
        $this->name_en = $name;

        return $this;
    }

    public function getNameFR(): ?string
    {
        return $this->name_fr;
    }

    public function setNameFR(string $name): static
    {
        $this->name_fr = $name;

        return $this;
    } 

    public function getSprite(): ?string
    {
        return $this->sprite;
    }

    public function setSprite(string $sprite): static
    {
        $this->sprite = $sprite;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getPokemonsType1(): Collection
    {
        return $this->pokemonsType1;
    }

    public function getPokemonsType2(): Collection
    {
        return $this->pokemonsType2;
    }
 
    public function addPokemonsType1(Pokemon $pokemon): static
    {
        if (!$this->pokemonsType1->contains($pokemon)) {
            $this->pokemonsType1[] = $pokemon;
            $pokemon->setType1($this); // synchronisation
        }

        return $this;
    }

    public function removePokemonsType1(Pokemon $pokemon): static
    {
        if ($this->pokemonsType1->removeElement($pokemon)) {
            if ($pokemon->getType1() === $this) {
                $pokemon->setType1(null);
            }
        }

        return $this;
    }

    public function addPokemonsType2(Pokemon $pokemon): static
    {
        if (!$this->pokemonsType2->contains($pokemon)) {
            $this->pokemonsType2[] = $pokemon;
            $pokemon->setType2($this); // synchronisation
        }

        return $this;
    }

    public function removePokemonsType2(Pokemon $pokemon): static
    {
        if ($this->pokemonsType2->removeElement($pokemon)) {
            if ($pokemon->getType2() === $this) {
                $pokemon->setType2(null);
            }
        }

        return $this;
    }
}
