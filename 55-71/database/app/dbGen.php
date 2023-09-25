<?php

class dbGen{
    
    public const DB_HOST = "localhost";
    public const DB_USER = "root";
    public const DB_PASS = "";
    public const DB_NAME = "restaurant";
   
    private $con;

    public function __construct(){
        $this->con = new \mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_NAME);
    }

    public function getSingleShop($id){
        $stmt = $this->con->prepare("SELECT * FROM shops WHERE id=?");
        $stmt->bind_param("i",$id);
        $result = $stmt->execute();

        $stmt->bind_result($id,$name,$ipadd,$username,$password,$status,$created_at);
        while($stmt->fetch()){
            echo $id."<br>".$name."<br>".$ipadd."<br>".$username."<br>".$password."<br>".$status."<br>".$created_at;
        }

    }

    public function getMultipleShop($status){
        $stmt = $this->con->prepare("SELECT * FROM shops WHERE status=?");
        $stmt->bind_param("i",$status);
        $result = $stmt->execute();

        $stmt->bind_result($id,$name,$ipadd,$username,$password,$status,$created_at);
        while($stmt->fetch()){
            echo $id."<br>".$name."<br>".$ipadd."<br>".$username."<br>".$password."<br>".$status."<br>".$created_at;
        }
    }

    public function getalldata(){
        $result = $this->con->query("SELECT * FROM shops");
        while ($row = $result->fetch_object()){
            echo $row->name;
        }
    }

    public function insertSingleShop($name,$ipadd,$username,$password,$status){
        $date = date("Y-m-d H:m:s");
        $stmt = $this->con->prepare("INSERT INTO shops (name,ipadd,username,password,status,created_at)
         VALUES(?,?,?,?,?,?)");

        $stmt->bind_param("ssssis",$name,$ipadd,$username,$password,$status,$date);
        $result = $stmt->execute(); 
        echo $result ? "success" : "faill";
    }
    public function insertMultipleShop($shops){
        $date = date("Y-m-d H:m:s");
        $stmt = $this->con->prepare("INSERT INTO shops (name,ipadd,username,password,status,created_at)
         VALUES(?,?,?,?,?,?)");
        foreach($shops as $shop){
            $stmt->bind_param("ssssis",$shop[0],$shop[1],$shop[2],$shop[3],$shop[4],$date);
            $result = $stmt->execute(); 
            echo $result ? "success": "faill";
        }
       
    }

    public function Updateshop($shopid,$name){
        $stmt = $this->con->prepare("UPDATE shops SET name=? WHERE id=?");
        $stmt->bind_param("si",$name,$shopid);
        $result = $stmt->execute(); 
    }

    public function Deleteshop($shopid){
        $stmt = $this->con->prepare("DELETE FROM shops WHERE id=?");
        $stmt->bind_param("i",$shopid);
        $result = $stmt->execute();
        
    }
}
