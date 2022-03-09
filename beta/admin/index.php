<?php 
$title = 'Client Dashboard';
$logoNav = "images/logoLight.jpeg";
$header = "";

?>
<?php require('template/header.php'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <h4>Dashboard</h4>
    <div class="row">
        <div class="col-lg-3 mb-4">
            <div class="card border-left-primary text-dark">
                <div class="card-body">
                    <div class="row no-gutter">
                        <div class="col">
                            <p class="m-0">Submit Daily Sales Report</p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-folder fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="card border-left-success text-dark">
                <div class="card-body">
                    <div class="row no-gutter">
                        <div class="col">
                            <p class="m-0">View Daily Sales Report</p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-folder fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="card border-left-danger text-dark">
                <div class="card-body">
                    <div class="row no-gutter">
                        <div class="col">
                            <p class="m-0">Membership Database</p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-id-card fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4">
            <div class="card border-left-warning text-dark">
                <div class="card-body">
                    <div class="row no-gutter">
                        <div class="col">
                            <p class="m-0">Daily<br />Wages</p>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-3x text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Footer -->
<?php require('template/footer.php'); ?>
