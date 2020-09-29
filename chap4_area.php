<?php 

function calcArea($top, $bottom, $height){
    return ((($top + $bottom) * $height) / 2);
}

function displayMsg($top, $bottom, $height){
    $msg =<<< EOM
    台形のサイズ
    上底 : {$top}
    下底 : {$bottom}
    高さ : {$height}\n
    EOM;
        echo $msg;
}