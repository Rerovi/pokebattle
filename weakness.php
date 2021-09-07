<?php


class weakness
{
    public $energyType;
    public $mult;

    public function __construct($energyType, $mult){
        $this->energyType = $energyType;
        $this->mult = $mult;
    }
}