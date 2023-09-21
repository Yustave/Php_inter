<?php

require_once("killer.php");
require_once("victim.php");

class killer_killing implements killer_killmessage{
    private $data;

    public function victim($data){
        $this->data = $data;
    }

    public function message(){
        echo " You Have Slain the ".$this->data[count($this->data)-1];
    }
}

class victim_killing implements victim_killmessage{
    private $data;

    public function killer($data){
        $this->data = $data;

    }

    public function output(){
        echo "<pre>".print_r($this->data,true)."</pre>";
    }

    public function message(){
        echo " You Have Been Slain by ".$this->data[count($this->data)-1];
    }
}

$victim = new victim_killing();
$victim_data = ["Vandel", "Fade"];
$victim->killer($victim_data);
$victim->output();
$victim->message();

$killer = new killer_killing();
$Killer_data = ["Vandel","Sage"];
$killer->victim($Killer_data);
$killer->message();


?>