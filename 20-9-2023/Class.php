<?php
// class identifer{ 
//     properties 
//     method
// }

class Test{
    var $name = "Yustave"; #propertties <as simple as variables but need access modifier>
    var $age = "19";

    public function hey($name){      #method <as simple as function>
        echo "I'm".$name;
    }

    public function doit($default=20){
        echo 'The value is'.$default;
    }
}
//invoke class with "new" keyword 
//only invoked class will interface

$obj = new Test();

//accessing class properties 
// 1 Use -> 
// 2 Need nomore $
echo $obj->name;
echo "<br>";
echo $obj->age;
echo "<br>";
$obj->hey('Yustave');
//assigned default argument
$obj->doit(40);

?>