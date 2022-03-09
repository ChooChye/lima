<?php

// CHANGE THE VARIABLES BELOW

$EmailFrom = Trim(stripslashes($_POST['Email'])); ";
$EmailTo = "info@crystalrewardz.com";
$Subject = Trim(stripslashes($_POST['Subject'])); ";

$Name = Trim(stripslashes($_POST['Name']));
$Email = Trim(stripslashes($_POST['Email']));  
$Subject = Trim(stripslashes($_POST['Subject'])); 
$Message = Trim(stripslashes($_POST['Message'])); 

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $Subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page
// CHANGE THE URL BELOW TO YOUR "THANK YOU" PAGE
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=Thank.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>