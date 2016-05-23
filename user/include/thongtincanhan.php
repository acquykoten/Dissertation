<?php
$user=$_SESSION["username"];
$sql="select * from user where username='$user'";
$stm=$pdo->prepare($sql); 
$stm->execute();
$re = $stm->fetchAll();
foreach($re as $r)
{
$id_user=$r["id_user"];
//$hoten=$r["hoten"];
$username=$r["username"];
//$password=$r["password"];
$email=$r["email"];
//$sdt=$r["sdt"];
//$gioitinh=$r["gioitinh"];
//$hinh=$r["hinh"];
?>
<table width="560" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" style="border:1px solid #CCC; margin:0px 0px 0px 28%;">
          <tr>
            <td height="35" colspan="2" align="center" class="tieude"><div align="center" style="color:#FFF; font-family:Tahoma; font-size: 14px; padding-left:30px"><b>THÔNG TIN CÁ NHÂN CỦA KHÁCH HÀNG</b></div></td>
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">            
            <td height="35" style="padding-left:70px"><div align="left" style="width:120px">ID User:</div></td>
     		<td width="405" style="padding-left:15px">
       		  <?php echo "$id_user"; ?></td>            
          </tr>
          </tr>
		  <tr bgcolor="#f9f9f9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">  
            <td height="35" style="padding-left:70px"><div align="left" style="width:120px">Tên đăng nhập:</div></td>
 			<td width="405" style="padding-left:15px" align="left">
                <?php echo "$username"?>                   				
              </td>            
          </tr>
          <tr bgcolor="#f9f9f9" onmouseover="style.background='#c8dbf0'" onmouseout="style.background='#F9F9F9'">            
            <td height="35" style="padding-left:70px"><div align="left" style="width:120px">Email:</div></td>
 			<td width="405" style="padding-left:15px">
              <div align="left">
                <?php echo "$email";} ?>
              </div></td>            
          </tr>        
          <tr>
            <td height="35" colspan="2" align="center">
              <div align="right" style="padding-right:10px;" class="abc">
              <a href="index.php?ac=change">Thay đổi thông tin cá nhân</a>
              <input type="hidden" name="act"/>
            </div></td>
          </tr>
        </table>
