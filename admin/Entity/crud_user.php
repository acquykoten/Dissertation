<?php
include_once('connDB.php');
class crud_user extends connDB{

    // get data a user
    public function getById($id){
        $sql="SELECT * FROM user WHERE id_user = :id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $con=null;
        return $data;
    }
    public function getByEmail($email,$pass){
        $sql="SELECT * FROM user WHERE email= :email and password=:pass AND state =1";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':email',$email);
        $q->bindParam(':pass',$pass);
        $q->execute();
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $con=null;
        return $data;
    }
    public function update($id,$name,$email,$password,$table){

        $sql = "UPDATE $table SET username=:name,email=:email,password=:password WHERE id_user=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->bindParam(':name',$name);
        $q->bindParam(':email',$email);
        $q->bindParam(':password',$password);
        $q->execute();
        $con=null;
        return true;
    }
    public function insertData($name,$email,$password,$table){
        $sql = "INSERT INTO $table SET name=:name,email=:email,password=:password";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':name'=>$name,':email'=>$email,':password'=>$password));
        $con=null;
        return true;
    }
    //delete a user
    public function deleteData($id,$table){
        $sql="DELETE FROM $table WHERE id_user=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id);
        $q->execute();
        $con=null;
        return true;
    }
    public  function updateCmt($idCmt){
        $sql = "UPDATE comment SET state=1 WHERE id_cmt=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$idCmt);
        $q->execute();
        $con=null;
        return true;
    }
    public function deleteDataCmt($id_cmt){
        $sql="DELETE FROM comment WHERE id_cmt=:id";
        $q = $this->conn->prepare($sql);
        $q->bindParam(':id',$id_cmt);
        $q->execute();
        $con=null;
        return true;
    }
}