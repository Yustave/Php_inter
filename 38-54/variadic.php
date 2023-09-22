<?php

function variadic(...$var){
    echo$var[0] ?? "hello world";
}

variadic("one");
//colalese
variadic(); #  ptiority  ??  secoundary

//call back

class callback{
    public function test($data){
        $i = 0;
        $sum = 0;
        while($i < 100){
            $sum += $i;
            $i+=10;
        }
        $this->$data($sum);
    }

    public function finish($total){
        echo "The sum is". $total;
    }
}
$obj = new callback();
$obj->test("finish");
?>