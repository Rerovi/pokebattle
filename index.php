<?
require 'initialize.php';

$pikachu = new pikachu("Pikachu1");
$charmeleon = new charmeleon("Charmeleon1");


$pikachu->attackPoke($pikachu->attack[0], $charmeleon);
$charmeleon->attackPoke($charmeleon->attack[1], $pikachu);

