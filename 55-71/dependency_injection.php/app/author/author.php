<?php

namespace app\author;

class Author{
    private $firstname,$lastname;

    public function __construct($firstname,$lastname){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function get_firstname(){
        return $this->firstname;
    }

    
    public function get_lastname(){
        return $this->lastname;
    }
}


?>