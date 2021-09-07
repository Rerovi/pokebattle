<?php


class pikachu extends pokemon
{

    public function __construct($name)
    {
        $energyType = "water";
        $maxHealth = 60;
        $attack = [new attack("Headbutt", 20), new attack("Thunder", 50)];
        $weakness = new weakness("fire", 2);
        $resistance = new resistance("fightning", 20);

        parent::__construct($name, $energyType, $maxHealth, $attack, $weakness, $resistance);
        pokemon::getPopulation(0);
    }
}
