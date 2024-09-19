<?php

namespace DB;

class db_connection
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = 'MohamedNasr2002@';
    private $db_name = 'bookstore';
    protected $conn;
    function setConnection():object
    {
        try {
            $this->conn = new \PDO("mysql:host=$this->host;dbname=$this->db_name",$this->user,$this->password);
            $this->conn->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }
        return $this->conn = new \PDO("mysql:host=$this->host;dbname=$this->db_name",$this->user,$this->password);
    }

}

