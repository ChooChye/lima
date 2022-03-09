<?php 
$title = 'Home';
require('template/header.php'); ?>
<div class="sliderHolder">
    <div class="sliderContainer slideshowimage"></div>
    <div class="wow slideInLeft delay-1s sliderCaption w-100" style="position:absolute;top: 15rem;">
        <div class="p-4" id="cap1">
            <div class="row mx-auto text-white">
                <div class="col-sm-12 col-md-6 col-lg-6 bgPanel">
                    <div class="row">
                        <div class="col-7">
                        <p style="margin:0; font-size:2.8rem">Lima Customer<br /> Loyalty Programmes</p>
                        <span class="text-white">- The ultimate choice</span><br/>
                    </div>
                    <div class="col-5 text-center">
                        <img src="https://korporatexpress.com/images/20%20yrs%20image.png" width="60%" class="rounded"/>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4" id="cap2" style="display:none;">
            <div class="row mx-auto text-white">
                <div class="col-sm-12 col-md-6 col-lg-6 bgPanel">
                    <div class="row">
                        <div class="col-9">
                            <span class="text-white">Hotel Loyalty Programme</span>
                            <p style="margin:0; font-size:2rem">
                                Creates additional Revenue<br/>
                                No Risk. No funding needed.<br/>
                                Be noticed. Be ahead
                            </p>
                        </div>
                        <div class="col-3 text-center">
                            <img src="https://korporatexpress.com/images/20%20yrs%20image.png" class="img-fluid" class="rounded"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="container-fluid text-center text-white w-100 d-none d-md-block" style="position:absolute; bottom:0;">
        <p id="scroll" class="animated bounce infinite m-0"><i class="fas fa-angle-double-down fa-3x"></i> <br />Scroll Down</p>
    </div>
</div>

<main id="main">
    <section class="bg-dark">
        <div class="container">
            <div class="p-4">
                <div class="row">
                    <div class="wow fadeIn col-sm-6 col-md-6 col-lg-6 text-center">
                        <img src="images/hotel.gif" class="img-fluid img-circle" alt="Failed to load image. Refresh the page" />
                    </div>
                    <div class="wow fadeIn col-sm-12 col-md-6 col-lg-6 marTop text-left text-white">
                        Lima Customer Loyalty programme is a specially designed marketing approach that recognizes and rewards regular clientele who patronize a Hotel or business brand on a recurring basis.
                        Having a <a href="about.php#mobileapp"><b>mobile app</b></a> for your business is a great way to improve your brand recognition.
                        Studies have found that members of customer loyalty programmes typically spend up to 18% more than other customers<br />
                        <a href="about.php" class="btn btn-outline-primary text-white mt-1">Read More ></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fixedBg text-center" style="background-image:url('images/crmBg.jpg');">
        <div class="container">
            <div class="p-4">
                <div class="row">
                    <div class="wow fadeIn col-sm-12 col-md-12 col-lg-12 marTop text-white bgPanel">
                        <h4 class="display-4 mb-4">Lima Asia Dynamics Components</h4>

                        <div class="row text-white mx-auto" id="moduleHolder">
                            <div class="col-lg-4">
                                <div class="card bg-primary mb-3" data-toggle="modal" data-target="#crm" style="cursor:pointer">
                                    <div class="card-body">
                                        <i class="fas fa-users fa-3x mb-2"></i>
                                        <p class="m-0">Customer <br />Relationship<br /> Management <br />(CRM)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal CRM-->
                            <div class="modal fade text-dark" id="cms" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">CMS</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-justify">
                                            <p>A Content Management System (CMS) is a computer software application or set of related programmes that are used to create and manage digital content. CMS are typically used for enterprise content management (ECM) and web content management</p>
                                            <p>It provides website authoring, collaboration, and administration tools that help users with little knowledge of web programming languages or markup languages create and manage website content.</p>
                                            <p>The entire point of a successful CMS is to allow a user manipulate database information, template files and design styles without having to understand code or how a database works. A website CMS is similar, yet provides a much greater deal of control to you over almost all content elements of your desired website.</p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <div class="card bg-danger mb-3"  data-toggle="modal" data-target="#cms" style="cursor:pointer">
                                    <div class="card-body">
                                        <i class="fas fa-laptop-code fa-3x mb-2"></i>
                                        <p class="m-0">Content <br />Management<br /> System <br />(CMS)</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal CMS-->
                            <div class="modal fade text-dark" id="crm" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">CRM</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-justify">
                                            <p>LAD Customer Relationship Management (CRM) is a computer software application build for Hotels/Companies to keep all your contacts centralized and customized in the database
                                            , spending less time logging data. <br/>Every lead and information, all in one place. No more digging your Inbox for information. Saving time to be more productive in other areas that requires your immediate attention. Easy to install and simple to operate</p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card bg-warning mb-3" data-toggle="modal" data-target="#market" style="cursor:pointer">
                                    <div class="card-body">
                                        <i class="fas fa-bullhorn fa-3x mb-2"></i>
                                        <p class="m-0">Marketing <br />Solutions</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Marketing Solutions-->
                            <div class="modal fade text-dark" id="market" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Marketing Solutions</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-justify">
                                            <p>LAD Marketing Solutions or Internet marketing do not require flashy and costly websites, packed with industry and fancy technology. On the contrary, to successfully market your business on the web, you must be able to identify important questions including who your target audience is and who is most likely to need and use your product or service.</p>
                                            <p>The Internet today is full of distractions and endless competition. Your online marketing efforts should be directed at getting noticed.</p>
                                            <p>Internet marketing is a multi-faceted, rigorous and time-consuming process. Lima team has the experience, tools and insight to reach an infinite number of customers worldwide by crafting and tailored custom marketing strategies, making this journey effortless for you and your business.</p>
                                            <p>Client communication is the key to our working relationship and we pride ourselves on approaching each client with integrity, honesty, professionalism and compassion. We provide each client with valued information to improve their Internet marketing efforts, helping them attract targeted traffic and customers to their business.</p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="p-4">
                <div class="row text-justify">
                    <div class="wow fadeIn col-sm-6 col-md-6 col-lg-6 order-12 order-sm-1" style="padding-top:2rem;">
                        <h4>Our Objective</h4>
                        <!--p>Combining leading-edge business strategy and IT knowledge, to develop efficient and effective solutions that keep businesses one-step ahead of competitors. </p-->
                        <p>Keeping ahead of our competitors with effective and up-to-date technology so as to increase awareness of our clients’ business</p>
                        <h4>Our Mission</h4>
                        <p>We are dedicated to achieve high targets, add revenue and contribute substantial profits to our clients operations.</p>
                        <h4>Our Achievements</h4>
                        <p>
                            <div>
                                <img class="float-left" src="images/gPartner.png" width="40%"/>
                                <img class="float-left" src="images/msPartner.png" width="40%"/>
                            </div>
                        </p>
                    </div>
                    <div class="wow fadeIn col-sm-6 col-md-6 col-lg-6 text-center order-1 order-sm-12">
                        <img src="images/ourMission.gif" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<?php require('template/footer.php'); ?>
