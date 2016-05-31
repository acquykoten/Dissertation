<?php
include("config.php");
$id_cmt = $_REQUEST['id'];
$sql = "UPDATE comment SET state=2 WHERE id_cmt=:id";
$q=$pdo->prepare($sql);
$q->bindParam(':id',$id_cmt);
$q->execute();
$r = $q->fetchAll(PDO::FETCH_ASSOC);
if($q->rowCount()>0){
    echo"Cảm ơn vì báo cáo sai phạm! chúng t sẽ xử lý sớm nhất!";
}
else{
    echo"Report fail";
}
//echo 'aa'.$id_cmt;
?>