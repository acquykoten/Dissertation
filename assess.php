<?php
include("config.php");
$id_film = $_REQUEST['id'];
$id_user = $_SESSION['id_user'];
$point = $_REQUEST['p'];
/*$sql = "INSERT INTO assess SET id_film=:id_f, id_user=:id_u, point=:p";
$q=$pdo->prepare($sql);
$q->bindParam(':id_f',$id_film);
$q->bindParam(':id_u',$id_film);
$q->bindParam(':p',$id_film);

$q->execute();
$r = $q->fetchAll(PDO::FETCH_ASSOC);
if($q->rowCount()>0){
    echo"Cảm ơn bạn đã đánh giá!";
}
else{
    echo"Đánh giá thất bại";
}
*/
echo $id_film.'-'.$point;
//echo 'aa'.$id_cmt;
?>