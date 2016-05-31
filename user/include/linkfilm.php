
<div class="xxxx" style="width:100px; height:20px"></div>
<div class="linkfilm">
	<?php
		$id_film=$_REQUEST['id'];
		$sql="select * from film where id_film=:id";
		$stmt=$pdo->prepare($sql);
        $stmt->bindParam(":id",$id_film);
        $stmt->execute();
        $r=$stmt->fetch(PDO::FETCH_BOTH);

	?>
	<div class="lf-l" >
    	<div class="lf-name">
			<div class="lf-img"><img style="width: 100%; height: 100%" src="image/film/<?php echo $r['img'];?>"></div>
			<div class="lf-tile"><h3><?php echo $r['film_name'] ?></h3></div>
			<div class="lf-d">
				<p style="margin-left: 10px; margin-top: 20px"><?php
					$d = $r['description'];
					if(strlen($d)>200) {
						$d = mb_substr($d, 0, 200,'UTF-8').' ...';
					}
					echo $d;
					  ?>
					[<a href="index.php?ac=detail&id_film=<?php echo $id_film ?>">xem thêm</a>]
				</p>
			</div>
		</div>
        <div class="lf-url" id ="epi">
			<?php
			if(($_REQUEST['ac'])=='xem'){
				$a = $id_film;//gán lấy id của film đc chọn
				//Đếm số tập film thuộc film đang xem
				$sql_c='SELECT COUNT(name) as cout FROM film,episode WHERE film.id_film=episode.id_film AND episode.id_film=:id';
				$stmt=$pdo->prepare($sql_c);
				$stmt->bindParam(":id",$a);
				$stmt->execute();
				$count=$stmt->fetchColumn(0);
				if(isset($_COOKIE[$a]) && $count>1){//Kiểm tra tồn tại cookie và kiếm tra nó là film bộ( tổng số tập film > 1)
					$sql_ep ='SELECT * FROM episode,film WHERE film.id_film=:id AND episode.name = :ep'; //lấy thông tin film có id fiml = values trong cookie
					$ep=$pdo->prepare($sql_ep);
					$ep->bindParam(":id",$a);
					$ep->bindParam(":ep",$_COOKIE[$a]);
					$ep->execute();
					$r1=$ep->fetch(PDO::FETCH_BOTH);
					//$t = $_COOKIE[$a];
					//$img=$stmt->fetchColumn(3);
					//Xuất ra dòng gợi ý cho user
				echo '<div id="epi" align="center" style="background-image: url(image/film/'.$r['img'].') ; height: 500px;  color: #96AF0A">
				<p><h3>Hệ thống ghi nhận lần trước bạn đang xem dở<span style="color: #0000FF"><u><b> tập '.$_COOKIE[$a].'</b></u></span>, Bạn có muốn xem tiếp <span style="color: #0000FF"><u><b> tập ';
					echo $_COOKIE[$a].'</b></u></span>';//.$a;
					echo' không hay chuyển sang xem tập tiếp theo ?</h3></p><br>';
					?>
					<!-- Form xử lí cho user tiếp tục xem tập film còn dở được luu trong cookie-->
					<form action="index.php?ac=episode&id=<?php echo $a ?>" method="post" style="margin-left: 10px;">
						<span style="color: #0000FF"></span>
            <input hidden type="text" value="<?php echo $r1['url1'] ?>" name="url">
                <input type="submit" style="height: 25px; width: 100px" name="episode" value=" <?php echo 'Xem Tiếp Tập '.$_COOKIE[$a] ?>">
            </form>
					<br>
					<?php
					$e = $_COOKIE[$a];//lây tập film luu trong cookie
					//sql lấy thong tin tập kế tiếp
					$sql ='SELECT * FROM episode,film WHERE episode.id_film= :id AND film.id_film=episode.id_film AND episode.name>:ep ORDER BY name';
					$stmt=$pdo->prepare($sql);
					//print_r($sql);
					$stmt->bindParam(":id",$a);
					$stmt->bindParam(":ep",$_COOKIE[$a]);
					$stmt->execute();
					$r=$stmt->fetch(PDO::FETCH_BOTH);
					?>
					<!-- Xuất ra tập kế tiếp của film-->
					<form action="index.php?ac=episode&id=<?php echo $a ?>" method="post" style="margin-left: 10px;">
            <input hidden type="text" value="<?php echo $r['url1'] ?>" name="url">
                <input type="submit" style="height: 25px" name="episode" value=" <?php echo 'Chuyển Sang Tập '.$r['name'] ?>">
            </form>

			<?php
					//echo '<a href="">';
					echo'</div>';
				}
				else { //điều kiện ngược ko phải film bộ
					$sql="select * from episode where id_film=:id ORDER BY name";//sql lấy thông tin film đc chọn
					$stmt=$pdo->prepare($sql);
					$stmt->bindParam(":id",$id_film);
					$stmt->execute();
					$r=$stmt->fetchColumn(3);//lấy url film
					if($r!=''){//xét điều kiện url của film khác rỗng
					?>
					<iframe src="<?php echo $r ?>" frameborder="0" allowfullscreen height="100%"
							width="100%"></iframe>
					<?php
				}
					else{
						//url rỗng, xuất thông báo, trả về trang -1
						echo "<script>alert('Coming soon...');
window.history.go(-1);
</script>";

					}
				}

			}
			if(($_REQUEST['ac'])=='trailer1'){
				$sql="select * from trailer where id_film=:id";
				$stmt=$pdo->prepare($sql);
				$stmt->bindParam(":id",$id_film);
				$stmt->execute();
				$r=$stmt->fetchColumn(2);
				$r1 = $stmt->fetchColumn(3);
				if($r == '' && $r1 == ''){
					echo "<script>alert('Coming soon...'); window.history.go(-2)</script>";
				}
				elseif($r!='') {
					?>
					<iframe src="<?php echo $r ?>" frameborder="0" allowfullscreen height="100%"
							width="100%"></iframe>
					<?php

				}
				else
				{
					?>
					<iframe src="<?php echo $r1 ?>" frameborder="0" allowfullscreen height="100%"
							width="100%"></iframe>
					<?php
				}
			}
			if(isset($_REQUEST['url'])) {
				$url = $_REQUEST['url'];
				if ($url !='') {
					//print_r($url);
					?>
					<iframe src="<?php echo $url ?>" frameborder="0" allowfullscreen height="100%"
							width="100%"></iframe>
					<?php
				}
				else
				{
					echo "<script>alert('Coming soon...')</script>";
				}
			}

			if(($_REQUEST['ac'])=='xem')
			{
					$sql1 = "UPDATE film SET total_viewer=total_viewer+1 WHERE id_film='".$_REQUEST['id']."'";
					$stm = $pdo->prepare($sql1);
					$stm->execute();
				if(isset($_SESSION['id_user'])) {
					$sql_v = "select * from viewer where id_user=:id_u1 and id_film=:id_f1";
					$stm = $pdo->prepare($sql_v);
					$stm->execute(array(':id_u1' => $_SESSION['id_user'], ':id_f1' => $_REQUEST['id']));
					$re = $stm->fetchAll(PDO::FETCH_ASSOC);
					if ($stmt->rowCount() == 0) {
						$sql_u = "INSERT INTO viewer SET id_user=:id_u,id_film=:id_f";
						$q = $pdo->prepare($sql_u);
						$q->execute(array(':id_u' => $_SESSION['id_user'], ':id_f' => $_REQUEST['id']));
					} else {
						$sql_a = "UPDATE viewer SET total_views=total_views+1 WHERE id_user = '".$_SESSION['id_user']."'  AND id_film='".$_REQUEST['id']."'";
						$stm = $pdo->prepare($sql_a);
						$stm->execute();
					}
				}
			}
			?>
		</div>
        <div class="lf-ep">
			<div class="lf-ep-t">Sever Vip:
				<?php
					include"lf-ep-t.php";
				//$a =$_REQUEST['id'];
			//echo	$_COOKIE[$a];
				?>
			</div>
            <br/><br/>
			<div class="lf-ep-m">Link Dự Phòng:
				<?php
					include"lf-ep-m.php";
				?>
			</div>
            <br><br/>
			<div class="lf-ep-b">Trailer:
				<?php
					include"lf-ep-b.php";
				?>
			</div>
		</div>
        <div class="lf-cm">
			<?php
				include"binhluan.php";
				echo"<hr>";
				include"htbl.php";
			?>
		</div>
    </div>
    <div class="lf-r">
		
        
		<div>
			<?php
			include"hottype.php";
			?>
		</div>
        <div style="clear:both"><?php
			include"rank.php";
			?>
		</div>
    </div>
	<div class="xoa"></div>
</div>