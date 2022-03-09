<?Php

include "include/session.php";
include "config.php";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Welcome</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	background-image: url(PHP-Login/img/Background.jpg);
}
.dicon{
    width:20%;
}
@media screen and (max-width:900px){
    .dicon{
        width:15%;
    }
}
-->
</style></head>

<body>



<?Php
if(!isset($_SESSION['admin_userid'])){
    echo "<center><font face='verdana' size='2' color=white>Sorry, Please <a href=index.php style='color: #ff0000'>login</a> and use this page </font></center>";
    }else{
    echo "<center><font face='Time New Romans' size='4' color=white>Welcome $_SESSION[admin_userid]</br><center> ";
    echo "<center><font face='Time New Romans' size='3' color=white><a href=update-profile.php style='color: #ffffff' >Update Profile</a> | <a href=change-password.php style='color: #ffffff' > Change Password</a> | <a href=logout.php style='color: #ffffff' >Logout</a></font></center>";
    
    
    echo "<div align='center'>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p><a href='PHP-Login/dailysales.php' title='Daily Sales Report'><img src='PHP-Login/img/dailysales1.png' class='dicon'/></a>
        <a href='PHP-Login/weeklysales.php' title='Weekly Sales Report'><img src='PHP-Login/img/weeklysales1.png' class='dicon'/></a>
        <a href='PHP-Login/Membership.php' title='Membership Database'><img src='PHP-Login/img/members.png' class='dicon' /></a>
        <a href='PHP-Login/weeklywages.php' title='Weekly Wages'><img src='PHP-Login/img/wages.png' class='dicon' alt='Weekly Wages'/></a>	
        </p>
    </div>";
    }

require "bottom.php";
?>

</body>
</html>
