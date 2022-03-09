<?php


if(!isset($_SESSION['admin_userid'])){
die ("<center style='color: #ff0000'>Sorry, Please <a href=\"../../\">login</a> and use this page</center>");
}else{
echo "<center style='color:white;'>Welcome $_SESSION[userid]</br><center> ";
echo "<center><a href=\"../update-profile.php\">Update Profile</a> | <a href=\"../change-password.php\"> Change Password</a> | <a href=\"../logout.php\">Logout</a></center>";

}

?>