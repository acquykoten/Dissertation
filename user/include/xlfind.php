<div class="xxx">
   <div class="xx"><a href="index.php">PHIM CN</a>
   </div>
</div>
<div class="all-page">
	<div style="width:100%;height:auto; float:left">
        <div class="title" style="margin-bottom:10px;">
            <div style="padding:10px 0px 0px 0px;color:#dacb46;"><h1>Tìm Kiếm: <?php echo $_POST['txtKeyword']?></h1>
        <hr style="height:2px; width:100%; margin-bottom: 12px">
        <?php
        if(strlen($_POST['txtKeyword'])>0)
        {
            $v="%".$_POST['txtKeyword']."%";
			$sql="SELECT film.film_name,film.id_film, actor.actor_name,director.director_name,film.img 
			FROM film 
			JOIN film_actor ON film.id_film= film_actor.id_film 
			JOIN actor ON actor.id_actor = film_actor.id_actor 
			JOIN film_director ON film.id_film = film_director.id_film 
			JOIN director ON film_director.id_director=director.id_director 
			WHERE director.director_name LIKE :kw OR film.film_name LIKE :kw OR actor.actor_name LIKE :kw
			GROUP BY film.id_film";            
			$stm=$pdo->prepare($sql); 
            $stm->bindValue(":kw", $v);
            $stm->execute();
            $re = $stm->fetchAll(PDO::FETCH_ASSOC);
            if($stm->rowCount()==0)
                echo '<div style="background-color:rgba(0, 0, 0, 0.5) ; color: #EEE; font-size: 18px; height: 70px; text-align: left">
<br>
<p style="margin-left: 20px;clear: both; text-align:">Không tìm thấy kết quả nào phụ hợp với từ khóa của bạn!</p>
</div>';
            else
            foreach($re as $r)
            {
?>
              <div class="kq-film">
                 <div class="kqfilm-hinh"><a href="index.php?ac=detail&id_film=<?php echo $r['id_film']?>">
				 <img src="image/film/<?php echo $r['img'];?>" /></a>
                 </div>
                 <div class="film_name" style="font-size: 14px">
                <?php 
                            $film_name=$r['film_name'];
                            if(strlen($film_name)>40)
                            { 
                                //Kiem tra de cat
                                $vt=40;
                                while($film_name[$vt]!=" ")
                                    $vt--;
                                $film_name=mb_substr($film_name,0,$vt,'UTF-8')." ...";
                            }
                                 
                  ?>
                  <a href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>" style="text-decoration:none;"><?php echo $film_name;?></a>
                 </div>
              </div>
              
<?php }}else echo "<script>alert('Yêu Cầu Nhập Tên Phim Cần Tìm!');window.location='index.php';</script>"; ?>

    </div>
<?php
	?>
    </div>
   	<div class="xoa"></div>
</div>
    </div>

<div class="body-r">
            <div class="body-r-t">
                <?php
                include"rank.php";
                ?>
            </div>

 </div>
        <div class="xoa"></div>
