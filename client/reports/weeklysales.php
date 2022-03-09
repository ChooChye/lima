<?Php
include("../core/session.php");
include("../core/config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include "../core/bootstrap.php"; ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style type="text/css">
td {
    padding:2px;
}
</style>
<title>Weekly Sales Report</title>
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
       <?php require "../core/nav.php"; ?>
<div class="col">
    <div class="p-5">
    <?php

	//session_start();
	include "sql_comm_helper.php";
	//include "sql_data.php";  // File that contains the SQL connection information.

	echo "<h2 style=\"margin:0px; padding-top:10px;\">Weekly Sales Report</h2><hr>";
	login_mysql();
	//select_db(FALSE);
	$sql = "SELECT WeekNo, Fr, T, ProgramCode, Date";
	$sql .= ",VNos, VGross, VDed, VNet";
	$sql .= ",MNos, MGross, MDed, MNet";
	$sql .= ",ANos, AGross, ADed, ANet";
	$sql .= ",DNos, DGross, DDed, DNet";
	$sql .= ",CHNos, CHGross, CHDed, CHNet";
	$sql .= ",CANos, CAGross, CADed, CANet";
	$sql .= ",ONos, OGross, ODed, ONet";
	$sql .= ",TNos, TGross, TDed, TNet";
	$sql .= ",Verified, Approved FROM WeeklyReports";
	$result = mysqli_query($connection,$sql) or die (mysqli_error());
	echo '<form method="post" action="clear_table2.php">'."\n";
	while ($rad=mysqli_fetch_array($result)) 
	{
	   //$rad_total = $rad[5] + $rad[9] + $rad[13] + $rad[17] + $rad[21] + $rad[25] + $rad[29] ;

			echo "<table class=\"table table-condensed table-bordered table-hover\" style=\"width:500px;\" >\n";
		echo "<tr><th>Week No</th><td align=center><font color=red>$rad[0]</td><th>Date</th><td align=center><font color=red>$rad[1]</td><th>STD</th><td align=center><font color=red>$rad[33]</td></tr>";
		echo "<tr><th>From</th><td align=center><font color=red>$rad[2]</td><th>To</th><td align=center><font color=red>$rad[4]</td><th>Program Code</th><td align=center><font color=red>$rad[3]</td></tr>";
		echo "<tr><th>Items</th><th>Nos</th><th>Gross</th><th>Deduct</th><th>Net&nbsp;&nbsp;</th></tr>";
		echo "<tr><th>Visa</th><td align=center><font color=red>$rad[5]</td><td align=center><font color=red>$rad[6]</td><td align=center><font color=red>$rad[7]</td><td align=center><font color=red>$rad[8]</td></tr>";
		echo "<tr><th>Master</th><td align=center><font color=red>$rad[9]</td><td align=center><font color=red>$rad[10]</td><td align=center><font color=red>$rad[11]</td><td align=center><font color=red>$rad[12]</td></tr>";
		echo "<tr><th>Amex</th><td align=center><font color=red>$rad[13]</td><td align=center><font color=red>$rad[14]</td><td align=center><font color=red>$rad[15]</td><td align=center><font color=red>$rad[16]</td></tr>";
		echo "<tr><th>Diners</th><td align=center><font color=red>$rad[17]</td><td align=center><font color=red>$rad[18]</td><td align=center><font color=red>$rad[19]</td><td align=center><font color=red>$rad[20]</td></tr>";
		echo "<tr><th>Cheques</th><td align=center><font color=red>$rad[21]</td><td align=center><font color=red>$rad[22]</td><td align=center><font color=red>$rad[23]</td><td align=center><font color=red>$rad[24]</td></tr>";
		echo "<tr><th>Cash</th><td align=center><font color=red>$rad[25]</td><td align=center><font color=red>$rad[26]</td><td align=center><font color=red>$rad[27]</td><td align=center><font color=red>$rad[28]</td></tr>";
		echo "<tr><th>Others</th><td align=center><font color=red>$rad[29]</td><td align=center><font color=red>$rad[30]</td><td align=center><font color=red>$rad[31]</td><td align=center><font color=red>$rad[32]</td></tr>";
		echo "<tr style=\"background-color:#CCC;\"><th>TOTAL</th><td align=center><font color=red>$rad[33]</td><td align=center><font color=red>$rad[34]</td><td align=center><font color=red>$rad[35]</td><td align=center><font color=red>$rad[36]</td></tr>";
		echo "<tr><th>Verified by</th><td colspan=\"5\" align=center><font color=red>$rad[37]</td></tr>";
		echo "<tr><th>Approved by</th><td colspan=\"5\" align=center><font color=red>$rad[38]</td></tr>";

		echo "</table>\n";
		echo "<br>\n";
		echo "*************************************************************************";
		echo "<br>\n";
		echo "<br>\n";		
	}
	
	echo '</form>';
	logout_mysql();
?>
</div>
</div>
</div><!-- /col-md-12 -->
</div><!-- /container-fluid -->
</body>
</html>
