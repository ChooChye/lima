<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
    if(!empty($_SESSION['admin_id']) && $_SESSION['admin_userid']){
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
<p align="center"><a class="btn btn-info" href="https://lima-asiadynamics.com/loyalty/">Login here</a></p>
</div>
        ');
    }
?>
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
<title>Logged Out</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body style="padding-top: 5%;">
<h1 class="style1">Logout </h1>
<div class="alert alert-danger">
<h4 align="center">You have been logged out.</h4>
<p align="center"><a class="btn btn-info" href="https://lima-asiadynamics.com/loyalty/">Login</a></p>
</div>
</body>
</html>
