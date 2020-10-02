<?php 

function calcArea($top, $bottom, $height) {
    return ($top + $bottom) * $height / 2;
}

function displayMsg($top, $bottom, $height, $area) {
    $msg = <<<EOM
\n台形のサイズ
上底 : {$top}
下底 : {$bottom}
高さ : {$height}
面積 : {$area}\n
EOM;
    echo $msg;
}