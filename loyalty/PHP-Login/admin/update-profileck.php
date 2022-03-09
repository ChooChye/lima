<?Php

include "include/session.php";
include "config.php";

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=update-profile.php">
<title>Update profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(images/bg.jpg);
}
.style1 {color: #FFFFFF}
-->
</style></head>

<body>
<div align="center">
  <span class="style1">
  <?Php
//require "check.php";

$todo=$_POST['todo'];
$name=$_POST['name'];
$email=$_POST['email'];
$sex=$_POST['sex'];

if(isset($todo) and $todo=="update-profile"){

$status = "OK";
$msg="";

if (strlen($name) < 4) {
$msg=$msg."Your name  must be more than 5 char length<BR>";
$status= "NOTOK";}	

if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
}else{ 

$sql=$dbo->prepare("update plus_signup set name=:name,email=:email,sex=:sex where userid='$_SESSION[userid]'");
$sql->bindParam(':name',$name,PDO::PARAM_STR, 25);
$sql->bindParam(':email',$email,PDO::PARAM_STR, 15);
$sql->bindParam(':sex',$sex,PDO::PARAM_STR, 7);
if($sql->execute()){
echo "<center><font face='Verdana' size='2' color=white>You have successfully updated your profile<br></font></center>";
}
else{
print_r($sql->errorInfo()); 
$msg=" <center><font face='Verdana' size='2' color=white>There is some problem in updating your profile. Please contact site admin<br></font></center>";
}
}
echo $msg;
}
require "bottom.php";
?>
  </span></div>
</body>
</html>
