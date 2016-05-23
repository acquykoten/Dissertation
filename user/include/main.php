<div class="container">
<?php 
	if(isset($_REQUEST['ac']))
	{
		if($_REQUEST['ac']=="find")
			include"xlfind.php";
			
		if($_REQUEST['ac']=="login")
			include"login.php";
			
		if($_REQUEST['ac']=="logout")
			include"logout.php";

		if(($_REQUEST['ac']=='trailer')||($_REQUEST['ac']=='episode')||($_REQUEST['ac']=='trailer1'))
			include"linkfilm.php";

		if($_REQUEST['ac']=="xllogin")
			include"login-authentication.php";
			
		if($_REQUEST['ac']=="ttcn")
			include"thongtincanhan.php";
		
		if($_REQUEST['ac']=="kqtlf")
			include"kqtype.php";
		
		if($_REQUEST['ac']=="country")
			include"kqcountry.php";
			
		if($_REQUEST['ac']=="flyear")
			include"kqfilmle.php";
		
		if($_REQUEST['ac']=="fbyear")
			include"kqfilmbo.php";
			
		if($_REQUEST['ac']=="detail")
			include"detail.php";
			
		if($_REQUEST['ac']=="xem")
			include"linkfilm.php";
			
		if($_REQUEST['ac']=="xlbl")
			include"xulybl.php";
			
		if($_REQUEST['ac']=="register")
			include"register.php";
			
		if($_REQUEST['ac']=="changepw")
			include"change-pw.php";
	}
	else
	 	include"body.php";
?>
</div>