<div class="rank">
	<div class="name-box"><h2 class="star-icon">Phim Bộ Hot <!--Trong Tuần --></h2></div>
    <div class="xh-box">
<table>
    <?php
	$sql="Select id_film,film_name,total_viewer,img from film where total_episode>1 order by total_viewer desc, update_day desc limit 0,5";
	$re=$pdo->query($sql);
			foreach($re as $r)
			{ 
	                $film_name=$r['film_name'];
		 ?>
         <td style="width:50x; height:80px; padding-left:10px;">
         <a href="index.php?ac=detail&id_film=<?php echo $r['id_film'] ?>">	
<img src="image/film/<?php echo $r['img'] ?>" width="90px" height="100px"></a>
</td>
         <td align="top">
        <div align="left" style="padding-left:10px;">                 
         <a  style="color:#FFF"  href="index.php?ac=detail&id_film=<?php echo $r['id_film'] ?>">	
<?php echo $film_name ?>
<br>
Lượt xem:<?php echo $r['total_viewer'] ?>
</a></div>
         </td>
         </tr>                          <?php				
			}
		?>
        </table>    
    </div>
    <div class="xoa"></div>
</div>
<div class="rank" style="background-image:url(../../image/br-test.jpg)">
	<div class="name-box"><h2 class="star-icon">Phim Lẻ Hot <!--Trong Tuần --></h2></div>
<?php
	$sql="Select id_film,film_name,total_viewer, img from film where total_episode=1 order by total_viewer desc, update_day desc limit 5";
	$re=$pdo->query($sql);
?>
    <div class="xh-box">
    <table>
    <?php
    foreach($re as $r)
			{ 
				$film_name= substr($r['film_name'], 0, 40);

		
		 ?>
         <td style="width:50x; height:80px; padding-left:10px;">
         <a href="index.php?ac=detail&id_film=<?php echo $r['id_film'] ?>">	
<img src="image/film/<?php echo $r['img'] ?>" width="90px" height="100px"></a>
</td>
         <td align="top">
        <div align="left" style="padding-left:10px;">                 
         <a  style="color:#FFF"  href="index.php?ac=detail&id_film=<?php echo $r['id_film'] ?>">	
<?php echo $film_name ?>
<br>
Lượt xem:<?php echo $r['total_viewer'] ?>
</a></div>
         </td>
         </tr>                          <?php				
			}
		?>
    </table>
			
    </div>
    <div class="xoa"></div>
</div>
<div class="rank" style="background-image:url(../../image/br-test.jpg)">
	<div class="name-box"><h2 class="star-icon">Top <!--Tuần --></h2></div>
<?php
	$sql="Select id_film,film_name,total_viewer,img from film order by total_viewer desc, update_day desc limit 5";
	$re=$pdo->query($sql);
?>
    <div class="xh-box">
		<table>
        <?php
        foreach($re as $r)
			{ 
				$film_name= substr($r['film_name'], 0, 40);

		
		 ?>
         <td style="width:50x; height:80px; padding-left:10px;">
         <a href="index.php?ac=detail&id_film=<?php echo $r['id_film'] ?>">	
<img src="image/film/<?php echo $r['img'] ?>" width="90px" height="100px"></a>
</td>
         <td align="top">
        <div align="left" style="padding-left:10px;">                 
         <a  style="color:#FFF"  href="index.php?ac=detail&id_film=<?php echo $r['id_film'] ?>">	
<?php echo $film_name ?>
<br>
Lượt xem:<?php echo $r['total_viewer'] ?>
</a></div>
         </td>
         </tr>                          <?php				
			}
		?>
        </table>
    </div>
    <div class="xoa"></div>
</div>