<?Php

include "../core/config.php";

$userid=$_POST['userid'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$agree=$_POST['agree'];
$todo=$_POST['todo'];
$email=$_POST['email'];
$name=$_POST['name'];
$gender=$_POST['gender'];

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Signup page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(images/bg.jpg);
}
.style1 {color: #FFFFFF}
-->
</style></head>

<body >
<div align="center"><span class="style1">
  <?Php
if(isset($todo) and $todo=="post"){

$status = "OK";
$msg="";


if(!isset($userid) or strlen($userid) <3){
$msg=$msg."Username should be more than 3 characters<BR>";
$status= "NOTOK";}					

if(!ctype_alnum($userid)){
$msg=$msg."Username should contain alphanumeric characters only<BR>";
$status= "NOTOK";}					


$count=$dbo->prepare("SELECT userid FROM client_login WHERE userid=:userid");
$count->bindParam(":userid",$userid);
$count->execute();
$no=$count->rowCount();

if($no >0 ){
$msg=$msg."Username already exists. Choose a different User Name<br>";
$status= "NOTOK";
}

$count=$dbo->prepare("select email from client_login where email=:email");
$count->bindParam(":email",$email);
$count->execute();
$no=$count->rowCount();
if($no >0 ){
$msg=$msg."This email address is there with us. If you forgot your password you can activate it by using forgot password link. Or Please try another one<BR>";
$status= "NOTOK";
}



if ( strlen($password) < 3 ){
$msg=$msg."Password must be more than 3 characters legth<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."Both passwords are not match<BR>";
$status= "NOTOK";}					


if ($agree<>"yes") {
$msg=$msg."You must agree to terms and conditions<BR>";
$status= "NOTOK";}	
if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
}else{ 
$password_original = $password;
$password=md5($password); 
$sql=$dbo->prepare("insert into client_login(userid,password,email,name,gender) values(:userid,:password,:email,:name,:gender)");
$sql->bindParam(':userid',$userid,PDO::PARAM_STR, 15);
$sql->bindParam(':password',$password,PDO::PARAM_STR, 32);
$sql->bindParam(':email',$email,PDO::PARAM_STR, 75);
$sql->bindParam(':name',$name,PDO::PARAM_STR);
$sql->bindParam(':gender',$gender,PDO::PARAM_STR);
if($sql->execute()){

$mem_id=$dbo->lastInsertId(); 

$em="donotreply@corporate-worldclub.com";    // Change to your email address 
$headers4=$em;
$headers="";
$headers.="Reply-to: $headers4\n";
$headers .= "From: $headers4\n"; 
$headers .= "Errors-to: $headers4\n"; 


$content="Your login details from ******  \n\n";
$content .="User ID= $userid \n";
$content .="Password = $password_original \n";


$sub="Your login details";

echo "<font face='Arial' size='2'>Welcome, You have successfully signed up<br><br><a href=../index.php>Click here to login</a><br></font>";

}
else{print_r($sql->errorInfo()); }

}
}
?>
  </span></div>
</body>
</html>
