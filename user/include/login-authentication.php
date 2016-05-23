<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	if(!isset($_POST["user"])){	
		echo "<script>alert('Bạn chưa nhập username');window.location='index.php?ac=login';</script>";
		//header("location:login.php");
	}
	else 
	{
		$user=$_POST["user"];
		if (!isset($_POST["pass"])) {
			echo "<script>alert('Bạn chưa nhập mật khẩu');window.location='index.php?ac=login';</script>";
			//header("location:login.php");					
		}
		else
		{
			//$pass=md5($_POST["pass"]);
			$pass=($_POST["pass"]);		
			$sql="select * from user where username='$user' and password='$pass'";
			$stm=$pdo->prepare($sql); 
			$stm->execute();
			$re = $stm->fetchAll(PDO::FETCH_ASSOC);	
			if($stm->rowcount()==0)
			{
				echo "<script>alert('Thông tin bạn nhập không chính xác!');window.location='index.php?ac=login';</script>";
				//header("location: login.php");
			}	
			else 
			{	
				$_SESSION['username']=$user;
				$_SESSION['id_user']=$re[0]['id_user'];
				echo "<script>alert('Bạn Đã Đăng Nhập Thành Công!');window.location='index.php';</script>";
			}
		}
	}
?>	