<?Php

include "core/session.php";
include_once "core/config.php"; 

@$count=$dbo->prepare("update plus_login set status='OFF' where userid='$_SESSION[userid]'");
@$count->execute();

if(!empty($_SESSION['userid']) && !empty($_SESSION['id'])){
session_unset();
session_destroy();
}else{
    die ('
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="ChooChye"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
<title>Error</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body style="padding-top: 5%;">
        <div class="alert alert-danger">
<h4 align="center">You can\'t Logout if you\'re not Logged in</h4>
<p align="center"><a class="btn btn-info" href="http://lima-asiadynamics.com?view=client">Login here</a></p>
</div>
    ');
}
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<link rel="stylesheet" href="css/form.css"/>
<?php require "core/bootstrap.php"; ?>
<META HTTP-EQUIV=REFRESH CONTENT="1;URL=http://lima-asiadynamics.com">
<title>Loging out...</title>

</head>

<body>
<?Php

//echo "<div class=\"alert alert-success text-center\"><h3>Successfully logged out. <a href=index.php>Login</a> again<br><br> Redirecting to <a href='../'> Homepage </a></h3></div>";

?>

</body>
</html>
