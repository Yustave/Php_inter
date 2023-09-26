<?php
class datagen{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "restaurant";
    private static $instance;
    private $conn;

    private function __construct(){
        try {
            $this->conn = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::DB_USER, self::DB_PASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if ($this->conn) {
                echo "Database successfully connected<hr>";
            }
        } catch (Exception $e) {
            echo "Custom error is <br>" . $e->getMessage();
        }
    }

    public static function getInstance(){
        if (!self::$instance) {
            self::$instance = new datagen();
        }
        return self::$instance;
    }


    public function getConn(){
        return $this->conn;
    }
}