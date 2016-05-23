<?php
$obj=new crud_user();
if(isset($_REQUEST['update'])) {
    extract($_REQUEST);
    $id_user =$_REQUEST['id'];
    $username = $_REQUEST['name'];
    $email=$_REQUEST['email'];
    $password = $_REQUEST['pass'];
    if($obj->update($id_user,$username,$email,$password,"user")){
        ?>
        <script language="JavaScript">
            window.alert("Update Successfully");
            location.href = "?cache=view&module=user";
        </script>
    <?php    }  }

extract($obj->getById($_REQUEST['update_id'],"user"));
?>
<div class="container" align="center">
    <div class="btn-group">
<h3>Edit Your Data</h3>
<form action="?cache=view&module=user_update" method="post">
<table width="500" border="1"> <tr> <th scope="row">Id</th> <td>
<input type="text" name="id" value="<?php echo $id_user ?>" readonly="readonly"></td> </tr>
<tr> <th scope="row">Name</th> <td><input type="text" name="name" value="<?php echo $username?>"></td> </tr>
<tr> <th scope="row">Email</th> <td><input type="text" name="email" value="<?php $email ?>"></td> </tr>
<tr> <th scope="row">Password</th> <td><input type="text" name="pass" value="<?php echo $password ?>"></td> </tr>
<tr> <th scope="row">&nbsp;</th> <td><input type="submit" name="update" value="Update" class="btn"></td> </tr> </table>
</form> </div>