<?Php


include "config.php"; 

$ak=$_POST['ak'];
$userid=$_POST['userid'];
$todo=$_POST['todo'];
$password=$_POST['password'];
$password2=$_POST['password2'];

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Processing..</title>
</head>

<body>
<?Php



$tm=time()-86400;


$sql=$dbo->prepare("SELECT userid  FROM plus_key WHERE pkey=:ak and userid=:userid and time > '$tm' and status='pending'");
$sql->bindParam(':userid',$userid,PDO::PARAM_STR, 10);
$sql->bindParam(':ak',$ak,PDO::PARAM_STR, 32);
$sql->execute();
$no=$sql->rowCount();
 

if($no <>1){
echo "<center><font face='Verdana' size='2' color=red><b>Wrong activation </b></font> "; 
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
echo "<font face='Verdana' size='2' color=red>$msg</font><br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
}else{ 
$password=md5($password); 


$count=$dbo->prepare("update plus_signup set password='$password' where userid='$userid'");
$count->execute();
$no=$count->rowCount();

if($no==1){

$tm=time();
 
$count=$dbo->prepare("update plus_key set status='done' where pkey='$ak' and userid='$userid'  and status='pending'");
$count->execute(); 

echo "<font face='Verdana' size='2' ><center>Thanks <br> Your new password is stored successfully. </font></center>";
}else{echo "<font face='Verdana' size='2' color=red><center>Sorry <br> Failed to store new password Contact Site Admin</font></center>";
} 
} 
}


?>

</body>
</html>
