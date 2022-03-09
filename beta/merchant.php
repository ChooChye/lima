
<?php 
$title = 'Merchant Enquiry';
$header = "
<style>
.jumbotron{
        background-image:url('images/contactBg.jpg');
        padding-top: 7rem;
        background-size:cover;
        background-attachment: fixed;
}
.clearfix::after {
  content: \"\";
  clear: both;
  display: table;
}
@media (min-width:764px){
    .jumbotron{
        padding-top: 4rem;
        height: auto;
    }    
    .colItMarTop3{
        margin-top:4rem;
    }
}
</style>
";
//Contact process
if(isset($_POST['submit'])){
    $errors = array();
    $stat = true;
    if(empty($_POST['subject'])){
        $errors[] = "Please enter a Subject";
        $stat = false;
    }
    if(empty($_POST['fname'])){
        $errors[] = "Please enter your Full Name";
        $stat = false;
    }
    if(empty($_POST['email'])){
        $errors[] = "Please enter your Email Address";
        $stat = false;
    }
    if(empty($_POST['cName'])){
        $errors[] = "Please enter your Company's Name.";
        $stat = false;
    }
    if(empty($_POST['hp'])){
        $errors[] = "Please enter your Contact No.";
        $stat = false;
    }
    if(empty($_POST['position'])){
        $errors[] = "Please enter your Position";
        $stat = false;
    }
    if(empty($_POST['website'])){
        $errors[] = "Please enter your website url";
        $stat = false;
    }
    if(empty($_POST['msg'])){
        $errors[] = "Please enter your Message";
        $stat = false;
    }

    if($stat){
        
        $to         = 'choochye9@gmail.com';
        $subject    = 'Merchant Enquiry |'.$_POST[''];
        
        $name       = $_POST['fname'];
        $email      = $_POST['email'];
        $cName      = $_POST['cName'];
        $hp         = $_POST['hp'];
        $pos        = $_POST['position'];
        $website    = $_POST['website'];
        $msg        = $_POST['msg'];
        
        //Message Body
        $body ="
        <p>Name: $name</p>
        <p>Email: $email</p>
        <p>Hotel/Company Name: $cName</p>
        <p>Contact No.: $hp</p>
        <p>Position: $pos</p>
        <p>Website: $website</p>
        <p>Message:<br/> $msg</p>
        ";
        
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: <'.$email.'>' . "\r\n";
        $mail = mail($to, $subject, $body, $headers);
        
        if($mail){
            echo '
            <div class="bg-success text-white text-center">
                <b>Message has been sent</b>
            </div>
            ';
        }else{
            echo '
            <div class="bg-danger text-white text-center">
                <b>An error has occurred when sending. Please try again later</b>
            </div>
            ';
        }
    }
}
require('template/header.php'); ?>
<div id="main" class="page jumbotron jumbotron-fluid mb-0">
    <div class="container colItMarTop3">
        <div class="text-white bgPanel text-center">
            <h4 class="w-100">Merchant Enquiry Form</h4>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6">
                    <form action="merchant.php" method="post">
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <input type="text" name="fname" id="" class="form-control" placeholder="Name" />
                                <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[1].'</span>'; ?>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <input type="email" name="email" id="" class="form-control" placeholder="Email Address" />
                                <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[2].'</span>'; ?>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <input type="hp" name="cName" id="" class="form-control" placeholder="Hotel/Company Name" />
                                <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[3].'</span>'; ?>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <input type="hp" name="cName" id="" class="form-control" placeholder="Position" />
                                <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[5].'</span>'; ?>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <input type="hp" name="hp" id="" class="form-control" placeholder="Contact No." />
                                <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[4].'</span>'; ?>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <input type="hp" name="hp" id="" class="form-control" placeholder="Website" />
                                <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[6].'</span>'; ?>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <input type="hp" name="hp" id="" class="form-control" placeholder="Subject" />
                                <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[0].'</span>'; ?>
                            </div>
                        </div>
                        <div class="form-row mb-3">
                            <div class="col-12">
                                <textarea rows="6" name="msg" class="form-control" placeholder="Message"></textarea>
                                <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[7].'</span>'; ?>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Send" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php require('template/footer.php'); ?>
