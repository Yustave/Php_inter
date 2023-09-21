<?php

$ary = ["one" => 1,"two" => 2,"three" => 3,"four" => 4,"five" => 5,];
var_dump($ary);
echo $ary["one"];
$obj = (object) $ary;
echo '<br>';
var_dump($obj);
echo $obj->one;
?>