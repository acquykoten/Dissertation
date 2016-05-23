<div class="lf-cep">
    <?php
        $sql="select * from episode where id_film=:id AND  url1 !='' ORDER BY name ";
        $stmt=$pdo->prepare($sql);
        $stmt->bindParam(":id",$id_film);
        $stmt->execute();
        $r=$stmt->fetchAll();
        foreach($r as $re)
        {
    ?>
            <form action="index.php?ac=episode&id=<?php echo $id_film ?>" method="post" style="float: left;margin-left: 10px;">
            <input hidden type="text" value="<?php echo $re['url1'] ?>" name="url">
                <input hidden type="text" value="<?php echo $re['name'] ?>" name="id_episode">
                <input type="submit" name="episode_submit" value=" <?php echo $re['name'] ?>">
            </form>
    <?php
        }
    ?>
</div>