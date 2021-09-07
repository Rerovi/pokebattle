<?php

class pokemon
{
    public $name;
    public $energyType;
    public $maxHealth;
    public $attack;
    public $weakness;
    public $resistance;

    public static $population;

    public function __construct($name, $energyType, $maxHealth, $attack, $weakness, $resistance)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->maxHealth = $maxHealth;
        $this->attack = $attack;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::getPopulation(0);
    }

    public function __toString()
    {
        return json_encode($this);
    }

    public function attackPoke($attack, $enemy)
    {
        if ($this->maxHealth <= 0) {
            echo "Fainted pokemon can't attack other pokemon.";
        } else {
            if ($enemy->maxHealth <= 0) {
                echo "Fainted pokemon can't be attacked.";
            } else {
                echo "<h4>" . $enemy->name . " has " . $enemy->maxHealth . " health.<br></h4>";
                echo $this->name . " attacks " . $enemy->name . " with " . $attack->name;
                $damage = $attack->damage;
                if ($enemy->weakness->energyType == $this->energyType) {
                    $damage = $attack->damage * $enemy->weakness->mult;
                } else if ($enemy->resistance->energyType == $this->energyType) {
                    $damage = $attack->damage - $enemy->resistance->res;
                } else {
                    $damage = $enemy->maxHealth - $attack->damage;
                }
                $enemy->maxHealth = $enemy->maxHealth - $damage;
                if ($enemy->maxHealth <= 0) {
                    echo "<br>" . $enemy->name . " has fainted<br>";
                    self::getPopulation(1);
                } else {
                    echo " and has " . $enemy->maxHealth . " health left.<br>";
                }
            }
        }
    }

    public static function getPopulation($add)
    {
        if ($add == 0) {
            self::$population++;
        } else if ($add == 1) {
            self::$population--;
        }

    }
}