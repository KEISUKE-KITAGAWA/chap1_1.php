<?php 

require_once __DIR__ . "/chap4_area.php";

$areas = [
    ["top"=>10, "bottom"=>20, "height"=>30],
    ["top"=>40, "bottom"=>50, "height"=>60]
];

foreach ($areas as $area ) {
    echo displayMsg($area["top"], $area["bottom"], $area["height"],);
    echo "面積" . " : " . calcArea($area["top"], $area["bottom"],$area["height"],) . "\n" . "\n";
};