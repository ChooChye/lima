<?php require_once('config.php');
if(!isset($logoNav)){
    $logoNav = "images/logoLight.png";
}
?>
<!doctype html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M3RHSKT');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145381692-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-145381692-1');
</script>



    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ChooChye">
    <title>
        <?php echo $title .' | '. APPNAME; ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <?php if(!isset($header) && empty($header)){$header = NULL;}else{echo $header;} ?>
    <!-- Custom styles for this template -->
    <link href="assets/css/custom.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .dropdown-menu.show{
            background: #00000073;
            color: white;
        }
        .dropdown-menu.show a{
            color: white;
        }
        .dropdown-menu.show a:hover{
            background: #000000a6;
        }
    </style>
</head>

<body class="page showOverlay">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3RHSKT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="zones" class="container-fluid" style="position:absolute; z-index:2">
        <div class="row">
            <div class="col-6 text-left">
                &nbsp;
            </div>
            <div class="col-6 text-right text-white" style="font-size:0.8rem;">
                <a href="https://lima-asiadynamics.com/loyalty/">Client Login</a>
                |
                <a href="https://lima-asiadynamics.com/loyalty/PHP-Login/admin/">Admin Login</a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-custom w-100" style="z-index:1">
        <a class="navbar-brand" href="index.php"><img id="logoNav" src="<?php echo $logoNav; ?>" alt="Logo/Homepage" style="width:10%; margin-right:1%"/>Lima Asia Dynamics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="background-color: rgba(0, 0, 0, 0.45);border-radius: 0.5rem;">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About LIMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="loyaltyProgram.php">Loyalty Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="it.php">IT Solutions</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="about_lad.php">Network</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="https://korporatexpress.com" target="_blank">Korporate Xpress</a>
                        <a class="dropdown-item" href="https://www.facebook.com/Korporatexpress" target="_blank">ASEANrooms.com</a>
                        <a class="dropdown-item" href="https://www.facebook.com/SetapakBlogger1704" target="_blank">Setapak Blogger</a>
                        <a class="dropdown-item" href="https://tivoliholidays.wixsite.com/website-1" target="_blank">Tivoli Holidays</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact us</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="preloader show">
        <div class="preloader_inner">Loading...</div>
    </div>
