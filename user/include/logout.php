<?php
	if(!isset($_SESSION))
		session_start();
		unset($_SESSION["username"]);
		echo'<script>
	window.location="index.php";
</script>';
?>

