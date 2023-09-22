<?php
//abstruict method never pocess body
// class must be abstruct when there's abstruct method
abstract class Paren{
    const DB_HOST = "localhost";

    public $name = "Yustave";

    public abstract function abst();

    public function doit(){
        echo "Do it <hr>";
    }
}

abstract class paren1 extends Paren{
    public $name = 'Yustave';

    public abstract function abst1();

    public function abst(){
        echo "My name is Yustave La Van";
    } #child class must overwrite paren's abstruct method
} 

class index extends paren1{
    public function abst1(){
        echo "My name is Yustave La Van";
    }
} 

$obj = new index();
echo $obj->name;



?>