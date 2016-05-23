<div class="slide-holder-1" style="width: 645px;margin-left: 11px;">

    <div class="slide-container-1">
        <div class="slide-stage-1">
            <?php
            $sql="SELECT * FROM actor,film_actor WHERE film_actor.id_actor=actor.id_actor AND film_actor.id_film ='".$r['id_film']."'";
            $stm=$pdo->prepare($sql);
            $stm->execute();
            $re = $stm->fetchAll(PDO::FETCH_ASSOC);
            foreach($re as $r1){
                    ?>
                    <div class="slide-image-1"><a href="#">
                            <img src="image/Actor/<?php echo $r1['img'] ?>"/>
                                <?php
                                echo '<span><h4 style="margin-top: 2px">'.$r1['actor_name'].'</h4></span>';
                                ?>
                        </a></div>
                    <?php
            }
            ?>
        </div>
    </div>
    <div class="slide-pager-1">
        <div class="slide-control-prev-1">
            <img src="image/leftArrow.png">
        </div>
        <div class="slide-control-next-1">
            <img src="image/rightArrow.png">
        </div>
    </div>

</div>