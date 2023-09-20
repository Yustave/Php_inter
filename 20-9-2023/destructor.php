<?php

class Test{
    var $t = 0;
    public function __construct(){
        echo "Strike";
    }

    public function Looping(){
        for($i=0;$i<10;$i++){
            $this->t+=10;
        }
    echo $this->t;
    }

    public function __destruct(){
        echo "End the T valuse is".$this->t;
    }
}

$obj = new Test();
$obj->Looping();

?>