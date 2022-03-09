<?Php

include "include/session.php";

include "config.php"; 

$email=$_POST['email'];

$site_url="http://www.lima-asiadynamics.com/loyalty/";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>
<head>
<title>Forgot password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=forgot-password.php">
<style type="text/css">
<!--
body {
	background-image: url(PHP-Login/img/update.jpg);
}
.style1 {color: #FFFFFF}
-->
</style></head>

<body>
<div align="center"><span class="style1">
  <?Php
$status = "OK";
$msg="";

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){ 
$msg="Your email address is not correct<BR>"; 
$status= "NOTOK";}


echo "<br><br>";
if($status=="OK"){  
$count=$dbo->prepare("SELECT email,userid FROM client_login WHERE client_login.email = '$email'");
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);
$no=$count->rowCount();


$em=$row->email;
if ($no == 0) {  echo "<center><font face='Verdana' size='2' color=red><b>No Password</b><br> Sorry your Email address is not there in our database .<BR><BR><input type='button' value='Retry' onClick='history.go(-1)'> .</center>"; exit;}


$tm=time() - 86400; 
$count=$dbo->prepare("SELECT userid FROM plus_key WHERE userid = '$row->userid' and time > $tm and status='pending'");
$count->execute();
$no=$count->rowCount();

if($no==1){
echo "<center><font face='Verdana' size='2' color=red><b>Your password activation Key is already posted to your email address, please check your Email address & Junk mail folder. "; 
exit;
}
function random_generator($digits){
srand ((double) microtime() * 10000000);

$input = array ("A", "B", "C", "D", "E","F","G","H","I","J","K","L","M","N","O","P","Q",
"R","S","T","U","V","W","X","Y","Z");

$random_generator="";
for($i=1;$i<$digits+1;$i++){ 

if(rand(1,2) == 1){

$rand_index = array_rand($input);
$random_generator .=$input[$rand_index]; 

}else{


$random_generator .=rand(1,10); 
} 

}

return $random_generator;
}


$key=random_generator(10);
$key=md5($key);
$tm=time();

$sql=$dbo->prepare("insert into plus_key(userid, pkey,time,status) values('$row->userid','$key','$tm','pending')");
$sql->execute();


$headers4="donotreply@lima-asiadynamics.com";        
$headers.="Reply-to: $headers4\n";
$headers .= "From: $headers4\n"; 
$headers .= "Errors-to: $headers4\n"; 

$site_url=$site_url."activepassword.php?ak=$key&userid=$row->userid";

if(mail("$em","Your Request for login details","This is in response to your request for login details at lima-asiadynamics.com \n \nLogin ID: $row->userid \n To reset your password, please visit this link( or copy and paste this link in your browser window )\n\n
\n\n
$site_url

 \n\n Thank You \n \n siteadmin","$headers")){echo "<center><font face='Verdana' size='2' ><b>THANK YOU</b> <br>Your password is posted to your email address . Please check your mail after some time. </center>";}
else{ echo " <center><font face='Verdana' size='2' color=red >There is some system problem in sending login details to your address. Please contact site-admin. <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";}


	} 

	else {echo "<center><font face='Verdana' size='2' color=red >$msg <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";}
?>
  </span>
  
</div>
</body>
</html>
