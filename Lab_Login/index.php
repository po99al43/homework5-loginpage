<?php 
session_start();
if(!isset($_SESSION["txtUserName"]))
{
  $user = "guest";
}
else
{
  $user =  $_SESSION["txtUserName"]; 
}
if (isset($_GET["logout"]))
{
	session_unset();
	header("Location: index.php");
	exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">
<title>homework5</title>

</head>
<body >
<form id="form1" name="form1" method="post">
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" ></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">首頁</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a><?php echo $user." 您好";?></a></li>
        <li class="dropdown">
  
          <?php 
            if($user =="guest"):
          ?>
            <li><a href="login.php">登入</a></li>
          <?php 
            else :
          ?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">會員<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="secret.php">會員專用頁</a></li>
            <li><a href="login.php?logout=1">登出</a></li>
          <?php 
            endif; 
          ?>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <p align"center">這是首頁</p>
</form>

</body>
</html>