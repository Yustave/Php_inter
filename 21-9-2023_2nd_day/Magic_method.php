<?php
//set get
echo "SET & GET<br><br>";
class Test{
    public function __get($var){
       echo "There is no such a properties";
    }

    Public function __set($var,$value){
        echo $var .'is'.  $value;
    }
    
}

$obj = new Test();
echo $obj->name;
echo '<br>';
$obj->name="Yustave";

//isest unset
echo "<br><hr><br>ISSET & UNSET<br><br>";
class Testing{
    public function __isset($name){
        echo "Checking set or not of ($name) propeerty<br>";
    }

    public function __unset($name){
        echo "Checking unset or not of ($name) propeerty";
    }
}

$obj = new Testing();
isset ($obj->data);
unset ($obj->submit);

//call and callstatic
echo "<br><hr><br>CALL & CALLSTATIC<br><br>";

class Testing_Call{
    public function __call($method,$values){
        echo $method."<br>";
        echo "<br><pre>".print_r($values)."</pre>";
    }


    public static function __callstatic($method,$argument){
        echo 'Method name ->'. $method . '<br>';
        echo "<br><pre>".print_r($argument)."</pre>";
    }
}

$obj = new Testing_Call;
$obj->hey("Yustave","Kekki");

Testing_Call::hey("yustave la van","Kekki");

//Serialize and unserialize
echo "<br><hr><br>Serialize & Unserialize<br><br>";
$ary = [
    ["Yustave","La","Van"],
    ["Yustave","La","Van"],
    ["Yustave","La","Van"],
    ["Yustave","La","Van"]
];
$data = serialize($ary);
echo $data."<br>";
$normal = unserialize($data);
echo "<pre>".print_r($normal,true)."</pre>";

//Sleep and WakeUp
echo "<br><hr><br>Sleep & WakeUp<br><br>";

class Testing_slp{
    public function __sleep(){
        echo "I'll work when you serialize";
        return [];
    }

     public function __wakeup(){
        echo "I'll work when you unserialize";
    }
}
$obj = new Testing_slp();
$data = serialize($obj);
echo $data;
$normal = unserialize($data);
echo "<pre>".print_r($normal,true)."</pre>";

//Tosrting and Invoke
echo "<br><hr><br>To_srting & Invoke<br><br>";

class Testing_Tstr{
    public function __tostring(){
        return "Take the risk or lose the chance"; 
    }

    public function __Invoke(){
        echo "Never Fight Ionian on it's own soil";
    }

     public function __clone(){
        echo "Light Yagami";
    }
}

$obj = new Testing_Tstr();
echo $obj . '<br>'; #tostring will work
echo $obj() . '<br>'; #invoke will work
$clone = clone $obj;
?>