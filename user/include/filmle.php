<ul>
    <?php
		$sql="Select DISTINCT year from film where total_episode = 1 ORDER BY year DESC ";
		$re=$pdo->query($sql);
		foreach($re as $r)
		{
	?>
    	<li><a href="index.php?ac=flyear&year=<?php echo $r['year']; ?>" style="color:#FFF"><?php echo $r['year']?></a></li>
    <?php
		}
	?>
</ul>