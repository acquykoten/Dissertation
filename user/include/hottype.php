<div class="rank">
<div class="name-box">
    <h2 style="">Phim Hot Cùng Loại</h2>
</div>
<div class="xh-box">
    <?php
    $id_film=$_REQUEST['id'];
    $sql="Select * from film_type WHERE film_type.id_film = $id_film ORDER BY id_film";
    //$sql="Select * from film_type,film WHERE film.id_film =film_type.id_film ORDER BY film.total_viewer DESC ";
    //print_r($sql);
    $stm=$pdo->prepare($sql);
    $stm->execute();
    $re = $stm->fetchAll(PDO::FETCH_ASSOC);
    //print_r($re);
    $t=[];
    foreach($re as $r) {
        $id_type = $r['id_type'];
        $sql1 = "Select * from film_type,film WHERE film_type.id_type= $id_type AND film.id_film =film_type.id_film ORDER BY film.total_viewer DESC LIMIT 0,2 ";
        // print_r($sql1);
        $stm1 = $pdo->prepare($sql1);
        $stm1->execute();
        //print_r($a= $stm1->fetchColumn(2));
        $re1 = $stm1->fetchAll(PDO::FETCH_ASSOC);
        //for($i=0;i<$re1[].l)
       // if($re1[]['id_film']!=$re1[]['id_film']){

        foreach ($re1 as $r1) {
            //$a =0;
            //$a = $_REQUEST['a'];
            //echo $_SESSION['a']=$r1['id_film'];
            if(!in_array($r1['id_film'],$t))
            {
                $t[]=$r1['id_film'];

                ?>
                
                    <div  style="float:left; clear:left;width=100%;height=100px">
                        <div class="img-hottype"><a href="index.php?ac=detail&id_film=<?php echo $r1['id_film'] ?>"><img src="image/film/<?php echo $r1['img'] ?>" width="90px" height="100px"></a></div>
                        <div class="name-hottype"><a href="index.php?ac=detail&id_film=<?php echo $r1['id_film'] ?>"><?php echo $r1['film_name'] ?>
                        <br>
                        Lượt xem:<?php echo $r1['total_viewer'] ?>
                        </a></div>
                    </div>
                    <hr class="hr1">
                <?php
                }
        }
        //echo '<hr>';
    }
    ?>
</table>
</div>
</div>
<div class="xxxx"></div>