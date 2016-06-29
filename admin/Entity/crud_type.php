<?php
include_once('connDB.php');
class crud_type extends connDB{
    public function getById($id){
        $sql="SELECT * FROM type WHERE id_type = :id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $this->conn=null;
        return $data;
    }
    public  function getByName($name){
        $sql="SELECT * FROM type WHERE type_name= :name";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':name',$name);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $this->conn=null;
        return $data;
    }
    public function update($id,$name){

        $sql = "UPDATE type SET type_name=:name WHERE id_type=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->bindParam(':name',$name);
        $q->execute();
        $con=null;
        return true;
    }
    public function insertData($name){
        $sql = "INSERT INTO type SET type_name=:name";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':name'=>$name));
        return true;
    }
    public function deleteDataType($id){
        $sql="DELETE FROM type WHERE id_type=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $con=null;
        return true;
    }
    public  function showCmt(){
        $sql="SELECT * FROM comment WHERE state =1";
        $q = $this->conn->prepare($sql) or die("failed!");
        $q->execute();
        $data=Array();
        try{
            while ($r = $q->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $r;
            }}catch (Exception $e){}
        $con=null;
        return $data;
    }
}
