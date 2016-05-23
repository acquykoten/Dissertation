<?php
//    include("Entity/crud_film.php");
    $obj=new director();
    extract($obj->getById_D($_REQUEST['update_id']));
    ?>
    <div class="container" align="center">
        <button class="class="well well-lg">
            <h3>Edit Your Data</h3>
            <form action="?cache=Ctr&module=ctr_director_actor" enctype="multipart/form-data" method="post">
                <table width="500" border="1">
                    <tr> <th scope="row">Id</th> <td><input type="text" name="id" value="<?php echo $id_director ?>" readonly="readonly"></td> </tr>
                    <tr> <th scope="row">Director Name</th> <td><input type="text" name="d_name" value="<?php echo $director_name?>"></td> </tr>
                    <tr> <th scope="row">Img</th>
                        <td>
                            <input type="text" hidden name="old_img" value="<?php echo $img?>">
                        <img src="image/actor/<?php echo $img ?>" style="width: 50%; height: 241px">
                            <div align="center" style="margin-top: 10px"><input type="file" name="UrlHinh"></div>
                        </td> </tr>
                    <tr> <th scope="row">&nbsp;</th> <td><input type="submit" name="update_director" value="Update" class="btn-info"></td> </tr> </table>
            </form>
    </div>