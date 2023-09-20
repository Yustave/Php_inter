<?php
//getter AKA redirect accessing data from private..... 
class Test{
    private $name = "Yustave"; #encapsulate <can't be access from outer side of class>

    public function get_data(){   #act as medium to access privat $name
        return $this->name;
    }
}

$obj = new Test();
echo $obj->get_data(); //access get_data(public function) and then access $name


?>