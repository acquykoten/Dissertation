<?php
class connDB{
    private $host = "localhost";
    private $user = "root";
    private $db = "ql_film";
    private $pass = "";
    protected $conn;
    public function __construct()
    {
        try{
        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->conn->exec("set names utf8");
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
    public function closeCN(){
        $this->conn=null;
    }
}