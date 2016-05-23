<?php
if($_POST['post_comment'])
{
	//$idbl=$_POST['idbl'];
	//$iduser=$_REQUEST['iduser'];
	//$idtruyen=$_REQUEST['idtruyen'];
	$id_film=$_REQUEST['id_film'];
	$comment=$_POST['comment'];
	//$ngaydang=$_POST['ngaydang'];
	//$state=$_SESSION['state'];
	$id_user= $_SESSION['id_user'];
	//print_r($id_film);
	if(!isset($_SESSION['id_user']))
	{
		echo"<script>alert('Vui lòng đăng nhập trước khi thêm lời bình!');window.history.go(-1)</script>";
	}
	else
	{ 
		$comment = addslashes($_POST['comment']);
		if(isset($_REQUEST["id_film"]))
		{
			if($comment=="")
			{
				echo"<script>alert('Vui lòng nhập nội dung bình luận!')</script>";
			}
			else
			{
				$time = gmdate("h:i:s", time()+7*3600);
				$ngaydang=date("Y/m/d $time");
				$u = $_SESSION['id_user'];
				$sql = "INSERT INTO comment(id_user,id_film,datetime,content,state) VALUES('".$u."','".$id_film."','".$ngaydang."','".$comment."','1')";
				
				$stm=$pdo->prepare($sql);
				$stm->execute();
				$stm->setFetchMode(PDO::FETCH_BOTH);
				$row=$stm->fetch();
				//echo"Comment Success";
				echo"<script>alert('Cmt success!');window.history.go(-1)</script>";
			}
		}
	}
}
//}
?>