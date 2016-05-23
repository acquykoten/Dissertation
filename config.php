<?php
	$pdo= new PDO("mysql:host=localhost;dbname=ql_film","root","") or die("Không thể kết nối database");
	$pdo->query("set names 'utf8'");
?>