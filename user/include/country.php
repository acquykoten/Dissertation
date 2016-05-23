<ul>
    <?php
		$sql="Select DISTINCT country from film  ORDER BY country DESC ";
		$re=$pdo->query($sql);
		foreach($re as $r)
		{
	?>
    	<li><a href="index.php?ac=country&country=<?php echo $r['country'] ?>" style="color:#FFF"><?php echo $r['country'] ?></a></li>
    <?php
		}
	?>
</ul>