<?Php
include "../include/session.php";
include "../config.php";


   
check_role($_SESSION['admin_authority'], 'admin');

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
   if( document.form.ProgramCode.value == "" )
   {
     alert( "Please provide Program Code!" );
     document.form.ProgramCode.focus() ;
     return false;
   }
   if( document.form.MembershipNo.value == "" )
   {
     alert( "Please provide your Membership No.!" );
     document.form.MembershipNo.focus() ;
     return false;
   }
   if( document.form.Name.value == "" )
   {
     alert( "Please provide your Name!" );
     document.form.Name.focus() ;
     return false;
   }
   if( document.form.Date.value == "" )
   {
     alert( "Please provide your Date!" );
     document.form.Date.focus() ;
     return false;
   }
   if( document.form.Senton.value == "" )
   {
     alert( "Please provide your Sent on!" );
     document.form.Senton.focus() ;
     return false;
   }
   if( document.form.Rate.value == "" )
   {
     alert( "Please provide your Rate!" );
     document.form.Rate.focus() ;
     return false;
   }
   if( document.form.Address.value == "" )
   {
     alert( "Please provide your Address!" );
     document.form.Address.focus() ;
     return false;
   }
  if( document.form.City.value == "" )
   {
     alert( "Please provide City Name!" );
     document.form.City.focus() ;
     return false;
   }
   if( document.form.Postcode.value == "" )
   {
     alert( "Please provide Postcode!" );
     document.form.Postcode.focus() ;
     return false;
   }
   if( document.form.Manager.value == "" )
   {
     alert( "Please provide your Manager Name!" );
     document.form.Manager.focus() ;
     return false;
   }
   if( document.form.SalesPerson.value == "" )
   {
     alert( "Please provide Name of Sales Person!" );
     document.form.SalesPerson.focus() ;
     return false;
   }
   if( document.form.SName.value == "" )
   {
     alert( "Please provide your SName!" );
     document.form.SName.focus() ;
     return false;
   }
   if( document.form.CNo.value == "" )
   {
     alert( "Please provide Card No.!" );
     document.form.CNo.focus() ;
     return false;
   }
   
  
   return( true );
}
    
//-->
</script>  
<style type="text/css">
<!--
body {
	background-image: url(img/membership.jpg);
}
.style1 {color: #FFFFFF}
.style2 {color: #FFFFFF; font-weight: bold; }
-->
</style> 
</head>

<body>

<?Php
if(!isset($_SESSION['admin_userid'])){
echo "<center><font face='Verdana' size='2' color=white>Sorry, Please <a href=../index.php style='color: #ff0000'>login</a> and use this page </font></center>";
exit;
}else{
echo "<center><font face='Time New Romans' size='4' color=\"white\">Welcome $_SESSION[admin_userid]</br><center> ";
echo "<center><font face='Time New Romans' size='3' color=\"white\"><a href=\"../welcome.php\" style='color: #ffffff' >Back</a> | <a href=\"../change-password.php\" style='color: #ffffff' > Change Password</a> | <a href=\"../logout.php\" style='color: #ffffff' >Logout</a></font></center>";
}
?>
</br>
<h2 align="center" class="style1">Membership Database</h2>

<table width="538" border="1" align="center">
  <tr>
    <td width="528"><form enctype="multipart/form-data" [ccc] action="upload_to_sql3.php" method="POST" name="form"  onsubmit="return(validate());">
    <p>
        <span class="style1">Program Code</span>
        <input name="ProgramCode" type="text" />
        <span class="style1">Membership No.</span>
        <input name="MembershipNo" type="text" size="10" />
    </p>
    <p>
        <span class="style1">Name</span> 
        <input name="Name" type="text" size="29" />
        <span class="style1">Date Join</span> 
        <input name="Date" type="text" size="18"/>
    </p>
	<p>
	    <span class="style1">Sent on</span> 
	    <input name="Senton" type="text" size="17"/>
	    <span class="style1">Rate</span> 
		<input name="Rate" type="text" size="15"/>
	</p>
	<p>
	    <label>
	        <input type="checkbox" name="Office" value="Office" />
	        <span class="style1">Office</span>
        </label>
	    <label>
	        <input type="checkbox" name="Home" value="Home" />
	        <span class="style1">Home</span>
        </label>
	</p>
    <p>
        <span class="style1">Address</span>
        <input name="Address" type="text" value="" size="63" />
    </p>
  	<p><span class="style1">City</span> 
    	<input name="City" type="text"/>
    	<span class="style1">Postcode</span> 
    	<input name="Postcode" type="text"/>
    </p>
	<p>
	    <span class="style1">Manager</span> 
	    <input name="Manager" type="text"/>
	    <span class="style1">Sales Person</span> 
	    <input name="SalesPerson" type="text" size="20"/>
    </p>
	<div align="justify" class="style2"><u>Supplementary Card</u> </div>
	<p>
	    <span class="style1">Name</span> 
	    <input name="SName" type="text"/>
	    <span class="style1">Card No.</span> 
	    <input name="CNo" type="text" size="28"/>
    </p>
		
  <div align="justify">
    <table width="473" cellspacing="1" cellpadding="0" border="0">
      <thead>
        <tr>
          <td class="title"><span class="style1"><font face=verdana size=2><b>Payment Types</b></font></span></td>
      <td class="field"><select name="type" onchange="display(this,'Visa','Master','Amex','Cash','Cheque');">
        <option>Please select:</option>
        <option value="Visa">Visa</option>
        <option value="Master">Master</option>
        <option value="Amex">Amex</option>
        <option value="Cash">Cash</option>
        <option value="Cheque">Cheque</option>
        <option value="Complimentary">Complimentary</option>
        <option value="Others">Others</option>
      </select></td>
      </tr>
      </thead>
	      
      <tfoot>
      </tfoot>
	      
      <tbody id="Visa" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Visa Credit Card No </font></td>
        <td><INPUT maxLength=55 name=VCCNo size=30></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Exp</font></td>
        <td><INPUT maxLength=55 name=VExp size=30></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>CVV</font></td>
        <td><INPUT maxLength=55 name=VCVV size=30 type="password"></TD></TR>
      </tbody>
	      
      <tbody id="Master" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Master Credit Card No </font></td>
        <td><INPUT maxLength=55 name=MCCNo size=28></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Exp</font></td>
        <td><INPUT maxLength=55 name=MExp size=28></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>CVV</font></td>
        <td><INPUT maxLength=55 name=MCVV size=28 type="password"></TD></TR>
      </tbody>
      <tbody id="Amex" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Amex Credit Card No </font></td>
        <td><INPUT maxLength=55 name=ACCNo size=30></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Exp</font></td>
        <td><INPUT maxLength=55 name=AExp size=30></TD></TR>
	        
        <tr>
          <td><span class="style1"><font face=verdana size=2>CVV</font></span></td>
        <td><INPUT maxLength=55 name=ACVV size=30 type="password"></TD></TR>
      </tbody>
      <tbody id="Cash" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Name</font></td>
        <td><INPUT maxLength=55 name=CName size=30></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Cash</font></td>
        <td><INPUT maxLength=55 name=Cash size=30></TD></TR>
      </tbody>
      <tbody id="Cheque" style="display: none;">
        <tr>
          <td class="style1"><font face=verdana size=2>Name</font></td>
        <td><INPUT maxLength=55 name=CHName size=30></TD></TR>
	        
        <tr>
          <td class="style1"><font face=verdana size=2>Cheque No</font></td>
        <td><INPUT maxLength=55 name=Cheque size=30></TD></TR>
      </tbody>
      </table>
    </br>
    <div align="center">
      <input type="submit" value="Submit"><INPUT Type="BUTTON" VALUE="Back" ONCLICK="window.location.href='../welcome.php'">
    </div></div>
</form></td>
  </tr>
</table>


</body>
</html>
