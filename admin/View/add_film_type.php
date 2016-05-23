<?php
//include_once('Entity/crud_film.php');
$obj=new crud_film();
?>
<div align="center" class="container">
    <button class="well well-lg">
        <h3>Insert Your Data</h3>
        <form action="?cache=Ctr&module=ctr_film" method="post" data-parsley-validate>
                <p><span>Movies Name</span></p>
            <?php
            if($_REQUEST['idF']!=null) {
                extract($obj->getByIdF($_REQUEST['idF']));
                echo '<input value="'.$id_film.'" hidden name="id_film">';
                echo '<input type="text" name="nameF" value="' . $film_name . '" readonly>';
            }
            else{
            ?>
            <select name="id_film" id="idF">
                <?php
                foreach($obj->show('film') as $r)
                {
                    ?>
                    <option value="<?php echo $r['id_film']?>"><?php echo $r['film_name'] ?></option>
                <?php }?>
            </select>
            <?php
            }
            ?>
            <br>
            <div>
                <p><span>Type Name</span></p>
                <br>
                <?php
                if($obj->show('type')!=null) {
                    foreach ($obj->show('type') as $value) {
                        ?>
                        <input type="checkbox" name="film_type[]" value="<?php echo $value['id_type'] ?>" /><?php echo $value['type_name'] ?>
                        <?php
                    }
                }
                ?>
            </div>

            <div><input type="submit" name="insert_film_type" value="Insert" class="btn"></div>
        </form>
    </button>
</div>