<?Php

include "../core/session.php";
include "../core/config.php";

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<link rel="stylesheet" href="css/form.css"/>
<?php require "../core/bootstrap.php"; ?>
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=index.php">
<title>Update profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>

<body style="padding-top: 70px;">
<?php require "../core/nav.php"; ?>
  <?Php
//require "check.php";

$todo=$_POST['todo'];
$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];

if(isset($todo) and $todo=="update-profile"){

$status = "OK";
$msg="";

if (strlen($name) < 4) {
$msg=$msg."Your name  must be more than 5 char length<BR>";
$status= "NOTOK";}	

if($status<>"OK"){ 
echo "<div class=\"alert alert-danger\">$msg<br><input type='button' value='Retry' onClick='history.go(-1)'></div>";
}else{ 

$sql=$dbo->prepare("UPDATE client_login set name=:name,email=:email,gender=:gender where userid='$_SESSION[userid]'");
$sql->bindParam(':name',$name,PDO::PARAM_STR, 25);
$sql->bindParam(':email',$email,PDO::PARAM_STR, 15);
$sql->bindParam(':gender',$gender,PDO::PARAM_STR, 7);
if($sql->execute()){
echo "<div class=\"alert alert-success\"><h3>You have successfully updated your profile</h3><br>Please wait...</div></div>";
}
else{
print_r($sql->errorInfo()); 
$msg=" <div class=\"alert alert-danger\">There is some problem in updating your profile. Please contact site admin</div>";
}
}
echo $msg;
}
?>

  </span></div>
</body>
</html>
