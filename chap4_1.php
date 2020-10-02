<?php 

require_once __DIR__ . "/chap4_area.php";

$top = 10;
$bottom = 20;
$height = 30;

$area = calcArea($top, $bottom, $height);
displayMsg($top, $bottom, $height, $area);

$top = 40;
$bottom = 50;
$height = 60;

$area = calcArea($top, $bottom, $height);
displayMsg($top, $bottom, $height, $area);