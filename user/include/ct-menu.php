<?php
if(isset($_REQUEST['episode_submit'])){
	//$film=$_REQUEST['id'];
	//$episode=1;
	//$_COOKIE["id"];
	setcookie($_REQUEST['id'],$_REQUEST['id_episode']);
	//echo $_COOKIE[$film];
}
?>
<div class="ct-menu">
	<ul>
    	<li><a href="index.php" style="color:#FFF"><b>HOME</b></a></li>
        <li class="type"><b>THỂ LOẠI</b>
        	<?php
				include"type.php";
			?>
        </li>
        <li class="country"><b>QUỐC GIA</b>
        	<?php
				include"country.php";
			?>
        </li>
        <li class="type">
        <b><a href="index.php?ac=flyear" style="text-decoration:none;color:#FFF">PHIM LẺ</b></a>
        	<?php
				include"filmle.php";
			?>
        </li>
        <li class="type">
			<b><a href="index.php?ac=fbyear" style="text-decoration:none;color:#FFF">PHIM BỘ</b></a>
			<?php
				include"filmbo.php";
			?>
        </li>
    </ul>
    <div class="xoa"></div>
</div>