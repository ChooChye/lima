<?Php
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/

include "../include/session.php";
include "../config.php";

?>
<?php
include "sql_comm_helper4.php";
	include "sql_data4.php";

login_mysql();
	select_db(FALSE);
	$sql = "SELECT * FROM membership where MembershipNo='$_POST[MembershipNo]'";
	$result = mysql_query($sql) or die (mysql_error());
	while ($rowval=mysql_fetch_array($result)) 
	

 {
//<?php echo str_repeat("X", (strlen($example) - 4)).substr($example,-4,4); closing tag of PHP Here"\\

$ProgramCode= $rowval['ProgramCode'];
$MembershipNo= $rowval['MembershipNo'];
$Name= $rowval['Name'];
$Date= $rowval['Date'];
$Senton= $rowval['Senton'];
$Rate= $rowval['Rate'];
$Office= $rowval['Office'];
$Home= $rowval['Home'];
$Address= $rowval['Address'];
$City= $rowval['City'];
$Postcode= $rowval['Postcode'];
$Manager= $rowval['Manager'];
$SalesPerson= $rowval['SalesPerson'];
$SName= $rowval['SName'];
$CNo= $rowval['CNo'];
$type= $rowval['type']; //Payment Type Dropbox eg. (Visa, Master Card, Amex etc...
//Visa. Get Data from Database
$VCCNo= $rowval['VCCNo'];
$VExp= $rowval['VExp'];
$VCVV= $rowval['VCVV'];
//Visa. END
//MASTER
$MCCNo= $rowval['MCCNo'];
$MCVV= $rowval['MCVV'];
$MExp= $rowval['MExp'];
//Mastercard END
//AMEX
$ACCNo= $rowval['ACCNo'];
$ACVV= $rowval['ACVV'];
$AExp= $rowval['AExp'];
//AMEX END
//Cash,Cheque
$CName= $rowval['CName'];
$Cash= $rowval['Cash'];
$CHName= $rowval['CHName'];
$Cheque= $rowval['Cheque'];
//Cash,Cheque END
}
logout_mysql();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Membership Database</title>
<script type="text/javascript">

function display(obj,id1,id2,id3,id4,id5) {
txt = obj.options[obj.selectedIndex].value;
document.getElementById(id1).style.display = 'none';
document.getElementById(id2).style.display = 'none';
document.getElementById(id3).style.display = 'none';
document.getElementById(id4).style.display = 'none';
document.getElementById(id5).style.display = 'none';
if ( txt.match(id1) ) {
document.getElementById(id1).style.display = 'block';
}
if ( txt.match(id2) ) {
document.getElementById(id2).style.display = 'block';
}
if ( txt.match(id3) ) {
document.getElementById(id3).style.display = 'block';
}
if ( txt.match(id4) ) {
document.getElementById(id4).style.display = 'block';
}
if ( txt.match(id5) ) {
document.getElementById(id5).style.display = 'block';
}
}
// ]]>
</script>
<script type="text/javascript">
<!--
// Form validation code will come here.
function validate()
{
   if( document.form.MembershipNo.value == "" )
   {
     alert( "Please provide a Membership No.!" );
     document.form.MembershipNo.focus() ;
     return false;
   }
 //
 </script>
<style type="text/css">
<!--
body {
	background-image: url(../img/membership.jpg);
}
.style1 {color: #FFFFFF}
.style2 {color: #FFFFFF; font-weight: bold; }
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
<h2 align="center" class="style1">Membership Database</h2>

<table width="538" border="1" align="center">
  <tr>
    <td width="528"><form action="" method="POST">
  <p align="justify"><span class="style1">Program Code</span>
    <input name="ProgramCode" value='<?php echo  $ProgramCode; ?>' type="text" readonly/>
    &nbsp;&nbsp;&nbsp;<span class="style1"> Membership No.</span>
<input name="MembershipNo" value='<?php echo  $MembershipNo; ?>' type="text" size="10" />
</p>
  <p align="justify"><span class="style1">Name</span> 
    <input name="Name" value='<?php echo  $Name; ?>' type="text" size="29" readonly/>
	&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1">Date Join</span> 
	  <input name="Date" value='<?php echo  $Date; ?>' type="text" size="18" readonly/>
  </p>
	
	  <span class="style1">Sent on</span> 
	<input name="Senton" value='<?php echo  $Senton; ?>' type="text" size="17" readonly/>
	<span class="style1">Rate</span> 
	<input name="Rate" value='<?php echo  $Rate; ?>' type="text" size="15" readonly/>
<label><span class="style1"><?php echo $Office; ?></span></label>
    
	    <label><span class="style1"><?php echo $Home; ?></span></label>
	</p>
    </div>
  <p align="justify">
    
    <span class="style1">Address</span>
    <input name="Address" type="text" value='<?php echo  $Address; ?>' size="63" readonly/>
  </p>
	
  	  <p align="justify"><span class="style1">City</span> 
	    <input name="City" value='<?php echo  $City; ?>' type="text" readonly/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1">Postcode</span> 
	    <input name="Postcode" value='<?php echo  $Postcode; ?>' type="text" readonly/>
    </p>
	<p align="justify"><span class="style1">Manager</span> 
	  <input name="Manager" value='<?php echo  $Manager; ?>'  type="text" readonly/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style1">Sales Person</span> 
	  <input name="SalesPerson" value='<?php echo  $SalesPerson; ?>' type="text" size="20" readonly/>
    </p>
	<div align="justify" class="style2"><u>Supplementary Card</u> </div>
	<p align="justify"><span class="style1">Name</span> 
	  <input name="SName" value='<?php echo  $SName; ?>' type="text" readonly/>
	  &nbsp;&nbsp;<span class="style1">Card No.</span> 
	  <input name="CNo" value='<?php echo  $CNo; ?>' type="text" size="28" readonly/>
    </p>
		
  <div align="justify">
    <table width="473" cellspacing="1" cellpadding="0" border="0">
      <thead>
        <tr>
          <td class="title"><span class="style1"><font face=verdana size=2><b>Payment Types</b></font></span></td>
      <td class="field">
        <select name="type" onchange="display(this,'Visa','Master','Amex','Cash','Cheque');">
          <option value="" >Please Select:</option>
          <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
          </select></td>
      </tr>
      </thead>
	      
      <tfoot>
      </tfoot>
	      
      <tbody id="Visa" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Visa Credit Card No </font></td>
        <td><INPUT maxLength=55 name=VCCNo size=30 value="<?php echo str_repeat("X", (strlen($VCCNo) - 4)).substr($VCCNo,-4,4); ?>" readonly></td></tr>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Exp</font></td>
        <td><INPUT maxLength=55 name=VExp size=30 value="<?php echo $VExp; ?>" readonly></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>CVV</font></td>
        <td><INPUT maxLength=55 name=VCVV size=30 type="password" value="<?php echo $VCVV; ?>" readonly></TD></TR>
      </tbody>
	      
      <tbody id="Master" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Master Credit Card No </font></td>
        <td><INPUT maxLength=55 name=MCCNo size=28 value="<?php echo str_repeat("X", (strlen($MCCNo) - 4)).substr($MCCNo,-4,4); ?>"></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Exp</font></td>
        <td><INPUT maxLength=55 name=MExp size=28 value="<?php echo $MExp; ?>"></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>CVV</font></td>
        <td><INPUT maxLength=55 name=MCVV size=28 type="password" value="<?php echo $MCVV; ?>"></TD></TR>
      </tbody>
      <tbody id="Amex" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Amex Credit Card No </font></td>
        <td><INPUT maxLength=55 name=ACCNo size=30 value="<?php echo str_repeat("X", (strlen($ACCNo) - 4)).substr($ACCNo,-4,4); ?>" /></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Exp</font></td>
        <td><INPUT maxLength=55 name=AExp size=30 value="<?php echo $AExp; ?>"></TD></TR>
	        
        <tr>
          <td><span class="style1"><font face=verdana size=2>CVV</font></span></td>
        <td><INPUT maxLength=55 name=ACVV size=30 type="password" value="<?php echo $ACVV; ?>"></TD></TR>
      </tbody>
      <tbody id="Cash" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Name</font></td>
        <td><INPUT maxLength=55 name=CName size=30 value="<?php echo $CName; ?>"></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Amount</font></td>
        <td><INPUT maxLength=55 name=Cash size=30 value="<?php echo $Cash; ?>"></TD></TR>
      </tbody>
      <tbody id="Cheque" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Name</font></td>
        <td><INPUT maxLength=55 name=CHName size=30 value="<?php echo $CHName; ?>"></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Cheque No</font></td>
        <td><INPUT maxLength=55 name=Cheque size=30 value="<?php echo $Cheque; ?>"></TD></TR>
      </tbody>
      </table>
    </br>
    <div align="center">
      <input type="submit" value="Submit"><INPUT Type="BUTTON" VALUE="Back" ONCLICK="window.location.href='welcome.php'">
    </div></div>
</form></td>
  </tr>
</table>


</body>
</html>
