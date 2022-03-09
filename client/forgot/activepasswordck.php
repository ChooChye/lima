<?Php


include "../core/config.php"; 

$ak=$_POST['ak'];
$userid=$_POST['userid'];
$todo=$_POST['todo'];
$password=$_POST['password'];
$password2=$_POST['password2'];

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Reset Password</title>
<link rel="stylesheet" href="../core/css/form.css"/>
<?php include "../core/bootstrap.php"; ?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body style="padding-top:70px;">

  <?Php

echo "<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">

  <div class=\"container\">
  <a class=\"navbar-brand\" href=\"../\">Corporate Worldclub</a>
    <ul class=\"nav navbar-nav navbar-right\">
    <li><a href=\"../\" >Back</a></li>
    </ul>
  </div>
</nav>";

$tm=time()-86400;


$sql=$dbo->prepare("SELECT userid  FROM v_key WHERE pkey=:ak and userid=:userid and time > '$tm' and status='pending'");
$sql->bindParam(':userid',$userid,PDO::PARAM_STR, 10);
$sql->bindParam(':ak',$ak,PDO::PARAM_STR, 32);
$sql->execute();
$no=$sql->rowCount();
 

if($no <>1){
echo "<div class=\"alert alert-danger\"><h3>Invalid or Expired link </h3></div>  "; 
exit;
}




if(isset($todo) and $todo=="new-password"){

$status = "OK";
$msg="";

			


if ( strlen($password) < 3 or strlen($password) > 12 ){
$msg=$msg."Password must be more than 3 char legth and maximum 12 char lenght<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."Both passwords are not matching<BR>";
$status= "NOTOK";}					



if($status<>"OK"){ 
echo "<div class=\"alert alert-danger\"><h3>$msg</h3><br><input type='button' value='Retry' onClick='history.go(-1)'></div>";
}else{ 
$password=md5($password); 


$count=$dbo->prepare("update client_login set password='$password' where userid='$userid'");
$count->execute();
$no=$count->rowCount();

if($no==1){

$tm=time();
 
$count=$dbo->prepare("update v_key set status='done' where pkey='$ak' and userid='$userid'  and status='pending'");
$count->execute(); 

echo "<META HTTP-EQUIV=REFRESH CONTENT=\"5;URL=../index.php\"><div class=\"alert alert-success\"><h3>Your new password has been successfully reset. </h3><br>Redirecting you to Login page in 5 seconds, if your not redirected in 5 seconds <a href=\"../\">click here</a></div>";
}else{echo "<div class=\"alert alert-danger\"><h3>There's a technical error<br>Please contact our Customer Service</h3></div>";
} 
} 
}


?>
  </span></div>
</body>
</html>
