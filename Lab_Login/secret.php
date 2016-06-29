<?php
session_start();
if(!isset($_SESSION["txtUserName"])){
  $_SESSION["page"] = "secret.php";
  header("location:login.php");
}
$user =  $_SESSION["txtUserName"]; 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lag - Member Page</title>
</head>
<body>
<form id="form1" name="form1" method="post">
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="secret.php"style="font-family:微軟正黑體;font-size:18px;"><font color="#FFFFFF">會員</font></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a><?php echo "歡迎\"".$user."\"";?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">會員<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">回首頁</a></li>
            <li><a href="index.php?logout=1">登出</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<table  width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#1E95FF" style="font-family:微軟正黑體;font-size:18px;"><font color="#FFFFFF">會員系統 － 會員專用</font></td>
  </tr>
</table>
<p align="center">This page for member only.</p>
</body>
</html>