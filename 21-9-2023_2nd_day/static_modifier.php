<?php

class Test{
    private static $count=0 ;

    public function getCount(){
        self::$count++;
        echo self::$count."<br>";
    }
}

$obj = new Test();
$obj->getCount();
$obj->getCount();
$obj->getCount();
echo "<hr>";
$aa = new Test();
$aa->getCount();
$aa->getCount();
$aa->getCount();
echo "<br>";
//Static and Non-Static
class Test_nonstatic{
    public static $count=0;
    public static function data(){
        echo "blah blah blah";
    }

    public function getCount(){
        echo self:: $count."<br>";
        echo self:: data()."<br>";
        //can only call static to nonstatic .
    }
}
echo Test_nonstatic::$count;

?>