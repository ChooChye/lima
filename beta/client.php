<?php 
$title = 'Client Login';
$logoNav = "images/logoLight.jpeg";
$header = "
<style>
.jumbotron {
    background-image:url('images/clientBg.jpg');
    background-size:cover;
    height: 100% ;
    max-height: 600px;
    background-attachment: fixed;
    background-position:center;
}
</style>
";
require('template/header.php'); ?>
<div class="jumbotron jumbotron-fluid mb-0">
    <div class="wow fadeIn delay-2s container text-white" style="margin-top: 8rem;">
        <main id="main" class="page">
            <section>
                <div class="container">
                    <div class="p-4">
                        <div class="row mx-auto">
                            <div class="d-none d-md-block col-4">&nbsp;</div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="card">
                                    <div class="card-body text-dark">
                                        <h4>Login to Client Zone</h4>
                                        <hr />
                                        <form action="../client/loginck.php" method="post">
                                            <div class="form-row">
                                                <div class="col-12 mb-3">
                                                    <input type="text" class="form-control" name="userid" id="userid" placeholder="Username" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 mb-3">
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 mb-3">
                                                    <input type="submit" class="btn btn-primary btn-block btn-sm" value="Login" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-md-block col-4">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>


<!-- Footer -->
<?php require('template/footer.php'); ?>
