<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8?/>
	<link rel='stylesheet' type='text/css'  href='Css/style.css'>
    <script src="js/jquery-1.11.2.js"> </script>
	<script src="js/bjqs-1.3.min.js"></script>
    
	<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<title>Web Phim</title>
	<link rel="icon" href="image/icon_film.png" />
</head>

<body onload="load_it()">
<div class="name-box"><h2>Phim Bộ Hot Trong Tuần</h2></div>
    <hr color="#C48204" style="height:2px; width:300px">

    <div class="xh-box">

<table>
    <?php
	$sql="Select id_film,film_name,total_viewer,img from film order by total_viewer desc limit 0,5";
	$re=$pdo->query($sql);
	 $i=0;
			foreach($re as $r)
			{ 	$i++;
				$film_name= substr($r['film_name'], 0, 40);
		
		 ?>
         <td style="width:50x; height:80px; padding-left:10px;">
         <a href="index.php?ac=detail&id_film=<?php echo $r['id_film'] ?>">	
<img src="image/film/<?php echo $r['img'] ?>" width="90px" height="100px"></a>
</td>
         <td align="top">
        <div align="left" style="padding-left:10px">                 
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
</body>
</html>

