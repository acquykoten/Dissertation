<?php
//include_once("Entity/crud_film.php");
$obj= new crud_film();
?>
<div align="center">
    <button class="well well-lg">
        <h3>Insert Your Data</h3>
        <form action="?cache=Ctr&module=ctr_director_actor" method="post" data-parsley-validate>
            <?php
            if($_REQUEST['idF']!=null){
            ?>
                -ID Film
            <input readonly type="text" name="id_film" value="<?php echo $_REQUEST['idF']?>">
                -Movie Name
                <input readonly type="text" value="<?php extract($obj->getByIdF($_REQUEST['idF'])); echo $film_name; ?>">
            <?php
            }else {
                ?>
                -Movie Name
                <select name="id_film" id="idF">
                    <?php

                    foreach ($obj->show('film') as $r) {
                        ?>
                        <option value="<?php echo $r['id_film'] ?>"><?php echo $r['film_name'] ?></option>
                    <?php } ?>
                </select>
                <?php
            }
            ?>
            -Actor Name
            <select name="id_actor" id="idD">
                <?php
                foreach($obj->show('actor') as $r)
                {
                    ?>
                    <option value="<?php echo $r['id_actor']?>"><?php echo $r['actor_name'] ?></option>
                <?php }?>
            </select>
            <input type="submit" name="insert_film_ac" id="inrt" value="Insert" class="btn">
        </form>
    </button>
</div>