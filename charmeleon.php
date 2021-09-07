<?php


class charmeleon extends pokemon
{

    public function __construct($name)
    {
        $energyType = "fire";
        $maxHealth = 60;
        $attack = [new attack("Scratch", 20), new attack("Flamethrower", 50)];
        $weakness = new weakness("water", 1.5);
        $resistance = new resistance("lightning", 10);

        parent::__construct($name, $energyType, $maxHealth, $attack, $weakness, $resistance);
        pokemon::getPopulation(0);
    }
}