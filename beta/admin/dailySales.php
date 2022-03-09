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

?>
<?php require('template/header.php');?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <h4>Daily Sales Report</h4>
    <div class="row">
        <div class="w-100">
            <?php echo showMsg();?>
            <div class="card shadow">
                <div class="card-body">
                    <form action="dailySalesPreview.php" method="post">
                        <div class="form-row">
                            <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 mb-2">
                                <input type="text" class="form-control" name="program_code" id="program_code" placeholder="Program Code" />
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 mb-2">
                                <div class="input-group mb-3 ">
                                    <input autocomplete="off" type="text" id="date" name="date" class="form-control date"  id="date" placeholder="dd/mm/yyyy">
                                    <div class="input-group-append">
                                        <span class="input-group-text btn btn-secondary" style="cursor:pointer;" id="calBtn"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div id="btnHolder">
                            <a class="btn btn-secondary mb-2" href="#" data-toggle="collapse" data-target="#visaCollapse">Visa </a>
                            <a class="btn btn-secondary collapsed mb-2" href="#" data-toggle="collapse" data-target="#masterCollapse">Mastercard </a>
                            <a class="btn btn-secondary collapsed mb-2" href="#" data-toggle="collapse" data-target="#amexCollapse">Amex</a>
                            <a class="btn btn-secondary collapsed mb-2" href="#" data-toggle="collapse" data-target="#dinersCollapse">Diners </a>
                            <a class="btn btn-secondary collapsed mb-2" href="#" data-toggle="collapse" data-target="#chequesCollapse">Cheques </a>
                            <a class="btn btn-secondary collapsed mb-2" href="#" data-toggle="collapse" data-target="#cashCollapse">Cash </a>
                            <a class="btn btn-secondary collapsed mb-2" href="#" data-toggle="collapse" data-target="#remarksCollapse">Remarks </a>
                        </div>
                        <hr />
                        <div id="accord">
                            <div class="form-row collapse show mb-3" id="visaCollapse">
                                <div class="card w-100">
                                    <div class="card-header">
                                        <div class="dropdown">
                                            Visa
                                            <button class="btn btn-link ml-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javscript:void(0)" onclick="fillNull('visa')">Null</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Nos</label>
                                                <input type="text" name="visaNos" id="visaNos" class="form-control" onkeyup="reportCount('visa')" />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Gross</label>
                                                <input type="text" name="visaGross" id="visaGross" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Less Bank Comm.</label>
                                                <input type="text" name="visaLess" id="visaLess" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Net</label>
                                                <input type="text" name="visaNet" id="visaNet" class="form-control"  />
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row collapse mb-3" id="masterCollapse">
                                <div class="card w-100">
                                    <div class="card-header">
                                        <div class="dropdown">
                                            Mastercard
                                            <button class="btn btn-link ml-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javscript:void(0)" onclick="fillNull('master')">Null</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Nos</label>
                                                <input type="text" name="masterNos" id="masterNos" class="form-control" onkeyup="reportCount('master')" />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Gross</label>
                                                <input type="text" name="masterGross" id="masterGross" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Less Bank Comm.</label>
                                                <input type="text" name="masterLess" id="masterLess" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Net</label>
                                                <input type="text" name="masterNet" id="masterNet" class="form-control"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row collapse mb-3" id="amexCollapse">
                                <div class="card w-100">
                                    <div class="card-header">
                                        <div class="dropdown">
                                            Amex
                                            <button class="btn btn-link ml-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javscript:void(0)" onclick="fillNull('amex')">Null</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Nos</label>
                                                <input type="text" name="amexNos" id="amexNos" class="form-control" onkeyup="reportCount('amex')" />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Gross</label>
                                                <input type="text" name="amexGross" id="amexGross" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Less Bank Comm.</label>
                                                <input type="text" name="amexLess" id="amexLess" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Net</label>
                                                <input type="text" name="amexNet" id="amexNet" class="form-control"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row collapse mb-3" id="dinersCollapse">
                                <div class="card w-100">
                                    <div class="card-header">
                                        <div class="dropdown">
                                            Diners
                                            <button class="btn btn-link ml-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javscript:void(0)" onclick="fillNull('diners')">Null</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Nos</label>
                                                <input type="text" name="dinersNos" id="dinersNos" class="form-control" onkeyup="reportCount('diners')" />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Gross</label>
                                                <input type="text" name="dinersGross" id="dinersGross" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Less Bank Comm.</label>
                                                <input type="text" name="dinersLess" id="dinersLess" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Net</label>
                                                <input type="text" name="dinersNet" id="dinersNet" class="form-control"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row collapse mb-3" id="chequesCollapse">
                                <div class="card w-100">
                                    <div class="card-header">
                                        <div class="dropdown">
                                            Cheques
                                            <button class="btn btn-link ml-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javscript:void(0)" onclick="fillNull('cheques')">Null</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Nos</label>
                                                <input type="text" name="chequesNos" id="chequesNos" class="form-control" onkeyup="reportCount('cheques')" />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Gross</label>
                                                <input type="text" name="chequesGross" id="chequesGross" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Less Bank Comm.</label>
                                                <input type="text" name="chequesLess" id="chequesLess" class="form-control"  />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Net</label>
                                                <input type="text" name="chequesNet" id="chequesNet" class="form-control"  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row collapse mb-3" id="cashCollapse">
                                <div class="card w-100">
                                    <div class="card-header">
                                        <div class="dropdown">
                                            Cash
                                            <button class="btn btn-link ml-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javscript:void(0)" onclick="fillNull('cash')">Null</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Nos</label>
                                                <input type="text" name="cashNos" id="cashNos" class="form-control" onkeyup="reportCount('cash')" />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Gross</label>
                                                <input type="text" name="cashGross" id="cashGross" class="form-control" />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Less Bank Comm.</label>
                                                <input type="text" name="cashLess" id="cashLess" class="form-control" />
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 mb-2">
                                                <label>Net</label>
                                                <input type="text" name="cashNet" id="cashNet" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row collapse mb-3" id="remarksCollapse">
                                <div class="card w-100">
                                    <div class="card-header">
                                        Remarks
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto mb-2">
                                                <textarea class="form-control" name="remarks" id="remarks" rows="8" cols="80" style="resize:none;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="form-row">
                            <div class="col-auto mb-3">
                                <label>Verified By:</label>
                                <p class="m-0 text-dark"><?php echo getUserName(); ?></p>
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Preview" id="preBtn" class="btn btn-primary" onclick="return (validateDailyReport())"/>
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
