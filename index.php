<!DOCTYPE HTML>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145381692-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145381692-1');
</script>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"/>
<title>LIMA Asia Dynamics</title>
<meta name="description" content="LIMA is started with a young and dynamic team with over 30 years of combined experience in the field of business process outsourcing industry specializing in implementing loyalty programs. LIMA Travel Asia is dedicated in delivering end to end business process outsourcing services in this highly competitive industry from its state of the art infrastructure located in the heart of the city of Kuala Lumpur, Malaysia. We are one of the youngest and yet a leading business process outsourcing and consulting companies in Malaysia by focusing on our core areas of business">
<meta name="keywords" content="hotels, loyalty programs, crm, cms, marketing, solution, it solution, hotels"/>
<meta name="author" content="ChooChye"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
<script>window.location.replace("https://lima-asiadynamics.com/beta");</script>
<script language="JavaScript" type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 2000
    })
  });    
</script>

<style type="text/css">
.highlight{
    -webkit-animation: color-change 1s infinite;
    -moz-animation: color-change 1s infinite;
    -o-animation: color-change 1s infinite;
    -ms-animation: color-change 1s infinite;
    animation: color-change 1s infinite;
}

@-webkit-keyframes color-change {
    0% { color: red; }
    50% { color: blue; }
    100% { color: red; }
}
@-moz-keyframes color-change {
    0% { color: red; }
    50% { color: blue; }
    100% { color: red; }
}

@keyframes color-change {
    0% { color: red; }
    50% { color: blue; }
    100% { color: red; }
}
.hover:hover {
    transition:all ease-in-out;
    background: #EEE;
    border:1px solid #CCC;
    box-shadow: 0px 5px 8px 3px #DDD;
}
hr {
    border-color: #DDD -moz-use-text-color -moz-use-text-color;
}
body{
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 12px;
    line-height: 1.42857;
    color: #333;

}
.content {
    padding:15px;
    /*border-top-right-radius: 5px;
    border-top-left-radius: 5px;*/
    border-radius: 5px;
    background-color:#FFF;
    border:1px solid #EEE;
}
/*------------------Homepage slider---------------------*/
.carousel .item {
    width: 100%; /*slider width*/
    max-height: 200px; /*slider height*/
}
@media (min-width: 900px) {
.carousel .item {
    width: 100%; /*img width*/
    min-height:200px;
    
}
}
.item>img{
    width:100%;
    max-height:200px;
}
@media (min-width: 400px)
.carousel .item {
    width: 100%;
}
}

/*add some makeup*/
.carousel .carousel-control {
    background: none;
    border: none;
    top: 10%;
}


/*---------------------------------------------*/
.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}

</style>
</head>
<?php
//path to the image directory 
$directory = "wpimages/bg/"; 
  
//get all image files with a .jpg extension. 
$images = glob("" . $directory . "*.jpg"); 

// get random image index 
$rand_img = array_rand($images, 1); 

// display the image 
echo '<body class="blur" style="background: url('.$images[$rand_img].') fixed no-repeat; background-size: cover;">';
?>
<!--<body class="blur" style="background: url('2.jpg') fixed no-repeat; background-size: cover;">-->
<div class="container" style="width: 750px;">
<ul class="list-inline" style="margin:0px; padding:0px; text-align:right;">
<li style="font-size:11px;"><a style="color:#fff" href="?view=client"><i class="glyphicon glyphicon-user"></i> Client Login</a></li>
<li style="font-size:11px;"><a style="color:#fff" href="?view=admin"><i class="glyphicon glyphicon-log-in"></i> Admin Zone</a></li>
</ul>
<div class="content">
<!---HEADER--->
<div class="header">
<!--<script>
    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');  
                 $('#c', this).toggleClass("caret caret-up");              
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');   
                 $('#c', this).toggleClass("caret caret-up");           
            });
    });
</script>-->
<?php
echo '
<nav id="navbar" class="navbar navbar-default" role="navigation" style="border-radius: 0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="?view=home"><img src="wpimages/Nlogo.png" alt="LIMA Logo" width="55"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">';
      if($_SERVER['QUERY_STRING'] == 'view=home'){
        echo '<li class="active"><a href="?view=home"><i class="fa fa-home"></i> Home</a></li>';
      }else{
        echo '<li><a href="?view=home"><i class="fa fa-home"></i> Home</a></li>';
      }
      echo '<li class="dropdown">';
      if($_SERVER['QUERY_STRING'] == 'view=loyalty'){
        echo '<li class="active"><a href="?view=loyalty"><i class="fa fa-line-chart"></i> Loyalty Programs</a></li>';
      }else{
        echo '<li><a href="?view=loyalty"><i class="fa fa-line-chart"></i> Loyalty Programs</a></li>';
      }
      if($_SERVER['QUERY_STRING'] == 'view=our-clients'){
        echo '<li class="active"><a href="?view=it"><i class="fa fa-desktop"></i> Our IT Solutions</a></li>';
      }else{
        echo '<li><a href="?view=it"><i class="fa fa-desktop"></i> IT Solutions</a></li>';
      }
      if($_SERVER['QUERY_STRING'] == 'view=LIMAtravel'){
        echo '<li class="active"><a href="?view=dmstravel">My Discover Club</a></li>';
      }else{
        echo '<li><a href="?view=dmstravel">My Discover Club</a></li>';
      }
            if($_SERVER['QUERY_STRING'] == 'view=dmsholiday'){
        echo ' <li class="dropdown">
        <a href="?view=dmsholiday" class="dropdown-toggle">DMS Holidays</a>
        
  </li>';
      }else{
        echo '<li class="dropdown">
        <a href="?view=dmsholiday" class="dropdown-toggle">DMS Holidays</a>
        
  </li>';
      }echo '
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!---HEADER--->';
?>


<?php
$p = "<div style=\"background:url('wpimages/404.jpg') no-repeat; background-size:cover; height:500px\"></div>";
$errormsg = "<div class=\"alert alert-danger\"><h3>There seems to be a technical error</h3></div>";
if(isset($_GET['view'])){
    if($_GET['view'] == 'home'){
echo '
<!---CONTENT--->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active">
      <img src="wpimages/carousel/Complete_It_Solution.jpg" alt="...">
    </div>
    
    <div class="item">
      <img src="wpimages/carousel/Loyalty_card.jpg" alt="...">
      <div class="carousel-caption">
        <h3>My Discover Club</h3>
      </div>
    </div>
    
    <div class="item">
      <img src="wpimages/carousel/1.jpg" alt="Call center">
    </div>
  </div>
  <!-- Controls 
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a> -->
</div>
<div class="" style="padding-top: 1%;">
<div style="background-color:#EEE; height:180px; padding:10px; margin-bottom:2%;">
<div class="col-md-3 centered col-sm-3 col-xs-3" style="padding-top: 3%;">
<i class="fa fa-line-chart" style="font-size: 10em; color:#428BCA;"></i>
</div>
<div class="col-md-8 col-sm-8 col-xs-8">
<h3 style="margin:0px;">&nbsp;</h3>
<p><strong>LIMA Asia Dynamics</strong> is specialized in designing and managing customized membership databases for loyalty programmes in Asia Pacific Region, incorporated with innovative Customer Relationship Management (CRM) and the support of an in house professional IT team to substantially increase Client revenue from regular membership usage</p>
<!--p><a href="#" data-toggle="modal" data-target="#video">View Video</a></p-->
</div>

</div>
<script>
function abttext(){
    var btn = document.getElementById("abt-btn");
    if(btn.innerHTML === "About us"){
        onclick = btn.innerHTML="&times; Close";
        btn.style.color = "red";
    }else{
        onclick = btn.innerHTML="About us";
        btn.style.color = "";
    }
}

</script>
<a id="abt-btn" onclick="abttext()" class="" data-toggle="collapse" data-parent="#accordion" href="#about">About us</a>
| <a href="?view=contact">Contact us</a> | <a href="?view=career">Career</a>
<div id="about" class="collapse">
<p><strong>LIMA Asia Dynamics</strong> started with a young and dynamic team with over 30 years of combined experience in the field of business process outsourcing industry specializing in implementing loyalty programs. LIMA Asia Dynamics is dedicated in delivering end to end business process outsourcing services in this highly competitive industry from its state of the art infrastructure located in the heart of the city of Kuala Lumpur, Malaysia. We are one of the youngest and yet a leading business process outsourcing and consulting companies in Malaysia by focusing on our core areas of business:</p>
<p><a data-toggle="collapse" data-parent="#accordion" href="#objective">Objective</a> &bull; <a data-toggle="collapse" data-parent="#accordion" href="#mission">Mission Statement</a></p>

<div id="objective" class="collapse">
<p><strong>Objective</strong><br />
Combining leading-edge business strategy and IT knowledge, to develop efficient and effective solutions that keep businesses one-step ahead of competitors.
<br /><a data-toggle="collapse" data-parent="#accordion" href="#objective" class="text-danger">&times; Close</a> 
</p>

</div>

<div id="mission" class="collapse">
<p>
<strong>Mission Statement</strong><br />
To be the outstanding global providers of Loyalty Programs combined with I.C.T. strategies and services, which deliver long term commercial benefits, based upon our clients key business requirements. The strategies evolved should be economical, efficient, durable, flexible and allow the organisations to respond rapidly to both market and customer needs. 
<br /><a data-toggle="collapse" data-parent="#accordion" href="#mission" class="text-danger">&times; Close</a> 
</p>
</div>

<p>
<h3>What we do</h3>
<ul>
<li>Loyalty Programs</li>
<li>Inbound and Outbound Sales </li>
<li>Customer Care</li>
<li>IT & Web Development</li>
</ul>
</p>

</div>
</div>
<!--CONTENT-->';
  }/*check whether view is = home*/
  
  
  
  
  
  

/*----------------------------------------LOyALTY page-----------------------------------------------*/
  if($_GET['view'] == 'loyalty'){
  echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=loyalty_crm\"><i class=\"fa fa-pie-chart\"></i> CRM</a></li>
  <li><a href=\"?view=loyalty_cms\"><i class=\"fa fa-gears\"></i> CMS</a></li>
  <li><a href=\"?view=loyalty_marketing\"><i class=\"fa fa-suitcase\"></i> Marketing</a></li>
  <li><a href=\"?view=our-affliates\"><i class=\"fa fa-users\"></i> Our Affliates</a></li>
  </ul>
  </nav>";
   echo "<h3 class=\"bg-info\" style=\"padding:5px;\">Loyalty Program</h3>";
   echo "<p>LIMA Asia Dynamics specializes in implementing rewards program for Hotels and Merchants to capture customer loyalty and those who frequently visit. 
   A loyalty program may give a customer advanced access to new products, special sales or free merchandise. Customers typically register their personal information data in our system and are given a unique identifier, such as a numerical ID or membership card, and use that identifier when making a purchase.  
Loyalty programs provide two key functions: they give a member rewards for brand loyalty and they provide us with a wealth of consumer information. While Hotels and Merchants can evaluate anonymous purchases, 
the use of a loyalty program gives additional information about the type of products that may be purchased together, and whether certain benefits are more effective than others.  
</p>";
}

/*----------------------------------------LOYALTY page-----------------------------------------------*/






/*----------------------------------------CRM page-----------------------------------------------*/
if($_GET['view'] == 'loyalty_crm'){
      echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li class=\"active\"><a href=\"?view=loyalty_crm\"><i class=\"fa fa-pie-chart\"></i> CRM</a></li>
  <li><a href=\"?view=loyalty_cms\"><i class=\"fa fa-gears\"></i> CMS</a></li>
  <li><a href=\"?view=loyalty_marketing\"><i class=\"fa fa-suitcase\"></i> Marketing</a></li>
  <li><a href=\"?view=our-affliates\"><i class=\"fa fa-users\"></i> Our Affliates</a></li>
  <li><a href=\"?view=cwc\"><img src=\"https://Lima-asiadynamics.com/favicon.ico\" width=\"20\"/> Lima Travel Club</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-danger\" style=\"padding:5px;\">CRM</h3><hr/>";
    echo "<i class=\"pull-left fa fa-pie-chart fa-5x\"></i>
    Customer Relationship Management (CRM) is a model for managing a company s interactions with current and future customers. It provides a complete view of customer data. and involves using technology to organize, automate, and synchronize sales, marketing, customer service, and technical support. Use of CRM varies from function to function within an organization. For a hotel, CRM could be a very handy tool, as it provides single-window access to data generated by the sales team, marketing team or Social Media Marketing team. There are sufficient security features such as group-level restrictions preventing misuse of information. There are several other formats of CRM that can be applicable to hotels such as:
    <ul>
    <li>Sales Force Automation</li>
    <li>Marketing</li>
    <li>Customer service and support</li>
    <li>Analytics</li>
    <li>Social media</li>
    </ul>
With increase in online interactions, CRMs have evolved to become a wholesome system that can help multiple teams from different divisions to track different aspects of making a business profitable.
<p>Lima Asia Dynamics constanly researches nemerous industries' ,marketing to create target promotions for existing and new high valid customers we use Latest technology as well the traditional medium for maximum impact</p>

";}
/*----------------------------------------CRM page-----------------------------------------------*/





/*----------------------------------------CMS page-----------------------------------------------*/
if($_GET['view'] == 'loyalty_cms'){
      echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=loyalty_crm\"><i class=\"fa fa-pie-chart\"></i> CRM</a></li>
  <li class=\"active\"><a href=\"?view=loyalty_cms\"><i class=\"fa fa-gears\"></i> CMS</a></li>
  <li><a href=\"?view=loyalty_marketing\"><i class=\"fa fa-suitcase\"></i> Marketing</a></li>
  <li><a href=\"?view=our-affliates\"><i class=\"fa fa-users\"></i> Our Affliates</a></li>
  <li><a href=\"?view=cwc\"><img src=\"https://lima-asiadynamics.com/favicon.ico\" width=\"20\"/> My Discover Club</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-success\" style=\"padding:5px;\">CMS</h3><hr/>";
    echo "<i class=\"pull-left fa fa-gears fa-5x\" style=\"margin-top:2%;\"></i>
    <p>Since our inception, we have always paid a great deal of attention to the arena of technology and relating it with the needs of our customers. With valuable years of experience with varied individuals, SME s and corporate, we have acquired knowledge and know- how on not only in meeting but also offering the digital experience for our customers and in turn to our customer s customers that is unlikely to equate with any other company on this level.
    </p><p>Content Management System (CMS) websites is part of the web designing technology that gives the proprietor the complete control. In other words, just the way you want to, you can manage your website by adding, deleting or simply updating the content which means the text and images on the website. With CMS based, websites, you can then update information as soon as you receive it, reduce your expenses, perk up the efficiency of your website and make it more search engine friendly.
    With the help of our creative and technical team, you can build a professional CMS based website that matches your branding and business goals. </p>
    ";}

/*----------------------------------------CMS page-----------------------------------------------*/








/*----------------------------------------Marketing page-----------------------------------------------*/
if($_GET['view'] == 'loyalty_marketing'){
      echo "
      <nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=loyalty_crm\"><i class=\"fa fa-pie-chart\"></i> CRM</a></li>
  <li><a href=\"?view=loyalty_cms\"><i class=\"fa fa-gears\"></i> CMS</a></li>
  <li class=\"active\"><a href=\"?view=loyalty_marketing\"><i class=\"fa fa-suitcase\"></i> Marketing</a></li>
  <li><a href=\"?view=our-affliates\"><i class=\"fa fa-users\"></i> Our Affliates</a></li>
  <li><a href=\"?view=cwc\"><img src=\"https://lima-asiadynamics.com/favicon.ico\" width=\"20\"/> My Discover Club</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-info\" style=\"padding:5px;\">Marketing</h3><hr/>";
    echo "<i class=\"pull-left fa fa-suitcase fa-5x\"></i>
    <p><h4>Online Marketing</h4><br />
Credit internet with a reach that is unimaginable by any other media. For the medium, every second is a moment of dissemination and undoubtedly the phenomenon is ever-penetrating and contagious. This is why we recommend online marketing for your business. 
Internet is an advertising platform that ensures you a vast reach at fewer costs. Introducing your product or service online itself is not enough. If you want to reach the right audience, there should be a thorough comprehension about the methodology and also a constant watch of the ever-evolving trends. Here is where Lima Asia Dynamics IT SOLUTIONS can assist you. With 10 years of industry experience and resourceful team members, we effectively boast of an appreciable portfolio of happy clientele. 
<br />Internet marketing is a many-fold tactic in advertising and involves e-mail, SMS, article, affiliate and press release marketing. We bring all these into our ambit in many cost-effective packages that can ensure maximum benefits for your business. E-mail marketing 
Keep your customers informed and engaged. We give you professional help in drafting high impact e-mails, newsletters and promotions. Maintain the bond with your current customers and earn the trust of prospective customers. With e-mail marketing, you get desirable responses both instantly and in the long run. 
<br /><br /><strong>Affiliate marketing </strong><br />
Online visibility for your website is all-together important to promote your endeavours in the virtual world too. When we take it up for you, it is affiliate marketing. Coming to the promotion of your products or services online, Lima Asia Dynamics IT SOLUTIONS do it in a dynamic way with assured results that no one else can deliver you. 
<br /><br /><strong>SMS Marketing </strong><br />
SMS offers a faster, easier and straight connectivity to your target audience. With the right tactics, we at Lima Asia Dynamics IT SOLUTIONS help you to tap your business potential by reaching the database of customers you offer us. Choose SMS marketing with us to promote the texts easily and effortlessly to anyone you wish, to any part of the world. 
<br /><br /><strong>Article Marketing </strong><br />
In our hands, this interactive and effectual online marketing method is executed in a meticulous manner. We understand your business, painstakingly research on the topics and deliver functional write-ups to the reader. We employ several SEO practices too so as to ensure the maximum impact. 
<br /><br /><strong>Press Release Marketing </strong><br />
This is a very fruitful and convincing way to reach your clients. At Lima Asia Dynamics IT SOLUTIONS, we stand with you all the way from writing the Press Releases to posting them to the right editors. Our cognizant and dexterous writers ensure that your business gets all the attention it deserves.</p>
    
    ";}

/*----------------------------------------Marketing page-----------------------------------------------*/



/*----------------------------------------Affliate Marketing page-----------------------------------------------*/
if($_GET['view'] == 'marketing_affliate'){
      echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li class=\"active\"><a href=\"?view=marketing_affliate\"><i class=\"fa fa-users\"></i> Marketing Affliates</a></li>
  <li><a href=\"?view=marketing_email\"><i class=\"fa fa-envelope\"></i> Email Marketing</a></li>
  <li><a href=\"?view=marketing_sms\"><i class=\"fa fa-mobile-phone\"></i> SMS Marketing</a></li>
  <li><a href=\"?view=marketing_ppc\"><i class=\"fa fa-hand-o-up\"></i> Pay-per-click</a></li>
  <li><a href=\"?view=marketing_collateral\"><i class=\"fa fa-plus-circle\"></i> Collateral</a></li>
  <li><a href=\"?view=marketing_article\"><i class=\"fa fa-book\"></i> Article Marketing</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-info\" style=\"padding:5px;\">Affiliate Marketing</h3><hr/>";
    echo "<i class=\"pull-left fa fa-suitcase fa-5x\"></i>
    <p>
Affiliate marketing is advertising perform, in which a commerce remunerations one or more affiliates for each guest or customer brought about by the affiliates own promotion endeavours. Examples embrace rewards websites, where consumers are recompensed with cash or gifts, for the achievement of an offer, and the recommendation of others to the site.
Some popular practices prepared for affiliate advertising services are:<br />
<br /><strong>Pay per Click (PPC):</strong> <br />Advertisers have to disburse for the clicks they acquire to their website. The charge for promotion depends on numbers of click.
<br /><br /><strong>Pay per Sale:</strong><br /> When a manufactured good is sold, some amount is remunerated to the e-commerce site as expenses for bringing clients.
<br /><br /><strong>Comparison Shopping:</strong><br /> Some of the portals evaluate the rates furnished for an exacting manufactured good at two or more sites. Assessment is also prepared between comparable products. The site, from which the products are advertised, is accountable to disburse the e-commerce portal for the same.
Lima Asia Dynamics IT SOLUTIONS, proffers Affiliate Marketing Solutions and Affiliate Marketing Services for Merchants desiring to promote their manufactured goods/services online.
Our specialized Affiliate Marketing approaches guarantee that your commerce gets all the visibility at the accurate platforms; whereby totalling to augmented lead generation and ROI improvement.
<br /><br />
<strong>AFFILIATE MARKETING WORKSCOPE INCLUDES: </strong>
<ul>
<li>Defining an appropriate Affiliate Marketing stratagem and agenda</li>
<li>Organizing Affiliate marketing services and solutions and software in case of own network </li>
<li>Recognizing and Subscribing to probable publisher promotion networks </li>
<li>Tracking presentation of Affiliate Network all along with weekly reporting </li>
<li>Employment of new associates using tailored emails </li>
<li>Affiliate deception avoidance and scrutinizing services of Affiliate Networks. </li>
</ul>
</p>   
    ";}

/*----------------------------------------affliate marketing page-----------------------------------------------*/








/*----------------------------------------EMail Marketing page-----------------------------------------------*/
if($_GET['view'] == 'marketing_email'){
      echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=marketing_affliate\"><i class=\"fa fa-users\"></i> Marketing Affliates</a></li>
  <li class=\"active\"><a href=\"?view=marketing_email\"><i class=\"fa fa-envelope\"></i> Email Marketing</a></li>
  <li><a href=\"?view=marketing_sms\"><i class=\"fa fa-mobile-phone\"></i> SMS Marketing</a></li>
  <li><a href=\"?view=marketing_ppc\"><i class=\"fa fa-hand-o-up\"></i> Pay-per-click</a></li>
  <li><a href=\"?view=marketing_collateral\"><i class=\"fa fa-plus-circle\"></i> Collateral</a></li>
  <li><a href=\"?view=marketing_article\"><i class=\"fa fa-book\"></i> Article Marketing</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-info\" style=\"padding:5px;\">E-mail Marketing</h3><hr/>";
    echo "<i class=\"pull-left fa fa-envelope fa-5x\"></i>
    <p>
If your website is the address where you create your contacts in the World Wide Web, then an e-mail is the medium to secure the loyalty of your existing clientele. Capturing the address of your client is a crucial initiative to elicit that timely response from them in the near future and in the long run it is the perfect approach to remind them of your brand s presence. At Lima Asia Dynamics IT SOLUTIONS, we take pride in our experience in conceptualizing and delivering email marketing strategies across verticals with ease in consultation and reporting as we send out thousands of e-mailers containing the right message.
<br />We not only send across electronic communication to elicit a response in form of a query or booking from your client, we also design HTML creative, decide on the nature of the content as well as create a promotion of copy that calls for action. If creating the perfect e-mailer is the first step, then the second step at Lima Asia Dynamics IT SOLUTIONS is setting up and managing email campaigns and the third step includes reporting the success of the e-mail marketing campaign. 
<br /><br />
<strong>Our E-mail Marketing Solution Includes: </strong><br />
<ul>
<li>Determining the frequency on which E-mailers are to be sent </li>
<li>Content Creation for E-mailers </li>
<li>Designing HTML E-mailers </li>
<li>Distribution of E-mailers</li>
<li>Generation of Detailed reports</li>
</ul>
</p>   
    ";}

/*----------------------------------------Email marketing page-----------------------------------------------*/





/*----------------------------------------SMS Marketing page-----------------------------------------------*/
if($_GET['view'] == 'marketing_sms'){
      echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=marketing_affliate\"><i class=\"fa fa-users\"></i> Marketing Affliates</a></li>
  <li><a href=\"?view=marketing_email\"><i class=\"fa fa-envelope\"></i> Email Marketing</a></li>
  <li class=\"active\"><a href=\"?view=marketing_sms\"><i class=\"fa fa-mobile-phone\"></i> SMS Marketing</a></li>
  <li><a href=\"?view=marketing_ppc\"><i class=\"fa fa-hand-o-up\"></i> Pay-per-click</a></li>
  <li><a href=\"?view=marketing_collateral\"><i class=\"fa fa-plus-circle\"></i> Collateral</a></li>
  <li><a href=\"?view=marketing_article\"><i class=\"fa fa-book\"></i> Article Marketing</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-info\" style=\"padding:5px;\">SMS Marketing</h3><hr/>";
    echo "<i class=\"pull-left fa fa-mobile-phone fa-5x\"></i>
    <p>
Mobile SMS marketing is the finest solution for any commerce nowadays. Mobile Marketing has accomplished its incursion into marketing division to formulate huge difference. 
Mobile SMS is renowned as a good Mobile advertising tool. Mobile SMS promotion is acting an imperative role in India to attain the right targeted audience at the given point of time to implement excellent Mobile SMS service. 
<br />We, at Lima Asia Dynamics IT SOLUTIONS, deliver Bulk SMS in a modified and tailored form on the basis of encompassing straight connectivity with foremost telecom operators. We formulate text promotion speedy and effortless by assisting you with crusade construction, result tracking, deliveries scheduling along with the elasticity to uphold your customer s lists just the way you desire to. 
<br />It is easy, direct and cautious. Send SMS Text Messages with the assistance of any Internet connection from all across the globe. You may get ongoing with just a couple of steps. 
<br />You may choose the client database as per city wise, state-wise, target business wise etc. 
You may send SMS s to catalogs owned by us, or you can introduce your catalog of opted-in contacts and we will propel bulk text messages to them with a single click. 
<br />We administer client database and send your SMS on your behalf with your correspondent id and contact details to the clients of your choice. 
Clients can text your mobile keyword to a petite code and join your contact list. 
You will be offered with delivery reports of the activity. 
</p>   
    ";}

/*----------------------------------------SMS marketing page-----------------------------------------------*/







/*----------------------------------------PPC Marketing page-----------------------------------------------*/
if($_GET['view'] == 'marketing_ppc'){
      echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=marketing_affliate\"><i class=\"fa fa-users\"></i> Marketing Affliates</a></li>
  <li><a href=\"?view=marketing_email\"><i class=\"fa fa-envelope\"></i> Email Marketing</a></li>
  <li><a href=\"?view=marketing_sms\"><i class=\"fa fa-mobile-phone\"></i> SMS Marketing</a></li>
  <li class=\"active\"><a href=\"?view=marketing_ppc\"><i class=\"fa fa-hand-o-up\"></i> Pay-per-click</a></li>
  <li><a href=\"?view=marketing_collateral\"><i class=\"fa fa-plus-circle\"></i> Collateral</a></li>
  <li><a href=\"?view=marketing_article\"><i class=\"fa fa-book\"></i> Article Marketing</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-info\" style=\"padding:5px;\">Pay Per Click (PPC) Services</h3><hr/>";
    echo "<i class=\"pull-left fa fa-hand-o-up fa-5x\"></i>
    <p>
If you're considering search engine marketing, then Pay Per Click services are probably at the top of your list of possibilities. PPC marketing allows you to bid on keywords. 
<br />It s an instant way to make your website visible on the indices of leading Search Engines. You pay your bid price each time someone clicks on your link. Because you only pay for results, it's an effective and often affordable way to drive traffic to your site. Lima Asia Dynamics IT SOLUTIONS strategizes, conceives and manages your PPC campaign on leading search engines. With the advent of social media sites, search has now become social and Google Ads appear to be the order of the day. In this new era of Social Search, our expertise lies also in conceiving and managing successful Google Ads. 
</p>   
<p>
<strong>Our Approach for Effective PPC Campaigns</strong>
<ul>
<li>Refine campaign </li>
<li>Choose the right Keywords </li>
<li>Test Keywords </li>
<li>Track and monitor campaign</li>
</ul></p>
    ";}

/*----------------------------------------PPC marketing page-----------------------------------------------*/







/*----------------------------------------collaterel page-----------------------------------------------*/
if($_GET['view'] == 'marketing_collateral'){
      echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=marketing_affliate\"><i class=\"fa fa-users\"></i> Marketing Affliates</a></li>
  <li><a href=\"?view=marketing_email\"><i class=\"fa fa-envelope\"></i> Email Marketing</a></li>
  <li><a href=\"?view=marketing_sms\"><i class=\"fa fa-mobile-phone\"></i> SMS Marketing</a></li>
  <li><a href=\"?view=marketing_ppc\"><i class=\"fa fa-hand-o-up\"></i> Pay-per-click</a></li>
  <li class=\"active\"><a href=\"?view=marketing_collateral\"><i class=\"fa fa-plus-circle\"></i> Collateral</a></li>
  <li><a href=\"?view=marketing_article\"><i class=\"fa fa-book\"></i> Article Marketing</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-info\" style=\"padding:5px;\">Collateral</h3><hr/>";
    echo "<i class=\"pull-left fa fa-plus-circle fa-5x\"></i>
    <p>
No marketing medium can stand alone. Rather, the effect is multiplied and further enhanced with the aid of accessories. Even with an online campaign, using collaterals will only boost your sales imperative; leading to more traffic and eventually higher conversion rates. 
Keeping your budget in mind, we will devise an effective collateral approach for you that best compliments your campaign. We do both online and offline collaterals. 
</p>  
<ul>
<li>Postcards</li>
<li>Brochures </li>
<li>Leaflets/Pamphlets </li>
<li>Newsletters </li>
<li>Business Cards </li>
</ul> 
    ";}

/*----------------------------------------collaterel page-----------------------------------------------*/







/*----------------------------------------article marketing page-----------------------------------------------*/
if($_GET['view'] == 'marketing_article'){
      echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=marketing_affliate\"><i class=\"fa fa-users\"></i> Marketing Affliates</a></li>
  <li><a href=\"?view=marketing_email\"><i class=\"fa fa-envelope\"></i> Email Marketing</a></li>
  <li><a href=\"?view=marketing_sms\"><i class=\"fa fa-mobile-phone\"></i> SMS Marketing</a></li>
  <li><a href=\"?view=marketing_ppc\"><i class=\"fa fa-hand-o-up\"></i> Pay-per-click</a></li>
  <li><a href=\"?view=marketing_collateral\"><i class=\"fa fa-plus-circle\"></i> Collateral</a></li>
  <li class=\"active\"><a href=\"?view=marketing_article\"><i class=\"fa fa-book\"></i> Article Marketing</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-info\" style=\"padding:5px;\">Article Marketing</h3><hr/>";
    echo "<i class=\"pull-left fa fa-book fa-5x\"></i>
    <p>One of most effectual and cost-competent online marketing strategies, exceptional article advertising is a commanding amalgamation of direct communication with your market and numerous SEO practices for utmost impact. Article marketing has been frequently established successful for abundant of sites and, in the hands of a competent copywriting and advertising company, can be your site's most excellent ally. Lima Asia Dynamics IT SOLUTIONS proffers you the finest article marketing packages that will acquire you unconquerable results at matchless prices.
<br /><br />We comprehend your requirements, we appreciate your commerce, and we arrange a sound article advertising campaign for you that embraces first-class and well investigated authentic article writing and syndication to top article directories with guaranteed enclosure.
<br /><br />We ensure to explore the topic area painstakingly before writing the articles, certifying the content is as enlightening and functional to the reader as possible. In addition, we endeavour our paramount to target the content to your keywords, so that not only are the links from the article more applicable, the article itself might increase some rankings and constrain some targeted traffic to your website. Some of the articles we have written and presented drives over 100 visitors per day to the website!
</p>
    ";}

/*----------------------------------------article marketing page-----------------------------------------------*/









/*----------------------------------------Lima Travel page-----------------------------------------------*/
if($_GET['view'] == 'dmstravel'){
    echo "<h3 class=\"bg-primary\" style=\"padding:5px;\">My Discover Club</h3><hr/>";
    echo "
    <p><strong>My Discover Club card</strong> is a collection of standard budget hotels to five star luxury hotels and resorts where members can enjoy exclusive accommodation discounts and dining privileges.  
    In addition members get to buy online from our ever increasing participating Merchants, products and services at special offer prices.
    Most importantly, members earn Reward Points for purchasing online, which can be redeemed for complimentary night stay at selected hotels
    <br /><br />Click here to find out more at: <a title=\"Opens in new tab\" href=\"https://mydiscoveryclub.com\">www.mydiscoveryclub.com <i class=\"glyphicon glyphicon-new-window\"\></i>
</p>
    ";}

/*----------------------------------------DMS Travel page-----------------------------------------------*/








/*----------------------------------------IT page-----------------------------------------------*/
if($_GET['view'] == 'it'){
    echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=marketing_affliate\"><i class=\"fa fa-users\"></i> Marketing Affliates</a></li>
  <li><a href=\"?view=marketing_email\"><i class=\"fa fa-envelope\"></i> Email Marketing</a></li>
  <li><a href=\"?view=marketing_sms\"><i class=\"fa fa-mobile-phone\"></i> SMS Marketing</a></li>
  <li><a href=\"?view=marketing_ppc\"><i class=\"fa fa-hand-o-up\"></i> Pay-per-click</a></li>
  <li><a href=\"?view=marketing_collateral\"><i class=\"fa fa-plus-circle\"></i> Collateral</a></li>
  <li><a href=\"?view=marketing_article\"><i class=\"fa fa-book\"></i> Article Marketing</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-success\" style=\"padding:5px;\">IT Solutions</h3><hr/>";
    echo "<p>The main drive for Lima Asia Dynamics IT SOLUTIONS team is to help customers better manage their information, mainly through the development of information technology management systems. This includes innovative web and database design, web applications, software design and mobile technologies. Lima Asia Dynamics IT Solutions offer long-term support and consultancy services, as well as development of new systems.

As a Google Advertising Consultant, Lima Asia Dynamics specialise in bespoke solutions built around Microsoft-based technologies such as VB.NET, ASP.NET, SQL Server, Access, and Share Point to name but a few.

We provide CRM and CMS solutions to the hospitality and leisure industry leveraging the Microsoft CRM and CMS platform.

Our IT Team have a vast amount of experience and knowledge in their respective fields, backed up by experience and IT related qualifications, giving you the reassurance you are dealing with professionals. Many also have a background in IT Training, meaning we are able to communicate clearly with our clients on both technical and non-technical levels. All the work carried out by our consultants will be to the customer's exact specification and needs whether you are a Hotel, SME or large corporation.</p>
";
}

/*----------------------------------------IT page-----------------------------------------------*/









/*----------------------------------------Affliates page-----------------------------------------------*/
if($_GET['view'] == 'our-affliates'){
    echo "<nav class=\"navbar navbar-default\" role=\"navigation\">
  <ul class=\"nav navbar-nav\">
  <li><a href=\"?view=loyalty_crm\"><i class=\"fa fa-pie-chart\"></i> CRM</a></li>
  <li><a href=\"?view=loyalty_cms\"><i class=\"fa fa-gears\"></i> CMS</a></li>
  <li><a href=\"?view=loyalty_marketing\"><i class=\"fa fa-suitcase\"></i> Marketing</a></li>
  <li class=\"active\"><a href=\"?view=our-affliates\"><i class=\"fa fa-users\"></i> Our Affliates</a></li>
  <li><a href=\"?view=marketing_affliate\"><i class=\"fa fa-users\"></i> Marketing Affliates</a></li>
  <li><a href=\"?view=marketing_email\"><i class=\"fa fa-envelope\"></i> Email Marketing</a></li>
  <li><a href=\"?view=marketing_sms\"><i class=\"fa fa-mobile-phone\"></i> SMS Marketing</a></li>
  <li><a href=\"?view=marketing_ppc\"><i class=\"fa fa-hand-o-up\"></i> Pay-per-click</a></li>
  <li><a href=\"?view=marketing_collateral\"><i class=\"fa fa-plus-circle\"></i> Collateral</a></li>
  <li><a href=\"?view=marketing_article\"><i class=\"fa fa-book\"></i> Article Marketing</a></li>
  <li><a href=\"?view=cwc\"><img src=\"https://lima-asiadynamics.com/favicon.ico\" width=\"20\"/> My Discover Club</a></li>
  </ul>
  </nav>";
    echo "<h3 class=\"bg-warning\" style=\"padding:5px;\">Our Affliates</h3><hr/>";
    echo "<ul class=\"list-inline\">
        <h4>Associated with:</h4>
    <li><img src=\"wpimages/wp5a20f6ff_06.png\"/></li>
    <li><img src=\"wpimages/wp3d5e69e1_06.png\"/></li>    
    <hr/>
    <h4>Our Clients</h4>
    <li><img src=\"wpimages/wpded17971_06.png\"/></li>
    <li><img src=\"wpimages/wped839206_06.png\"/></li>
    <li><img src=\"wpimages/wp6da33b90_06.png\"/></li><br /><br />
    <li><img src=\"wpimages/wpccf6bb11_06.png\"/></li>
    <li><img src=\"wpimages/wpb59e793e_06.png\"/></li>
    <li><img src=\"wpimages/wp0ffaf9f3_06.png\"/></li>
    </ul>
    ";
}

/*----------------------------------------Affliates page-----------------------------------------------*/


/*----------------------------------------Contact page-----------------------------------------------*/
if($_GET['view'] == 'contact'){
    if(isset($_POST['submit']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        $body = "<p><strong>NAME:</strong> $name </p>
                  <p><strong>MESSAGE:</strong> $message</p>";
        $to      = 'contact@Lima-asiadynamics.com';
       $subject = 'Contact query';
        $headers = 'From:' . "$email \r\n" .
        $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    'Reply-To:' . "$email \r\n" .
    'X-Mailer: PHP/' . phpversion();

    $send = mail($to, $subject, $body, $headers);
	if ($send == TRUE)
	{
		echo "<div id=\"notification\" class='alert alert-success'>Message has been sent</div>";
	}
	else 
	{
		die ("<div id=\"notification\" class='alert alert-danger'>Message failed to send</div>");
    }
  }
    echo '<h3 class="bg-danger" style="padding:5px;">Contact us</h3>

    <hr/>';
    echo "
    <script type='text/javascript'>
    function v(){
        
   if( document.contact.name.value == '' )
   {
     alert( 'Please fill up Name field!' );
     document.contact.name.focus() ;
     return false;
   }
   
   var emailID = document.contact.email.value;
   atpos = emailID.indexOf('@');
   dotpos = emailID.lastIndexOf('.');
   if (atpos < 1 || ( dotpos - atpos < 2 )) 
   {
       alert('Please enter correct email ID')
       document.contact.email.focus() ;
       return false;
   }
   
      if( document.contact.message.value == '' )
   {
     alert( 'Please fill up Message field!' );
     document.contact.message.focus() ;
     return false;
   }
   return (true);
}
    </script>
    <table class=\"table\">
    <tr>
       <td>
    <form name=\"contact\" class=\"container-fluid\" action=\"$_SERVER[REQUEST_URI]\" method=\"POST\" onsubmit=\"return v()\">
    <label>Name</label>
    <input class=\"form-control\" type=\"\" name=\"name\"/>
    <label>Email</label>
    <input class=\"form-control\" type=\"\" name=\"email\"/>
    <label>Message</label>
    <textarea class=\"form-control\" type=\"\" name=\"message\" style=\"resize:none;\"></textarea><br />
    <input class=\"btn btn-success btn-block\" type=\"submit\" name=\"submit\" value=\"Send\"/>
    </form> <br />
    <!-- <p><strong>SMS only:</strong> (+6) <span style=\"color: #2A6496;\">011 - 2109 7800</span> (24/7)</p> -->
       </td>
    ";
    echo <<<END
    
       <td>
       <b>Office Locations:</b>
    <div class="panel-group" id="accordion">
    <!--US OFFICE-->
  <div class="panel">
      <a data-toggle="collapse" data-parent="#accordion" href="#US">
          <img src="wpimages/flags/flag_us.png" alt="US" title="US"/><strong style="color:black;"> United States</strong>
      </a>
    <div id="US" class="panel-collapse collapse">
      <div class="well">
            <address>
            <b>UNITED STATES SALT LAKE CITY HEADQUARTERS</b><br/>
            3115 East Lion Lane <br/>
            Unit 160<br/>
            Salt Lake City, Utah 84121<br/>
            United States of America<br/>
            </address>
      </div>
    </div>
  </div>
    <!--MALAYSIA OFFICE-->
  <div class="panel">
      <a data-toggle="collapse" data-parent="#accordion" href="#Malaysia">
          <img src="wpimages/flags/flag_malaysia.png" alt="Malaysia" title="Malaysia"/><strong style="color:black;"> Malaysia</strong>
      </a>
    <div id="Malaysia" class="panel-collapse collapse">
      <div class="well">
            <address>
            <b>ASIA PACIFIC CORPORATE OFFICE</b><br/>
            <b>Malaysia</b><br />
            Level 35-02 (East Wing), Q Sentral<br/>
            2A, Jalan Stesen 2,<br/>
            Kuala Lumpur Sentral<br/>
            50470 Kuala Lumpur, Malaysia
            </address>
      </div>
    </div>
  </div>
   <!--PHILLIPINES OFFICE-->

  <div class="panel">
      <a data-toggle="collapse" data-parent="#accordion" href="#Phillipines">
          <img src="wpimages/flags/flag_phillipines.png" alt="Phillipines" title="Phillipines"/><strong style="color:black;"> Phillipines</strong>
      </a>
    <div id="Phillipines" class="panel-collapse collapse">
      <div class="well">
            <address>
            <b>Phillipines</b><br/>
            LKG Tower<br />
            37th Floor, 6801 Ayala Avenue, Makati City <br/>
            1226, Philippines<br/>
            </address>
      </div>
    </div>
 </div>
   
  <!--HONG KONG OFFICE-->
    <div class="panel">
      <a data-toggle="collapse" data-parent="#accordion" href="#HK">
          <img src="wpimages/flags/flag_hong_kong.png" alt="Hong Kong" title="Hong Kong"/> Hong Kong
      </a>
    <div id="HK" class="panel-collapse collapse">
      <div class="well">
            <address>
            <b>Hong Kong</b><br />
            K11 Atelier<br />
            Level 7, 18 Salisbury Road, <br/>Tsim Sha Tsui, Hong Kong
            </address>
      </div>
    </div>
  </div>
  <!--AUSTRALIA OFFICE-->
    <div class="panel">
      <a data-toggle="collapse" data-parent="#accordion" href="#AUS">
          <img src="wpimages/flags/flag_australia.png" alt="Australia" title="Australia"/> Australia
      </a>
    <div id="AUS" class="panel-collapse collapse">
      <div class="well">
            <address>
            <b>Australia</b><br />
            S.5.04, 365 Little Collins Street<br/>
            Melbourne, Victoria<br/>
            3000 Australia<br/>
            </address>
      </div>
    </div>
  </div>
  <!--Vietnam OFFICE-->
    <div class="panel">
      <a data-toggle="collapse" data-parent="#accordion" href="#VND">
          <img src="wpimages/flags/flag_vietnam.png" alt="Vietnam" title="Vietnam"/> Vietnam
      </a>
    <div id="VND" class="panel-collapse collapse">
      <div class="well">
            <address>
            <b>Vietnam</b><br />
            Vietcombank Tower<br />
            Level 21, No. 5 Mê Linh Square, Ben Nghe<br />
            Ward, District 1, Ho Chi Minh City, Vietnam<br />
            </address>
      </div>
    </div>
  </div>

<!--INDONESIA OFFICE-->
    <div class="panel">
      <a data-toggle="collapse" data-parent="#accordion" href="#indonesia">
          <img src="wpimages/flags/flag_indonesia.png" alt="Indonesia" title="Indonesia"/> Indonesia
      </a>
    <div id="indonesia" class="panel-collapse collapse">
      <div class="well">
            <address>
            <b>Indonesia</b><br />
            Sahid Sudirman Center,<br />
            56th floor, Jl. Jend. Sudirman No. 86, <Br/>Jakarta 10220, Indonesia
            </address>
      </div>
    </div>
</div>
    
<!--THAILAND OFFICE-->
    <div class="panel">
      <a data-toggle="collapse" data-parent="#accordion" href="#thailand">
          <img src="wpimages/flags/flag_thailand.png" alt="Thailand" title="Thailand"/> Thailand
      </a>
    <div id="thailand" class="panel-collapse collapse">
      <div class="well">
            <address>
            <b>Thailand</b><br />
            Athenee Tower<br/>
            23rd Floor, 63 Wireless Road, Lumpini,<br />
            Pathumwan, Bangkok 10330, Thailand<br />
            </address>
      </div>
    </div>
  </div>
  
   </td>
</tr>
</table>
END;
    
}

/*----------------------------------------Contact page-----------------------------------------------*/






/*----------------------------------------Career page-----------------------------------------------*/
if($_GET['view'] == 'career'){
    echo '
    <div class="container-fluid">
        <div class="thumbnail hover">
           <h4 align="center"><strong>1. Program Sales Manager</strong></h4><hr />
           <p><strong>Responsibilities</strong><br />
           <ul>
           <li>Assist to effectively recruit, train and motivate a team of sales consultants</li>
           <li>Contribute towards achieving sales goals and targets.</li>
           <li>To ensure the efficiency and productivity of the program sales staff.</li>
           <li>Recruit and manage sales staff.</li>
           <li>Assist in weekly/monthly key performance & development reviews.</li>
           <li>Develop sales strategies and techniques with an ultimate goal to a successful program.</li>
           <li>Assist in major Program managerial duties.</li>
           </ul>
           <strong>Report to:</strong><br />
           <ul>
           <li>Programme Manager / Director of Operations </li>
           </ul>
           <strong>Requirements:</strong><br />
           <ul>
           <li>Successful sales track record</li>
           <li>Experienced in recruiting & managing staff</li>
           <li>Ability to communicate fluently (both written & spoken) in local language(s) of the programme.</li>
           <li>Ability to communicate well (both written & spoken) in English.</li>
           </ul>
           <p class="highlight" style="text-align:center;"><b>Please send your resume (with photo) and salary expected to <u>hr@lima-asiadynamics.com</u></b></p>
           </p>
        </div>
        
        <div class="thumbnail hover">
           <h4 align="center"><strong>2. Web Developer <small class="highlight">Immediate Vacancies</small></strong></h4><hr />
           <p><strong>Responsibilities</strong><br />
           <ul>
           <li>Job Planning.</li>
           <li>System Analysis and Design.</li>
           <li>System Development.</li>
           <li>Testing and Troubleshooting.</li>
           <li>End-user engagement and communication.</li>
           </ul>
           <strong>Report to:</strong><br />
           <ul>
           <li>Programme Manager / Director of Operations </li>
           </ul>
           <strong>Requirements:</strong><br />
           <ul>
           <li>Must possess a relevant certificate or job experience in this field</li>
           <li>Able to communicate in English and one other language.</li>
           <li>Good knowledge on HTML, JavaScipt, PHP and MySQL.</li>
           <li>Have experience in graphic web Interphase design, layout design, HTML coding, CSS, AJAX and JQuery</li>
           </ul>
           
           <p class="highlight" style="text-align:center;"><b>Please send your resume (with photo) and salary expected to <u>hr@lima-asiadynamics.com</u></b></p>
           </p>
        </div>
        
        <div class="thumbnail hover">
           <h4 align="center"><strong>3. Telemarketers <small class="highlight">Immediate Vacancies</small></strong></h4><hr />
           <p><strong>Responsibilities</strong><br />
           <ul>
           <li>To make outgoing calls pertaining to Hospitality sales products & up-selling across the entire product portfolio.</li>
           <li>To manage, collate and update customer database accurately and on a timely basis.</li>
           <li>To participate in any sales activities as and when required by the management.</li>
           <li>Sales-oriented, dynamic & persuasive.</li>
           <li>Work towards achieving sales target.</li>
           </ul>
           <strong>Report to:</strong><br />
           <ul>
           <li>Programme Manager / Director of Operations </li>
           </ul>
           <strong>Requirements:</strong><br />
           <ul>
           <li>SPM / STPM / Diploma / Degree in any related field.</li>
           <li>Sales experience in any related field will have an added advantage.</li>
           <li>able to speak good English and Bahasa Malaysia.</li>
           <li>Mandarin / Cantonese speaker will have an added advantage. </li>
           <li>Must be willing to work in a team.</li>
           </ul>
           <p class="highlight" style="text-align:center;"><b>Please send your resume (with photo) and salary expected to <u>hr@lima-asiadynamics.com</u></b></p>
           </p>
        </div>
        
       <div class="thumbnail hover">
           <h4 align="center"><strong>4. Customer Service Professional <small class="highlight">Immediate Vacancies</small></strong></h4><hr />
           <p><strong>Responsibilities</strong><br />
           <ul>
           <li>To take incoming telephone enquiries & complaints from customer pertaining to hospitality product & services.</li>
           <li>Attend to customer queries tactfully and professionally. </li>
           <li>Provide an accurate, efficient and quality service that exceeds the customer\'s expectations. </li>
           <li>Maintain customer confidentiality.</li>
           <li>Attend to incoming calls promptly, courteously, in a competent and professional manner. </li>
           </ul>
           <strong>Report to:</strong><br />
           <ul>
           <li>Programme Manager / Director of Operations</li>
           </ul>
           <strong>Requirements:</strong><br />
           <ul>
           <li>SPM / STPM / Diploma / Degree in any related field.</li>
           <li>No Experience required,  Fresh Graduates & SPM school-leaver are encouraged to apply.</li>
           <li>Able to speak good English and Bahasa Malaysia.</li>
           <li>Mandarin / Cantonese speaker will have an added advantage.</li>
           <li>Possess good interpersonal, communication skills, PC literacy & have positive attitude.</li>
           </ul>
           <p class="highlight" style="text-align:center;"><b>Please send your resume (with photo) and salary expected to <u>hr@lima-asiadynamics.com</u></b></p>
           </p>
        </div>
    </div><!--/ container-fluid-->
    ';
}

/*----------------------------------------Career page-----------------------------------------------*/


/*----------------------------------------DMS Holiday------------------------------------------------*/

if($_GET['view'] === 'dmsholiday'){
    echo '
            
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">DMS Holidays</h3>
            </div>
            <div class="panel-body">
                    <p>The main objective of DMS Holidays is to conduct inbound and outbound, travel and tour services to the general public, giving impartial travel advice and information</p>
                    
                    <p>DMS Holidays felt the need to protect ourselves and our clients against the possibilities of commercial failure, either our own or a supplier\'s. We will advertise the fact that we are surety bonded, meaning in the case of a failure, our customers are guaranteed either an equivalent holiday to that which they have lost or if they prefer, a refund</p>
                    
                    <p>Since its inception in 2008 till this day, DMS Holidays is managed by well trained staff with 24/7 backup service</p>
                    <p>Another unique feature is our Online Travel Agency: <a data-toggle="collapse" data-parent="#accordion" href="#"></a></p>
                    <p>For more info on our travel services, visit <a href="https://dmsholidays.com" target="_blank">dmsholidays.com</a></p>
                    <p class="pull-right"><img class="pull-right" src="wpimages/iata.png" alt="iata" width="60px"/></p>
            </div>
        </div>
    
    ';
}

/*-----------------------------------------DMS Holiday-----------------------------------------------*/







/*----------------------------------------Client page-----------------------------------------------*/
if($_GET['view'] == 'client'){
   session_start();
   echo '
    <div style="background-color:#DDD; padding:5px; border-radius:5px;">
    <div class="container-fluid" style="width:30%; margin-bottom:3%;">
<h3 class="bg-primary" style="padding:5px;">Client Login</h3>
';
if(isset($_SESSION['userid'])){
    echo '<a href="https://lima-asiadynamics.com/client/dasboard" class="btn btn-primary">Go to Client Zone</a>';
}else{
    echo '
    <form action="client/loginck.php" method="post" >
    <label>Login ID</label>
    <input class="form-control input-sm" type="text" name="userid" />
    <label>Password</label>
    <input class="form-control input-sm" type ="password" name="password" /><br />
    <input class="btn btn-primary btn-sm" name="submit" type="submit" value="Submit" />
    <div class="radio">
    <a href="client/forgot/forgot-password">Forgot Password ?</a>
    </div>
    <span class="label label-danger" style="white-space:normal">Please change your password regularly for security reasons</span>
    </form>
    ';
}
echo '
</div>
</div>
    ';
}

/*----------------------------------------Client page-----------------------------------------------*/




/*----------------------------------------Admin page-----------------------------------------------*/
if($_GET['view'] == 'admin'){
    if(isset($_SESSION['admin_userid']) && !empty($_SESSION['admin_userid'])){
        print '<META http-equiv="refresh" content="5;URL=loyalty/welcome.php"> ';
    }else{
        echo '
    <div style="background-color:#DDD; padding:5px; border-radius:5px;">
        <div class="container-fluid" style="width:30%; margin-bottom:3%;">
    <h3 class="bg-success" style="padding:5px;">Admin Zone</h3>
    <form action="loyalty/loginck.php" method="post" >
    <label>Login ID</label>
    <input class="form-control input-sm" type="text" name="userid" />
    <label>Password</label>
    <input class="form-control input-sm" type ="password" name="password" /><br />
    <input class="btn btn-primary btn-sm" name="submit" type="submit" value="Submit" />
    <div class="radio">
    <a href="loyalty/forgot-password.php">Forgot Password ?</a>
    </div>
    <span class="label label-danger" style="white-space:normal">Please change your password regularly for security reasons</span>
    </form>
    </div>
    </div>
        ';
    }
}

/*----------------------------------------Admin page-----------------------------------------------*/






}/*if the view is not set*/
else {
    print "<script>window.location = '?view=home'</script>";
}
?>
<div class="modal" tabindex="-1" id="video" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Video</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <video controls style="width:100%; height:100%;">
            <source src="video.mp4" type="video/mp4"/>
        </video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54965591-1', 'auto');
  ga('send', 'pageview');

</script>
</div><!--/.container-->
<!--FOOTER-->
<div class="footer">
<p style="font-size: 11px; color:white;">&copy; 2015. Lima Asia Dynamics. All rights reserved</p>
</div>
<!--FOOTER-->
</div>
</body>