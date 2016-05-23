<?php
//include_once("admin/Entity/crud_user.php");
$user = new crud_user();
$id_cmt=$_REQUEST['id'];
if($user->deleteDataCmt($id_cmt)){
    echo "OK! Delete Success";
}
else{
    echo'Fail';
}