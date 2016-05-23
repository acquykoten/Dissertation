<?php
//include_once("Entity/crud_film.php");
$obj= new trailer();
?>
<div align="center">
    <button class="well well-lg">
        <h3>Insert Your Data</h3>
        <form action="?cache=Ctr&module=ctr_film" method="post" data-parsley-validate>
            -Movie Name
            <select name="id_film" id="idF">
                <?php
                foreach($obj->show('film') as $r)
                {
                    ?>
                    <option value="<?php echo $r['id_film']?>"><?php echo $r['film_name'] ?></option>
                <?php }?>
            </select>
            -Url 1 <input type="text" name="url1" id="url1" placeholder="Url 1" data-parsley-trigger="change" data-parsley-required="true">
            -Url 2 <input type="text" name="url2" id="url2" placeholder="Url 2" data-parsley-trigger="change" data-parsley-required="true">

            <input type="submit" name="insert_trailer" id="inrt" value="Insert" class="btn">
        </form>
    </button>
</div>