<?Php

include "include/session.php";
include "config.php";

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title></title>

<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(images/bg.jpg);
}
-->
</style></head>

<body >
<?Php
if(!isset($_SESSION['userid'])){
echo "<center><font face='Verdana' size='2' color=red>Sorry, Please <a href=index.php style='color: #ffffff' >login</a> and use this page </font></center>";
exit;
}else{
echo "<center><font face='Time New Romans' size='3' color=white> <a href=welcome.php style='color: #ffffff' >Back</a> | <a href=change-password.php style='color: #ffffff' >Change Password</a> | <a href=logout.php style='color: #ffffff' >Logout</a></font></center></br>";
}
?>
<?Php

//require "check.php";

echo "<form action='change-passwordck.php' method=post><input type=hidden name=todo value=change-password>

<table border='1' cellspacing='0' cellpadding='0' align=center>
 <tr bgcolor='#f1f1f1' > <td colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>&nbsp;<b>Change  Password</b> </font></td> </tr>

<tr bgcolor='#f1f1f1' > <td ><font face='verdana, arial, helvetica' size='2' align='center'> Old Password 
</font></td> <td  align='center'>
<input type ='password' class='bginput' name='old_password' ></font></td></tr>


<tr bgcolor='#f1f1f1' > <td ><font face='verdana, arial, helvetica' size='2' align='center'> New Password  
</font></td> <td  align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='bginput' name='password' ></font></td></tr>

<tr bgcolor='#f1f1f1' > <td ><font face='verdana, arial, helvetica' size='2' align='center'> New Password (Re-enter) 
</font></td> <td  align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='bginput' name='password2' ></font></td></tr>

<tr bgcolor='#ffffff' > <td colspan=2 align=center><input type=submit value='Change Password'><input type=reset value=Reset></font></td></tr>

";


echo "</table>";

//require "bottom.php";

?>

</body>
</html>
