<?php



$errormsg = "<p><button onClick=\"history.go(-1)\">Retry</button></p>";







if(!isset($_POST['name']) && !isset($_POST['email']) && !isset($_POST['submit']))



{



	echo "";



}



else 



{



	$name = addslashes($_POST['name']);



	if ($name == NULL || $name == "")



	{



		die ("<div class=\"error\"><h3>Please enter your Business Name</h3></div> $errormsg");



		



	} else if (strlen($name) < 3){



		die ("<div class=\"error\"><h3>Invalid Business Name, Please re-enter</h3></div> $errormsg");



	}



	



	$address = addslashes($_POST['address']);



	if ($address == NULL){



		die ("<div class=\"error\"><h3>Please enter your Business Address</h3><br></div>$errormsg");



	} else if (strlen($address) < 10) {



		die ("<div class=\"error\"><h3>Invalid Business Address, Please re-enter</h3></div> $errormsg");



	}



	



	$cp = addslashes($_POST['cp']);



	if ($cp == NULL) {



		die ("<div class=\"error\"><h3>Please enter your Name</h3></div> $errormsg");



	}



	



	$cp_position = addslashes($_POST['cp_position']);



	if ($cp_position == NULL) {



	    die ("<div class=\"error\"><h3>Please enter your Position</h3></div> $errormsg");	



	}



	$hp = addslashes($_POST['hp']);



	if($hp == NULL){



		die ("<div class=\"error\"><h3>Please enter your Phone No.</h3><br></div> $errormsg");



	} else if (strlen($hp) < 9 || strlen($hp) > 11) {



		die ("<div class=\"error\"><h3>Invalid Phone No. Please re-enter</h3></div> $errormsg");



	}



	$email = addslashes($_POST['email']);



      if($email == NULL || $email == ""){



		die ("<div class=\"error\"><h3>Please enter your Email address</h3><br></div>$errormsg"); 



	  } 



	  function validate_email($email) {



    return (preg_match("/(@.*@)|(\.\.)|(@\.)|(\.@)|(^\.)/", $email) || !preg_match("/^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/", $email)) ? false : true;



}



	$url = addslashes(trim(htmlentities($_POST['url'])));



	



	$rm = addslashes($_POST['rm']);



	if($rm == NULL){



		die ("<div class=\"error\"><h3>Please enter a Amount/Percentage</h3><br></div>$errormsg");



	}



	



	$service = addslashes($_POST['service']);



	if($service == NULL){



		die ("<div class=\"error\"><h3>Please enter the empty field</h3><br></div>$errormsg");



	}



	



	$name_owner = addslashes($_POST['name-owner']);



	if($name_owner == NULL){



		die ("<div class=\"error\"><h3>Please enter the Name of the Owner/Manager</h3><br></div>$errormsg");



	}



	



	$name_rep = addslashes($_POST['name-rep']);



	if($name_rep == NULL){



		die ("<div class=\"error\"><h3>Please enter the Name of the Represetative</h3><br></div>$errormsg");



	}



	



	$contract_from = addslashes($_POST['contract-from']);



	if($contract_from == NULL){



		die ("<div class=\"error\"><h3>Please enter the Contract Date (from)</h3><br></div>$errormsg");



	}



	



    $contract_to = addslashes($_POST['contract-to']);



	if($contract_to == NULL){



		die ("<div class=\"error\"><h3>Please enter the Contract Date (to)</h3><br></div>$errormsg");



	}



	



	$agree = addslashes($_POST['agree']);



	  if($agree == NULL){



		die ("<div class=\"error\"><h3>Umm... I wont send if you don't agree to our Terms and Conditions</h3></div><br>$errormsg");  



	 }



	 //Message



	 $message .= "<html> \r\n 



	           <table width=\"500\" border=\"1\" cellpadding=\"5\">



  <tr>



    <td><b>Business Name:</b></td>



    <td>$name</td>



  </tr>



  <tr>



    <td><b>Business Address</b></td>



    <td>$address</td>



  </tr>



  <tr>



    <td><b>Contact Person</b></td>



    <td>$cp</td>



  </tr>



  <tr>



    <td><b>Position</b></td>



    <td>$cp_position</td>



  </tr>



  <tr>



    <td><b>Phone No.:</b></td>



    <td>$hp</td>



  </tr>



  <tr>



    <td><b>Email address:</b></td>



    <td>$email</td>



  </tr>



  <tr>



    <td><b>URL:</b></td>



    <td><a href=\"$url\">$url</a></td>



  </tr>



  <tr>



    <td><b>Amount/Percentage offer:</b></td>



    <td>$rm</td>



  </tr>



  <tr>



    <td><b>Items, Services or Other terms</b></td>



    <td>$service</td>



  </tr>



  <tr>



    <td><b>Name of Owner</b></td>



    <td>$name_owner</td>



  </tr>



  <tr>



    <td><b>Name of Representative</b></td>



    <td>$name_rep</td>



  </tr>



  <tr>



    <td><b>This contract is valid for one(1) year</b></td>



    <td><i>$contract_from</i> to <i>$contract_to</i></td>



  </tr>



  <tr>



    <td colspan=\"2\">$agree</td>



  </tr>



</table>







			   </html>";



	 



	 



    $to      = 'contact@dms-asiadynamics.com';



    $subject = $name;



	$headers  = "From: $email\r\n";



    $headers .= "Reply-To: $email\r\n";



    $headers .= "Return-Path: $email\r\n";



    $headers .= "MIME-Version: 1.0\r\n";



    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";







    $send = mail($to, $subject, $message, $headers);



	if ($send == TRUE)



	{



		echo "<div class=\"success\" id=\"success\"><h2>Thank you your application has been sent</h2></div>";



	}



	else 



	{



		die ("<div class=\"error\"><h2>Oops.. There seems to be a technical error<br>Please try again later</h2></div><br>$errormsg");



		



		



	}



}











?>