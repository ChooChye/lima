<?Php

include "include/session.php";
include "config.php";


$userid=$_POST['userid'];
$password=$_POST['password'];
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Login</title>
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
  <span class="style1 style1">
  <?Php

$msg='';
$status='OK';
if(!isset($userid) or strlen($userid) <3){
$msg=$msg."User id should be =3 or more than 3 char length<BR>";
$status= "NOTOK";}					
if ( strlen($password) < 3 ){
$msg=$msg."Password must be more than 3 char legth<BR>";
$status= "NOTOK";}					

if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
exit;
}

$count=$dbo->prepare("select password,mem_id,userid from plus_signup where userid=:userid");
$count->bindParam(":userid",$userid,PDO::PARAM_STR);
if($count->execute()){
$no=$count->rowCount();
if($no <> 1 ) {
$msg=" Userid does not exist please try again ... ";
}else { 
$row = $count->fetch(PDO::FETCH_OBJ);
if($row->password==md5($password)){
echo " Inside ";

$_SESSION['id']=session_id();
$_SESSION['admin_userid']=$row->userid;
$_SESSION['mem_id']=$row->mem_id;

$msg=" welcome $_SESSION[userid] loging successfully , please wait ... ";
echo $msg;
echo "<script language='JavaScript' type='text/JavaScript'>
<!--
window.location='../../welcome.php';
//-->
</script>
";

} 
else
{
$msg = " Login failed, try again ... <br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'>";
} 
} 
}else{
$msg = " Login failed, try again ... <br><INPUT TYPE='button' VALUE='Back' onClick='history.go(-1);'>";
}  
echo $msg;
?>
  </span></div>
</body>
</html>
