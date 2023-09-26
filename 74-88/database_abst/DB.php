<?php

require_once "DAL.php";

class Db extends DAL{

    public function __construct($db_host,$db_user,$db_pass,$db_name){
        parent::__construct($db_host,$db_user,$db_pass,$db_name);
    }

    public function connect(){

        if($this->db == Null){
            $this->db 
                    = 
                new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
        }
        return $this->db;
    }

    public function disconnect(){
        if(!$this->db == Null){
            $this->db == Null;
        }
    }
    
    public function fetchData($table,$modifier){
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE id=:id");
        $stmt->bindParam(":id", $modifier);
        $result = $stmt->execute();
        if($result)
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        else
            return Null;
    }   
}

$db = new Db("localhost","root","","restaurant");
$db->connect();
$data = $db->fetchData("shops",1);

if($data != null )
    echo $data[0]->name;

?>