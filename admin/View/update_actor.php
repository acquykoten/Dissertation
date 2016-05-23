<?php
//    include("Entity/crud_film.php");
    $obj=new actor();
    extract($obj->getById_A($_REQUEST['update_id']));
    ?>
    <div class="container" align="center">
        <button class="class="well well-lg">
            <h3>Edit Your Data</h3>
            <form action="?cache=Ctr&module=ctr_director_actor" enctype="multipart/form-data" method="post">
                <table width="500" border="1">
                    <tr> <th scope="row">Id</th> <td><input type="text" name="id" value="<?php echo $id_actor ?>" readonly="readonly"></td> </tr>
                    <tr> <th scope="row">Director Name</th> <td><input type="text" name="a_name" value="<?php echo $actor_name?>"></td> </tr>
                    <tr> <th scope="row">Img</th>
  <td><img src="image/actor/<?php echo $img ?>" style="width: 50%; height: 241px">
      <input hidden type="text" value="<?php echo $img ?>" name="old_img">
     <div align="center" style="margin-top: 10px"><input type="file" name="UrlHinh"></div>
  </td></tr>
                    <tr> <th scope="row">Sex</th><td> Men
                            <?php if($sex == 1){ ?>
                    <input type="radio" name="sex" value="0">
                    Women
                    <input type="radio" name="sex" value="1" checked>
                           <?php } else{?>
                                <input type="radio" name="sex" value="0" checked>
                                Women
                                <input type="radio" name="sex" value="1">
                            <?php
                            } ?>

                        </td></tr>
                    <tr> <th scope="row">&nbsp;</th> <td><input type="submit" name="update_actor" value="Update" class="btn-info"></td> </tr> </table>
            </form>
    </div>