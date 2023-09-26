<?php

abstract class DAL{
    protected $db_host;
    protected $db_user;
    protected $db_pass;
    protected $db_name;
    protected $db;

    public function __construct($db_host,$db_user,$db_pass,$db_name){
        $this->db_host =$db_host;
        $this->db_user =$db_user;
        $this->db_pass =$db_pass;
        $this->db_name= $db_name;
    }

    abstract public function connect();

    abstract public function disconnect();

    abstract public function fetchData($table,$modifier);
}

?>