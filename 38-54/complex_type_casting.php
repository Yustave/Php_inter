<?php
//checking variable data type
class Test{
    public function checkdatatype($data){
        if(is_int($data)){
            echo "The value is ".$data. '<br>';
            $result = $data + $data;
            echo $result;
        }else{
            die("Only number are allowed");
        }
    }
}
$Test = new Test;
$Test->checkdatatype(20);
echo "<br><hr><br>";

//Type_casting
class TypeCasting{
    public static function integer(int $num){
        echo $num;
    }
}
echo TypeCasting::integer(2.444);
echo"<br><hr><br>";
//bool int float string


//Array type casting
class ArrayTC{


    public static function arrayTC(array $ary){
       echo "<pre>".print_r($ary,true)."</pre>";
    }
}

$obj = new ArrayTC;
$obj->arrayTC(["One"=>1,"Two"=>2,"Three"=>3]);

//Array type casting
class ObjTC{
    public function objTC(ArrayTC $data){
        var_dump($data);
    }
}

$object = new ObjTC;
$object->objTC($obj);

//return data type

class dataReturner{
    public function returning($data) : string
    {   
        return $data;
    }
}

$Return = new dataReturner;
var_dump($Return->returning(20));

?>