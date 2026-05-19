<?php

namespace App\Entity;

use App\Repository\LocamonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocamonRepository::class)]
class Locamon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Pokemon::class, inversedBy: 'locamons')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pokemon $pokemon = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nickname = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $ivAtk = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $ivSpAtk = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $ivSpd = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $ivDef = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $ivSpDef = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $ivHp = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $evAtk = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $evSpAtk = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $evDef = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $evSpDef = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $evSpd = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $evHp = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $price = null;

    #[ORM\Column(nullable: true, options: ['unsigned' => true])]
    private ?int $stock = null;

    #[ORM\Column(options: ['unsigned' => true])]
    private ?int $level = null;

    #[ORM\Column(length: 255)]
    private ?string $nature = null;

    #[ORM\Column]
    private ?bool $shiny = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokemon(): ?Pokemon
    {
        return $this->pokemon;
    }

    public function setPokemon(?Pokemon $pokemon): static
    {
        $this->pokemon = $pokemon;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(?string $nickname): static
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getIvAtk(): ?int
    {
        return $this->ivAtk;
    }

    public function setIvAtk(?int $ivAtk): static
    {
        $this->ivAtk = $ivAtk;

        return $this;
    }

    public function getIvSpAtk(): ?int
    {
        return $this->ivSpAtk;
    }

    public function setIvSpAtk(?int $ivSpAtk): static
    {
        $this->ivSpAtk = $ivSpAtk;

        return $this;
    }

    public function getIvSpd(): ?int
    {
        return $this->ivSpd;
    }

    public function setIvSpd(?int $ivSpd): static
    {
        $this->ivSpd = $ivSpd;

        return $this;
    }

    public function getIvDef(): ?int
    {
        return $this->ivDef;
    }

    public function setIvDef(?int $ivDef): static
    {
        $this->ivDef = $ivDef;

        return $this;
    }

    public function getIvSpDef(): ?int
    {
        return $this->ivSpDef;
    }

    public function setIvSpDef(?int $ivSpDef): static
    {
        $this->ivSpDef = $ivSpDef;

        return $this;
    }

    public function getIvHp(): ?int
    {
        return $this->ivHp;
    }

    public function setIvHp(?int $ivHp): static
    {
        $this->ivHp = $ivHp;

        return $this;
    }

    public function getEvAtk(): ?int
    {
        return $this->evAtk;
    }

    public function setEvAtk(?int $evAtk): static
    {
        $this->evAtk = $evAtk;

        return $this;
    }

    public function getEvSpAtk(): ?int
    {
        return $this->evSpAtk;
    }

    public function setEvSpAtk(?int $evSpAtk): static
    {
        $this->evSpAtk = $evSpAtk;

        return $this;
    }

    public function getEvDef(): ?int
    {
        return $this->evDef;
    }

    public function setEvDef(?int $evDef): static
    {
        $this->evDef = $evDef;

        return $this;
    }

    public function getEvSpDef(): ?int
    {
        return $this->evSpDef;
    }

    public function setEvSpDef(?int $evSpDef): static
    {
        $this->evSpDef = $evSpDef;

        return $this;
    }

    public function getEvSpd(): ?int
    {
        return $this->evSpd;
    }

    public function setEvSpd(?int $evSpd): static
    {
        $this->evSpd = $evSpd;

        return $this;
    }

    public function getEvHp(): ?int
    {
        return $this->evHp;
    }

    public function setEvHp(?int $evHp): static
    {
        $this->evHp = $evHp;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(string $nature): static
    {
        $this->nature = $nature;

        return $this;
    }

    public function isShiny(): ?bool
    {
        return $this->shiny;
    }

    public function setShiny(bool $shiny): static
    {
        $this->shiny = $shiny;

        return $this;
    }
}
