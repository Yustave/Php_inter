<?php

class helper{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }

    public function sayyourname(){
        echo $this->name."<br><hr><br>";
    }
}

?>