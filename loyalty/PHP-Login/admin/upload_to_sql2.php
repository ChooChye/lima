<html>
<head>
<META HTTP-EQUIV=REFRESH CONTENT="3;URL=uploading.php">
<title>Uploading to Database....</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-image: url(_gen_img1_01.jpg);
}
.style1 {color: #FFFFFF}
-->
</style></head>
<body>
<span class="style1">
<?php

include "sql_data2.php";  // File that contains the SQL connection information.
include "sql_comm_helper2.php";

function parseInfo($checkBox, $infoText)
{
	if ($checkBox == "on")
	{
		return $infoText;
	}
	else if ($infoText != NULL)
	{
		$ret = "Not confirmed: " . $infoText;
		return $ret;
	}
	else
	{
		return "N/A";
	}
}

if (isset($_FILES['fileData'])) {
	if ($fileSize > (8192*8192)) // 2MB
	{
		echo ("File too big, max size is: " . ini_get('post_max_size') . "<br>");
		die ("Please try again with a smaller file!");
	}
	switch ($_FILES['fileData']['error'])
	{
		case UPLOAD_ERR_OK:
			echo ("File transfered to server OK... Trying to save file... <br>");
			break;
		case UPLOAD_ERR_INI_SIZE:
			echo ("The uploaded file exceeds the upload_max_filesize directive in php.ini");
			break;
		case UPLOAD_ERR_FORM_SIZE:
			echo ("The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.");
			break;
		case UPLOAD_ERR_PARTIAL:
			echo ("The uploaded file was only partially uploaded.");
			break;
		case UPLOAD_ERR_NO_FILE:
			echo ("No file was uploaded.");
			break;
		case UPLOAD_ERR_NO_TMP_DIR:
			echo ("Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.");
			break;
		case UPLOAD_ERR_CANT_WRITE:
			echo ("Failed to write file to disk. Introduced in PHP 5.1.0.");
			break;
		case UPLOAD_ERR_EXTENSION:
			echo ("File upload stopped by extension. Introduced in PHP 5.2.0.");
			break;
		default;
			echo ("Unknown upload error occured! : " . $_FILES['fileData']['error']);
			break;
	}	
	if (is_uploaded_file($_FILES['fileData']['tmp_name'])) {
		//if (empty($_POST['descript']))
		//{
		//	die ("A description is required, upload aborted, try again!");
		//}
		//else
		//{
		//	$descr = $_POST['descript'];
		//}
		$userName 		= $_POST['userName'];
		$userStreet 	= $_POST['userStreet'];
		
		$userEmail 		= $_POST['userEmail'];
		$userPhone 		= $_POST['userPhone'];
		$userCountry 	= $_POST['userCountry'];
		$userInfo1CB 	= $_POST['userInfo1isValid'];
		$userInfo2CB 	= $_POST['userInfo2isValid'];
		$userInfo3CB 	= $_POST['userInfo3isValid'];
		$userInfo1 		= $_POST['userInfo1'];
		$userInfo2 		= $_POST['userInfo2'];
		$userInfo3 		= $_POST['userInfo3'];
		$CompanyName	= $_POST['CompanyName'];
		
		$ClosingDate	= $_POST['ClosingDate'];
		$userInfo1 = parseInfo($userInfo1CB, $userInfo1);
		$userInfo2 = parseInfo($userInfo2CB, $userInfo2);
		$userInfo3 = parseInfo($userInfo3CB, $userInfo3);	
		$Log = ""  . date("D - M j  Y");
		$Position	    = $_POST['Position'];
		$Vacancises = $_POST['Vacancises'];
		login_mysql();
		select_db(FALSE);

		$tmpFileName = $_FILES['fileData']['tmp_name'];
		$fileType = $_FILES['fileData']['type'];
		$fileSize = filesize($tmpFileName);
		

		$fileData =addslashes (file_get_contents($tmpFileName));
		$realFileName = $_FILES['fileData']['name'];
		
		$sql = "INSERT INTO upload (fileName, fileType, fileSize, fileData, CompanyName";
		$sql .= ", userName, userStreetAddress,  userEmail, userPhone, userCountry, ClosingDate";
		$sql .= ", userInfo1, userInfo2, userInfo3, Log, Position, Vacancises)";
		$sql .= " VALUES ('$realFileName','$fileType','$fileSize','$fileData','$CompanyName'";
		$sql .= ",'$userName','$userStreet','$userEmail','$userPhone','$userCountry' , '$ClosingDate'";
		$sql .= ",'$userInfo1','$userInfo2','$userInfo3','$Log' , '$Position', '$Vacancises')";
		mysql_query($sql) or die (mysql_error());			
		$fil_id = mysql_insert_id();
			
	
		logout_mysql();
	

	}
	
}
?>
</span>
</body>
</html>
