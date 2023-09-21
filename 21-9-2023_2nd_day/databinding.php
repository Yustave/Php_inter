<?php

class One{
    public function className(){
        return __CLASS__;
    }

    public function getClassName(){
        echo self::className();
    }
}

class Two extends One {
    public function className(){
        return __CLASS__;
    }

    public function getClassName(){
        echo self::className();
    }
}

$one = new One();
$one->getClassName();
echo "<br>";
$two = new Two();
$two->getClassName();
echo "<br><hr><br>"; #early binding

class One_1{
    public function className(){
        return __CLASS__;
    }

    public function getClassName(){
        echo static::className();
    }
}

class Two_2 extends One_1 {
    public function className(){
        return __CLASS__;
    }
}
$one = new One_1();
$one->getClassName();
echo "<br>";
$two = new Two_2();
$two->getClassName();
echo "<br><hr><br>";
?>