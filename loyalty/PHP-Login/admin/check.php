<style type="text/css">
<!--
body {
	background-image: url(../img/Background.jpg);
}
-->
</style>
<?Php
if(!isset($_SESSION['userid'])){
echo "<center><font face='Verdana' size='2' color=red>Sorry, Please <a href=index.php style='color: #ffffff' >login</a> and use this page </font></center>";
}else{
echo "<center><font face='Time New Romans' size='4' color=white>Welcome $_SESSION[userid]</br><center> ";
echo "<center><font face='Time New Romans' size='3' color=white> <a href=update-profile.php style='color: #ffffff' >Update Profile</a> | <a href=change-password.php style='color: #ffffff' >Change Password</a> | <a href=index.php style='color: #ffffff' >Logout</a></font></center>";


echo "<div align='center'>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

  <p><a href='dailysalesAdmin.php' title='Daily Sales Report'><img src='../img/dailysales1.png' width='220' height='220'border='0' /></a>
    <a href='weeklysalesAdmin.php' title='Weekly Sales Report'><img src='../img/weeklysales1.png' width='220' height='220' border='0' /></a>
    <a href='MembershipReview.php' title='Membership Database'><img src='../img/members.png' width='220' height='220' border='0' /></a>
	<!--a href='../../jobform/jobreview.php' title='Job Applications'><img src='img/jobapp.png' width='442' height='230' border='0' /></a></p-->
</div>";
}
?>
