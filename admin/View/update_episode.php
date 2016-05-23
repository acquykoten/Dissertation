<?php
//include("Entity/crud_film.php");
$obj=new episode();
extract($obj->getByIdE($_REQUEST['update_id']));
?>
<div class="container" align="center">
    <button class="class="well well-lg">
        <h3>Edit Your Data</h3>
        <form action="?cache=Ctr&module=ctr_film" method="post">
            <table width="500" border="1">
                <tr> <th scope="row">Id</th><td style="display: inline">
                        <input type="text" name="id" value="<?php echo $id_episode ?>" readonly="readonly"></td></tr>
                <tr> <th scope="row">Name Episode</th> <td><input type="text" name="name" value="<?php echo $name?>"></td> </tr>
                <tr> <th scope="row">Url 1</th> <td><input type="text" name="url1" value="<?php echo $url1?>"></td> </tr>
                <tr> <th scope="row">Url 2</th> <td><input type="text" name="url2" value="<?php echo $url2?>"></td> </tr>
                <tr> <th scope="row">&nbsp;</th> <td><input type="submit" name="update_episode" value="Update" class="btn-info"></td> </tr> </table>
        </form> </div>