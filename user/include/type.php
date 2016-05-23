<ul>
	<?php
		$sql="Select * from type";
		$re=$pdo->query($sql);
		foreach($re as $r)
		{
	?>
    	<li><a style="color:#FFF" href="index.php?ac=kqtlf&id_type=<?php echo $r['id_type']; ?>"><?php echo $r['type_name']?></a></li>
    <?php
		}
	?>
</ul>