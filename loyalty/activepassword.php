<?Php

include "config.php"; 

$ak=$_GET['ak'];
$userid=$_GET['userid'];

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>New Password</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(PHP-Login/img/update.jpg);
}
.style1 {color: #FFFFFF}
-->
</style></head>

<body >
<div align="center">
  <span class="style1">
  <?Php

$tm=time()-86400;  

$sql=$dbo->prepare("SELECT userid  FROM plus_key WHERE pkey=:ak and userid=:userid and time > '$tm' and status='pending'");
$sql->bindParam(':userid',$userid,PDO::PARAM_STR, 10);
$sql->bindParam(':ak',$ak,PDO::PARAM_STR, 32);
$sql->execute();
$no=$sql->rowCount();
echo " No of records = ".$no; 

if($no <>1){
echo "<center><font face='Verdana' size='2' color=red><b>Wrong activation </b></font> "; 
exit;
}

echo "<form action='activepasswordck.php' method=post><input type=hidden name=todo value=new-password>
<input type=hidden name=ak value=$ak>
<input type=hidden name=userid value=$userid>
<table border='0' cellspacing='0' cellpadding='0' align=center>
 <tr bgcolor='#f1f1f1' > <td colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>&nbsp;<b>New  Password</b> </font></td> </tr>

<tr bgcolor='#ffffff' > <td ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;New Password  
</font></td> <td  align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='bginput' name='password' ></font></td></tr>

<tr bgcolor='#f1f1f1' > <td ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;Re-enter New Password  
</font></td> <td  align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='password' class='bginput' name='password2' ></font></td></tr>

<tr bgcolor='#ffffff' > <td colspan=2 align=center><input type=submit value='Change Password'><input type=reset value=Reset></form></font></td></tr>

";


echo "</table>";



?>
  </span></div>
</body>
</html>
