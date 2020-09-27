<?php 

var_dump("年齢は？");
$age = fgets(STDIN);

if ($age >20 ) {
  var_dump("成人です");
}elseif ($age == 20) {
  var_dump("成人式ですね、おめでとう！");
}else {
  var_dump("あなたは未成年です");
}