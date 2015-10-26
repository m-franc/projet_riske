<?php
	include('class/area.class.php');
	include('class/map.class.php');

	$map = new Map();
	$area1 = new Area('Foret');
	$area2 = new Area('Montagne');
	$area3 = new Area('Village');
	$area4 = new Area('Neutre');

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