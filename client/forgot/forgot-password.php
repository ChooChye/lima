<?Php

include "../core/session.php";

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<link rel="stylesheet" href="../core/css/form.css"/> 
<?php include "../core/bootstrap.php"; ?>
<title>Forgot password </title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<?Php
if(isset($_SESSION['userid'])){
echo " You have login as $_SESSION[userid], you can <a href=../logout.php>logout</a> here";
}else {
echo "<nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">

  <div class=\"container\">
  <a href=\"../\"><img src=\"http://aqm-asiagroup.com/wpimages/logo.png\" width=\"64\"/></a>
    <ul class=\"nav navbar-nav navbar-right\">
    <li><a href=\"http://aqm-asiagroup.com/?view=client\" >Back</a></li>
    </ul>
  </div>
</nav>
";

echo "<body style=\"padding-top:70px;\">
<h2 class=\"title\">Forgot Password  <small>Client Login</small></h2>
<hr>

<form class=\"form-contain\" action='forgot-passwordck' method=post>
<table border='1' cellspacing='0' cellpadding='0' align=center>
 <label>Email</label>
<input type ='text' name='email' >
<input type='submit' value='Submit'>

<p><a href=index.php>Login</a></p>



</form>";
}
?>

</body>
</html>
