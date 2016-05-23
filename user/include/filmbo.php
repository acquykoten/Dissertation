<ul>
    <?php
		$sql="Select DISTINCT year from film where total_episode > 1 ORDER BY year DESC ";
		$re=$pdo->query($sql);
		foreach($re as $r)
		{
	?>
    	<li><a href="index.php?ac=fbyear&year=<?php echo $r['year'] ?>" style="color:#FFF"><?php echo substr($r['year'],0,4)?></a></li>
    <?php
		}
	?>
</ul>