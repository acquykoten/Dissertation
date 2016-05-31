<div class="update">
	<div id="img-cn">
    	<div style="padding:10px 0px 0px 0px; color:#FFF;float:left;">
        	<h2 style="color: #dacb46">Phim Lẻ Mới Cập Nhật</h2>
        </div>
        <div style="padding:16px 0px 0px 0px; color:#FFF;float:right;margin-right: 15px;">
        	<h5><a href="index.php?ac=flyear" style="text-decoration:none;color:#FFF; float: right">Xem Thêm &raquo;</a></h5>
        </div>
		<hr style="height:2px; width:98%">
	</div>
  	<?php
		$sql="SELECT * FROM film WHERE total_episode =1 ORDER BY film.update_day DESC limit 0,8";
		
		$stm = $pdo->prepare($sql);
		$stm->setFetchMode(PDO::FETCH_BOTH);
		$stm->execute();
		while($r=$stm->fetch())
		{
	?>
    <div id="cn-box">
    	<div>
        	<a href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>"><img style="width:154px; height:180px;border:solid 1px #000000;margin-left: -3px;" src="image/film/<?php echo $r['img']; ?>" />
			</a>
		</div>
        <div style="text-align:left; margin:5px 0px 0px 0px"><a style="text-decoration:none;color: #44e2ff; font-size: 14px" href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>">
				<?php
				$film_name =$r['film_name'];
				if(strlen($film_name)>15) {
					$film_name = mb_substr($r['film_name'], 0, 15,'UTF-8') . '...';
				}
				$film_name = strtoupper($film_name);
				echo $film_name ?>
			</a></div>
		<div style="text-align:left; margin-bottom: 5px; margin-top: 15px"><a style="text-decoration:none;color: snow" href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>">
				<?php
				echo $r['length_movies'].' phút' ?>
			</a></div>
		<div>
		</div>

	</div>
		<?php } ?>
	<div class="xoa"></div>
</div>
<div class="update">
	<div id="img-cn">
    	<div style="padding:10px 0px 0px 0px; color:#FFF;float:left;">
        	<h2 style="color: #dacb46">Phim Bộ Mới Cập Nhật</h2>
        </div>
        <div style="padding:16px 0px 0px 0px; color:#FFF;float:right;margin-right: 15px;">
        	<h5><a href="index.php?ac=fbyear" style="text-decoration:none;color:#FFF">Xem Thêm &raquo;</a></h5>
        </div>
		<hr style="height:2px; width:98%">
	</div>
  	<?php
		$sql="SELECT * FROM film WHERE total_episode >1 ORDER BY film.update_day DESC limit 0,8";
		
		$stm = $pdo->prepare($sql);
		$stm->setFetchMode(PDO::FETCH_BOTH);
		$stm->execute();
		while($r=$stm->fetch())
		{
	?>
    <div id="cn-box">
    	<div>
        	<a href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>"><img style="width:154px; height:180px;border:solid 1px #000000;margin-left: -3px;" src="image/film/<?php echo $r['img']; ?>" /></a>
        </div>
        <div style="text-align:left; margin:5px 0px 0px 0px"><a style="text-decoration:none;color: #44e2ff;font-size: 14px" href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>">
				<?php
				$film_name =$r['film_name'];
				if(strlen($film_name)>15) {
					$film_name = mb_substr($r['film_name'], 0, 15,'UTF-8') . '...';
				}
				$film_name = strtoupper($film_name);
				echo $film_name ?>
			</a></div>
		<div style="text-align:left; margin-bottom: 5px; margin-top: 15px"><a style="text-decoration:none;color: snow" href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>">
				<?php
				echo $r['length_movies'].' phút/tập' ?>
			</a></div>
    </div>
    <?php } ?>
	<div class="xoa"></div>
</div>
<div class="update">
	<div id="img-cn">
    	    	<div style="padding:10px 0px 0px 0px; color:#FFF;float:left;">
        	<h2 style="color: #dacb46">Phim Hoạt Hình Mới Cập Nhật</h2>
        </div>
			  <div style="padding:16px 0px 0px 0px; color:#FFF;float:right;margin-right: 15px;
">
        	<h5><a href="index.php?ac=flyear" style="text-decoration:none;color:#FFF; float: right">Xem Thêm &raquo;</a></h5>
        </div>
		</div>
		<hr style="height:2px; width:98%">
    </div>
  	<?php
		$sql="SELECT * FROM film,film_type,type WHERE film.id_film=film_type.id_film AND film_type.id_type = type.id_type AND type.type_name ='Hoạt Hình' ORDER BY film.update_day DESC limit 0,8";
		$stm = $pdo->prepare($sql);
		$stm->setFetchMode(PDO::FETCH_BOTH);
		$stm->execute();
		while($r=$stm->fetch())
		{
	?>
    <div id="cn-box">
    	<div>
        	<a href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>"><img style="width:154px; height:180px;border:solid 1px #000000;margin-left: -3px;" src="image/film/<?php echo $r['img']; ?>" /></a>
        </div>
        <div style="text-align:left; margin:5px 0px 0px 0px"><a style="text-decoration:none;color: #44e2ff; font-size: 14px" href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>">
				<?php 	$film_name =$r['film_name'];
				if(strlen($film_name)>15) {
					$film_name = mb_substr($r['film_name'], 0, 15,'UTF-8') . '...';
				}
				$film_name = strtoupper($film_name);
				echo $film_name ?>
			</a></div>
		<div style="text-align:left; margin-bottom: 5px; margin-top: 15px"><a style="text-decoration:none;color: snow" href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>">
				<?php
				if($r['total_episode']>1)
				echo $r['length_movies'].' phút/tập';
				else{
					echo $r['length_movies'].' phút';

				}
				?>
			</a></div>
    </div>
    <?php } ?>
	<div class="xoa"></div>
</div>
<div class="xxxx"></div>