<html>
<head>
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=weeklysales.php">
<title>Uploading to Database....</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(img/8119.jpg);
}
.style1 {color: #FFFFFF}
-->
</style></head>
<body>
<span class="style1">
<?php

include "sql_data.php";  
include "sql_comm_helper.php";

		echo ("File transfered to server OK... Saving file, Please wait... <br>");
	

		$WeekNo 	= $_POST['WeekNo'];
		$Fr 	= $_POST['Fr'];
		$T 	= $_POST['T'];
		$ProgramCode 	= $_POST['ProgramCode'];
		$Date 	= $_POST['Date'];
		$VNos 	= $_POST['VNos'];
		$VGross = $_POST['VGross'];
		$VDed = $_POST['VDed'];
		$VNet 	= $_POST['VNet'];
				
		$MNos 	= $_POST['MNos'];
		$MGross = $_POST['MGross'];
		$MDed = $_POST['MDed'];
		$MNet 	= $_POST['MNet'];
		
		$ANos 	= $_POST['ANos'];
		$AGross = $_POST['AGross'];
		$ADed = $_POST['ADed'];
		$ANet 	= $_POST['ANet'];
		
		$DNos 	= $_POST['DNos'];
		$DGross = $_POST['DGross'];
		$DDed = $_POST['DDed'];
		$DNet 	= $_POST['DNet'];
		
		$CHNos 	= $_POST['CHNos'];
		$CHGross = $_POST['CHGross'];
		$CHDed = $_POST['CHDed'];
		$CHNet 	= $_POST['CHNet'];
		
		$CANos 	= $_POST['CANos'];
		$CAGross = $_POST['CAGross'];
		$CADed = $_POST['CADed'];
		$CANet 	= $_POST['CANet'];
		
		$ONos 	= $_POST['ONos'];
		$OGross = $_POST['OGross'];
		$ODed = $_POST['ODed'];
		$ONet 	= $_POST['ONet'];
		
		$TNos 	= $_POST['TNos'];
		$TGross = $_POST['TGross'];
		$TDed = $_POST['TDed'];
		$TNet 	= $_POST['TNet'];
		
		$Verified 	= $_POST['Verified'];
		$Approved = $_POST['Approved'];
		

		login_mysql();
		select_db(FALSE);


		$sql = "INSERT IGNORE INTO WeeklyReports (WeekNo, Fr, T,ProgramCode, Date";
		$sql .= ", VNos, VGross, VDed, VNet";
		$sql .= ", MNos, MGross, MDed, MNet";
		$sql .= ", ANos, AGross, ADed, ANet";
		$sql .= ", DNos, DGross, DDed, DNet";
		$sql .= ", CHNos, CHGross, CHDed, CHNet";
		$sql .= ", CANos, CAGross, CADed, CANet";
		$sql .= ", ONos, OGross, ODed, ONet";
		$sql .= ", TNos, TGross, TDed, TNet";
		$sql .= ", Verified, Approved)";
		
		$sql .= " VALUES ('$WeekNo','$Fr','$T','$ProgramCode','$Date'";
		$sql .= ",'$VNos','$VGross','$VDed','$VNet'";
		$sql .= ",'$MNos','$MGross','$MDed','$MNet'";
		$sql .= ",'$ANos','$AGross','$ADed','$ANet'";
		$sql .= ",'$DNos','$DGross','$DDed','$DNet'";
		$sql .= ",'$CHNos','$CHGross','$CHDed','$CHNet'";
		$sql .= ",'$CANos','$CAGross','$CADed','$CANet'";
		$sql .= ",'$ONos','$OGross','$ODed','$ONet'";
		$sql .= ",'$TNos','$TGross','$TDed','$TNet'";
		$sql .= ",'$Verified', '$Approved')";
	
		mysql_query($sql) or die (mysql_error());			
			
		logout_mysql();
	
?>
</span>
</body>
</html>
