<?php

include_once ("app/dbGen.php");


class index {
    private $db;

    public function __construct(){
        $this->db = new dbGen();
        $shops = [
            ["Lotte","192.182.0104","Lotte","123",1],
            ["POP","192.182.0104","POP","123",1],
            ["Parism","192.182.0104","Parism","123",1]
        ];
        // $this->db->getSingleShop(1);
        // $this->db->getMultipleShop(1);
        // $this->db->getalldata();
        // $this->db->insertMultipleShop($shops);
        // $this->db->Updateshop(3,"papaya");
        $this->db->Deleteshop(3);

    }
}

new index;

?>
