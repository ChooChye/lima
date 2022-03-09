<?php
session_start();
include_once "config.php";

 
$package = '528';

?>
<!DOCTYPE HTML>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
<title>Weekly Wages</title>
<style type="text/css">
body{
    background-image: url('img/Background.jpg');
}
.green {
    color:green;
}
.red{
    color:red;
}

.form-control{
    
    height: 25px;
    width: 100%;
    display: inline;
}
.form-mod{
    border:none;
    outline:none;
    padding:5px;
    width:100%;
    border-bottom: 1px solid #CCC;
    transition: all 1s ease 0s;
}
.form-mod:focus{
    border-bottom-color: green;
}
</style>
</head>
<body>
<?php
if(!isset($_SESSION['admin_userid'])){
die ("<center style='color: #ff0000'>Sorry, Please <a href=index.php>login</a> and use this page</center>");
}else{
echo "<center style='color:white;'>Welcome $_SESSION[admin_userid]</br><center> ";
echo "<center><a href=\"../update-profile.php\">Update Profile</a> | <a href=\"../change-password.php\"> Change Password</a> | <a href=\"../logout.php\">Logout</a></center>";

}
?>
<div class="container"  style="padding-top: 100px;">
<?php
$pdo = $dbo->prepare("SELECT * FROM wages");
$pdo->execute();
print '<button class="btn btn-primary btn-sm" onclick="history.go(-1)">&laquo; Back</button> | <button class="btn btn-primary btn-sm" onclick="window.location.href = \'weeklywagesinsert.php\' ">Add data</button><hr/>';
function td(){
    global $dbo;
    $pdo = $dbo->prepare("SELECT * FROM wages");
    $pdo->execute();
    
    foreach($pdo->fetchAll() as $row){
            print '<tr>
            	<td>'.$row["serial_no"].'</td>
            	<td>'.$row["name"].'</td>
            	<td>'.$row["hrs"].'</td>
            	<td>'.$row["sales"].'</td>
            	<td>RM'.$row["wages"].'</td>
            	<td>RM'.$row["incentive"].'</td>
            	<td>RM'.$row["subtotal"].'</td>
            </tr>';
    }
}
if(!$pdo->rowCount() >= '1'){
    print "<h3 class='text-warning'>No data</h3><br /><small><a href='weeklywagesinsert.php'>Insert 1 now</a></small>";
}else{
    $rows = $pdo->fetch(PDO::FETCH_OBJ);
    foreach($rows as $row){
        print '
        <table class="table table-condensed table-bordered" style="width: 50%; background-color: #FFF; color:black; margin-left: 3%;">
            <tr>
            	<td><strong>Program Code:</strong></td>
            	<td><ins class="green"><em>'.$row->program_code.'</em></ins></td>
            	<td><strong>Week No.:</strong></td>
            	<td><ins class="green"><em>'.$row->week_no.'</em></ins></td>
            	<td colspan="3"><strong>From:</strong> <ins class="green">'.$row->w_from.'</ins><br /> <strong>To:</strong> <ins class="green">'.$row->w_to.'</ins></td>
            
            </tr>
            <tr style="background-color: #F6F3F3;">
            	<td><strong>S/N</strong></td>
            	<td><strong>Name</strong></td>
            	<td><strong>Hrs</strong></td>
            	<td><strong>Sales</strong></td>
            	<td><strong>Wages</strong></td>
                
            	<td><strong>Incentive</strong></td>
            	<td><strong><em>Subtotal</em></strong></td>
            </tr>';
           
               td();
        print '
        <tr>
                    <td colspan="7" align="right" "><strong style="color:red;">TOTAL: RM'.$row->total.'</strong></td>
                </tr>
                <tr>
                    <td><strong>Remarks:</strong></td>
                    <td colspan="6">'.$row->remarks.'</td>;
                </tr>
                </table>
                
                <hr/>
                <hr/>
        ';
        
        
    }
    

}
?>
</div>
</body>
</html>