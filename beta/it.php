<?php 
$title = 'IT Solutions';
$header = "
<style>
@media (min-width:900px){
    .colItMarTop1{
        margin-top:7rem;
    }
    .colItMarTop2{
        margin-top:2rem;
    }
    .colItMarTop3{
        margin-top:4rem;
    }
}
</style>
";
require('template/header.php'); ?>
<div class="jumbotron jumbotron-fluid mb-0" style="background-image:url('images/itBg.jpg');background-size:cover;height: 600px;max-height: 600px;background-attachment: fixed;padding-top: 8rem">
    <div class="container text-white bgPanel">
        <h1 class="display-4">IT Solutions</h1>
        <p class="lead">LIMA IT Team specialises in a wide range of web development and hosting services to help keep your business ahead online and keep your customers happy.</p>
        <p class="lead">The Technical Support Team focus on web development and software applications. Maintenance of computer systems to serve clients and our network in the processing and distribution of its programs globally<br/>
        </p>
        <div class="justify-content-center text-center">
            <p>DOMAIN | HOSTING | WEB DESIGN | APPS | SEO | SOCIAL MEDIA</p>
            <p>Our other services include, but not limited to:</p>
            <img class="rounded" src="images/seo.png" alt="SEO"/>
        </div>
    </div>
</div>
<main id="main" class="page">
    <div class="container-fluid text-center text-white w-100 d-none d-md-block" style="position:absolute; bottom:0;">
        <p id="scroll" class="animated bounce infinite m-0 text-dark"><i class="fas fa-angle-double-down fa-3x"></i> <br />Scroll Down</p>
    </div>
    <section style="background-color:#fff">
        <div class="container">
            <div class="p-4">
                <div class="row">
                    <div class="wow fadeIn col-sm-6 col-md-6 col-lg-6 text-center">
                        <img src="images/it2.gif" class="img-fluid img-circle" alt="Failed to load image. Refresh the page" />
                    </div>
                    <div class="wow fadeIn col-sm-12 col-md-6 col-lg-6 text-left colItMarTop1">
                        The main drive for Lima Asia Dynamics IT SOLUTIONS team is to help customers better manage their information, mainly through the development of information technology management systems. This includes innovative web and database design, web applications, software design and mobile technologies.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark">
        <div class="container">
            <div class="p-4">
                <div class="row">
                    <div class="wow fadeIn col-sm-12 col-md-6 col-lg-6 text-left text-white colItMarTop2">
                        Lima Asia Dynamics IT Solutions offer long-term support and consultancy services, as well as development of new systems. As a Google Advertising Consultant, Lima Asia Dynamics specialise in bespoke solutions built around Microsoft-based technologies such as VB.NET, ASP.NET, SQL Server, Access, and Share Point to name but a few. We provide CRM and CMS solutions to the hospitality and leisure industry leveraging the Microsoft CRM and CMS platform
                    </div>
                    <div class="wow fadeIn col-sm-6 col-md-6 col-lg-6 text-center">
                        <img src="images/it1.gif" class="img-fluid img-circle" alt="Failed to load image. Refresh the page" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container">
            <div class="p-4">
                <div class="row text-justify">
                    <div class="wow fadeIn col-sm-6 col-md-6 col-lg-6 text-center">
                        <img src="images/it3.gif" class="img-fluid" />
                    </div>
                    <div class="wow fadeIn col-sm-6 col-md-6 col-lg-6 colItMarTop3 colItMarTop3">
                        <p>Our IT Team have a vast amount of experience and knowledge in their respective fields, backed up by experience and IT related qualifications, giving you the reassurance you are dealing with professionals. Many also have a background in IT Training, meaning we are able to communicate clearly with our clients on both technical and non-technical levels. All the work carried out by our consultants will be to the customer's exact specification and needs whether you are a Hotel, SME or large corporation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<?php require('template/footer.php'); ?>
