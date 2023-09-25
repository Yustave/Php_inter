<?php

require_once "vendor/autoload.php";

use app\circle;
use app\square;
use app\gen\shap;

class get_area{
    public function __construct(){
        $square = new Square(20,10);
        $this->cost($square);

        $circle = new Circle(33);
        $this->cost($circle);
    }

    public function cost(Shap $data){
        $area = $data->getarea();
        echo 'Your cost'.$area * 17 ;
        echo "<br><hr><br>";
    }
}
new get_area;


?>