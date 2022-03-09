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
  <p><a href='#' onclick='alert(\"Under Construction...\")' title='RedOne'><img src='https://pbs.twimg.com/profile_images/433422219876659201/XZHb4KEm_400x400.png' width='220' height='220'border='0' /></a>
    <a href='check.php' title='Loyalty Membership'><img src='https://www.iconpacks.net/icons/2/free-hotel-icon-1880-thumb.png' width='220' height='220' border='0' /></a>
    <a href='#' onclick='alert(\"Under Construction...\")' title='Car Bundle'><img src='https://freeiconshop.com/wp-content/uploads/edd/car-flat.png' width='220' height='220' border='0' /></a>
	<!--a href='../../jobform/jobreview.php' title='Job Applications'><img src='img/jobapp.png' width='442' height='230' border='0' /></a></p-->
</div>";
}
?>
