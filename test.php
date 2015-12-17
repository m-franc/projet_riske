<?php
	include('class/area.class.php');
	include('class/map.class.php');
	include('class/unit.class.php');
	include('class/player.class.php');





$aragorn = new Unit(1, 10);
$legolas = new Unit(2, 11);
$lurtz = new Unit(3, 12);
$boromir = new Unit(1, 9);



	$map = new Map();
	$area1 = new Area(2, $aragorn);
	$area2 = new Area(1, $boromir);
	$area3 = new Area(3, $legolas);
	$area4 = new Area(4, $lurtz);

	$map->addArea($area1);
	$map->addArea($area2);
	$map->addArea($area3);
	$map->addArea($area4);

	$map->listArea();

	echo $map->getArea(0)->getTypeOfArea();
	echo $map->getArea(0)->getIdArea(0).'<br>';

	//createAreas(4);

	var_dump($map);
?>