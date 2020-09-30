<?php 

function displayMsg($name, $animal){
    $count = count($animal);
    $animal_type = array_unique($animal);
    $animal = implode("、", $animal_type);

    $msg =<<< EOM
    {$name}さんは   
    {$animal}を
    {$count}匹飼っています。\n
    EOM;
    echo $msg;
}