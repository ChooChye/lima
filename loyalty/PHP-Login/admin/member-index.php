<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Index</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-image: url(img/bg.jpg);
}
.style1 {color: #FFFFFF}
-->
</style></head>
<body>
<h1 class="style1">Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
<span class="style1"><a href="../../index.php" style="color: #ffffff">Logout</a></span>
<p class="style1">This is a password protected area only accessible to members. </p>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><a href="../dailysalesAdmin.php" title="Daily Sales Report"><img src="img/dailysales1.png" border="0" /></a>
    <a href="../weeklysalesAdmin.php" title="Weekly Sales Report"><img src="img/weeklysales1.png" width="256" height="256" border="0" /></a>
    <a href="img/Membership1.php" title="Membership Database"><img src="img/members.png" width="256" height="256" border="0" /></a></a>
    </p>
</div>
</body>
</body>
</html>
