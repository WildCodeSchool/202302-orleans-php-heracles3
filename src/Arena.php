<?php

namespace App;

class Arena
{
    private array $monsters;
    private Hero $hero;
    private int $size;

    public function __construct(array $monsters, Hero $hero, int $size = 10)
    {
        $this->monsters = $monsters;
        $this->hero = $hero;
        $this->size = $size;
    }
    
    // public function __construct(
    //     private array $monsters, 
    //     private Hero $hero, 
    //     private int $size = 10
    // ) {}


    /**
     * Get the value of size
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * Get the value of monsters
     */
    public function getMonsters(): array
    {
        return $this->monsters;
    }

    /**
     * Set the value of monsters
     */
    public function setMonsters(array $monsters): self
    {
        $this->monsters = $monsters;

        return $this;
    }

    /**
     * Get the value of hero
     */
    public function getHero(): Hero
    {
        return $this->hero;
    }

    /**
     * Set the value of hero
     */
    public function setHero(Hero $hero): self
    {
        $this->hero = $hero;

        return $this;
    }

    public function getDistance(Fighter $fighterA, Fighter $fighterB): float
    {
        $distanceX = $fighterB->getX() - $fighterA->getX();
        $distanceY = $fighterB->getY() - $fighterA->getY();

        return sqrt($distanceX ** 2 + $distanceY **2);
    }

    public function touchable(Fighter $attacker, Fighter $defender): bool 
    {
        $distance = $this->getDistance($attacker, $defender);

        return $attacker->getRange() >= $distance;
    }
}
