<?Php
include("../core/session.php");
include "../core/config.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "../core/bootstrap.php"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Daily Sales Report</title>
</head>

<body>
<?Php
if(!isset($_SESSION['userid'])){
echo "<div class=\"alert alert-danger\"><h3>Sorry, Please <a href=\"http://lima-asiadynamics.com/client\">login</a> and use this page </h3></div";
exit;
}
?>
<div class="container-fluid">
    <div class="row">
    <?php require('../core/nav.php');?>
<div class="col">
    <div class="p-5">
    <?php

	//session_start();
	include "sql_comm_helper.php";
	//include "sql_data.php";  // File that contains the SQL connection information.

	echo "<h2 style=\"margin:0px; padding-top:10px;\">Daily Sales Report</h2><hr/>";
	login_mysql();
	$sql = "SELECT ProgramCode, Date, VNos, VGross, VLBCom, VNet";
	$sql .= ",MNos, MGross, MLBCom, MNet";
	$sql .= ",ANos, AGross, ALBCom, ANet";
	$sql .= ",DNos, DGross, DLBCom, DNet";
	$sql .= ",CHNos, CHGross, CHLBCom, CHNet";
	$sql .= ",CANos, CAGross, CALBCom, CANet";
	$sql .= ",TNos, TGross, TLBCom, TNet";
	$sql .= ",Verified, Approved FROM Dailyreports";
	$result = mysqli_query($connection,$sql) or die (mysqli_error());
	echo '<form method="post" action="clear_table2.php">'."\n";
	while ($rad=mysqli_fetch_array($result)) 
	{

			echo "<table class=\"table table-condensed table-bordered table-hover\" style=\"width:500px;\" >\n";
		echo "<tr><th>Program Code</th><td align=center><font color=red>$rad[0]</td><th>Date</th><td align=center><font color=red>$rad[1]</td></tr>";
		echo "<tr><th>Items</th><th>Nos</th><th>Gross</th><th style=\"width:25%;\">Less Bank Com.</th><th>Net&nbsp;&nbsp;</th></tr>";
		echo "<tr><th>Visa</th><td align=center><font color=red>$rad[2]</td><td align=center><font color=red>$rad[3]</td><td align=center><font color=red>$rad[4]</td><td align=center><font color=red>$rad[5]</td></tr>";
		echo "<tr><th>Master</th><td align=center><font color=red>$rad[6]</td><td align=center><font color=red>$rad[7]</td><td align=center><font color=red>$rad[8]</td><td align=center><font color=red>$rad[9]</td></tr>";
		echo "<tr><th>Amex</th><td align=center><font color=red>$rad[10]</td><td align=center><font color=red>$rad[11]</td><td align=center><font color=red>$rad[12]</td><td align=center><font color=red>$rad[13]</td></tr>";
		echo "<tr><th>Diners</th><td align=center><font color=red>$rad[14]</td><td align=center><font color=red>$rad[15]</td><td align=center><font color=red>$rad[16]</td><td align=center><font color=red>$rad[17]</td></tr>";
		echo "<tr><th>Cheques</th><td align=center><font color=red>$rad[18]</td><td align=center><font color=red>$rad[19]</td><td align=center><font color=red>$rad[20]</td><td align=center><font color=red>$rad[21]</td></tr>";
		echo "<tr><th>Cash</th><td align=center><font color=red>$rad[22]</td><td align=center><font color=red>$rad[23]</td><td align=center><font color=red>$rad[24]</td><td align=center><font color=red>$rad[25]</td></tr>";
		echo "<tr style=\"background-color:#CCC;\"><th>TOTAL</th><td align=center><font color=red>$rad[26]</td><td align=center><font color=red>$rad[27]</td><td align=center><font color=red>$rad[28]</td><td align=center><font color=red>$rad[29]</td></tr>";
		echo "<tr><th>Verified by</th><td colspan=\"5\" align=center><font color=red>$rad[30]</td></tr>";
		echo "<tr><th>Approved by</th><td colspan=\"5\" align=center><font color=red>$rad[31]</td></tr>";
		
		echo "</table>\n";
		echo "<br>\n";
		echo "*************************************************************";
		echo "<br>\n";
		echo "<br>\n";		
	}
	
	echo '</form>';
	logout_mysql();
?>
<p class="text-danger">Note: Assuming that the package is sold at RM528 and the Bank Commission is 1.7%</p>
</div>
</div><!-- col 12 -->
</div><!-- END Row -->
</div><!-- /container-fluid -->
</body>
</html>
