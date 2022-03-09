<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Job Application Form</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
body {
	background-color: #CACACA;
}
.style3 {font-size: 20px}
.style6 {
	font-size: 28px;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
</head>

<body>
<!--<div align="center"><span class="style6">Cintai Holidays </span></div>-->
<br/>
<form action="upload_to_sql.php" method="post" enctype="application/x-www-form-urlencoded" name="jobapp2" onsubmit="return(validate());">
<table width="919" border="1" align="center">
  <tr>
    <th colspan="6" scope="col"><span class="style3">JOB APPLICATION FORM/<span class="style1">BORANG PERMOHONAN KERJA</span></span></th>
  </tr>
  <tr>
    <td width="244">Position Applied/<span class="style1">Jawatan Dipohon </span></td>
    <td colspan="5"><input type="text" name="positionapply" size="40" required/></td>
  </tr>
  <tr>
    <td>Name (as per IC)/<span class="style1"> Nama (seperti di IC) </span></td>
    <td colspan="5"><input type="text" name="name" size="40" required/></td>
  </tr>
  <tr>
    <td>Address/<span class="style1">Alamat</span></td>
    <td colspan="5"><input type="text" name="address" size="40" required/></td>
  </tr>
  <tr>
    <td>Line 1 </td>
    <td colspan="5"><input type="text" name="address1" size="40" required/></td>
  </tr>
  <tr>
    <td>Line 2 </td>
    <td colspan="5"><input type="text" name="address2" size="40" required/></td>
  </tr>
  <tr>
    <td>IC/Passport No./<span class="style1">No. Kad Pengenalan </span></td>
    <td width="210"><input type="text" name="no" size="35" required /></td>
    <td width="95">Sex/<span class="style1">Janita</span></td>
    <td width="127"><input name="m" type="radio" value="male" required />M/<span class="style1">L</span>
      <input name="f" type="radio" value="female" / >F/<span class="style1">W</span></td>
    <td width="67">Age/<span class="style1">Umur</span></td>
    <td width="35"><input type="text" name="age" size="5" /></td>
  </tr>
  <tr>
    <td>Date of Birth/<span class="style1">Tarikh Lahir </span></td>
    <td><input type="text" name="dob" size="35" placeholder="dd/mm/yyyy" required/></td>
    <td>Race/<span class="style1">Bangsa</span></td>
    <td colspan="3"><input type="text" name="race" size="40" required/></td>
  </tr>
  <tr>
    <td>Citizenship/<span class="style1">Warganegara</span></td>
    <td><input type="text" name="citi" size="35" required/></td>
    <td>Religion/<span class="style1">Agama</span></td>
    <td colspan="3"><input type="text" name="religion" size="40" required/></td>
  </tr>
  <tr>
    <td>Marital Status/<span class="style1">Taraf Perkahwina</span></td>
    <td colspan="5"><input type="text" name="mstat" size="35" required/></td>
  </tr>
  <tr>
    <td>H/P No. </td>
    <td><input type="text" name="hpno" size="35" required/></td>
    <td>Tel no. </td>
    <td colspan="3"><input type="text" name="telno" size="40" required/></td>
  </tr>
  <tr>
    <td>Email Address/<span class="style1">Alamat Email </span></td>
    <td colspan="5"><input type="email" name="email" size="40" required/></td>
  </tr>
  <tr>
    <td>Do you have a personal transportation </td>
    <td colspan="5"><input name="tnone" type="checkbox" value="None" />None/<span class="style1">Tiada</span>
        <input name="tmoto" type="checkbox" value="Motocycle" />Motocycle/<span class="style1">Moto</span>
        <input name="tcar" type="checkbox" value="Car"/ >Cars/<span class="style1">Kereta</span>
		| Others/<span class="style1">Lain</span>
		<input type="text" name="tothers" size="20" />
	  </td>
  </tr>
  <tr>
    <td>Driving license/<span class="style1">Lesen Memandu </span></td>
    <td colspan="5">Class <input type="text" name="lclass" size="20" placeholder="(if any)" /></td>
  </tr>
  <tr>
    <td>Are you currently working/<span class="style1">adakah anda masih berkerja </span></td>
    <td colspan="5"><input name="wy" type="radio" value="Yes" />Yes/<span class="style1">Ya</span> 
      <input name="wn" type="radio" value="No" / >
      No/<span class="style1">Tidak</span></td>
  </tr>
</table>

<br />

<table width="919" border="1" align="center">
  <tr>
    <th colspan="2" scope="col">EDUCATION BACKGROUND/<span class="style1">LATARBELAKANG PENDIDIKAN </span></th>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">1. <input type="text" name="edu1" size="100" required/></div></td>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">2. <input type="text" name="edu2" size="100" /></div></td>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">3. <input type="text" name="edu3" size="100" /></div></td>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">4.
      <input type="text" name="edu4" size="100" />
    </div></td>
  </tr>
  <tr>
    <td colspan="2" scope="col"><div align="left">Language Spoken/<span class="style1">Bahasa digunakan</span>: 
      <input name="eng" type="checkbox" value="English">English 
           <input name="my" type="checkbox" value="Bahasa Melayu">Bahasa Melayu
		   <input name="ch" type="checkbox" value="Mandarin">Mandarin
           <input name="ind" type="checkbox" value="Tamil">Tamil
      | Others <input type="text" name="other" size="20" placeholder="Please Specify" /></td>
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
    <td><input type="text" name="ncompany" size="32" required/></td>
    <td><input type="text" name="position" size="32" required/></td>
    <td><input type="text" name="year" size="32" required/></td>
    <td><input type="text" name="lea" size="32" required/></td>
  </tr>
  <tr>
   <td><input type="text" name="ncompany1" size="32" /></td>
    <td><input type="text" name="position1" size="32" /></td>
    <td><input type="text" name="year1" size="32" /></td>
    <td><input type="text" name="leave1" size="32" /></td>
  </tr>
  <tr>
   <td><input type="text" name="ncompany2" size="32" /></td>
    <td><input type="text" name="position2" size="32" /></td>
    <td><input type="text" name="year2" size="32" /></td>
    <td><input type="text" name="leave2" size="32" /></td>
  </tr>
  <tr>
   <td><input type="text" name="ncompany3" size="32" /></td>
    <td><input type="text" name="position3" size="32" /></td>
    <td><input type="text" name="year3" size="32" /></td>
    <td><input type="text" name="leave3" size="32" /></td>
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
   <td><input type="text" name="rname" size="45" required /></td>
    <td><input type="text" name="rposition" size="45" required/></td>
    <td><input type="text" name="rhpno" size="45" required /></td>
  </tr>
  <tr>
   <td><input type="text" name="rname1" size="45" /></td>
    <td><input type="text" name="rposition1" size="45" /></td>
    <td><input type="text" name="rhpno1" size="45" /></td>
  </tr>
  <tr>
   <td><input type="text" name="rname2" size="45" /></td>
    <td><input type="text" name="rposition2" size="45" /></td>
    <td><input type="text" name="rhpno2" size="45" /></td>
  </tr>
  <tr>
   <td><input type="text" name="rname3" size="45" /></td>
    <td><input type="text" name="rposition3" size="45" /></td>
    <td><input type="text" name="rhpno3" size="45" /></td>
  </tr>
</table>

<br />

<table width="919" border="1" align="center">
  <tr>
    <td colspan="4" scope="col">Salary Expected/<span class="style1">Gaji dipohon</span>: RM <input type="text" name="expsal" size="15" required/></td>
  </tr>
  <tr>
    <td colspan="4">When can you start work/<span class="style1">Bila anda boleh mula berkerja</span>: <input type="text" name="startwork" size="35" placeholder="dd/mm/yyyy" required/></td>
  </tr>
  <tr>
    <td colspan="4">Emergency Contact/<span class="style1">Talian Kecemasan</span> (incase of emergency/<span class="style1">jika kecemasan</span>) </td>
  </tr>
  <tr>
    <td width="172">Relationship/<span class="style1">Hubungan</span></td>
    <td width="165"><input type="text" name="erelationship1" size="40" required/></td>
    <td width="159">H/P No. </td>
    <td width="173"><input type="text" name="ehpno1" size="40" required/></td>
  </tr>
  <tr>
    <td>Relationship/<span class="style1">Hubungan</span></td>
    <td><input type="text" name="erelationship2" size="40" /></td>
    <td>H/P No. </td>
    <td><input type="text" name="ehpno2" size="40"/></td>
  </tr>
</table>
 
 <br />
 
 <table width="919" border="1" align="center">
  <tr>
    <td width="703" scope="col">i certify that all the details given herein true and correct i futher clarify that i have no criminal records and i am not anundischarged bankrupt./<span class="style1">Saya memgaku bahawa semua butir-butir yang diberikan di sini adalah benar dan betul.
	Saya juga menjelaskan bahawa saya tidak mempunyai rekod jenayah dan saya tidak dilstiharkan muflis</span></td>
  </tr>
</table>
<br/>
  <div align="center">
  <input name="submit" value="submit application" type="submit" />
    <INPUT Type="BUTTON" VALUE="Back" ONCLICK="window.location.href='../careers.php'">
</p>
  </div>
</form>
</body>
</html>
