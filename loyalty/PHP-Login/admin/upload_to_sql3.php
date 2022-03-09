<html>
<head>

<title>Uploading to Database....</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(img/bg.jpg);
}
.style1 {color: #FFFFFF}
-->
</style></head>
<body>
<span class="style1">
<?php

include "sql_data3.php";  
include "sql_comm_helper3.php";

		echo ("File transfered to server OK... Saving file, Please wait... <br>");
	

		$ProgramCode 	= $_POST['ProgramCode'];
		$MembershipNo 	= $_POST['MembershipNo'];
		$Name 	= $_POST['Name'];
		$Date = $_POST['Date'];
		$Senton = $_POST['Senton'];
		$Rate 	= $_POST['Rate'];
				
		$Office 	= $_POST['Office'];
		$Home = $_POST['Home'];
		$Address = $_POST['Address'];
		$City 	= $_POST['City'];
		
		$Postcode 	= $_POST['Postcode'];
		$Manager = $_POST['Manager'];
		$SalesPerson = $_POST['SalesPerson'];
		$SName 	= $_POST['SName'];
		
		$CNo 	= $_POST['CNo'];
		$type = $_POST['type'];
		
		$VCCNo = $_POST['VCCNo'];
		$VExp 	= $_POST['VExp'];
		$VCVV 	= $_POST['VCVV'];
		
		$MCCNo = $_POST['MCCNo'];
		$MExp 	= $_POST['MExp'];
		$MCVV 	= $_POST['MCVV'];

		$ACCNo = $_POST['ACCNo'];
		$AExp 	= $_POST['AExp'];
		$ACVV 	= $_POST['ACVV'];

		$CName = $_POST['CName'];
		$Cash 	= $_POST['Cash'];

		$CHName = $_POST['CHName'];
		$Cheque 	= $_POST['Cheque'];
				

		login_mysql();
		select_db(FALSE);


		$sql = "INSERT IGNORE INTO membership (ProgramCode, MembershipNo, Name, Date, Senton, Rate";
		$sql .= ", Office, Home, Address, City";
		$sql .= ", Postcode, Manager, SalesPerson, SName";
		$sql .= ", CNo, type, VCCNo, VExp";
		$sql .= ", VCVV, MCCNo, MExp, MCVV";
		$sql .= ", ACCNo, AExp, ACVV, CName";
		$sql .= ", Cash, CHName, Cheque)";
				
		$sql .= " VALUES ('$ProgramCode','$MembershipNo','$Name','$Date','$Senton','$Rate'";
		$sql .= ",'$Office','$Home','$Address','$City'";
		$sql .= ",'$Postcode','$Manager','$SalesPerson','$SName'";
		$sql .= ",'$CNo','$type','$VCCNo','$VExp'";
		$sql .= ",'$VCVV','$MCCNo','$MExp','$MCVV'";
		$sql .= ",'$ACCNo','$AExp','$ACVV','$CName'";
		$sql .= ",'$Cash','$CHName','$Cheque')";
	
		mysql_query($sql) or die (mysql_error());			
			
		logout_mysql();
	
?>
</span>
</body>
</html>
