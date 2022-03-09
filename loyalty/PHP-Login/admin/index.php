<?Php

include "../../include/session.php";
include "../../config.php"; 

@$count=$dbo->prepare("update plus_login set status='OFF' where userid='$_SESSION[userid]'");
@$count->execute();

session_unset();
session_destroy();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Zone</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background: url(https://akm-img-a-in.tosshub.com/sites/btmt/images/stories/fortis_660x450_240120093628_270320124616.jpg) no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
}
.style3 {color: #000000; font-weight: bold; }
.style1 {	color: #FFFFFF;
	font-weight: bold;
}
-->
</style></head>
<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

<h2 align="center" style="color: #000;">Admin Login</h2>
<form action='loginck.php' method=post>
  <div style="background:#DDD; padding:20px; width:20%; margin-left:38%; margin-right:38%; border-radius:5px; border:3px solid #EEE; ">
         Username:<input type ='text' class='bginput' name='userid' style="display: block;">
         Password:<input type ='password' class='bginput' name='password' style="display: block;">
      <input type="submit" name="Submit" value="Login" /><INPUT Type="BUTTON" VALUE="Back" ONCLICK="window.location.href='../../../'">
      <p><a href="../../forgot-password.php">Forgot password ?</a></p>
</form>
<a href="https://lima-asiadynamics.com/">&laquo; Back to Home</a>
<?Php
require "../../bottom.php";
?>
</body>
</html>
