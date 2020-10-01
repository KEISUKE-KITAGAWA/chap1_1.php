<?php 

function displayMsg($owner) {
    $count = count($owner["animal"]);
    $animal_type = array_unique($owner["animal"]);
    $animal = implode("、", $animal_type);

    $msg =<<<EOM
{$owner["name"]}さんは   
{$animal}を
{$count}匹飼っています。\n
EOM;
    echo $msg;
}