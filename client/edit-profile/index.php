<?php
session_start();
include_once "../core/config.php";

?><!DOCTYPE html>
<head>
<link rel="stylesheet" href="../core/css/form.css"/>
<?php if(!isset($_SESSION['userid'])){
echo '<title>Please Login to continue</title>';
exit;
}else{
    echo '<title>Edit Profile</title>';
}
?>
<?php require "../core/bootstrap.php"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
</head>
<body>


<?php 
if(!isset($_SESSION['userid'])){
echo "
<div class=\"alert alert-danger\"><h3>Sorry, Please <a href=\"http://lima-asiadynamics.com/?view=client\" >login</a> and use this page </h3></div>";
exit;
}
?>
<div class="container-fluid">
    <div class="row">
        <?php require("../core/nav.php"); ?>
<div class="col">
    <div class="p-5">
<?php
echo "<h2 style=\"margin:0px; padding-top:10px;\">Edit Profile</h2><hr>";

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

echo "<ul style=\"list-style:none; margin:0px; padding:0px;\">";
echo "<li class=\"pull-left\" style=\"width:50%;\">
<form class=\"form-contain\" action='update-profileck.php' method=\"post\">
<input type=\"hidden\" name=\"todo\" value=\"update-profile\">
<h3>Update Profile</h3>

<label>Email</label>
<input type=\"text\" name=\"email\" value=\"$row->email\">
<label>Name</label>
<input type=\"text\" name=\"name\" value=\"$row->name\">

<label>Gender</label>
$ckb
<input type=\"submit\" value=\"Update\">
</form></li>
";



echo "<li class=\"pull-left\" style=\"width:50%;\"><form class=\"form-contain\" action='change-passwordck.php' method=\"post\">
<input type=hidden name=todo value=change-password>

<h3>Change  Password</h3>

<label>Old Password</label> 
<input type=\"password\" name=\"old_password\">

<label> New Password </label>
<input type=\"password\" name=\"password\" >

<label> New Password (Re-enter) </label>
<input type =\"password\" name=\"password2\" >

<input type=\"submit\" value=\"Change Password\">
</form></li></ul>
";

?>
</div>
</div>
</div>
</div><!-- /container-fluid-->
</body>