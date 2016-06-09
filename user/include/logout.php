<?php
	if(!isset($_SESSION))
		session_start();
		unset($_SESSION["username"]);
		unset($_SESSION["id_user"]);
		echo'<script>
	window.location="index.php";
</script>';
?>

