<?php
session_start();
/*$dbo_user = 'agmasiag';
$dbo_pass = 'tempy#123';
$dbo_db = 'agm';
try{
    $dbo = new PDO('mysql:host=localhost;dbname='.$dbo_db, $dbo_user, $dbo_pass);
    $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    print "ERROR". $e->getMessage(). "<br />";
    die();
}
*/
include_once "config.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
<title>Weekly Wages insert</title>
<style type="text/css">
body{
    background-image: url(img/Background.jpg);
}
.green {
    color:green;
}
.red{
    color:red;
}
input {
    color:black;
}
.form-control{
    height: 25px;
    width: 100%;
    display: inline;
}
.alert-danger{
    padding:10px;
    background-color:#D9534F;
    border:1px solid #D9534F;
    margin: 2%;
}
.alert-success{
    padding:10px;
    background-color:#5CB85C;
    border:1px solid #5CB85C;
    margin: 2%;
}
td{
    padding:5px;
}
</style>
</head>


<body>
<script type="text/javascript">
function add(){
    var row = '<tr><td><input type="text" name="sn[]" size="3"/></td><td><input type="text" name="ename[]" size="20"/></td><td><input type="text" name="hrs[]" size="3"/></td><td><input type="text" name="sales[]" size="3"/></td><td><input type="text" name="wages[]" size="4"/></td><td><input type="text" name="inc[]" size="3"/></td><td><input type="text" name="subtotal[]" size="4"/></td></tr>';
    document.getElementById('inputs').append(row);
}
</script>
<?php
if(isset($_POST['submited'])){
    for($x = 0; $x < 10; $x++){
            if(!empty($_POST['sn'][$x])){
            $row = array($_POST['pc'], $_POST['wn'], $_POST['from'], $_POST['to'],
                         $_POST['sn'][$x], $_POST['ename'][$x], $_POST['hrs'][$x],
                         $_POST['sales'][$x], $_POST['wages'][$x], $_POST['inc'][$x], $_POST['subtotal'][$x],$_POST['total'],$_POST['remarks']);
    
            $query = "INSERT INTO wages (program_code,week_no,w_from,w_to,serial_no,name,hrs,sales,wages,incentive,subtotal,total,remarks,date_inserted) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())";
    
            $stmt = $dbo->prepare($query);
            $stmt->execute($row);
    
            }
    }
    if(!$stmt->rowCount() >= '1'){
            print "<div class=\"alert-danger\">unsuccessfully insert</div>";
        }else{
            print "<div class=\"alert-success\">successfully inserted</div>";
        }
}

if(!isset($_SESSION['admin_userid'])){
die ("<center style='color: #ff0000'>Sorry, Please <a href=\"../../\">login</a> and use this page</center>");
}else{
echo "<center style='color:white;'>Welcome $_SESSION[admin_userid]</br><center> ";
echo "<center><a href=\"\"></a><a href=\"../update-profile.php\">Update Profile</a> | <a href=\"../change-password.php\"> Change Password</a> | <a href=\"../logout.php\">Logout</a></center>";

}
?>
<div class="container"  style="padding-top: 100px;">
<button class="btn btn-primary btn-sm" onclick="window.location.href = 'weeklywages.php'">&laquo; Back</button>
<form action="weeklywagesinsert.php" method="POST" style="margin-top: 2%;">
<table border="1" width="50" style="margin-left: 3%;">
<tr>
	<td><strong>Program Code:</strong></td>
	<td><input type="text" size="4" name="pc"/></td>
	<td><strong>Week No.:</strong></td>
	<td><input type="text" size="1" name="wn"/></td>
	<td colspan="3"><strong>From:</strong> <input type="text" size="10" name="from"/><br /> <strong>To:</strong> <input type="text" size="10" name="to"/></td>

</tr>
<tr>
	<td><strong>S/N</strong></td>
	<td><strong>Name</strong></td>
	<td><strong>Hrs</strong></td>
	<td><strong>Sales</strong></td>
	<td><strong>Wages</strong></td>
	<td><strong>Incentive</strong></td>
    <td><strong>Subtotal</strong></td>
	
</tr>
<?php
for($x = 0; $x <= 10; $x++){
    print '
            <tr>
            	<td><input type="text" name="sn[]" size="3"/></td>
            	<td><input type="text" name="ename[]" size="20"/></td>
            	<td><input type="text" name="hrs[]" size="3"/></td>
            	<td><input type="text" name="sales[]" size="3"/></td>
            	<td><input type="text" name="wages[]" size="4"/></td>
            	<td><input type="text" name="inc[]" size="3"/></td>
                <td><input type="text" name="subtotal[]" size="4"/></td>
            	
            </tr>
    ';
}
?><div id="inputs"></div>
 
            <tr>
            
                <td colspan="5"><center><button id="add" class="btn btn-warning btn-sm" onclick="add()">Add more rows</button></center></td>
                <td colspan="2" align="right" style="background-color: red;"><strong>Total:</strong> <input type="text" name="total" size="4"/></td>
            </tr>
            <tr>
                <td colspan="7" style="padding: 5px;"><textarea name="remarks" style="width: 98%; resize:none;" placeholder="Remarks"></textarea></td>
            </tr>
            <tr>
            <center>
            	<td colspan="7"><input class="btn btn-info btn-block btn-sm" type="submit" name="submited" value="Submit"/></td>            	
            </center>
            </tr>
</table>
   
</form>
</div>
</body>
</html>