<?php 
$title = 'About Lima';
$header = "
<style>
.jumbotron{
        background-image:url('images/aboutBg.jpg');
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
        <h1 class="display-4">About Lima</h1>
        <p class="lead"><b>Lima Asia Dynamics</b> (LIMA) specializes in operating bespoke loyalty programs for the hospitality and brand conscious industry with advanced marketing and database management solutions.</p>
        <p>All our Senior Directors have a combined 50 years of hands-on experience in the hotel and IT related industry.<br/>
        Our in-house IT Team of professionals handles the complicated part of tackling all IT related issues with expert solutions.
        </p>
        <hr style="border-color:#fff"/>
        <h1 class="display-4" style="font-size:2rem">Connecting Hotels and Guests Globally</h1>
        <p>Lima Asia Dynamics (LIMA) has a vision to be the world’s leading provider of premium loyalty programs to established hotels worldwide. For over 20 years, we have concentrated on partnering with some of the best hotels in the Asia Pacific Region, increasing their revenue by creating quality databases of loyal customers.</p>
    </div>
</div>
<main id="main" class="page">
    <section style="background-color:#fff">
        <div class="container">
            <div class="p-4">
                <div class="row">
                    <h4 class="display-4 w-100 text-center mb-4" style="font-size:2.8rem">What we do</h4>
                    <div class="col-sm-12 col-md-3 col-lg-3 mb-4">
                        <div class="card bg-primary">
                            <div class="card-body text-center text-white">
                                <i class="fas fa-users fa-3x mb-3"></i>
                                <p>Loyalty Program</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 mb-4">
                        <div class="card bg-success">
                            <div class="card-body text-center text-white">
                                <i class="fas fa-exchange-alt fa-3x mb-3"></i>
                                <p>Inbound and Outbound Sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 mb-4">
                        <div class="card bg-danger">
                            <div class="card-body text-center text-white">
                                <i class="fas fa-headphones-alt fa-3x mb-3"></i>
                                <p>Customer Care</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3 mb-4">
                        <div class="card bg-warning">
                            <div class="card-body text-center text-white">
                                <i class="fas fa-laptop-code fa-3x mb-3"></i>
                                <p>IT & Web Development</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark text-white">
        <div class="container">
            <div class="p-4">
                <div class="row">
                    <h4 class="display-4 w-100 text-center" style="font-size:2.8rem">What we have</h4>
                    <div class="col-12 text-center">
                        Lima Vicidial Software is a complete Call Centre Solution. It can accommodate up to 45 telemarketing agents per server and 500 calls per second. Scalable to hundreds of logged in agents in a dedicated dialing server with integrated call record.
                        <br /><br />
                        <b>Other features include:</b><br />
                        • previewing leads before dialing<br />
                        • recording and listening to agent calls<br />
                        • sending dropped calls to available agents or a voicemail inbox<br />
                        • estimated hold times for inbound callers<br />
                        • remote-agent calling<br />
                        • multiple language support and more<br />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mobileapp">
        <div class="container">
            <div class="p-4">
                <div class="row">
                    <h4 class="display-4 w-100 text-center" style="font-size:2rem">LIMA’s Mobile Application</h4>
                    <div class="col-12 text-justify">
                        <br/>
                        <p>Gone are the days for traditionally printed vouchers or membership plastic cards. With LIMA’s technology and innovation in iOS and Android devices, members can now access their membership with just a few clicks at their fingertips. Secured and safe</p>
                        <p>With this option, Individual Hotel’s Complimentary Night Stay and e-vouchers in physical booklet form will no longer be a burden to inconveniently carry. Members can access and take action like, bookings and dining reservations at respective participating hotels and restaurants. Check and redeem reward points, purchase or renew membership. Receive relevant promos and push notifications based on their location, purchase history behaviour and preferences.</p>
                        <p>For those who are not familiar to use this technology, they can instantly contact Customer Service for immediate assistance and rest assured our dedicated Call Centre staff will get it done on their behalf. Secured and safe</p>
                        <p>LIMA’s detailed and secured tracking with two way POS/PMS integration will enhance and improve analytics, intelligence and security features. Thus eliminating time consuming effort to keep members happy and hotels will gain the additional revenue</p>
                        <p>Hotels and Company Brands can consider the traditional way, opt for Mobile App or both combined. <a href="#" class="btn btn-sm btn-outline-primary mt-1" data-toggle="modal" data-target="#mobileMore">Read More ></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
                        <!-- Modal -->
                        <div class="modal fade text-dark" id="mobileMore" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Mobile Applications</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul>
                                            <li>Inform users of new products and offers</li>
                                            <li>Stand out from the competition</li>
                                            <li>Reach out to younger demographics</li>
                                            <li>Sync users’ email and social media accounts</li>
                                            <li>Provide more value</li>
                                            <li>Make a stronger brand</li>
                                            <li>Connect better with customers</li>
                                            <li>Boost profits and revenue</li>
                                            <li>Retain customers</li>
                                        </ul>
                                        <p>90 percent of companies plan to increase investment in mobile apps in 2016. If you do not, there is a good chance you will be left behind your competitors</p>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
</main>

<!-- Footer -->
<?php require('template/footer.php'); ?>
