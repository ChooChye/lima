<html>
<head>
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=dailysales.php">
<title>Uploading to Database....</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(img/8119.jpg);
	background-repeat: repeat;
}
.style1 {color: #FFFFFF}
-->
</style></head>
<body>
<span class="style1">
<?php

include "sql_data2.php";  
include "sql_comm_helper.php";

		echo ("File transfered to server OK... Saving file, Please wait... <br>");
	
		$ProgramCode 	= $_POST['ProgramCode'];
		$Date 	= $_POST['Date'];
		$VNos 	= $_POST['VNos'];
		$VGross = $_POST['VGross'];
		$VLBCom = $_POST['VLBCom'];
		$VNet 	= $_POST['VNet'];
				
		$MNos 	= $_POST['MNos'];
		$MGross = $_POST['MGross'];
		$MLBCom = $_POST['MLBCom'];
		$MNet 	= $_POST['MNet'];
		
		$ANos 	= $_POST['ANos'];
		$AGross = $_POST['AGross'];
		$ALBCom = $_POST['ALBCom'];
		$ANet 	= $_POST['ANet'];
		
		$DNos 	= $_POST['DNos'];
		$DGross = $_POST['DGross'];
		$DLBCom = $_POST['DLBCom'];
		$DNet 	= $_POST['DNet'];
		
		$CHNos 	= $_POST['CHNos'];
		$CHGross = $_POST['CHGross'];
		$CHLBCom = $_POST['CHLBCom'];
		$CHNet 	= $_POST['CHNet'];
		
		$CANos 	= $_POST['CANos'];
		$CAGross = $_POST['CAGross'];
		$CALBCom = $_POST['CALBCom'];
		$CANet 	= $_POST['CANet'];
		
		$TNos 	= $_POST['TNos'];
		$TGross = $_POST['TGross'];
		$TLBCom = $_POST['TLBCom'];
		$TNet 	= $_POST['TNet'];
		
		$Verified 	= $_POST['Verified'];
		$Approved = $_POST['Approved'];
		
		$remarks = $_POST['remarks'];

		login_mysql();
		select_db(FALSE);


		$sql = "INSERT INTO Dailyreports (ProgramCode, Date, VNos, VGross, VLBCom, VNet";
		$sql .= ", MNos, MGross, MLBCom, MNet";
		$sql .= ", ANos, AGross, ALBCom, ANet";
		$sql .= ", DNos, DGross, DLBCom, DNet";
		$sql .= ", CHNos, CHGross, CHLBCom, CHNet";
		$sql .= ", CANos, CAGross, CALBCom, CANet";
		$sql .= ", TNos, TGross, TLBCom, TNet";
		$sql .= ", Verified, Approved, remarks)";
		$sql .= " VALUES ('$ProgramCode','$Date','$VNos','$VGross','$VLBCom','$VNet'";
		$sql .= ",'$MNos','$MGross','$MLBCom','$MNet'";
		$sql .= ",'$ANos','$AGross','$ALBCom','$ANet'";
		$sql .= ",'$DNos','$DGross','$DLBCom','$DNet'";
		$sql .= ",'$CHNos','$CHGross','$CHLBCom','$CHNet'";
		$sql .= ",'$CANos','$CAGross','$CALBCom','$CANet'";
		$sql .= ",'$TNos','$TGross','$TLBCom','$TNet'";
		$sql .= ", '$Verified', '$Approved', '$remarks')";
		mysql_query($sql) or die (mysql_error());			
			
		logout_mysql();
	
?>
</span>
</body>
</html>
