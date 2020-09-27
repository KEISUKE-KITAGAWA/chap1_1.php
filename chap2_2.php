<?php 

var_dump("数字を入力してください");

$num = fgets(STDIN);

if ($num % 2 == 0) {
    var_dump($num . "は偶数です");
} else {
    var_dump($num . "は奇数です");
}