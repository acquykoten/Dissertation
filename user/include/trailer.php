<div class="all-page">

	<div class="ct-film">
		<div class="ct-film-r">
			<div class="title" style="margin-bottom:10px;"><div style="padding:10px 0px 0px 0px;color:#dacb46;"><h2>
						<?php
						include("admin/Entity/connDB.php");
						include("admin/Ctr/footer.php");
						$obj = new footer();
						$records_per_page = 12;
						$sql1="SELECT * FROM film WHERE not EXISTS (select episode.id_film FROM episode WHERE episode.id_film = film.id_film)";
						$stm=$pdo->prepare($sql1);
						$stm->execute();
						$re = $stm->fetch();
						?>
						Trailer Phim
					</h2>
				</div>
				<hr style="height:2px;  width:100%">
			</div>
			<?php
			if($_REQUEST['ac']=='ftrailer') {
				$sql = "SELECT * FROM film WHERE not EXISTS (select episode.id_film FROM episode WHERE episode.id_film = film.id_film) ORDER BY film.update_day DESC";
				$query = $obj->paging_index($sql, $records_per_page);
				if ($obj->showData($query) != "") {
					//$stm=$pdo->prepare($sql);
					//$stm->execute();
					//$re = $stm->fetchAll(PDO::FETCH_ASSOC);
					//if($stm->rowCount()==0)
					//	echo 'Xin Lỗi! Không Có Phim Trong Năm Bạn Chọn!';
					//else
					foreach ($obj->showData($query) as $r) {

						?>
						<div class="kq-film">
							<div class="kqfilm-hinh" align="center"><a
									href="index.php?ac=detail&id_film=<?php echo $r['id_film'] ?>"><img
										src="image/film/<?php echo $r['img']; ?>"/></a>
							</div>
							<div class="film_name">
								<?php
								$film_name = $r['film_name'];
								if (strlen($film_name) > 30) {
									//Kiem tra de cat
									$vt = 30;
									while ($film_name[$vt] != " ")
										$vt--;
									$film_name = mb_substr($film_name, 0, $vt, 'UTF-8') . " ...";
									$film_name = strtoupper($film_name);
								} else {
									$film_name = strtoupper($r['film_name']);
								}
								?>
								<a href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>"><b><?php echo $film_name; ?></b></a>
							</div>
						</div>

					<?php }
				}
			}
			?>
		</div>
		<div class="page_footer">
			<?php
			//$query2 = $obj->returnQuery_index($query);
			//echo $query2;
			$obj->page_index($sql, $records_per_page);
			?>
		</div>
		<div class="xoa"></div>
	</div>
</div>
<div class="body-r">
	<div class="body-r-t">
		<?php
		include"rank.php";
		?>
	</div>

</div>
<div class="xoa"></div>
