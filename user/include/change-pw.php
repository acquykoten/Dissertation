<?php
 ////////////////////////////
$ss_tendangnhap=$_SESSION['username'];
$idkey=$ss_tendangnhap;
$stm=$pdo->prepare("SELECT * FROM user where username='$idkey'");
$stm->execute();
$re = $stm->fetch();
$db_user=$re["username"]; 
?>
<?php
if(isset($_POST["act"])){	
	$username=$_SESSION['username'];
	$sql="SELECT * FROM user where username='$username'";
	$stm2=$pdo->prepare($sql);
	$stm2->execute();
	$re2 = $stm2->fetch();
	$db_matkhau=$re2["password"]; 	  
	
	$pw=$_POST['pw'];
	$pw=$pw;
	$pww=($pw);
	
	$pw_old=($_POST['pw_old']);
	if(strlen($pw)<3)
		echo "<script>alert('Mật khẩu mới phải lớn hơn 6 ký tự');</script>";
	else
	{
		if ($pw_old==$db_matkhau)
		{
			$pw=md5($pw);	
			$result_changepw = "UPDATE user SET password='$pww' WHERE username='$username'";
			$stm3=$pdo->prepare($result_changepw);
			$stm3->execute();
			$re3 = $stm3->fetchAll(PDO::FETCH_ASSOC);
			echo "<script>alert('Đổi mật khẩu thành công.'); window.location='index.php';</script>";
		}
		else echo "<script>alert('Đổi mật khẩu thất bại! Kiểm tra lại mật khẩu cũ'); window.history.go(-1);</script>";
	}
}
?>
<div style="padding:5px 0px 5px 0px">
<form method="post" name="formthanhvien" id="formthanhvien" onSubmit="return user_changepw(pw_old.value,pw.value,cpw.value);">
<table border="0" width="560" cellpadding="0" cellspacing="0" style="margin:10px 0px 10px 25%;border:1px solid #CCCCCC ">
<tr class="tieude" align="center" height="35">
<td colspan="2" ><div align="center"style="color:#FFF; font-family:Tahoma; font-size: 14px; padding-left:30px"><b>ĐỔI MẬT KHẨU</b></div></td>
</tr>
 <tr height="30" bgcolor="#F9F9F9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">
      <td style="padding-left:100px" align="left">Tên đăng nhập:</td>
      <td width="300" align="left"><?php echo $db_user; ?>
      <input type="hidden" name="user" value="<?php echo $db_user;?>" />
      </td>
    </tr>
	<tr height="30" bgcolor="#F9F9F9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">
      <td style="padding-left:100px">Mật khẩu cũ: </td>
      <td><input name="pw_old" type="password" id="pw_old" style="width:220px"/></td>
    </tr>
	<tr height="30" bgcolor="#F9F9F9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">
      <td style="padding-left:100px">Mật khẩu mới:</td>
      <td><input name="pw" type="password" id="pw" style="width:220px"/></td>
    </tr>
	<tr height="30" bgcolor="#F9F9F9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">
      <td style="padding-left:100px">Viết lại mật khẩu:</td>
      <td><input name="cpw" type="password" id="cpw" style="width:220px"/></td>
    </tr>
    <tr>
      <td height="35" colspan="2" align="center" bgcolor="#2d94ff">
        <input type="submit" value="Đồng ý" >
	<input type="reset" value="Nhập lại" >
        <input name="act" type="hidden" value="act" /></td>
    </tr>
  </table>
</form>
</div>
