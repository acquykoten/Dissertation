<?php
include("admin/Entity/crud_user.php");
include_once("admin/Ctr/footer.php");
//include("admin/Entity/crud_film.php");
 include_once('admin/Entity/crud_film.php'); 
include_once("admin/Entity/crud_type.php");
//include_once("Entity/connDB.php");
session_start();
if(isset($_SESSION['id_admin'])) {
  if (isset($_GET['module'])) {
    $module = $_GET['module'];
    $cache = $_GET['cache'];
  }
  else{
    $cache='view';
    $module='film';
  }
}
else {
  $module='login';
  $cache ='view';
}
?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Admin_Film</title>
<link rel="stylesheet" type="text/css" href="admin/css.css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script language="javascript" src="http://freetuts.net/public/cdn/jquery/jquery-2.2.0.min.js"></script>
  <link rel="icon" href="admin/img/icon_film.png" />
</head>

<body class="body">

<div class="header">
  <div class="container"></div>
</div>
<div class="nav">
<nav class="navbar navbar-inverse" stype="margin-bottom:none;">
  <div class="container">
  <div class="navbar-header"><a class="navbar-brand">Cartoon Film</a></div>
    <ul class="nav navbar-nav" style="color: #FFF">
      <li class="active"><a href="admin.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Films
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="?cache=view&module=film" class="btn <?php echo $module=='film'?'active' :''?>">Film</a></li>
          <li><a href="?cache=view&module=film_type" class="btn <?php echo $module=='film_type'?'active' :''?>">Film Type</a></li>
          <li><a href="?cache=view&module=film_director" class="btn <?php echo $module=='film_director'?'active' :''?>">Movie Director</a></li>
          <li><a href="?cache=view&module=film_actor" class="btn <?php echo $module=='film_actor'?'active' :''?>">Movie Actress</a></li>
          <li><a href="?cache=view&module=trailer" class="btn <?php echo $module=='trailer'?'active' :''?>">Trailer</a></li>
          <li><a href="?cache=view&module=episode" class="btn <?php echo $module=='episode'?'active' :''?>">Episode</a></li>
        </ul>
      </li>
      <li><a href="?cache=view&module=type" class="btn <?php echo $module=='type'?'active' :''?>">Type</a></li>
      <li><a href="?cache=view&module=actor" class="btn <?php echo $module=='actor'?'active' :''?>">Actor</a></li>
      <li><a href="?cache=view&module=director" class="btn <?php echo $module=='director'?'active' :''?>">Director</a></li>

      <li><a href="?cache=view&module=comment" class="btn <?php echo $module=='comment'?'active' :''?>">Comment</a></li>

      <li><a href="?cache=view&module=user" class="btn <?php echo $module=='user'?'active' :'';?>">User</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
      if(isset($_SESSION["id_admin"])) {
        ?>
        <li><a href="#">
            <span class=""></span> <?php echo $_SESSION['admin_name'] ?></a></li>
        <li><a href="?cache=Ctr &module=Logout" class="btn <?php echo $module=='logout',$cache=='Ctr'?'active' :''?>">
            <span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
        <?php
      }
      else {
        ?>
        <li><a href="?cache=view&module=login" class="btn <?php echo $module == 'login' ? 'active' : '' ?>">
            <span class="glyphicon glyphicon-log-in"></span> LogIn</a></li>
        <?php
      }?>
    </ul>
    </div>
</nav>
</div>
<div class="main">
  <div class="container" style="background-color: #CCFFFF; border-radius:20px;">
 <?php

	   include("admin/{$cache}/{$module}.php");

	  ?>
  </div>
</div>
<div class="footer">
  <div class="container-fluid"></div>
</div>
</body>
</html>
<?php
?>