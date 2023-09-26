<?php
require_once "dbgen.php";
class DAL{
    private $db;
    
    public function __construct(){
        $this->db = datagen::getInstance()->getConn();
    }
    public function getSingleShop($id){
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $stmt->bindColumn("name", $name);
        $stmt->bindColumn("ipadd", $ipadd);
        $stmt->bindColumn("username", $username);
        $stmt->bindColumn("created_at", $created_at);

        while ($stmt->fetchObject()) {
            echo $name . "<hr>" . $ipadd . "<hr>" . $username . "<hr>" . $created_at;
        }
    }
    public function getAllShop($status){
        $stmt = $this->db->prepare("SELECT * FROM shops WHERE status=:status");
        $stmt->bindParam(":status", $status);
        $stmt->execute();

       
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $item) {
            
            echo $item->name . "<br>";
            echo $item->ipadd . "<br>";
            echo $item->username . "<br>";
            echo "<hr>";
        }
    }
    public function singleShopInsert($name, $ipadd, $username, $password, $status){
        $datty = date("Y-m-d H:m:s");
        $stmt = $this->db->prepare("INSERT INTO shops
        (name,ipadd,username,password,status,created_at) VALUE
        (:name,:ipadd,:username,:password,:status,:created_at)
        ");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":ipadd", $ipadd);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":status", $status);
        $stmt->bindParam(":created_at", $datty);

        $result = $stmt->execute();
        $insertId = $this->db->lastInsertId();

        echo $result ? "Successfully Inserted" . $insertId : "Insert Fail";
    }
    public function insertMultiShops($shops){
        $datty = date("Y-d-m H:m:s");
        $stmt = $this->db->prepare("INSERT INTO shops (name,ipadd,username,password,status,created_at)
        VALUE (:name,:ipadd,:username,:password,:status,:created_at) ");
        foreach ($shops as $shop) {
            $stmt->bindParam(":name", $shop[0]);
            $stmt->bindParam(":ipadd", $shop[1]);
            $stmt->bindParam(":username", $shop[2]);
            $stmt->bindParam(":password", $shop[3]);
            $stmt->bindParam(":status", $shop[4]);
            $stmt->bindParam(":created_at", $datty);
            $result = $stmt->execute();
            $insertId = $this->db->lastInsertId();
            echo $result ? "Data id " . $insertId . "Successfully Inserted<br>" : "Insert Fail<br>";
        }
    }
    public function UpdateShop($id, $name){
        $stmt = $this->db->prepare("UPDATE shops SET name=:name WHERE id=:id");
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();
        echo $result ? "Update Successfully" : "Update Fail";
    }
    public function DeleteShop($id){
        $stmt = $this->db->prepare("DELETE FROM shops WHERE id=:id");
        $stmt->bindParam(":id", $id);
        $result = $stmt->execute();
        echo $result ? "Deleted Successfully" : "Deletion Fail";
    }
    public function JoinData($shop_id){
        $stmt = $this->db->prepare("SELECT 
        sh.name as name,
        sh.ipadd as ipadd,
        SUM(od.price * od.amout) as total
        FROM shops as sh
        LEFT JOIN
        orders as od
        ON
        od.shop_id = sh.id
        WHERE
        sh.id=:id AND sh.status = 1
        ");
        $stmt->bindParam(":id", $shop_id);
        $stmt->execute();
        $stmt->bindColumn("name", $name);
        $stmt->bindColumn("ipadd", $ipadd);
        $stmt->bindColumn("total", $total);
        $result = $stmt->fetchObject();

        echo $result->name . " shop of total amout is " . $result->total;
    }
}