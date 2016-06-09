<div style="width:1000px; height:auto; margin:0px auto 0px auto; background-color:#FFF; padding:10px 0px 10px 0px ">
	<?php 
		if(isset($_POST['submit']))
		{
			$username=$_POST['username'];
			$password=md5($_POST['password']);
			$email=$_POST['email'];
			$db_user=$_REQUEST['username'];
			if(empty($_POST['username']))
			{
				echo "<script>alert('Bạn chưa nhập username!');window.location='index.php?ac=register';</script>";
			}
			else
			{
				$sql="select * from user where username='".$username."' ";
				$stm=$pdo->prepare($sql);
				$stm->execute();
				$stm->setFetchMode(PDO::FETCH_BOTH);
				$row=$stm->fetch();
				if($row<>0)
				{
					echo "<script>alert('Tên User Đã Được Sử Dụng!');window.location='index.php?ac=register';</script>";
				}
				else
				{
					if(empty($_POST['password']))
					{
						echo "<script>alert('Bạn chưa nhập mật khẩu!');window.location='index.php?ac=register';</script>";
					} 
					else
					{
						$pass=($password);
				
						$sql="INSERT INTO user(username,password,email,state)VALUES('$username','$pass','$email','')";
						$stm=$pdo->prepare($sql);
						$stm->execute();
						
						echo "<script>alert('Bạn Đã Đăng Kí Thành Công!');window.location='index.php?ac=login';</script>";
								
					}
				}
			}
		}
	?>
	<div style="margin:20px 0px 20px 30%; width:35%; height:auto;">
    <form method="post" action="index.php?ac=register">
    	<table width="98%" >
          <tr>
            <td colspan="2" style="text-align:center">Đăng Kí Thành Viên</td>
          </tr>
          <tr>
            <td width="33%" style="text-align:right">Tên User :</td>
            <td width="67%"><input type="text" name="username" id="username" /></td>
          </tr>
          <tr>
            <td style="text-align:right">Password :</td>
            <td><input type="password" name="password" id="password" /></td>
          </tr>
          <tr>
            <td style="text-align:right">Email :</td>
            <td><input type="email" name="email" id="email" /></td>
          </tr>
          <tr>
            <td height="41" colspan="2" style="text-align:center"><input type="submit" name="submit" id="submit" value="Đăng Kí" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" name="submit" id="submit" value="Reset" /></td>
          </tr>
        </table>

    </form>
    </div>
</div>