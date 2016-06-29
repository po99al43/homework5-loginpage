<?php
session_start();
if(isset ($_POST[btnOK])){
  if($_POST["txtUserName"] && $_POST["txtPassword"])
  {
    $_SESSION["txtUserName"] = $_POST["txtUserName"];
    $_SESSION["txtPassword"] = $_POST["txtPassword"];
    if($_SESSION["page"] == "secret.php"){
    header("location:secret.php");
    }
    else{
    header("location:index.php");
    }
  }
  else{
    echo '<script language="javascript">';
    echo 'alert("帳號或密碼不可為空白")';
    echo '</script>';
  }
}
if(isset ($_POST[btnHome])){
  header("location:index.php");
}
if (isset($_GET["logout"]))
{
	session_unset();
	header("Location: index.php");
	exit();
}

?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
	<title>Lab - Login</title>
</head>
<body>
<form id="form1" name="form1" method="post">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#1E95FF" style="font-family:微軟正黑體;font-size:18px;"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td valign="baseline" align = "center" style="font-family:微軟正黑體;font-size:18px;">帳號</td>
    </tr>
    <tr align="center">
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" /></td>
    </tr>
    <tr>
      <td valign="baseline" align = "center" style="font-family:微軟正黑體;font-size:18px;">密碼</td>
    </tr>
    <tr align="center">
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>
    </tr>
    <tr align="center">
      <td colspan="2" align="center" bgcolor="#ffffff">
      <input class="navbar-brand-log" type="submit" name="btnOK" id="btnOK" value="登入"/>|
      <input class="navbar-brand-log" type="reset" name="btnReset" id="btnReset" value="重設"/>|
      <input class="navbar-brand-log" type="submit" name="btnHome" id="btnHome" value="回首頁"/>
      </td>
    </tr>
  </table>
      <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</form>
</body>
</html>