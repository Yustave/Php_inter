<?php

namespace app;
use app\gen\shap;
class Square implements shap{
    private $width;
    private $height;
    
    public function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getarea(){
        return $this->height * $this->width;
    }
}

?>