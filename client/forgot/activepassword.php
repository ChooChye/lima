<?Php

include "../core/config.php"; 

$ak=$_GET['ak'];
$userid=$_GET['userid'];

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<link rel="stylesheet" href="../core/css/form.css"/>
<?php include "../core/bootstrap.php"; ?>
<title>Reset Password</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

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
echo " No of records = ".$no; 

if($no <>1){
echo "<div class=\"alert alert-danger\"><h3>Invalid or Expired link </h3></div> "; 
exit;
}

echo "<form class=\"form-contain\" action='activepasswordck' method=\"post\">
<input type=hidden name=todo value=new-password>
<input type=hidden name=ak value=$ak>
<input type=hidden name=userid value=$userid>

 <label>New  Password</label>

<input type =\"password\" name=\"password\" />

<label>Re-enter New Password</label>
<input type =\"password\" name=\"password2\" />
<input type=\"submit\" value=\"Change Password\">
</form>

";




?>
  </span></div>
</body>
</html>
