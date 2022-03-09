<?php 

session_start();
require('template/classes.php');
if(isset($_SESSION['xUserId']) && !empty($_SESSION['xUserId'])){
    header('Location: admin/');
}
$title = 'Admin Login';
$logoNav = "images/logoLight.jpeg";
$header = "
<style>
.jumbotron {
    background-image:url('images/adminBg.jpg');
    background-size:cover;
    height: 100% ;
    max-height: 600px;
    background-attachment: fixed;
    background-position:center;
}
</style>
";
if(isset($_POST['login'])){
    
    $username = $_POST['userid'];
    $password = $_POST['password'];
    $dbo = new DBConnect();
    
    $pdo = $dbo->prepare('SELECT id,email,password FROM admins WHERE email = :email');
    $pdo->bindParam(":email", $username, PDO::PARAM_STR);
    $pdo->execute();
    
    if($pdo->rowCount() == 0){
        header('Location: admin.php?msg0=Invalid Username or Password');
    }else{
        $row = $pdo->fetch();
        $hashedPassword = $row['password'];
        
        if(password_verify($password, $hashedPassword)){
            session_regenerate_id();
            $_SESSION['id'] = rand('1000','9999');
            $_SESSION['xUserId'] = $row['id'];
            
            header('Location: admin/');
        }else{
            header('Location: admin.php?msg0=Invalid Username or Password');
        }
    }
    
    
}
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
                                <?php
                                    echo showMsg(); 
                                ?>
                                <div class="card" style="background-color:unset;">
                                    <div class="card-body bg-dark text-white">
                                        <?php //echo password_hash('demo@123', PASSWORD_BCRYPT, array('cost'=>12)); ?>
                                        <h4>Login to Admin Zone</h4>
                                        <hr />
                                        <form action="" method="post">
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
                                                    <input type="submit" name="login" class="btn btn-primary btn-block btn-sm" value="Login" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">&nbsp;</div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>


<!-- Footer -->
<?php require('template/footer.php'); ?>
