<?php
$title = 'Loyalty Program';
$header = "
<style>
.jumbotron{
        background-image:url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80');
        padding-top: 8rem;
        background-size:cover;
        background-attachment: fixed;
        background-position:center;
    }
@media (min-width:764px){
    .colItMarTop1{
        margin-top:7rem;
    }
    .colItMarTop2{
        margin-top:2rem;
    }
    .colItMarTop3{
        margin-top:4rem;
    }

    .card{
        min-height:152px;
        max-height:152px;
    }
    .jumbotron{
        height: 800px;
        max-height: 800px;
    }
    .showcase div > img{
        width:100%;
        max-width:100%;
        height:100%;
    }
}
</style>
";
require('template/header.php'); ?>
<div class="jumbotron jumbotron-fluid mb-0">
    <div class="wow fadeIn delay-2s container text-white bgPanel" style="background-color: rgba(0, 0, 0, 0.88)">
        <h1 class="display-4">LIMA’s Turnkey Loyalty Program Solutions</h1>
        <p>LIMA (Lima Asia Dynamics) offers a complete turnkey loyalty solutions for our partner hotels. The Hotel Loyalty program is managed entirely by our dedicated and professional staff.</p>
        <p>Our hospitality program services is specially tailored to increase your revenue without monetary investment. It is a self-reliant and no risk project</p>
        <p>LIMA is a global operator for world-class and independent hotels providing top quality, turnkey, paid loyalty membership programs that generate much sought after additional revenues
        To achieve this objective regardless of hotel brand or location, LIMA creates a fully customized mobile app and website (which we update and upgrade constantly) that can align the app to their respective brand
        </p>
        <p>Korporate Xpress is a points based guest loyalty program with cross property link benefits aimed at
        promoting customer loyalty  in corporate guests. A booking platform connects members to our participating partner hotels and restaurant enabling members to instantly book a dining table or reserve a hotel accommodation
        </p>
        <hr style="border-color:#fff"/>
        <p>
        <div class="container">
            <div class="row showcase mb-3">
                <div class="col-12">
                    <h4 class="display-4" style="font-size:2rem;">Benefits Reaped by Hotel Clients</h4>
                </div>
                <div class="col-3">
                    <img class="img-fluid rounded" src="images/loyaltyProgram_icon1.png"/>
                </div>
                <div class="col-3">
                    <img class="img-fluid rounded" src="images/loyaltyProgram_icon2.png"/>
                </div>
                <div class="col-3">
                    <img class="img-fluid rounded" src="images/loyaltyProgram_icon3.png"/>
                </div>
                <div class="col-3">
                    <img class="img-fluid rounded" src="images/loyaltyProgram_icon4.png"/>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="merchant.php" class="btn btn-primary btn-sm">Enquiry Form. Click here</a>
                </div>
            </div>
        </div>
        </p>
    </div>
</div>
<section>
    
</section>

<!-- Footer -->


<?php 

require('template/footer.php'); ?>

