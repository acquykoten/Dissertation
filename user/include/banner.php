<div class="slide-holder">

    <div class="slide-container">
        <div class="slide-stage">
            <?php
            $sql="SELECT * FROM film,episode WHERE film.id_film= episode.id_film ORDER BY episode.datetime DESC";
            $stm=$pdo->prepare($sql);
            $stm->execute();
            $re = $stm->fetchAll(PDO::FETCH_ASSOC);
            $t=[];
            $arr=[];
            foreach($re as $r){
                if(!in_array($r['id_film'],$t)){
                    $t[]=$r['id_film'];
                    ?>
            <div class="slide-image"><a href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>">
                    <img src="image/film/<?php echo $r['img'] ?>"/>
                    <div class="bottom-img">
                        <?php

                        $film_name =$r['film_name'];
                        if(strlen($film_name)>40) {
                            $film_name = mb_substr($r['film_name'], 0, 40,'UTF-8').'...';
                        }
                        $film_name = strtoupper($film_name);
                        echo '<span><h3 style="margin-top: 2px; font-size: 14px">'.$film_name.'</h3></span>';
                        $sql="SELECT max(name) FROM episode WHERE episode.id_film='".$r['id_film']."'";
                        $stm=$pdo->prepare($sql);
                        $stm->execute();
                        $r1 = $stm->fetchAll(PDO::FETCH_COLUMN);
                        ?>
                        <span class="top-img"><?php echo $r['status'].' &nbsp&nbsp'; if($r['total_episode']>1){ echo $r1[0].'/'.$r['total_episode']; }?></span>
                    </div>
                </a></div>
            <?php
               }
            }
            ?>
            </div>
    </div>
    <div class="slide-pager">
        <div class="slide-control-prev">
            <img src="image/leftArrow.png">
        </div>
        <div class="slide-control-next">
            <img src="image/rightArrow.png">
        </div>
    </div>

</div>