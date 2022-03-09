<?Php

include "core/session.php";
include "core/config.php";

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<link rel="stylesheet" href="css/form.css"/>
<?php require "core/bootstrap.php"; ?>
<title>Update profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>

<body style="padding-top: 70px;">

<?Php
if(!isset($_SESSION['userid'])){
echo "<div class=\"alert-danger\"><h3>Sorry, Please <a href=index.php >login</a> and use this page </h3></div>";
exit;
}else{
require "core/nav.php";
}
?>
<?Php

$count=$dbo->prepare("SELECT * FROM client_login WHERE userid='$_SESSION[userid]'");
if(!($count->execute())){
echo "Database Problem ";
exit;
}else{
$row = $count->fetch(PDO::FETCH_OBJ);
}

if($row->gender == "male"){
$ckb="<input type='radio' value=male checked name='gender' checked>Male 
<input type='radio' value=female  name='gender'>Female";}
else {$ckb="<input type='radio' value=\"male\" checked name='gender' >Male 
<input type='radio' value=\"female\"  name='gender' checked>Female";}


echo "<form class=\"form-contain\" action='update-profileck.php' method=\"post\">
<input type=\"hidden\" name=\"todo\" value=\"update-profile\">
<h3>Update Profile</h3>

<label>Email</label>
<input type=\"text\" name=\"email\" value=\"$row->email\">
<label>Name</label>
<input type=\"text\" name=\"name\" value=\"$row->name\">

<label>Gender</label>
$ckb
<input type=\"submit\" value=\"Update\">


";


?>

</body>
</html>
