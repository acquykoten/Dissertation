<?php
session_start();
include("config.php");
$point = $_REQUEST['p'];
$id_film = $_REQUEST['id'];
if(!isset($_SESSION['id_user'])){
    echo'Bạn chưa đăng nhập!';
}
else
{
    $user = $_SESSION['id_user'];
    $sql = "select * from assess where id_film='".$id_film."' and id_user ='".$user."' ";
    $temp = $pdo->query($sql);
    $temp->execute();
    $re = $temp->fetchAll(PDO::FETCH_ASSOC);
    if($temp->rowCount()==0){
        $sql_insert = "INSERT INTO assess(id_user,id_film,point) VALUES(:user,:id_film,:point)";
        $stm=$pdo->prepare($sql_insert);
        $stm->bindParam(':user', $user);
        $stm->bindParam(':id_film', $id_film);
        $stm->bindParam(':point', $point);
        $stm->execute();
        if($stm){
        echo 'Hệ Thống Đã Lưu Đánh Giá Của Bạn!';
        }
        else{
            echo'fail';
        }
    }
    else{
        $sql_update = "UPDATE assess SET point=:p WHERE id_user=:user and id_film=:id_film";
        $q = $pdo->prepare($sql_update);
        $q->execute(array('user'=>$user,':id_film'=>$id_film,':p'=>$point));
        if($q){
            echo'Update Success!';
        }
        else{
            echo'Update Fail!';
        }
    }
}
?>