<?php 
$title = 'About LAD EliteClub';
$header = "
<style>
.jumbotron{
        background-image:url('https://images.unsplash.com/photo-1522071740424-8b337d0dfa93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80');
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
        height: 600px;
        max-height: 600px;
    } 
    
}
</style>
";
require('template/header.php'); ?>
<div class="jumbotron jumbotron-fluid mb-0">
    <div class="wow fadeIn delay-2s container text-white bgPanel">
        <h1 class="display-4">About Korporatexpress Card&trade;</h1>
        <p class="lead">Korporatexpress Card&trade; membership is a Loyalty Program managed by our
        established parent company, Lima Asia Dynamics, a global leading
        operator of business generation loyalty programs.
        </p>
        <p class="lead">It has an exclusive network of hotels, resorts and restaurants that offers
        its members exclusive discounts and benefits. Reward Points (RP) for
        every dollar spent and redeem Hotel stay or Dining Vouchers
        <br/>
        Lots of <u>“For Members Only”</u> promotions
        </p>
        <a href="https://korporatexpress.com" class="btn btn-primary" target="_blank">More info click here</a>
    </div>
</div>
<main id="main" class="page">

</main>

<!-- Footer -->
<?php require('template/footer.php'); ?>
