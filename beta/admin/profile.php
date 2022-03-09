<?php 
$title = 'Client Dashboard';
$logoNav = "images/logoLight.png";
$header = "";

?>
<?php require('template/header.php'); ?>


<?php
    $errors = array();
    
    $dbo = new DBConnect();
    
    $pdo = $dbo->prepare('SELECT * FROM admins WHERE id = :id');
    $pdo->bindParam(':id', $_SESSION['xUserId'], PDO::PARAM_INT);
    $pdo->execute();

    $row = $pdo->fetch();

    if(isset($_POST['updateProfile'])){
        $nFname = $_POST['fName'];
        
        $stmt = $dbo->prepare("UPDATE admins SET name=? WHERE  id=?");
        $stmt->execute(array($nFname, $_SESSION['xUserId']));
        
        if($stmt->rowCount() == 0){
            //header('Location: profile.php?error='.$errors);
            echo meta('profile.php?msg0=Failed to updated');
        }else{
            echo meta('profile.php?msg1=Successfully Updated');
        }
        
        $stmt = NULL;
    }

    if(isset($_POST['changePw'])){
        
        $stmt2 = $dbo->prepare("SELECT id,password FROM admins WHERE  id=?");
        $stmt2->execute(array($_SESSION['xUserId']));
        
        if($stmt2->rowCount() == 0){
            echo meta('profile.php?msg0=An error has occured, Please try again later');
        }else{
            $row = $stmt2->fetch();
            
            $old = $_POST['oldPassword'];
            $new = $_POST['newPassword'];
            //HASH
            $hashed = password_hash($new, PASSWORD_BCRYPT, array('cost'=>12));
    
            if(password_verify($old, $row['password'])){
                $stmt2 = $dbo->prepare("UPDATE admins SET password =:pw WHERE id=:id");
                $stmt2->bindParam(':pw', $hashed, PDO::PARAM_STR);
                $stmt2->bindParam(':id', $_SESSION['xUserId'], PDO::PARAM_INT);
                $stmt2->execute();
                
                if($stmt2->rowCount() == 0){
                    echo meta('profile.php?msg0=Failed to change password ');
                }else{
                    echo meta('profile.php?msg1=Password succesfully changed');
                }
            }else{
                echo meta('profile.php?msg0=Failed to change password ');
            }
        }
        
        $stmt2 = NULL;
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <h4>Profile</h4>
    <div class="row">
        <?php echo showMsg();?>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 mb-3">
            <div class="card shadow">
                <div class="card-header">
                    Profile
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-12 mb-2">
                                <label>Email:</label>
                                <input type="text" class="form-control" disabled="true" value="<?php echo $row['email']; ?>" />
                            </div>
                            <div class="col-12 mb-2">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="fName" id="fName" value="<?php echo ucfirst($row['name']); ?>" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-auto">
                                <input type="submit" value="Update" class="btn btn-primary" name="updateProfile" id="updateProfile" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-auto mb-3">
            <div class="card shadow">
                <div class="card-header">
                    Security
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-12 mb-2">
                                <label>Old Password:</label>
                                <input type="password" name="oldPassword" id="oldPassword" class="form-control" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-2">
                                <label>New Password:</label>
                                <input type="password" class="form-control" name="newPassword" id="newPassword" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mb-2">
                                <label>Confirm New Password:</label>
                                <input type="password" class="form-control" name="nnewPassword" id="nnewPassword" onkeyup="matchPw()" />
                                <span id="matchS" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-auto">
                                <input type="submit" value="Change Password" name="changePw" id="changePw" class="btn btn-info" />
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
