<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$title = 'Client Dashboard';
$logoNav = "images/logoLight.png";
$header = "
<style>
.card-header{
    font-weight:bold;
}
</style>
";
require('template/header.php');



   
if(!isset($_POST['submit'])){
    
    //POST VAR
$programCode        = $_SESSION['program_code'] = $_POST['program_code'];
$date               = $_SESSION['date']         = $_POST['date'];

$verifiedBy         = getUserName();
$remarks            = $_SESSION['remarks']      = $_POST['remarks'];

//visa
$visaNos            = $_SESSION['visaNos']      = $_POST['visaNos'];
$visaGross          = $_SESSION['visaGross']    = $_POST['visaGross'];
$visaLess           = $_SESSION['visaLess']     = $_POST['visaLess'];
$visaNet            = $_SESSION['visaNet']      = $_POST['visaNet'];

//mastercard
$masterNos          = $_SESSION['masterNos']    = $_POST['masterNos'];
$masterGross        = $_SESSION['masterGross']  = $_POST['masterGross'];
$masterLess         = $_SESSION['masterLess']   = $_POST['masterLess'];
$masterNet          = $_SESSION['masterNet']    = $_POST['masterNet'];

//amex
$amexNos            = $_SESSION['amexNos']      = $_POST['amexNos'];
$amexGross          = $_SESSION['amexGross']    = $_POST['amexGross'];
$amexLess           = $_SESSION['amexLess']     = $_POST['amexLess'];
$amexNet            = $_SESSION['amexNet']      = $_POST['amexNet'];

//diners
$dinersNos          = $_SESSION['dinersNos']    = $_POST['dinersNos'];
$dinersGross        = $_SESSION['dinersGross']  = $_POST['dinersGross'];
$dinersLess         = $_SESSION['dinersLess']   = $_POST['dinersLess'];
$dinersNet          = $_SESSION['dinersNet']    = $_POST['dinersNet'];

//cheques
$chequesNos         = $_SESSION['chequesNos']   = $_POST['chequesNos'];
$chequesGross       = $_SESSION['chequesGross'] = $_POST['chequesGross'];
$chequesLess        = $_SESSION['chequesLess']  = $_POST['chequesLess'];
$chequesNet         = $_SESSION['chequesNet']   = $_POST['chequesNet'];

//cash
$cashNos            = $_SESSION['cashNos']      = $_POST['cashNos'];
$cashGross          = $_SESSION['cashGross']    = $_POST['cashGross'];
$cashLess           = $_SESSION['cashLess']     = $_POST['cashLess'];
$cashNet            = $_SESSION['cashNet']      = $_POST['cashNet'];

$totalNos           = $_SESSION['totalNos']     = $visaNos + $masterNos + $amexNos + $dinersNos + $chequesNos + $cashNos;
$totalGross         = $_SESSION['totalGross']   = dec($visaGross + $masterGross + $amexGross + $dinersGross + $chequesGross + $cashGross);
$totalLess          = $_SESSION['totalLess']    = dec($visaLess + $masterLess + $amexLess + $dinersLess + $chequesLess + $cashLess);
$totalNet           = $_SESSION['totalNet']     = dec($visaNet + $masterNet + $amexNet + $dinersNet + $chequesNet + $cashNet);
    
    
    //Check if values have been tampered
    $list = ["visa","master","amex","diners","cheques","cash"];
    $sublist = ["Nos","Gross","Less","Net"];
    $nos = $gross = $less = $net = "";
    $bool = 0;
    for($i = 0; $i < count($list); $i++){
        for($j = 0; $j < count($sublist); $j++){
           
            if($j == 0){
                $nos    = ${$list[$i].$sublist[$j]};
            }
            if($j == 1){
                $gross  = ${$list[$i].$sublist[$j]};
            }
            if($j == 2){
                $less   = ${$list[$i].$sublist[$j]};
            }
            if($j == 3){
                $net    = ${$list[$i].$sublist[$j]};
            }
            
            
        }
        if(calc($nos,$gross,$less,$net) == false){
            //echo 'notok';
            $bool = 1;
        }
        if($bool == 1){
            unset($_SESSION[$list[$i].'Nos']);
            unset($_SESSION[$list[$i].'Gross']);
            unset($_SESSION[$list[$i].'Less']);
            unset($_SESSION[$list[$i].'Net']);
            //echo metaFast('dailySales.php?msg0=An error has occurred. Error:6609');
        }
    }
           
//    echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
    
}else{
    //When submit
    
    $dbo = new DBConnect();
    
$programCode        = $_SESSION['program_code'];
$date               = date("Y-m-d", strtotime(str_replace("/","-",$_SESSION['date'])));

$verifiedBy         = getUserName();
$approvedBy         = NULL;
$remarks            = $_SESSION['remarks'];

//visa
$visaNos            = $_SESSION['visaNos'];
$visaGross          = $_SESSION['visaGross'];
$visaLess           = $_SESSION['visaLess'];
$visaNet            = $_SESSION['visaNet'];

//mastercard
$masterNos          = $_SESSION['masterNos'];
$masterGross        = $_SESSION['masterGross'];
$masterLess         = $_SESSION['masterLess'];
$masterNet          = $_SESSION['masterNet'];

//amex
$amexNos            = $_SESSION['amexNos'];
$amexGross          = $_SESSION['amexGross'];
$amexLess           = $_SESSION['amexLess'];
$amexNet            = $_SESSION['amexNet'];

//diners
$dinersNos          = $_SESSION['dinersNos'];
$dinersGross        = $_SESSION['dinersGross'];
$dinersLess         = $_SESSION['dinersLess'];
$dinersNet          = $_SESSION['dinersNet'];

//cheques
$chequesNos         = $_SESSION['chequesNos'];
$chequesGross       = $_SESSION['chequesGross'];
$chequesLess        = $_SESSION['chequesLess'];
$chequesNet         = $_SESSION['chequesNet'];

//cash
$cashNos            = $_SESSION['cashNos'];
$cashGross          = $_SESSION['cashGross'];
$cashLess           = $_SESSION['cashLess'];
$cashNet            = $_SESSION['cashNet'];

$totalNos           = $_SESSION['totalNos']     = $visaNos + $masterNos + $amexNos + $dinersNos + $chequesNos + $cashNos;
$totalGross         = $_SESSION['totalGross']   = dec(($visaGross + $masterGross + $amexGross + $dinersGross + $chequesGross + $cashGross));
$totalLess          = $_SESSION['totalLess']    = dec(($visaLess + $masterLess + $amexLess + $dinersLess + $chequesLess + $cashLess));
$totalNet           = $_SESSION['totalNet']     = dec(($visaNet + $masterNet + $amexNet + $dinersNet + $chequesNet + $cashNet));
    
        $pdo = $dbo->prepare('INSERT INTO reports (programCode,programDate,
                                                         visaNos,visaGross,visaLess,visaNet,
                                                         masterNos,masterGross,masterLess,masterNet,
                                                         amexNos,amexGross,amexLess,amexNet,
                                                         dinersNos,dinersGross,dinersLess,dinersNet,
                                                         chequeNos,chequeGross,chequeLess,chequeNet,
                                                         cashNos,cashGross,cashLess,cashNet,
                                                         remarks,verifiedBy
                                                         ) 
                                                  VALUES(:programCode,:programDate,
                                                         :visaNos,:visaGross,:visaLess,:visaNet,
                                                         :masterNos,:masterGross,:masterLess,:masterNet,
                                                         :amexNos,:amexGross,:amexLess,:amexNet,
                                                         :dinersNos,:dinersGross,:dinersLess,:dinersNet,
                                                         :chequesNos,:chequesGross,:chequesLess,:chequesNet,
                                                         :cashNos,:cashGross,:cashLess,:cashNet,
                                                         :remarks,:vBy
                                                         )');
        $pdo->bindParam(":programCode", $programCode, PDO::PARAM_INT);
        $pdo->bindParam(":programDate", $date, PDO::PARAM_STR);
        //Visa
        $pdo->bindParam(":visaNos", $visaNos, PDO::PARAM_STR);
        $pdo->bindParam(":visaGross", $visaGross, PDO::PARAM_STR);
        $pdo->bindParam(":visaLess", $visaLess, PDO::PARAM_STR);
        $pdo->bindParam(":visaNet", $visaNet, PDO::PARAM_STR);
        //Master
        $pdo->bindParam(":masterNos", $masterNos, PDO::PARAM_STR);
        $pdo->bindParam(":masterGross", $masterGross, PDO::PARAM_STR);
        $pdo->bindParam(":masterLess", $masterLess, PDO::PARAM_STR);
        $pdo->bindParam(":masterNet", $masterNet, PDO::PARAM_STR);
        //Amex
        $pdo->bindParam(":amexNos", $amexNos, PDO::PARAM_STR);
        $pdo->bindParam(":amexGross", $amexGross, PDO::PARAM_STR);
        $pdo->bindParam(":amexLess", $amexLess, PDO::PARAM_STR);
        $pdo->bindParam(":amexNet", $amexNet, PDO::PARAM_STR);
        //Diners
        $pdo->bindParam(":dinersNos", $dinersNos, PDO::PARAM_STR);
        $pdo->bindParam(":dinersGross", $dinersGross, PDO::PARAM_STR);
        $pdo->bindParam(":dinersLess", $dinersLess, PDO::PARAM_STR);
        $pdo->bindParam(":dinersNet", $dinersNet, PDO::PARAM_STR);
        //Cheques
        $pdo->bindParam(":chequesNos", $chequesNos, PDO::PARAM_STR);
        $pdo->bindParam(":chequesGross", $chequesGross, PDO::PARAM_STR);
        $pdo->bindParam(":chequesLess", $chequesLess, PDO::PARAM_STR);
        $pdo->bindParam(":chequesNet", $chequesNet, PDO::PARAM_STR);
        //Cash
        $pdo->bindParam(":cashNos", $cashNos, PDO::PARAM_STR);
        $pdo->bindParam(":cashGross", $cashGross, PDO::PARAM_STR);
        $pdo->bindParam(":cashLess", $cashLess, PDO::PARAM_STR);
        $pdo->bindParam(":cashNet", $cashNet, PDO::PARAM_STR);

        $pdo->bindParam(":remarks", $remarks, PDO::PARAM_STR);
        $pdo->bindParam(":vBy", $verifiedBy, PDO::PARAM_STR);

        $pdo->execute();

        if($pdo->rowCount() == 0){
            echo metaFast("dailySales.php?msg0=An error has occured, Please contact webmaster. Error #0912");
        }else{
            //Prepare Mail
            $to = "reports@lima-asiadynamics.com";
            $subject = $date . " Report";
            
            $msgBody = "";
            $msgBody .= "<table border='1' width='50%'>";
                $msgBody .= '
                <tr>
                    <td colspan="3"><b>Program Code:</b> '.$programCode.'</td>
                    
                    <td colspan="2"><b>Date:</b> '.$date.'</td>
                </tr>
                <tr>
                    <th></th>
                    <th>Nos</th>
                    <th>Gross</th>
                    <th>Less</th>
                    <th>Net</th>
                </tr>
                <tr>
                    <th>Visa</th>
                    <th>'.$visaNos.'</th>
                    <th>'.dec($visaGross).'</th>
                    <th>'.dec($visaLess).'</th>
                    <th>'.dec($visaNet).'</th>
                </tr>
                <tr>
                    <th>Master</th>
                    <th>'.$masterNos.'</th>
                    <th>'.dec($masterGross).'</th>
                    <th>'.dec($masterLess).'</th>
                    <th>'.dec($masterNet).'</th>
                </tr>
                <tr>
                    <th>Amex</th>
                    <th>'.$amexNos.'</th>
                    <th>'.dec($amexGross).'</th>
                    <th>'.dec($amexLess).'</th>
                    <th>'.dec($amexNet).'</th>
                </tr>
                <tr>
                    <th>Diners</th>
                    <th>'.$dinersNos.'</th>
                    <th>'.dec($dinersGross).'</th>
                    <th>'.dec($dinersLess).'</th>
                    <th>'.dec($dinersNet).'</th>
                </tr>
                <tr>
                    <th>Cheque</th>
                    <th>'.$chequesNos.'</th>
                    <th>'.dec($chequesGross).'</th>
                    <th>'.dec($chequesLess).'</th>
                    <th>'.dec($chequesNet).'</th>
                </tr>
                <tr>
                    <th>Cash</th>
                    <th>'.$cashNos.'</th>
                    <th>'.dec($cashGross).'</th>
                    <th>'.dec($cashLess).'</th>
                    <th>'.dec($cashNet).'</th>
                </tr>
                <tr style="color:red">
                    <th>Total</th>
                    <th>'.$totalNos.'</th>
                    <th>'.dec($totalGross).'</th>
                    <th>'.dec($totalLess).'</th>
                    <th>'.dec($totalNet).'</th>
                </tr>
                <tr>
                    <th>Remarks:</th>
                    <td colspan="4">'.$remarks.'</td>
                </tr>
                <tr>
                    <th>Verified By:</th>
                    <td colspan="4">'.$verifiedBy.'</td>
                </tr>
                ';
            $msgBody .= "<table>";
            sendMsg($to, $subject, $msgBody);
            echo metaFast('dailySales.php?msg1=Report Submitted');
        }
}
?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <h4>Daily Sales Report Preview</h4>
    <div class="row">
        <div class="w-100">
            <div class="card shadow">
                <div class="card-body">
                    <form class="" method="post">
                        <div class="form-row">
                            <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 mb-2">
                                <b>Program Code:</b>
                                <?php echo $programCode; ?>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mb-2">
                                <b>Date:</b>
                                <?php echo $date; ?>
                            </div>
                        </div>
                        <hr />
                        <div class="">
                            <table class="table table-bordered table-sm col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <tr>
                                    <th></th>
                                    <th>Nos</th>
                                    <th>Gross</th>
                                    <th>Less. Bank Comm.</th>
                                    <th>Net</th>
                                </tr>
                                <tr>
                                    <th>Visa</th>
                                    <td><?php echo $visaNos; ?></td>
                                    <td><?php echo $visaGross; ?></td>
                                    <td><?php echo $visaLess; ?></td>
                                    <td><?php echo $visaNet; ?></td>
                                </tr>
                                <tr>
                                    <th>Mastercard</th>
                                    <td><?php echo $masterNos; ?></td>
                                    <td><?php echo $masterGross; ?></td>
                                    <td><?php echo $masterLess; ?></td>
                                    <td><?php echo $masterNet; ?></td>
                                </tr>
                                <tr>
                                    <th>Amex</th>
                                    <td><?php echo $amexNos; ?></td>
                                    <td><?php echo $amexGross; ?></td>
                                    <td><?php echo $amexLess; ?></td>
                                    <td><?php echo $amexNet; ?></td>
                                </tr>
                                <tr>
                                    <th>Diners</th>
                                    <td><?php echo $dinersNos; ?></td>
                                    <td><?php echo $dinersGross; ?></td>
                                    <td><?php echo $dinersLess; ?></td>
                                    <td><?php echo $dinersNet; ?></td>
                                </tr>
                                <tr>
                                    <th>Cheques</th>
                                    <td><?php echo $chequesNos; ?></td>
                                    <td><?php echo $chequesGross; ?></td>
                                    <td><?php echo $chequesLess; ?></td>
                                    <td><?php echo $chequesNet; ?></td>
                                </tr>
                                <tr>
                                    <th>Cash</th>
                                    <td><?php echo $cashNos; ?></td>
                                    <td><?php echo $cashGross; ?></td>
                                    <td><?php echo $cashLess; ?></td>
                                    <td><?php echo $cashNet; ?></td>
                                </tr>
                                <tr class="text-danger">
                                    <th>Total</th>
                                    <td><?php echo $totalNos; ?></td>
                                    <td><?php echo $totalGross; ?></td>
                                    <td><?php echo $totalLess; ?></td>
                                    <td><?php echo $totalNet; ?></td>
                                </tr>
                                <tr>
                                    <th>Remarks:</th>
                                    <td colspan="4"><?php echo $remarks; ?></td>
                                </tr>
                            </table>
                        </div>
                        <hr />
                        <div class="form-row">
                            <p class="w-100 m-0"><b>Verified By:</b>
                                <?php echo $verifiedBy; ?>
                            </p>
                            <div class="col-12 mt-3">
                                <input type="submit" value="Submit" class="btn btn-primary" name="submit" id="submit"/>
                                <a href="javascript:history.go(-1)" class="btn btn-secondary">&laquo; Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Footer -->
<?php require('template/footer.php'); ?>
