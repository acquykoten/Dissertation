<div class="lf-cep"> 
    <?php
    $sql="select * from trailer where id_film=:id";
    $stmt=$pdo->prepare($sql);
    $stmt->bindParam(":id",$id_film);
    $stmt->execute();
    $r=$stmt->fetchAll();
    foreach($r as $re)
    {
        if($re['url1']!='')
        {
            ?>
            <form action="index.php?ac=trailer&id=<?php echo $id_film ?>" method="post">
                <input hidden type="text" value="<?php echo $re['url1'] ?>" name="url">
                <input type="submit" name="trailer" value="Trailer">
            </form>

            <?php
        }
        else
        {
            if($re['url2']!=''){
            ?>
                <form action="index.php?ac=trailer&id=<?php echo $id_film ?>" method="post">
                    <input hidden type="text" value="<?php echo $re['url2'] ?>" name="url">
                    <input type="submit" name="trailer" value="Trailer">
                </form>
            <?php
        }
            else
            {
            ?>
                <form action="index.php?ac=trailer&id=<?php echo $id_film ?>" method="post">
                    <input hidden type="text" value="" name="url">
                    <input type="submit" name="trailer" value="Trailer">
                </form>
            <?php
            }
        }
    }
    ?>
</div>