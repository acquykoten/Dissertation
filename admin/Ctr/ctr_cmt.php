<?php
//include_once("admin/Entity/crud_user.php");
$user1 = new crud_user();
$id_cmt=$_REQUEST['id'];
if($user1->updateCmt($id_cmt)){
    echo "OK!";
}
else{
    echo'Fail';
}