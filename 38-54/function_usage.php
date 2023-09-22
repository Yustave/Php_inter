<?php
//anonymous function
echo 'Anonymou Function<br><br>';

$var = function(string $data){
    echo "My name is ".$data;
};
$var("Yustave");

echo '<br><hr><br>';
//Lambda Functiom
echo 'Lambda Function<br><br>';

$var = function($para1,$para2){
    $para1 = $para1-$para2;
    $para2 = $para2-$para1;
    $result = $para1+$para2;
    return $result;
};

function doit($para1,$para2){
    $para1 = $para1-$para2;
    $para2 = $para2-$para1;
    $result = $para1+$para2;
    return $result;
}
echo doit(50,$var(50,60));

echo '<br><hr><br>';
//closure Functiom
echo 'Closure Function<br><br><br>';

$name = "Yustave";
$closure = function()use($name){
    echo "My name is ".$name;
};
$closure();

echo '<br><hr><br>';
//array walker
echo 'Always Walker<br><br><br>';

$ary = ["1"=>"one","2"=>"two","3"=>"three","4"=>"four",];

function yustave($value,$key){
    echo $key ."=>". $value . "<br>";
}

$lambda = function($value,$key){
    echo $key ."=>". $value . "<br>";
};

$closure = function($value,$key)use($name){
    echo $key ."=>". $value ."<br>";
};

array_walk($ary,"yustave");
array_walk($ary,$closure);
echo "Written by" . $name . "<br>";
array_walk($ary,$lambda);

?>