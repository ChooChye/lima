<?Php

include "include/session.php";
include "config.php";

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Update profile</title>

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
echo "<center><font face='Time New Romans' size='3' color=white> <a href=welcome.php style='color: #ffffff' >Back</a> | <a href=change-password.php style='color: #ffffff' >Change Password</a> | <a href=index.php style='color: #ffffff' >Logout</a></font></center></br>";
}
?><?Php

//require "check.php";

$count=$dbo->prepare("select * from plus_signup where userid='$_SESSION[userid]'");
if(!($count->execute())){
echo "Database Problem ";
exit;
}else{
$row = $count->fetch(PDO::FETCH_OBJ);
}

if($row->sex == "male"){
$ckb="<input type='radio' value=male checked name='sex' checked>Male 
<input type='radio' value=female  name='sex'>Female";}
else {$ckb="<input type='radio' value=male checked name='sex' >Male 
<input type='radio' value=female  name='sex' checked>Female";}


echo "<form action='update-profileck.php' method=post>
<input type=hidden name=todo value=update-profile>

<table border='1' cellspacing='0' cellpadding='0' align=center width='30%'>
 <tr bgcolor='#ffffff' > <td colspan='2' align='center'>
<font face='verdana, arial, helvetica' size='2' align='center'>&nbsp;<b>Update Profile</b> 
</font></td> </tr>

<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Email</td>
<td  ><input type=text name=email value='$row->email'></td></tr>
<tr bgcolor='#f1f1f1'><td >&nbsp;<font face='Verdana' size='2' >Name</td>
<td ><font face='Verdana' size='2'><input type=text name=name value='$row->name'></td></tr>

<tr bgcolor='#f1f1f1'><td >&nbsp;<font face='Verdana' size='2' >Sex</td>
<td ><font face='Verdana' size='2'>  $ckb</td></tr>
<tr bgcolor='#ffffff'><td align=center colspan=2><input type=submit value=Update></td></tr>


";


echo "</table>";
require "bottom.php";

?>

</body>
</html>
