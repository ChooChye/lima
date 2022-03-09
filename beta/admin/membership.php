<?php 


$title = 'Client Dashboard';
$logoNav = "images/logoLight.png";
$header = "
<style>
.card-header{
    font-weight:bold;
}
</style>
";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php require('template/header.php');?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <h4>Membership Database</h4>
    <div class="row">
        <div class="w-100">
            <?php echo showMsg();?>
            <div class="card shadow">
                <div class="card-body">
                    <form action="membership.php" method="post">
                        <div class="form-row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <label>Membership No.</label>
                                <input type="text" name="mNo" class="form-control"/>
                            </div>
                            <!--div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <label>Name.</label>
                                <input type="text" name="mName" class="form-control"/>
                            </div-->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <label class="w-100">&nbsp;</label>
                                <input type="submit" name="search" class="btn btn-primary" value="Search"/>
                            </div>
                        </div>
                    </form>
                    <hr/>
                    <?php
                        if(isset($_POST['search'])){
                            $dbo = new oldDBConnect();
                            //$name = "%".$_POST['mName']."%";
                            $pdo = $dbo->prepare("SELECT * FROM membership WHERE MembershipNo = :mNo");
                            $pdo->bindParam(":mNo", $_POST['mNo'], PDO::PARAM_STR);
                            //$pdo->bindValue(":name", $name,PDO::PARAM_STR);
                            $pdo->execute();
                            
                            if($pdo->rowCount() == 0){
                                echo("No record found");
                            }else{
                                foreach($pdo->fetchAll() as $row){
                                    $cardNo = wordwrap($row['CNo'] , 4 , '-' , true );
                                    echo '
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-body">
                                                <h4>Personal Details</h4>
                                                    <table class="table" border="0">
                                                        <tr>
                                                            <td><b>Membership No. :</b> '.$row['MembershipNo'].'</td>
                                                            <td><b>Name :</b> '.$row['Name'].'</td>
                                                        </tr>
                                                        ';
                                                        if($row['Home'] != null){
                                                            echo '
                                                            <tr>
                                                                <td colspan="2"><b>Home Address:</b> <br/>'.$row['Address'].'</td>
                                                            </tr>
                                                            ';
                                                        }elseif($row['Office'] != null){
                                                            echo '
                                                            <tr>
                                                                <td colspan="2"><b>Office Address:</b> <br/>'.$row['Address'].'</td>
                                                            </tr>
                                                            ';
                                                        }
                                    echo '
                                                        
                                                        <tr>
                                                            <td><b>Postcode :</b> <br/>'.$row['Postcode'].'</td>
                                                            <td><b>City :</b> <br/> '.$row['City'].'</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4>Membership Info</h4>
                                                    <table class="table" border="0">
                                                        <tr>
                                                            <td colspan="2"><b>Card Number :</b> '.$cardNo.'</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Reg. Date. :</b> '.$row['Date'].'</td>
                                                            <td><b>Sent on :</b> '.$row['Senton'].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Program Code :</b> '.$row['ProgramCode'].'</td>
                                                            <td><b>Manager :</b> '.$row['Manager'].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Sales Person ID :</b> '.$row['SalesPerson'].'</td>
                                                            <td><b>Sales Person Name :</b> '.$row['SName'].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td><b>Rate :</b> RM'.$row['Rate'].'</td>
                                                            <td><b>Membership Type :</b> '.$row['type'].'</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                            }
                            
                        }
                        
                        
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Footer -->
<?php require('template/footer.php'); ?>
