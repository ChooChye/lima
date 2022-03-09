<?Php

include "include/session.php";
include "config.php";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Insert Daily Sales Data</title>
<style type="text/css">
<!--
body {
	background-image: url(img/Background.jpg);
}
.style1 {color: #FFFFFF}
.style3 {color: #FFFFFF; font-weight: bold; }
-->
</style>
<script type="text/javascript">
function validate()
{
if( document.form.ProgramCode.value == "" )
   {
     alert( "Please provide Program Code!" );
     document.form.ProgramCode.focus() ;
     return false;
   }

   if( document.form.Date.value == "" )
   {
     alert( "Please enter date!" );
     document.form.Date.focus() ;
     return false;
   }
   
   if( document.form.VNos.value == "" )
   {
     alert( "Please provide No. of Sales (Visa)!" );
     document.form.VNos.focus() ;
     return false;
   }
   if( document.form.VGross.value == "" )
   {
     alert( "Please fill up Visa Gross field!" );
     document.form.VGross.focus() ;
     return false;
   }
  if( document.form.VDed.value == "" )
   {
     alert( "Please fill up Visa Deduct field!" );
     document.form.VDed.focus() ;
     return false;
   }
   if( document.form.VNet.value == "" )
   {
     alert( "Please fill up Visa Net filed!" );
     document.form.VNet.focus() ;
     return false;
   }
   if( document.form.MNos.value == "" )
   {
     alert( "Please provide No. of Sales (Master)!" );
     document.form.MNos.focus() ;
     return false;
   }
   if( document.form.MGross.value == "" )
   {
     alert( "Please fill up Master Gross field!" );
     document.form.MGross.focus() ;
     return false;
   }
  if( document.form.MDed.value == "" )
   {
     alert( "Please fill up Master Deduct field!" );
     document.form.MDed.focus() ;
     return false;
   }
   if( document.form.MNet.value == "" )
   {
     alert( "Please fill up Master Net filed!" );
     document.form.MNet.focus() ;
     return false;
   }
     if( document.form.ANos.value == "" )
   {
     alert( "Please provide No. of Sales (Amex)!" );
     document.form.ANos.focus() ;
     return false;
   }
   if( document.form.AGross.value == "" )
   {
     alert( "Please fill up Amex Gross field!" );
     document.form.AGross.focus() ;
     return false;
   }
  if( document.form.ADed.value == "" )
   {
     alert( "Please fill up Amex Deduct field!" );
     document.form.ADed.focus() ;
     return false;
   }
   if( document.form.ANet.value == "" )
   {
     alert( "Please fill up Amex Net filed!" );
     document.form.ANet.focus() ;
     return false;
   }
      if( document.form.DNos.value == "" )
   {
     alert( "Please provide No. of Sales (Diners)!" );
     document.form.DNos.focus() ;
     return false;
   }
   if( document.form.DGross.value == "" )
   {
     alert( "Please fill up Diners Gross field!" );
     document.form.DGross.focus() ;
     return false;
   }
  if( document.form.DDed.value == "" )
   {
     alert( "Please fill up Diners Deduct field!" );
     document.form.DDed.focus() ;
     return false;
   }
   if( document.form.DNet.value == "" )
   {
     alert( "Please fill up Diners Net filed!" );
     document.form.DNet.focus() ;
     return false;
   }
      if( document.form.CHNos.value == "" )
   {
     alert( "Please provide No. of Sales (Cheques)!" );
     document.form.CHNos.focus() ;
     return false;
   }
   if( document.form.CHGross.value == "" )
   {
     alert( "Please fill up Cheque Gross field!" );
     document.form.CHGross.focus() ;
     return false;
   }
  if( document.form.CHDed.value == "" )
   {
     alert( "Please fill up Cheque Deduct field!" );
     document.form.CHDed.focus() ;
     return false;
   }
   if( document.form.CHNet.value == "" )
   {
     alert( "Please fill up Cheque Net filed!" );
     document.form.CHNet.focus() ;
     return false;
	 }
	    if( document.form.CANos.value == "" )
   {
     alert( "Please provide No. of Sales (Cash)!" );
     document.form.CANos.focus() ;
     return false;
   }
   if( document.form.CAGross.value == "" )
   {
     alert( "Please fill up Cash Gross field!" );
     document.form.CAGross.focus() ;
     return false;
   }
  if( document.form.CADed.value == "" )
   {
     alert( "Please fill up Cash Deduct field!" );
     document.form.CADed.focus() ;
     return false;
   }
   if( document.form.CANet.value == "" )
   {
     alert( "Please fill up Cash Net filed!" );
     document.form.CANet.focus() ;
     return false;
   }
       if( document.form.ONos.value == "" )
   {
     alert( "Please provide No. of Sales (Others)!" );
     document.form.ONos.focus() ;
     return false;
   }
   if( document.form.OGross.value == "" )
   {
     alert( "Please fill up Others Gross field!" );
     document.form.OGross.focus() ;
     return false;
   }
  if( document.form.ODed.value == "" )
   {
     alert( "Please fill up Others Deduct field!" );
     document.form.ODed.focus() ;
     return false;
   }
   if( document.form.ONet.value == "" )
   {
     alert( "Please fill up Others Net filed!" );
     document.form.ONet.focus() ;
     return false;
   }
       if( document.form.Verified.value == "" )
   {
     alert( "Please provide Verified by!" );
     document.form.Verified.focus() ;
     return false;
   }
   if( document.form.Approved.value == "" )
   {
     alert( "Please fill up Approved field!" );
     document.form.Approved.focus() ;
     return false;
   }
 
   return( true );
}
</script>
</head>

<body>

<?Php
if(!isset($_SESSION['admin_userid'])){
echo "<center><font face='Verdana' size='2' color=white>Sorry, Please <a href=index.php style='color: #ff0000'>login</a> and use this page </font></center>";
exit;
} 

else{
echo "<center><font face='Time New Romans' size='3' color=white>Welcome $_SESSION[admin_userid]</br><center> ";
echo "<center><font face='Time New Romans' size='3' color=white><a href='../welcome.php'  style='color: #ffffff'>Back</a> | <a href='../logout.php'  style='color: #ffffff'>Logout</a></font></center>";
}
?>

  </br>
</div>
<h2 align="center" class="style1">Daily Sales Report</h2>

<div align="center">
<th scope="col"><form enctype="multipart/form-data" [ccc] action="upload_to_sql2.php" method="POST" name="form" onsubmit="return(validate());">
  <table width="395" border="1">
  <tr>
    <td width="606"><span class="style3">DAILY SALES REPORT</span></td>
  </tr>
</table><table width="395" border="1">
  <tr>
    <td width="198"><span class="style1">Program Code </span> 
      <input type="text" name="ProgramCode" size="10" />
      </td>
    <td width="181"><span class="style1">Date </span> 
      <input name="Date" type="text" size="10" /></td>
  </tr>
</table><table width="395" border="1">
  <tr>
    <td width="62"><span class="style1">Item</span></td>
    <td width="59"><div align="center"><span class="style1">Nos</span></div></td>
    <td width="59"><div align="center"><span class="style1">Gross</span></div></td>
    <td width="108"><div align="center"><span class="style1">Less Bank Com.</span></div></td>
    <td width="73"><div align="center"><span class="style1">Net</span></div></td>
  </tr>
  <tr>
    <td><span class="style1">Visa</span></td>
    <td><input name="VNos" type="text" size="6"/></td>
    <td><input name="VGross" type="text"size="6"/></td>
    <td><input name="VLBCom" type="text"size="12"/></td>
    <td><input name="VNet" type="text"size="7"/></td>
  </tr>
  <tr>
    <td><span class="style1">Master</span></td>
    <td><input name="MNos" type="text"size="6"/></td>
    <td><input name="MGross" type="text"size="6"/></td>
    <td><input name="MLBCom" type="text"size="12"/></td>
    <td><input name="MNet" type="text"size="7"/></td>
  </tr>
  <tr>
    <td><span class="style1">Amex</span></td>
    <td><input name="ANos" type="text"size="6"/></td>
    <td><input name="AGross" type="text"size="6"/></td>
    <td><input name="ALBCom" type="text"size="12"/></td>
    <td><input name="ANet" type="text"size="7"/></td>
  </tr>
  <tr>
    <td><span class="style1">Diners</span></td>
    <td><input name="DNos" type="text"size="6"/></td>
    <td><input name="DGross" type="text"size="6"/></td>
    <td><input name="DLBCom" type="text"size="12"/></td>
    <td><input name="DNet" type="text"size="7"/></td>
  </tr>
  <tr>
    <td><span class="style1">Cheques</span></td>
    <td><input name="CHNos" type="text"size="6"/></td>
    <td><input name="CHGross" type="text"size="6"/></td>
    <td><input name="CHLBCom" type="text"size="12"/></td>
    <td><input name="CHNet" type="text"size="7"/></td>
  </tr>
  <tr>
    <td><span class="style1">Cash</span></td>
    <td><input name="CANos" type="text"size="6"/></td>
    <td><input name="CAGross" type="text"size="6"/></td>
    <td><input name="CALBCom" type="text"size="12"/></td>
    <td><input name="CANet" type="text"size="7"/></td>
  </tr>
  <tr>
    <td><span class="style3">TOTAL</span></td>
    <td><input name="TNos" type="text"size="6"/></td>
    <td><input name="TGross" type="text"size="6"/></td>
    <td><input name="TLBCom" type="text"size="12"/></td>
    <td><input name="TNet" type="text"size="7"/></td>
  </tr>
</table>
<table>
    <tr>
    <td>Remarks</td>
    </tr>
    <tr>
    <td><textarea name="remarks" rows="5" cols="50"></textarea></td>
    </tr>
</table>
<hr/>
<table width="395" border="1">
  <tr>
    <td width="134"><span class="style1">Verified by : </span></td>
    <td width="297"><input name="Verified" type="text"/></td>
  </tr>
  <tr>
    <td><span class="style1">Approved by : </span></td>
    <td><input name="Approved" type="text"/></td>
  </tr>
</table></br>
</br>
      <input type="submit" name="submit" value="Submit"><input type="BUTTON" VALUE="Back" onclick="window.location.href='../welcome.php'">
  </form></th>
    </tr>
  </table>
</div>
<div align="center"><span class="style1">
    <?php

	//session_start();
	include "sql_comm_helper.php";
	include "sql_data2.php";  // File that contains the SQL connection information.

	login_mysql();
	select_db(FALSE);
	$sql = "SELECT ProgramCode, Date, VNos, VGross, VLBCom, VNet";
	$sql .= ",MNos, MGross, MLBCom, MNet";
	$sql .= ",ANos, AGross, ALBCom, ANet";
	$sql .= ",DNos, DGross, DLBCom, DNet";
	$sql .= ",CHNos, CHGross, CHLBCom, CHNet";
	$sql .= ",CANos, CAGross, CALBCom, CANet";
	$sql .= ",TNos, TGross, TLBCom, TNet";
	$sql .= ",Verified, Approved FROM Dailyreports";
	$result = mysql_query($sql) or die (mysql_error());
	
	logout_mysql();
?>


  </span></div>
</body>
</html>
