<?php

interface GameRule{
    public function Killer($killer); 
    //must be public 
}

class battlefield implements GameRule{
    private $killer;
    public function killer($killer){
        $this->killer = $killer;
    }
    public function KillAlret(){
        echo "You Have been slain by ".$this->killer ;
    }
}

$obj = new battlefield();
$obj->killer("TeeMo");
$obj->KillAlret();


?>