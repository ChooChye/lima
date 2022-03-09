<?Php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************
include "include/session.php";

include "config.php"; // database connection details stored here
//////////////////////////////
$email=$_POST['email'];
// Change the URL below to match your site
$site_url="http://lima-asiadynamics.com/loyalty/PHP-Login/admin";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>
<head>
<title>Forgot password</title>
</head>

<body>
<?Php
$status = "OK";
$msg="";

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){ 
$msg="Your email address is not correct<BR>"; 
$status= "NOTOK";}


echo "<br><br>";
if($status=="OK"){  
$count=$dbo->prepare("SELECT email,userid FROM plus_signup WHERE plus_signup.email = '$email'");
$count->execute();
$row = $count->fetch(PDO::FETCH_OBJ);
$no=$count->rowCount();


$em=$row->email;
if ($no == 0) {  echo "<center><font face='Verdana' size='2' color=red><b>No Password</b><br> Sorry Your address is not there in our database . You can signup and login to use our site. <BR><BR><input type='button' value='Retry' onClick='history.go(-1)'> . <a href='signup.php'> Sign UP </a> </center>"; exit;}


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


$headers4="donotreply@lima-asiadynamics.com";         ///// Change this address within quotes to your address ///
$headers.="Reply-to: $headers4\n";
$headers .= "From: $headers4\n"; 
$headers .= "Errors-to: $headers4\n"; 

$site_url=$site_url."activepassword.php?ak=$key&userid=$row->userid";

if(mail("$em","Your Request for login details","This is in response to your request for login detailst at site_name \n \nLogin ID: $row->userid \n To reset your password, please visit this link( or copy and paste this link in your browser window )\n\n
\n\n
$site_url
\n\n
<a href='$site_url'>$site_url</a>

 \n\n Thank You \n \n siteadmin","$headers")){echo "<center><font face='Verdana' size='2' ><b>THANK YOU</b> <br>Your password is posted to your emil address . Please check your mail after some time. </center>";}
else{ echo " <center><font face='Verdana' size='2' color=red >There is some system problem in sending login details to your address. Please contact site-admin. <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";}


	} 

	else {echo "<center><font face='Verdana' size='2' color=red >$msg <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";}
?>

</body>
</html>
