<div class="lf-cep">
    <?php
    $sql="select * from episode where id_film=:id AND  url2 !=''";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(":id",$id_film);
    $stmt->execute();
    $r=$stmt->fetchAll();
    foreach($r as $re)
    {
        ?>
        <form action="index.php?ac=episode&id=<?php echo $id_film ?>" method="post" style="float: left">
            <input hidden type="text" value="<?php echo $re['url2'] ?>" name="url">
            <input type="submit" name="trailer" value="<?php echo $re['name'] ?>">
        </form>
        <?php

    }
    ?>
</div>