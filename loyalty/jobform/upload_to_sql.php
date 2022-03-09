<html>
<head>
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=Jobapp.php">
<title>Uploading to Database....</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(bg.jpg);
	
}
.style1 {color: #FFFFFF}
-->
</style></head>
<body>
<span class="style1">
<?php

include "sql_data.php";  
include "sql_comm_helper.php";

		echo ("File transfered to server OK... Trying to save file... <br>");
	

		$positionapply 	= $_POST['positionapply'];
		$name 	= $_POST['name'];
		$address 	= $_POST['address'];
		$address1 = $_POST['address1'];
		$address2 = $_POST['address2'];
		$no 	= $_POST['no'];
				
		$m 	= $_POST['m'];
		$f = $_POST['f'];
		$age = $_POST['age'];
		$dob 	= $_POST['dob'];
		
		$race 	= $_POST['race'];
		$citi = $_POST['citi'];
		$religion = $_POST['religion'];
		$mstat 	= $_POST['mstat'];
		
		$hpno 	= $_POST['hpno'];
		$telno = $_POST['telno'];
		$email = $_POST['email'];
		$tnone 	= $_POST['tnone'];
		
		$tmoto 	= $_POST['tmoto'];
		$tcar = $_POST['tcar'];
		$tothers = $_POST['tothers'];
		$lclass 	= $_POST['lclass'];
		
		$wy 	= $_POST['wy'];
		$wn = $_POST['wn'];
		$edu1 = $_POST['edu1'];
		$edu2 	= $_POST['edu2'];
		
		$edu3 	= $_POST['edu3'];
		$edu4 = $_POST['edu4'];
		$eng = $_POST['eng'];
		$my 	= $_POST['my'];
		
		$ch 	= $_POST['ch'];
		$ind = $_POST['ind'];
		$other = $_POST['other'];
		$ncompany = $_POST['ncompany'];
		$position = $_POST['position'];
		$year = $_POST['year'];
		$leave = $_POST['leave'];

		$ncompany1 = $_POST['ncompany1'];
		$position1 = $_POST['position1'];
		$year1 = $_POST['year1'];
		$leave1 = $_POST['leave1'];

		$ncompany2 = $_POST['ncompany2'];
		$position2 = $_POST['position2'];
		$year2 = $_POST['year2'];
		$leave2 = $_POST['leave2'];
		
		$ncompany3 = $_POST['ncompany3'];
		$position3 = $_POST['position3'];
		$year3 = $_POST['year3'];
		$leave3 = $_POST['leave3'];
		
		$rname = $_POST['rname'];
		$rposition = $_POST['rposition'];
		$rhpno = $_POST['rhpno'];
		
		$rname1 = $_POST['rname1'];
		$rposition1 = $_POST['rposition1'];
		$rhpno1 = $_POST['rhpno1'];

		$rname2 = $_POST['rname2'];
		$rposition2 = $_POST['rposition2'];
		$rhpno2 = $_POST['rhpno2'];
		
		$rname3 = $_POST['rname3'];
		$rposition3 = $_POST['rposition3'];
		$rhpno3 = $_POST['rhpno3'];
		
		$expsal = $_POST['expsal'];
		$startwork = $_POST['startwork'];
		
		$erelationship1 = $_POST['erelationship1'];
		$erelationship2 = $_POST['erelationship2'];
		
		$ehpno1 = $_POST['ehpno1'];
		$ehpno2 = $_POST['ehpno2'];
		
		
		login_mysql();
		select_db(FALSE);

//send the email
		$to = 'cslim@lima-asiadynamics.com';
		
		$subject="Test mail";
		$from = $email;
		$body = "First Name: $name\n".
		"Position Applied: $positionapply\n".
		"Email: $email \n".
		"IC/Passport No.: $no \n".
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $$from \r\n";
		//$headers .= "\r\nCc: $cc";
		mail($to, $subject, $body,$headers);
		
		$sql = "INSERT INTO jobs(positionapply, name, address,address1, address2";
		$sql .= ", no, m, f, age";
		$sql .= ", dob, race, citi, religion";
		$sql .= ", mstat, hpno, telno, email";
		$sql .= ", tnone, tmoto, tcar, tothers";
		$sql .= ", lclass, wy, wn, edu1";
		$sql .= ", edu2, edu3, edu4, eng";
		$sql .= ", my, ch";
		$sql .= ", ind, other";
		$sql .= ", ncompany, position, year, lea";
		$sql .= ", ncompany1, position1, year1, leave1";
		$sql .= ", ncompany2, position2, year2, leave2";
		$sql .= ", ncompany3, position3, year3, leave3";
		$sql .= ", rname, rposition, rhpno";
		$sql .= ", rname1, rposition1, rhpno1";
		$sql .= ", rname2, rposition2, rhpno2";
		$sql .= ", rname3, rposition3, rhpno3";
		$sql .= ", expsal, startwork, erelationship1";
		$sql .= ", erelationship2, ehpno1, ehpno2)";
		
		$sql .= " VALUES ('$positionapply','$name','$address','$address1','$address2'";
		$sql .= ",'$no','$m','$f','$age'";
		$sql .= ",'$dob','$race','$citi','$religion'";
		$sql .= ",'$mstat','$hpno','$telno','$email'";
		$sql .= ",'$tnone','$tmoto','$tcar','$tothers'";
		$sql .= ",'$lclass','$wy','$wn','$edu1'";
		$sql .= ",'$edu2','$edu3','$edu4','$eng'";
		$sql .= ",'$my','$ch','$ind','$other'";
		$sql .= ",'$ncompany','$position','$year','$lea'";
		$sql .= ",'$ncompany1','$position1','$year1','$leave1'";
		$sql .= ",'$ncompany2','$position2','$year2','$leave2'";
		$sql .= ",'$ncompany3','$position3','$year3','$leave3'";
		$sql .= ",'$rname','$rposition','$rhpno'";
		$sql .= ",'$rname1','$rposition1','$rhpno1'";
		$sql .= ",'$rname2','$rposition2','$rhpno2'";
		$sql .= ",'$rname3','$rposition3','$rhpno3'";
		$sql .= ",'$expsal','$startwork','$erelationship1'";
		$sql .= ",'$erelationship2', '$ehpno1', '$ehpno2')";
	
		mysql_query($sql) or die (mysql_error());			
			
		logout_mysql();
	
?>
</span>
</body>
</html>
