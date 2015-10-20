<?php

include_once('Class/unit.class.php');
include_once('Class/player.class.php');

$aragorn = new Unit(1, 10);
$legolas = new Unit(2, 11);
$lurtz = new Unit(3, 12);

var_dump($aragorn);
echo '<br/>';
var_dump($legolas);
echo '<br/>';
var_dump($lurtz);

$joueur1 = new Player($legolas);
$joueur2 = new Player($aragorn);
$joueur3 = new Player($lurtz);
echo '<br/>';
echo '<br/>';
echo '<br/>';

var_dump($joueur1);
echo '<br/>';
var_dump($joueur2);
echo '<br/>';
var_dump($joueur3);



