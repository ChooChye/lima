<?Php

include "include/session.php";

include "config.php";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<META HTTP-EQUIV=REFRESH CONTENT="4;URL=change-password.php">
<title></title>
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
$password=$_POST['password'];
$password2=$_POST['password2'];
$old_password=$_POST['old_password'];


if(isset($todo) and $todo=="change-password"){
$status = "OK";
$msg="";

			
$count=$dbo->prepare("select password from plus_signup where userid=:userid");
$count->bindParam(":userid",$_SESSION['userid'],PDO::PARAM_STR, 15);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);


if($row->password<>md5($old_password)){
$msg=$msg."Your old password  is not matching as per our record.<BR>";
$status= "NOTOK";
}					

if ( strlen($password) < 3 or strlen($password) > 12 ){
$msg=$msg."Password must be more than 3 char legth and maximum 12 char lenght<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."Both passwords are not matching<BR>";
$status= "NOTOK";}					



if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
}else{ 
$password=md5($password); 
$sql=$dbo->prepare("update plus_signup set password=:password where userid='$_SESSION[userid]'");
$sql->bindParam(':password',$password,PDO::PARAM_STR, 32);
if($sql->execute()){
echo "<font face='Verdana' size='2' color=white ><center>Thanks <br> Your password changed successfully. Please keep changing your password for better security</font></center>";
}else{echo "<font face='Verdana' size='2' color=red><center>Sorry <br> Failed to change password Contact Site Admin</font></center>";
} 
} 
} 
require "bottom.php";

?>
  </span></div>
</body>
</html>
