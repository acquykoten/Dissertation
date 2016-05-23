<div class="chuyenmuc">
	<div class="cm-t">
    	<h2 style="margin-left:10px;padding-top:5px">Chuyên Mục</h2>
        
    </div>
    <hr color="#E39809" style="height:3px">
    <div class="cm-b">
    	<div class="cm-box">
        	<div class="box-name"><h3>Thể Loại Phim</h3></div>
    	<?php
		$sql="Select * from type";
		$re=$pdo->query($sql);
		foreach($re as $r)
		{
	?>
            <div style=" background-color:#646161;width:110px;height:22px;float:left;margin:10px 0px 10px 4px;border:solid 1px;text-align:center"><a style="color:#FFF;" href="index.php?ac=kqtlf&id_type=<?php echo $r['id_type']; ?>"><?php echo $r['type_name']?></a></div>
        <?php
            }
        ?>
        <div class="xoa"></div>
        </div>
    	<div class="cm-box">
        	<div class="box-name"><h3>Quốc Gia</h3></div>
        <?php
		$sql="Select DISTINCT country from film  ORDER BY country DESC ";
		$re=$pdo->query($sql);
		foreach($re as $r)
		{
	?>
            <div style="width:110px;height:22px;float:left;margin:10px 0px 10px 4px;border:solid 1px;text-align:center; background-color:#646161"><a style="color:#FFF;" href="index.php?ac=kqtlf&id_type=<?php echo $r['country']; ?>"><?php echo $r['country']?></a></div>
        <?php
            }
        ?>
        <div class="xoa"></div>
        </div>
    </div>
</div>