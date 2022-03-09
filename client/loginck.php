<?Php
//error_reporting(E_ALL); ini_set('display_errors', 1);

include("core/session.php");
include("core/config.php");


$userid = $_POST['userid'];
$password = $_POST['password'];
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="core/css/form.css" />
<?php require "core/bootstrap.php"; ?>
<title>Loging in...</title>

</head>

<body style="padding-top:20%;">

  <?Php

$msg='';
$status='OK';
if(!isset($userid) or strlen($userid) <3){
$msg=$msg."<div class=\"alert alert-danger\">Username should be more than 3 characters length</div>";
$status= "NOTOK";}					
if ( strlen($password) < 3 ){
$msg=$msg."<div class=\"alert alert-danger\">Password must be more than 3 characters</div>";
$status= "NOTOK";}					

if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
exit;
}

$count=$dbo->prepare("SELECT password,mem_id,email,userid FROM client_login WHERE email=:userid");
$count->bindParam(":userid",$userid,PDO::PARAM_STR);
if($count->execute()){
$no=$count->rowCount();
if($no <> 1 ) {
$msg="<div class=\"alert alert-danger\"><h3>Failed to Login<br> please try again.</h3><br /><input type='button' value='Retry' onClick='history.go(-1)'></div> ";
}else { 
$row = $count->fetch(PDO::FETCH_OBJ);
if($row->password==md5($password)){


$_SESSION['id']=session_id();
$_SESSION['userid']=$row->userid;
$_SESSION['mem_id']=$row->mem_id;

$msg=" <div class=\"alert alert-success\"><h3>Welcome ".strtoupper($_SESSION[userid])." loging in successfully</h3><br>please wait ... </div>";
//echo $msg;
echo "<script language='JavaScript' type='text/JavaScript'>
<!--
window.location='dashboard';
//-->
</script>
";

} 
else
{
$msg = "<div class=\"alert alert-danger\"><h3>Login failed, try again ... </h3><br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'></div>";
} 
} 
}else{
$msg = "<div class=\"alert alert-danger\"><h3>Login failed, try again ... </h3><br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'></div>";
}  
echo $msg;
?>
  </span></div>
</body>
</html>
