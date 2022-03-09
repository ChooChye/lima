<?Php

include "include/session.php";
include "config.php"; 

@$count=$dbo->prepare("update plus_login set status='OFF' where userid='$_SESSION[userid]'");
@$count->execute();

session_unset();
session_destroy();

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Logout</title>

</head>

<body>
<?Php

echo "<center><font face='Verdana' size='2' >Successfully logged out. <a href=login.php>Login</a> again<br><br> </font></center>";
require "bottom.php";

?>

</body>
</html>
