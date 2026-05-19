<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use App\Entity\Type;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Type::class, inversedBy : 'pokemonstype1')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\Positive]
    private ?Type $type1 = null;

    #[ORM\ManyToOne(targetEntity: Type::class, inversedBy : 'pokemonstype2')]
    #[ORM\JoinColumn(nullable: true)]
    #[Assert\Positive]
    private ?Type $type2 = null;

    #[ORM\Column]
    #[Assert\Positive]
    private ?int $Atk = null;

    #[ORM\Column]
    #[Assert\Positive]
    private ?int $Def = null;

    #[ORM\Column]
    #[Assert\Positive]
    private ?int $SpAtk = null;

    #[ORM\Column]
    #[Assert\Positive]
    private ?int $SpDef = null;

    #[ORM\Column]
    #[Assert\Positive]
    private ?int $Spd = null;

    #[ORM\Column]
    #[Assert\Positive]
    private ?int $Hp = null;

    #[ORM\OneToMany(targetEntity: PokemonTranslation::class, mappedBy: 'pokemon', orphanRemoval: true)]
    private Collection $translations;

    #[ORM\OneToMany(targetEntity: PokemonSprite::class, mappedBy: 'pokemon', orphanRemoval: true)]
    private Collection $sprites;

    #[ORM\OneToMany(targetEntity: Locamon::class, mappedBy: 'pokemon', orphanRemoval: true)]
    private Collection $locamons;

    public function __construct()
    {
        $this->translations = new ArrayCollection();
        $this->sprites = new ArrayCollection();
        $this->locamons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType1(): ?Type
    {
        return $this->type1;
    }

    public function setType1(?Type $type): self
    {
        $this->type1 = $type;
        return $this;
    }

    public function getType2(): ?Type
    {
        return $this->type2;
    }

    public function setType2(?Type $type): self
    {
        $this->type2 = $type;
        return $this;
    }

    public function getAtk(): ?int
    {
        return $this->Atk;
    }

    public function setAtk(int $Atk): static
    {
        $this->Atk = $Atk;

        return $this;
    }

    public function getDef(): ?int
    {
        return $this->Def;
    }

    public function setDef(int $Def): static
    {
        $this->Def = $Def;

        return $this;
    }

    public function getSpAtk(): ?int
    {
        return $this->SpAtk;
    }

    public function setSpAtk(int $SpAtk): static
    {
        $this->SpAtk = $SpAtk;

        return $this;
    }

    public function getSpDef(): ?int
    {
        return $this->SpDef;
    }

    public function setSpDef(int $SpDef): static
    {
        $this->SpDef = $SpDef;

        return $this;
    }

    public function getSpd(): ?int
    {
        return $this->Spd;
    }

    public function setSpd(int $Spd): static
    {
        $this->Spd = $Spd;

        return $this;
    }

    public function getHp(): ?int
    {
        return $this->Hp;
    }

    public function setHp(int $Hp): static
    {
        $this->Hp = $Hp;

        return $this;
    }

    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslation(PokemonTranslation $translation): static
    {
        if (!$this->translations->contains($translation)) {
            $this->translations->add($translation);
            $translation->setPokemon($this);
        }

        return $this;
    }

    public function removeTranslation(PokemonTranslation $translation): static
    {
        if ($this->translations->removeElement($translation)) {
            if ($translation->getPokemon() === $this) {
                $translation->setPokemon(null);
            }
        }

        return $this;
    }

    public function getSprites(): Collection
    {
        return $this->sprites;
    }

    public function addSprite(PokemonSprite $sprite): static
    {
        if (!$this->sprites->contains($sprite)) {
            $this->sprites->add($sprite);
            $sprite->setPokemon($this);
        }

        return $this;
    }

    public function removeSprite(PokemonSprite $sprite): static
    {
        if ($this->sprites->removeElement($sprite)) {
            if ($sprite->getPokemon() === $this) {
                $sprite->setPokemon(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Locamon>
     */
    public function getLocamons(): Collection
    {
        return $this->locamons;
    }

    public function addLocamon(Locamon $locamon): static
    {
        if (!$this->locamons->contains($locamon)) {
            $this->locamons->add($locamon);
            $locamon->setPokemon($this);
        }

        return $this;
    }

    public function removeLocamon(Locamon $locamon): static
    {
        if ($this->locamons->removeElement($locamon)) {
            if ($locamon->getPokemon() === $this) {
                $locamon->setPokemon(null);
            }
        }

        return $this;
    }
}
