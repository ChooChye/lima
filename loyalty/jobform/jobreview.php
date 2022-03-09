<?Php

include "include/session.php";
include "config.php";

?>
<?php
include "sql_comm_helper.php";
	include "sql_data.php";

login_mysql();
	select_db(FALSE);
	$sql = "SELECT * FROM jobs where no='$_POST[no]'";
	$result = mysql_query($sql) or die (mysql_error());
	while ($rowval=mysql_fetch_array($result)) 
	

 {
$positionapply= $rowval['positionapply'];
$name= $rowval['name'];
$address= $rowval['address'];
$address1= $rowval['address1'];
$address2= $rowval['address2'];
$no= $rowval['no'];
$m= $rowval['m'];
$f= $rowval['f'];
$age= $rowval['age'];
$dob= $rowval['dob'];
$race= $rowval['race'];
$citi= $rowval['citi'];
$religion= $rowval['religion'];
$mstat= $rowval['mstat'];
$hpno= $rowval['hpno'];
$telno= $rowval['telno'];
$email= $rowval['email'];
$tnone= $rowval['tnone'];
$tmoto= $rowval['tmoto'];
$tcar= $rowval['tcar'];
$tothers= $rowval['tothers'];
$lclass= $rowval['lclass'];
$wy= $rowval['wy'];
$wn= $rowval['wn'];
$edu1= $rowval['edu1'];
$edu2= $rowval['edu2'];
$edu3= $rowval['edu3'];
$edu4= $rowval['edu4'];
$eng= $rowval['eng'];
$my= $rowval['my'];
$ch= $rowval['ch'];
$ind= $rowval['ind'];
$other= $rowval['other'];
$ncompany= $rowval['ncompany'];
$position= $rowval['position'];
$year= $rowval['year'];
$lea= $rowval['lea'];
$ncompany1= $rowval['ncompany1'];
$position1= $rowval['position1'];
$year1= $rowval['year1'];
$leave1= $rowval['leave1'];
$ncompany2= $rowval['ncompany2'];
$position2= $rowval['position2'];
$year2= $rowval['year2'];
$leave2= $rowval['leave2'];
$ncompany3= $rowval['ncompany3'];
$position3= $rowval['position3'];
$year3= $rowval['year3'];
$leave3= $rowval['leave3'];
$rname= $rowval['rname'];
$rposition= $rowval['rposition'];
$rhpno= $rowval['rhpno'];
$rname1= $rowval['rname1'];
$rposition1= $rowval['rposition1'];
$rhpno1= $rowval['rhpno1'];
$rname2= $rowval['rname2'];
$rposition2= $rowval['rposition2'];
$rhpno2= $rowval['rhpno2'];
$rname3= $rowval['rname3'];
$rposition3= $rowval['rposition3'];
$rhpno3= $rowval['rhpno3'];
$expsal= $rowval['expsal'];
$startwork= $rowval['startwork'];
$erelationship1= $rowval['erelationship1'];
$erelationship2= $rowval['erelationship2'];
$ehpno1= $rowval['ehpno1'];
$ehpno2= $rowval['ehpno2'];

}
logout_mysql();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Review Job Applications</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
body {
	background-image: url(../PHP-Login/img/lightbg.png);	
}
.style3 {font-size: 20px}
.style4 {
	font-size: 28px;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
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
</script>  </head>

<body>
<div align="center"><span class="style6"><span class="style4">Job Review </span></span></div>
<div align="center"><br/>
  <INPUT Type="BUTTON" VALUE="Back" ONCLICK="window.location.href='../PHP-Login/admin/welcome.php'">
</div>
</div>
<div align="center"><span class="style1">
  
<table width="919" border="1" align="center"> 
  <tr>
    
    <th colspan="6" scope="col"><span class="style3">JOB APPLICATION FORM/<span class="style1">BORANG PERMOHONAN KERJA</span></span><form action="" method="post"/></th>
    <tr>
    <td width="244">Position Applied/<span class="style1">Jawatan Dipohon </span></td>
    <td colspan="5"><input type="text" name="positionapply" size="40" value= '<?php echo  $positionapply; ?>' readonly />
      <em><strong>Search by IC/Passport:</strong></em>
      <input type="text" name="no" size="24" value= '<?php echo  $no; ?>'/></td></tr>
  <tr>
    <td>Name (as per IC)/<span class="style1"> Nama (seperti di IC) </span></td>
    <td colspan="5"><input type="text" name="name" size="40" value= '<?php echo  $name; ?>' readonly /></td>
  </tr>
  <tr>
    <td>Address/<span class="style1">Alamat</span></td>
    <td colspan="5"><input type="text" name="address" size="40" value= '<?php echo  $address; ?>' readonly /></td>
  </tr>
  <tr>
    <td>Line 1 </td>
    <td colspan="5"><input type="text" name="address1" size="40" value= '<?php echo  $address1; ?>' readonly /></td>
  </tr>
  <tr>
    <td>Line 2 </td>
    <td colspan="5"><input type="text" name="address2" size="40" value= '<?php echo  $address2; ?>' readonly /></td>
  </tr>
  <tr>
   
    <td width="95">Sex/<span class="style1">Janita</span></td>
    <td width="127"><span class="style1"><?php echo  $m; ?></span><span class="style1"><?php echo  $f; ?></span></td>
    <td width="67">Age/<span class="style1">Umur</span></td>
    <td width="35"><input type="text" name="age" size="5" value= '<?php echo  $age; ?>' readonly  /></td>
  </tr>
  <tr>
    <td>Date of Birth/<span class="style1">Tarikh Lahir </span></td>
    <td><input type="text" name="dob" size="35" placeholder="dd/mm/yyyy" value= '<?php echo  $dob; ?>' readonly /></td>
    <td>Race/<span class="style1">Bangsa</span></td>
    <td colspan="3"><input type="text" name="race" size="40" value= '<?php echo  $race; ?>' readonly /></td>
  </tr>
  <tr>
    <td>Citizenship/<span class="style1">Warganegara</span></td>
    <td><input type="text" name="citi" size="35" value= '<?php echo  $citi; ?>' readonly /></td>
    <td>Religion/<span class="style1">Agama</span></td>
    <td colspan="3"><input type="text" name="religion" size="40" value= '<?php echo  $religion; ?>' readonly /></td>
  </tr>
  <tr>
    <td>Marital Status/<span class="style1">Taraf Perkahwina</span></td>
    <td colspan="5"><input type="text" name="mstat" size="35" value= '<?php echo  $mstat; ?>' readonly /></td>
  </tr>
  <tr>
    <td>H/P No. </td>
    <td><input type="text" name="hpno" size="35" value= '<?php echo  $hpno; ?>' readonly /></td>
    <td>Tel no. </td>
    <td colspan="3"><input type="text" name="telno" size="40" value= '<?php echo  $telno; ?>' readonly /></td>
  </tr>
  <tr> 
    <td>Email Address/<span class="style1">Alamat Email </span></td>
    <td colspan="5"><input type="email" name="email" size="40" value= '<?php echo  $email; ?>' readonly /></td>
  </tr>
  <tr>
    <td>Do you have a personal transportation </td>
    <td colspan="5"><span class="style1"><?php echo  $tnone; ?></span><span class="style1"><?php echo  $tmoto; ?></span><span class="style1"><?php echo  $tcar; ?></span><span class="style1"><?php echo  $tothers; ?></span></td>
  </tr>
  <tr>
    <td>Driving license/<span class="style1">Lesen Memandu </span></td>
    <td colspan="5">Class <input type="text" name="lclass" size="20" value= '<?php echo  $lclass; ?>' readonly /></td>
  </tr>
  <tr>
    <td>Are you currently working/<span class="style1">adakah anda masih berkerja </span></td>
    <td colspan="5"><span class="style1"><?php echo  $wy; ?></span> 
      <span class="style1"><?php echo  $wn; ?></span></td>
  </tr>
</table>

<br />

<table width="919" border="1" align="center">
  <tr>
    <th colspan="2" scope="col">EDUCATION BACKGROUND/<span class="style1">LATARBELAKANG PENDIDIKAN </span></th>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">1. 
      <input type="text" name="edu1" size="100" value= '<?php echo  $edu1; ?>' readonly/>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">2. <input type="text" name="edu2" size="100" value= '<?php echo  $edu2; ?>' readonly/></div></td>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">3. <input type="text" name="edu3" size="100" value= '<?php echo  $edu3; ?>' readonly/></div></td>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">4.
      <input type="text" name="edu4" size="100" value= '<?php echo  $edu4; ?>' readonly/>
    </div></td>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">Language Spoken/<span class="style1">Bahasa digunakan</span>: <?php echo  $eng; ?><?php echo  $my; ?><?php echo  $ch; ?><?php echo  $ind; ?>
      <input type="text" name="other" size="20" value= '<?php echo  $other; ?>' readonly /></td>
    </tr>
</table>

<br />

<table width="919" border="1" align="center">
  <tr>
    <th width="201" height="52" scope="col"><p>Name of Company/<span class="style1">Nama Syarikat </span></p>
      </th>
    <th width="173" scope="col">Position/<span class="style1">Jawatan</span></th>
    <th width="166" scope="col">Year/<span class="style1">Tahun</span></th>
    <th width="202" scope="col">Reason of leaving/<span class="style1">Sebab Berhenti </span></th>
  </tr>
  <tr>
    <td><input type="text" name="ncompany" size="32" value= '<?php echo  $ncompany; ?>' readonly/></td>
    <td><input type="text" name="position" size="32" value= '<?php echo  $position; ?>' readonly/></td>
    <td><input type="text" name="year" size="32" value= '<?php echo  $year; ?>' readonly/></td>
    <td><input type="text" name="lea" size="32" value= '<?php echo  $lea; ?>' readonly/></td>
  </tr>
  <tr>
   <td><input type="text" name="ncompany1" size="32" value= '<?php echo  $ncompany1; ?>' readonly/></td>
    <td><input type="text" name="position1" size="32" value= '<?php echo  $position1; ?>' readonly/></td>
    <td><input type="text" name="year1" size="32" value= '<?php echo  $year1; ?>' readonly/></td>
    <td><input type="text" name="leave1" size="32" value= '<?php echo  $leave1; ?>' readonly/></td>
  </tr>
  <tr>
   <td><input type="text" name="ncompany2" size="32" value= '<?php echo  $ncompany2; ?>' readonly/></td>
    <td><input type="text" name="position2" size="32" value= '<?php echo  $position2; ?>' readonly/></td>
    <td><input type="text" name="year2" size="32" value= '<?php echo  $year2; ?>' readonly/></td>
    <td><input type="text" name="leave2" size="32" value= '<?php echo  $leave2; ?>' readonly/></td>
  </tr>
  <tr>
   <td><input type="text" name="ncompany3" size="32" value= '<?php echo  $ncompany3; ?>' readonly/></td>
    <td><input type="text" name="position3" size="32" value= '<?php echo  $position; ?>' readonly/></td>
    <td><input type="text" name="year3" size="32" value= '<?php echo  $year3; ?>' readonly/></td>
    <td><input type="text" name="leave3" size="32" value= '<?php echo  $leave3; ?>' readonly/></td>
  </tr>
</table>
<table width="919" border="1" align="center">
  <tr>
    <th colspan="2" scope="col">REFERENCE/<span class="style1">RUJUKAN </span></th>
  </tr>
</table>
<table width="919" border="1" align="center">
  <tr>
    <th width="216" scope="col">Name/<span class="style1">Nama</span></th>
    <th width="217" scope="col">Position/<span class="style1">Jawatan</span></th>
    <th width="216" scope="col">H/P No. </th>
  </tr>
  <tr>
   <td><input type="text" name="rname" size="45" value= '<?php echo  $rname; ?>' readonly /></td>
    <td><input type="text" name="rposition" size="45" value= '<?php echo  $rposition; ?>' readonly/></td>
    <td><input type="text" name="rhpno" size="45" value= '<?php echo  $rhpno; ?>' readonly /></td>
  </tr>
  <tr>
   <td><input type="text" name="rname1" size="45" value= '<?php echo  $rname1; ?>' readonly/></td>
    <td><input type="text" name="rposition1" size="45" value= '<?php echo  $rposition1; ?>' readonly/></td>
    <td><input type="text" name="rhpno1" size="45" value= '<?php echo  $rhpno1; ?>' readonly/></td>
  </tr>
  <tr>
   <td><input type="text" name="rname2" size="45" value= '<?php echo  $rname2; ?>' readonly/></td>
    <td><input type="text" name="rposition2" size="45" value= '<?php echo  $rposition2; ?>' readonly/></td>
    <td><input type="text" name="rhpno2" size="45" value= '<?php echo  $rhpno2; ?>' readonly/></td>
  </tr>
  <tr>
   <td><input type="text" name="rname3" size="45" value= '<?php echo  $rname3; ?>' readonly/></td>
    <td><input type="text" name="rposition3" size="45" value= '<?php echo  $rposition; ?>' readonly/></td>
    <td><input type="text" name="rhpno3" size="45" value= '<?php echo  $rhpno; ?>' readonly/></td>
  </tr>
</table>

<br />

<table width="919" border="1" align="center">
  <tr>
    <td colspan="4" scope="col">Salary Expected/<span class="style1">Gaji dipohon</span>: RM <input type="text" name="expsal" size="15" value= '<?php echo  $expsal; ?>' readonly/></td>
  </tr>
  <tr>
    <td colspan="4">When can you start work/<span class="style1">Bila anda boleh mula berkerja</span>: <input type="text" name="startwork" size="35" value= '<?php echo  $startwork; ?>' readonly/></td>
  </tr>
  <tr>
    <td colspan="4">Emergency Contact/<span class="style1">Talian Kecemasan</span> (incase of emergency/<span class="style1">jika kecemasan</span>) </td>
  </tr>
  <tr>
    <td width="172">Relationship/<span class="style1">Hubungan</span></td>
    <td width="165"><input type="text" name="erelationship1" size="40" value= '<?php echo  $erelationship1; ?>' readonly/></td>
    <td width="159">H/P No. </td>
    <td width="173"><input type="text" name="ehpno1" size="40" value= '<?php echo  $ehpno1; ?>' readonly/></td>
  </tr>
  <tr>
    <td>Relationship/<span class="style1">Hubungan</span></td>
    <td><input type="text" name="erelationship2" size="40" value= '<?php echo  $erelationship2; ?>' readonly/></td>
    <td>H/P No. </td>
    <td><input type="text" name="ehpno2" size="40"value= '<?php echo  $ehpno2; ?>' readonly/></td>
  </tr> <input style="visibility:hidden;" type="submit" value="Submit"></form>
</table>

  </span></div>
</body>
</html>
