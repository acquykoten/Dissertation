<?php
//include("Entity/crud_film.php");
$obj=new film_director();
$director = new director();
extract($obj->getById_F_D($_REQUEST['idF'],$_REQUEST['idD']));
?>
<div class="container" align="center">
    <button class="class="well well-lg">
        <h3>Edit Your Data</h3>
        <form action="?cache=Ctr&module=ctr_director_actor" method="post">
            <table width="500" border="1">
                <tr> <th scope="row">Id</th><td style="display: inline">
                        <input type="text" name="id_film" value="<?php echo $_REQUEST['idF'] ?>" readonly="readonly"></td></tr>
                <tr> <th scope="row">Film Name</th>
  <td><input type="text" readonly name="name" value="<?php extract($obj->getByIdF($_REQUEST['idF'])); echo $film_name?>"></td></tr>
                <tr style="width: auto">
 <th scope="row">Director Name</th>
                    <td style="width:auto">
                        <select name="id_director" id="idA">
                            <option value="<?php echo $_REQUEST['idD'] ?>">
                                <?php extract($director->getById_D($_REQUEST['idD'])); echo $director_name; ?></option>
                            <?php
                            foreach($obj->show('director') as $r)
                            {
                            ?>
                            <option value="<?php echo $r['id_director']?>"><?php echo $r['director_name'] ?></option>
                            <?php }?>
                        </select>
                    </td></tr>
                <tr> <th scope="row">&nbsp;</th> <td><input type="submit" name="update_film_d" value="Update" class="btn-info"></td> </tr> </table>
        </form> </div>