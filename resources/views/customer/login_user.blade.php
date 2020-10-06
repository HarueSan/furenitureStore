<?
session_start();
?>
<html>
<head>
<title>webthaidd.com</title>
<br><br><br><br><br><br><br><br><br><br><br><br>
<meta http-equiv="Content-Type" content="text/html" size="200" ; charset=windows-874">
</head>
<body bgcolor="#FFFFFF">
<form name="form1" method="post" action="check.php">
  <font size="6"> 
  <center>User :
<input type="text" name="username_log" size="40" style="height:35px;"> </center></font> <br><br>
<br>
  <font size="6">
  <center>Password :
<input type="password" name="password_log" size="40" style="height:35px;"> </center></font> <br><br>
<? echo $code_error;?>
<br>
<font size="7"></font><center><a href="home_cutomer.blade.php".html" class="w3-bar-item w3-button"></a><input type="submit" name="Submit" value="Login"></center></font>
</form>
</body>
</html>