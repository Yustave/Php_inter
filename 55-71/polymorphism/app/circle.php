<?php

namespace app;

use app\gen\shap;
class Circle implements shap{
    private $radius;
    
    public function __construct($radius){
        $this->radius = $radius;
       
    }
    
    public function getarea(){
        return $this->radius * $this->radius * 3.14 ;
    }
}   

?>


