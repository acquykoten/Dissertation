<div class="all-page">

    <div class="ct-film">
    	<div class="ct-film-r">
            <div class="title" style="margin-bottom:10px;"><div style="padding:10px 0px 0px 0px;color:#dacb46;"><h2>
						<?php
						include("admin/Entity/connDB.php");
						include("admin/Ctr/footer.php");
						$year='';
						$obj = new footer();
						$records_per_page = 12;
						if(isset($_REQUEST['year'])) {
							$year = $_GET['year'];
							$sql = "select * from film where year='" . $year . "'";
							$stm = $pdo->prepare($sql);
							$stm->execute();
							$re = $stm->fetch();
							echo 'Phim Bộ Trong Năm '.$re['year'];
						}
						else{
						echo'Phim Bộ';}?>
					</h2>
            
            </div>
                            <hr style="height:2px; width:100%">

            </div>
         <?php
                    if($_REQUEST['ac']=='fbyear'&& $year==''){
						$sql = "SELECT * from film WHERE total_episode > 1 ORDER BY year DESC";
						$query = $obj->paging_index($sql, $records_per_page);

					}
		 else {
			 //$year = $_GET['year'];
			 $sql = "SELECT * from film where year='" . $year . "' and total_episode > 1 ORDER BY year DESC";
			 $query = $obj->paging_index($sql, $records_per_page);

		 }
			/*$stm=$pdo->prepare($sql);
			$stm->execute();		
			$re = $stm->fetchAll(PDO::FETCH_ASSOC);
			if($stm->rowCount()==0)
				echo "<script>alert('Không Tìm Thấy');window.location='index.php';</script>";
			else*/
		 if($obj->showData($query) != ""){
		 foreach($obj->showData($query) as $r)
			{	
		
		?>
				  <div class="kq-film">
					 <div class="kqfilm-hinh" align="center"><a href="index.php?ac=detail&id_film=<?php echo $r['id_film']?>"><img src="image/film/<?php echo $r['img'];?>" /></a>
					 </div>
					 <div class="film_name">
					<?php
					$film_name =$r['film_name'];
					if(strlen($film_name)>30) {
						$film_name = mb_substr($r['film_name'], 0, 30,'UTF-8').'...';
						$film_name = strtoupper($film_name);
					}
					else{$film_name = strtoupper($film_name);}

					  ?>
					  <a href="index.php?ac=detail&id_film=<?php echo $r['id_film']; ?>"><b><?php echo $film_name;?></b></a>
					 </div>
				  </div>
                          
        <?php }
		 }?>
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
