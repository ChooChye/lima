<?Php

include "../core/session.php";

include "../core/config.php";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<link rel="stylesheet" href="css/form.css"/>
<?php require "../core/bootstrap.php"; ?>
<META HTTP-EQUIV=REFRESH CONTENT="4;URL=index.php">
<title>Change Password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body style="padding-top: 70px;">
<?php require "../core/nav.php"; ?>
  <?Php

$todo=$_POST['todo'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$old_password=$_POST['old_password'];


if(isset($todo) and $todo=="change-password"){
$status = "OK";
$msg="";

			
$count=$dbo->prepare("SELECT password FROM client_login WHERE userid=:userid");
$count->bindParam(":userid",$_SESSION['userid'],PDO::PARAM_STR, 15);
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);


if($row->password<>md5($old_password)){
$msg=$msg."Your old password is not matching as per our record.<BR>";
$status= "NOTOK";
}					

if ( strlen($password) < 3 or strlen($password) > 12 ){
$msg=$msg."Password must be more than 3 char legth and maximum 12 char lenght<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."Both passwords are not matching<BR>";
$status= "NOTOK";}					



if($status<>"OK"){ 
echo "<div class=\"alert alert-danger\">$msg<br><input type='button' value='Retry' onClick='history.go(-1)'></div>";
}else{ 
$password=md5($password); 
$sql=$dbo->prepare("UPDATE client_login set password=:password WHERE userid='$_SESSION[userid]'");
$sql->bindParam(':password',$password,PDO::PARAM_STR, 32);
if($sql->execute()){
echo "<div class=\"alert alert-success\"><h3>Your password has been changed successfully. <br>Please keep changing your password for better security</h3><br>Please wait...</div>";
}else{echo "<div class=\"alert alert-danger\"><h3>Failed to change password<br>please try again later</h3></div>";
} 
} 
} 


?>
  </span></div>
</body>
</html>
