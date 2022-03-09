<?Php

include "../core/session.php";

include "../core/config.php"; 

$email=$_POST['email'];

$site_url="http://www.corporate-worldclub.com/client/forgot/";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>
<head>
<link rel="stylesheet" href="../core/css/form.css"/> 
<?php include "../core/bootstrap.php"; ?>
<title>Forgot password</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=forgot-password.php">
</head>

<body style="padding-top: 70px;">
<?php require "../core/nav.php"; ?>
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
if ($no == 0) {  echo "<div class=\"alert alert-danger\"><h3>No such email found</h3><BR><input type='button' value='Retry' onClick='history.go(-1)'> .</div"; exit;}


$tm=time() - 86400; 
$count=$dbo->prepare("SELECT userid FROM v_key WHERE userid = '$row->userid' and time > $tm and status='pending'");
$count->execute();
$no=$count->rowCount();

if($no==1){
echo "<div class=\"alert alert-danger\"><h3>Your password activation Key is already posted to your email address, please check your Email address & Junk mail folder.</h3></div> "; 
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

$sql=$dbo->prepare("insert into v_key(userid, pkey,time,status) values('$row->userid','$key','$tm','pending')");
$sql->execute();


$headers4="donotreply@corporate-worldclub.com";        
$headers.="Reply-to: $headers4\n";
$headers .= "From: $headers4\n"; 
$headers .= "Errors-to: $headers4\n"; 
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

$site_url=$site_url."activepassword.php?ak=$key&userid=$row->userid";

if(mail("$em","Your Request for login details","This is in response to your request for login details at corporate-worldclub.com <br>Login ID: $row->userid <br><p> To reset your password, please visit the link below(or copy and paste it in your browser window)</p>
<br>
<p><a href=\"$site_url\">$site_url</a></p>

 <br><b>Regards<br><a href=\"http://corporate-worldclub.com\">Corporate Worldclub</a></b>","$headers"))
 {echo 
 "<center><div class=\"alert alert-success\"><h3>Your password is posted to your email address . Please check your inbox or junk mail.</h3></div> </center>";
 }
else{ echo " <div class=\"alert alert-danger\"><h3>There's a technical error. Please contact site-admin. <br><br><input type='button' value='Retry' onClick='history.go(-1)'></h3></div>";}


	} 

	else {echo "<center><font face='Verdana' size='2' color=red >$msg <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";}
?>
  </span>
  
</div>
</body>
</html>
