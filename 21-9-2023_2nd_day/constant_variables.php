<?php

class Test{
    public const DB_HOST = "localhost";
    public const DB_NAME = "constant";
    public const DB_USER = "root";
    public const DB_PASS = "";
    public $con;

    public function __construct(){
        $this->con = new PDO("mysql:host=".self::DB_HOST.";dbname =".self::DB_NAME,self::DB_USER,self::DB_PASS);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($this->con) {
            echo "successfully connected";
        }else{
            echo "Fail";
        }
    }
}

$obj = new Test();


?>