<div>
    <?php
    $sql="Select * from film,episode where film.id_film=episode.id_film GROUP By film.id_film order by count(episode.id_film) DESC limit 0,3";
    $re=$pdo->query($sql);
    foreach($re as $r)
        { 	$i++;
            $film_name= substr($r['film_name'], 0, 40);
            /*if(strlen($tentruyen)>40 )
            {

                $vt=40;
                while($tenturyen[$vt]!=" ")
                    $vt--;
                $tentruyen=substr($tenturyen,0,$vt)." ...";
            }  */
            ?>
            <?php

            ?>
            <li><a href="index.php?ac=detail&id_film=<?php echo $r['id_film']?>" style="color:#FFF"><?php echo 	$i.".&nbsp;&nbsp;"; echo $film_name ?></a></li>
            <br />
            <?php
        }
        ?>


</div>