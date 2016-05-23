<div class="filmmoi">
	<?php
		$sql="select * from film where trangthai=0 order by total_viewer desc limit 0,8 ";
		$re=$pdo->query($sql);
		foreach($re as $r)
		{
	?>
    	<div style="padding-top:5px;"><a href="index.php?ac=detail&id_film=<?php echo $r['id_film']?>" style="color:#FFF"><?php echo $r['film_name'] ?></a></div><hr>
    <?php
		}
	?>
</div>