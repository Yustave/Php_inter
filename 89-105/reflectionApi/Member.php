<?php

namespace app;

class Member {
    private $isAuth = FALSE;
    private $detailinfo =[
        "name" => "MG MG",
        "age"  => 20
    ];

    public function getdetailinfo($data = 1,$test = "test"){
        return $this->detailinfo;
        // echo  $para[0];
    }
    
    public function setAuth($bol){
        $this->isAuth = $bol;
    }

    public function getAuth(){
        return $this->isAuth;
    }

    
}

?>