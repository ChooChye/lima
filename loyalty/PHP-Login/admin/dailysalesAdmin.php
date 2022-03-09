<?Php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include "include/session.php";
include "config.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Daily Sales Report</title>
<style type="text/css">
<!--
body {
	background-image: url(img/bg.jpg);
	background-color: #999999;
}
.style1 {color: #FFFFFF}
.style3 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>

<body>
<?Php
if(!isset($_SESSION['userid'])){
echo "<center><font face='Verdana' size='2' color=white>Sorry, Please <a href=../index.php style='color: #ff0000'>login</a> and use this page </font></center>";
exit;
}else{
echo "<center><font face='Time New Romans' size='3' color=white>Welcome $_SESSION[userid]</br><center> ";
echo "<center><font face='Time New Romans' size='3'><a href=welcome.php  style='color: #ffffff'>Back</a> | <a href=logout.php  style='color: #ffffff'>Logout</a></font></center>";
}
?>
  </br>
</div>
<div align="center"><span class="style1">
    <?php

	//session_start();
	include "sql_comm_helper.php";
	include "sql_data.php";  // File that contains the SQL connection information.

	echo "<h2>Daily Sales Report</h2>\n";
	login_mysql();
	select_db(FALSE);
	$sql = "SELECT ProgramCode, Date, VNos, VGross, VLBCom, VNet";
	$sql .= ",MNos, MGross, MLBCom, MNet";
	$sql .= ",ANos, AGross, ALBCom, ANet";
	$sql .= ",DNos, DGross, DLBCom, DNet";
	$sql .= ",CHNos, CHGross, CHLBCom, CHNet";
	$sql .= ",CANos, CAGross, CALBCom, CANet";
	$sql .= ",TNos, TGross, TLBCom, TNet";
	$sql .= ",Verified, Approved FROM Dailyreports";
	$result = mysql_query($sql) or die (mysql_error());
	echo '<form method="post" action="clear_table2.php">'."\n";
	while ($rad=mysql_fetch_array($result)) 
	{

			echo "<table border=1 cellpadding=4 >\n";
		echo "<tr><th>Program Code</th><td align=center><font color=red>$rad[0]</td><th>Date</th><td align=center><font color=red>$rad[1]</td></tr>";
		echo "<tr><th>Items</th><th>Nos</th><th>Gross</th><th>Less Bank Com.</th><th>Net&nbsp;&nbsp;</th></tr>";
		echo "<tr><th>Visa</th><td align=center><font color=red>$rad[2]</td><td align=center><font color=red>$rad[3]</td><td align=center><font color=red>$rad[4]</td><td align=center><font color=red>$rad[5]</td></tr>";
		echo "<tr><th>Master</th><td align=center><font color=red>$rad[6]</td><td align=center><font color=red>$rad[7]</td><td align=center><font color=red>$rad[8]</td><td align=center><font color=red>$rad[9]</td></tr>";
		echo "<tr><th>Amex</th><td align=center><font color=red>$rad[10]</td><td align=center><font color=red>$rad[11]</td><td align=center><font color=red>$rad[12]</td><td align=center><font color=red>$rad[13]</td></tr>";
		echo "<tr><th>Diners</th><td align=center><font color=red>$rad[14]</td><td align=center><font color=red>$rad[15]</td><td align=center><font color=red>$rad[16]</td><td align=center><font color=red>$rad[17]</td></tr>";
		echo "<tr><th>Cheques</th><td align=center><font color=red>$rad[18]</td><td align=center><font color=red>$rad[19]</td><td align=center><font color=red>$rad[20]</td><td align=center><font color=red>$rad[21]</td></tr>";
		echo "<tr><th>Cash</th><td align=center><font color=red>$rad[22]</td><td align=center><font color=red>$rad[23]</td><td align=center><font color=red>$rad[24]</td><td align=center><font color=red>$rad[25]</td></tr>";
		echo "<tr><th>TOTAL</th><td align=center><font color=red>$rad[26]</td><td align=center><font color=red>$rad[27]</td><td align=center><font color=red>$rad[28]</td><td align=center><font color=red>$rad[29]</td></tr>";
		echo "<tr><th>Verified by</th><td align=center><font color=red>$rad[30]</td></tr>";
		echo "<tr><th>Approved by</th><td align=center><font color=red>$rad[31]</td></tr>";
		
		echo "</table>\n";
		echo "<br>\n";
		echo "*************************************************************";
		echo "<br>\n";
		echo "<br>\n";		
	}
	
	echo '</form>';
	logout_mysql();
?>


  </span></div>
</body>
</html>
