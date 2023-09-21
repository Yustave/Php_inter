<?php

class Test {
    private static $name = "Yustave La Van";
    private static $instance;

    private function __construct(){
        self::$name = "Yustave";
    }

    public static function getInstance(){
        if(self::$instance == null ){
            self::$instance = new Test();
        }
        return self::$instance;
    }

    public function GetName(){
        return self::$name;
    }
}

$obj = Test::getInstance();
echo $obj->GetName();

?>