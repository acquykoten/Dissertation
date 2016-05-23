<?php
//include("Entity/crud_film.php");
$obj=new film_type();
extract($obj->getByFilm_Type($_REQUEST['update_idT'],$_REQUEST['idF']));
?>
<div class="container" align="center">
    <button class="class="well well-lg">
        <h3>Edit Your Data</h3>
        <form action="?cache=Ctr&module=ctr_film" method="post">
            <table width="500" border="1">
                <tr> <th scope="row">Id</th><td style="display: inline">
                        <input type="text" name="id" value="<?php echo $id_film ?>" readonly="readonly"></td></tr>
                <tr> <th scope="row">Film Name</th>
  <td><input type="text" readonly name="name" value="<?php extract($obj->getByIdF($_REQUEST['idF'])); echo $film_name?>"></td></tr>
                <tr style="width: auto">
 <th scope="row">Type Name</th>
                    <td style="width:auto">
                        <?php
                        if($obj->show('type')!=null) {
    foreach ($obj->show('type') as $value) {

    echo'<input type="radio" name="film_type" value="'.$value['id_type'].'" />';echo $value['type_name'];
}
}?>                    </td></tr>
                <tr> <th scope="row">&nbsp;</th> <td><input type="submit" name="update_FT" value="Update" class="btn-info"></td> </tr> </table>
        </form> </div>