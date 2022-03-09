<?Php

include "include/session.php";
include "config.php";
//echo md5('test123');
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<link rel="stylesheet" type="text/css" href="css/forms.css">
<title>Admin Login</title>

<style type="text/css">
<!--
body {
	background: url(http://www.workplaceprivacyreport.com/wp-content/uploads/sites/162/2009/11/Employees-together.jpg) no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;

}
-->
</style>

</head>
<!--script type="text/javascript">
window.location = 'http://lima-asiadynamics.com/loyalty/?view=admin';
</script-->
<body>
<div style="background:#DDD; padding:20px; width:30%; margin-top:10%; margin-left:35%; margin-right:35%; border-radius:5px; border:3px solid #EEE;">
<h2>Client Login</h2>
<form action='loginck.php' method=post >
<table border='0' cellspacing='0' cellpadding='0' align='center' >
  <tr id='cat'>
  <tr> <td><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;<strong>Login ID</strong>  &nbsp;</font></td> 
    <td align='center'><blockquote>&nbsp;</blockquote></td>
    <td align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='text' class='glow' name='userid' ></font></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td align='center'>&nbsp;</td>
    <td align='center'>&nbsp;</td>
  </tr>
  <tr> <td><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;<strong>Password</strong></font></td> 
  <td align='center'><blockquote>&nbsp;</blockquote></td>
  <td align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='glow' name='password' ></font></td></tr>

<tr>
  <td colspan='3' align='center'>&nbsp;</td>
</tr>
<tr>
  <td colspan='3' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>
    <input name="submit" type='submit' value='Submit'>
    <input type="button" value='Back' onclick="window.location.href='../'">
  </font></td>
</tr>
<tr> <td colspan='3' align='center'><font face='verdana, arial, helvetica' size='2' ><a href=forgot-password.php>
Forgot Password</a> ?</font>
<p style="background: pink; padding:10px"><b>Please change your password regularly<br>for security reasons</b></p></td> </tr>

</table>
</center>
</form>
<a href="../">&laquo; Back to Home</a>
</div>

<?Php
require "bottom.php";
?>

</body>
</html>
