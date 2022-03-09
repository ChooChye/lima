<?Php

include "core/session.php";
include "core/config.php";

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Change Password</title>
<link rel="stylesheet" href="css/form.css"/>
<?php require "core/bootstrap.php"; ?>
<meta name="GENERATOR" content="Arachnophilia 4.0">
<meta name="FORMATTER" content="Arachnophilia 4.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body style="padding-top: 70px;">
<?Php
if(!isset($_SESSION['userid'])){
echo "<div class\"alert alert-danger\">Sorry, Please <a href=\"index.php\">login</a> and use this page </div>";
exit;
}else{
require "core/nav.php";
}
?>
<?Php

echo "<form class=\"form-contain\" action='change-passwordck.php' method=\"post\">
<input type=hidden name=todo value=change-password>

<h3>Change  Password</h3>

<label>Old Password</label> 
<input type=\"password\" name=\"old_password\">

<label> New Password </label>
<input type=\"password\" name=\"password\" >

<label> New Password (Re-enter) </label>
<input type =\"password\" name=\"password2\" >

<input type=\"submit\" value=\"Change Password\">

";

?>

</body>
</html>
