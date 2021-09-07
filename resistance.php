<?php


class resistance {
    public $energyType;
    public $res;

    public function __construct($energyType, $res){
        $this->energyType = $energyType;
        $this->res = $res;
    }
}