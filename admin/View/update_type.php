<?php
//    include("Entity/crud_type.php");
    $obj1=new crud_type();
    extract($obj1->getById($_REQUEST['update_id']));
    ?>
    <div class="container" align="center">
        <button class="class="well well-lg">
            <h3>Edit Your Data</h3>
            <form action="?cache=Ctr&module=ctr_type" method="post">
                <table width="500" border="1">
                    <tr> <th scope="row">Id</th> <td><input type="text" name="id" value="<?php echo $id_type ?>" readonly="readonly"></td> </tr>
                    <tr> <th scope="row">Name</th> <td><input type="text" name="name" value="<?php echo $type_name?>"></td> </tr>
                    <tr> <th scope="row">&nbsp;</th> <td><input type="submit" name="update" value="Update" class="btn-info"></td> </tr> </table>
            </form>
    </div>