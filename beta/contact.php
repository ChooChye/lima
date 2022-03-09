
<?php 
$title = 'Contact us';
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
$tollfree = '
<div>
    <img class="float-left mr-2" style="background-color:white; border-radius:2rem; width:16%;" src="https://image.winudf.com/v2/image/Y29tLnRvbGxmcmVlLnRvbGxmcmVlX2ljb25fMTUwMzkxMDY3NV8wMzE/icon.png?w=170&fakeurl=1" />
    <p class="m-0">
        <b style="font-size:1.2rem">USA | Canada Toll Free No.:</b><br/>
        1-800 8197 61
        <p style="font-size:0.7rem"><u>NOTE:</u> Calls may be recorded for training and security purposes without prior notice<br/><span style="text-indent:1rem">Call charges may apply (By your respective Telco company)<br/>Terms and conditions apply</span></p>
     </p>
</div>
<hr style="border-color:#ccc;"/>
';
//Contact process
if(isset($_POST['submit'])){
    $errors = array();
    $stat = true;
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
    if(empty($_POST['msg'])){
        $errors[] = "Please enter your Message";
        $stat = false;
    }

    if($stat){
        
        $to         = 'choochye9@gmail.com';
        $subject    = 'Enquiry';
        
        $name       = $_POST['fname'];
        $email      = $_POST['email'];
        $cName      = $_POST['cName'];
        $hp         = $_POST['hp'];
        $msg        = $_POST['msg'];
        
        //Message Body
        $body ="
        <p>Name: $name</p>
        <p>Email: $email</p>
        <p>Company Name: $cName</p>
        <p>Contact No.: $hp</p>
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
    <div class="container text-white bgPanel colItMarTop3">

        <div class="row">
            <div class="col-md-6 col-lg-6">
                <h4 class="w-100">Contact us</h4>
                <form action="contact.php" method="post">
                    <div class="form-row mb-3">
                        <div class="col-12">
                            <input type="text" name="fname" id="" class="form-control" placeholder="Full Name" />
                            <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[0].'</span>'; ?>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-12">
                            <input type="email" name="email" id="" class="form-control" placeholder="Email Address" />
                            <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[1].'</span>'; ?>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-12">
                            <input type="hp" name="cName" id="" class="form-control" placeholder="Company Name" />
                            <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[2].'</span>'; ?>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-12">
                            <input type="hp" name="hp" id="" class="form-control" placeholder="Contact No." />
                            <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[3].'</span>'; ?>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-12">
                            <textarea rows="6" name="msg" class="form-control" placeholder="Message"></textarea>
                            <?php echo '<span style="font-size:0.8rem; color: #f7a1a9">'.$errors[4].'</span>'; ?>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <input type="submit" name="submit" class="btn btn-primary btn-block" value="Send" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-lg-6">
                <div id="Representative AddressHolder text-white">
                    <p><b>We are located in:</b></p>
                    <p>Select the flags to view contact details</p>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab" href="#add-my" role="tab"><i class="sprite flag_malaysia" data-toggle="tooltip" title="Malaysia"></i></a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#add-ch" role="tab"><i class="sprite flag_china" data-toggle="tooltip" title="China"></i></a>

                            <a class="nav-item nav-link" data-toggle="tab" href="#add-hk" role="tab"><i class="sprite flag_hong_kong" data-toggle="tooltip" title="Hong Kong"></i></a>
                            <!--a class="nav-item nav-link" data-toggle="tab" href="#add-aus" role="tab"><i class="sprite flag_australia" data-toggle="tooltip" title="Australia"></i></a-->
                            <a class="nav-item nav-link" data-toggle="tab" href="#add-vn" role="tab"><i class="sprite flag_vietnam" data-toggle="tooltip" title="Vietnam"></i></a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#add-in" role="tab"><i class="sprite flag_indonesia" data-toggle="tooltip" title="Indonesia"></i></a>
                            <!--a class="nav-item nav-link" data-toggle="tab" href="#add-th" role="tab"><i class="sprite flag_thailand" data-toggle="tooltip" title="Thailand"></i></a-->
                            <a class="nav-item nav-link" data-toggle="tab" href="#add-ph" role="tab"><i class="sprite flag_phillipines" data-toggle="tooltip" title="Phillipines"></i></a>
                            <a class="nav-item nav-link" data-toggle="tab" href="#add-us" role="tab"><i class="sprite flag_us" data-toggle="tooltip" title="USA"></i></a>
                            <!--a class="nav-item nav-link" data-toggle="tab" href="#add-uae" role="tab"><i class="sprite flag_uae" data-toggle="tooltip" title="United Arab Emirates"></i></a-->
                        </div>
                    </nav>
                    <div class="tab-content pt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="add-my" role="tabpanel">
                            <?php echo $tollfree;?>
                            <address>
                                <b>Asia Pacific Corporate Headquarters</b><br />
                                Lima Asia Dynamics<br/>
                                KL Sentral, Level 35 East Wing, 2A<br/>
                                Jalan Stesen Sentral 2,<br/>
                                50470 Kuala Lumpur<br/>
                                Malaysia<br/>
                                <b>T:</b> (+603) 2731 9343<br/>
                                <b>F:</b> (+603) 2731 9399<br/>
                                <b>Hotline:</b> (+60) 1128 047131<br/>
                            </address>
                        </div>
                        <div class="tab-pane fade" id="add-hk" role="tabpanel">
                            <?php echo $tollfree;?>
                            <b class="text-white">Representative Office:</b><br />
                            <address>
                                Lima Asia Dynamics (HK)<br/>
                                K11 ATELIER Victoria Dockside<br/>
                                Level 7, 18 Salisbury Road, Tsim Sha Tsui<br/>
                                Hong Kong <br/>
                                Phone: +852 3166 6166
                            </address>
                        </div>
                        <div class="tab-pane fade" id="add-ch" role="tabpanel">
                            <?php echo $tollfree;?>
                            <b class="text-white">Representative Office:</b><br />
                            <address>
                                Lima Asia Dynamics<br/>
                                Twin Towers (East)<br/>
                                10th Floor, B-12 Jianguomenwai Avenue<br/>
                                Beijing 100022<br/>
                                China<br/>
                                Phone: +86 (10) 5123 5123
                            </address>
                        </div>
                        <!--div class="tab-pane fade" id="add-uae" role="tabpanel">
                            <?php echo $tollfree;?>
                            <b class="text-white">Representative Office:</b><br />
                            UAE | Middle East <br/>
                            <address>
                                United Arab Emirates<br />
                                Lima Asia Dynamics Ltd<br/>
                                Level 54 Almas Tower<br/>
                                JLT, DMCC Free Zone<br/>
                                Dubai
                            </address>
                        </div-->
                        <div class="tab-pane fade" id="add-vn" role="tabpanel">
                            <?php echo $tollfree;?>
                            <b class="text-white">Representative Office:</b><br />
                            <address>
                                Lima Asia Dynamics<br/>
                                Vietcombank Bank Tower<br />
                                No. 5 Mê Linh City<br />
                                Ben Nghe Ward<br/>
                                District 1 Ho Chi Minh City 700000<br/>
                                Vietnam<br/>
                                Phone: +84 (28) 3827 1988
                            </address>
                        </div>
                        <div class="tab-pane fade" id="add-in" role="tabpanel">
                            <?php echo $tollfree;?>
                            <b class="text-white">Representative Office:</b><br />
                            <address>
                                PT Lima Asia Dynamics<br/>
                                Sahid Sudirman Center<br />
                                86, 56th floor, Jalan Jenderal Sudiman<br />
                                10220 Jakarta<br/>
                                Indonesia<br/>
                                Phone: +62 (21) 8063 1888
                            </address>
                        </div>
                        <div class="tab-pane fade" id="add-th" role="tabpanel">
                            <?php echo $tollfree;?>
                            <b class="text-white">Representative Office:</b><br />
                            <address>
                                Lima Asia Dynamics<br/>
                                Athenee Tower<br />
                                23rd Floor, 63 Wireless Road, Lumpini<br />
                                Pathumwan, Bangkok 10330<br/>
                                Thailand
                                Phone: +66 (2) 126 8000
                            </address>
                        </div>
                        <div class="tab-pane fade" id="add-ph" role="tabpanel">
                            <?php echo $tollfree;?>
                            <b class="text-white">Representative Office:</b><br />
                            <address>
                                Lima Asia Dynamics Worldwide<br/>
                                LKG Tower<br/>
                                37th Floor, 6801 Ayala Avenue<br/>
                                Makati City<br/>
                                1226, Philippines<br/>
                                Phone: +63 (2) 8859 2888<br/>
                            </address>
                        </div>
                        <div class="tab-pane fade" id="add-us" role="tabpanel">
                            <?php echo $tollfree;?>
                            <b class="text-white">Representative Office:</b><br />
                            <address>
                                Lima Asia Dynamics Worldwide<br/>
                                The Seagram Building<br/>
                                375 Park Avenue<br/>
                                Midtown East<br/>
                                New York City<br/>
                                NY 10152, USA<br/>
                                <b>Toll Free No.:</b> 1800 8197 61
                            </address>
                        </div>
                    </div>
                </div><!-- Representative AddressHolder -->
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php require('template/footer.php'); ?>
