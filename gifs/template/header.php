<?php 
require('template/config.php'); 
//Lang
$lang = array();
if(isset($_GET['lang']) && $_GET['lang'] == 'cn'){
    $lang['home'] = "首页";
    $lang['it'] = "关于我们";
    $lang['loyaltyProgram'] = "忠诚计划";
}else{
    $lang['home'] = "Home";
    $lang['it'] = "IT Solutions";
    $lang['loyaltyProgram'] = "Loyalty Programs";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="ChooChye" content="">

    <title>
        <?php echo $title .' | '. APPNAME ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="assets/css/animate.css" rel="stylesheet">
    <!-- Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


    <!-- Custom CSS -->
    <link href="assets/css/template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if(empty($headerAddons)){$headerAddons = NULL;}else{echo $headerAddons;} ?>

</head>

<body>
    <!-- Header Helper -->
    <div class="bg-light lang pl-1 pr-1">
        <div class="container-fluid m-0">
            <div class="row">
                <div class="col-6 text-left">
                    <a href="#">EN</a>
                    |
                    <a href="#">中文</a>
                </div>
                <div class="col-6 text-right">
                    <a href="?client">Client Zone</a>
                    |
                    <a href="?admin">Admin Zone</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="limages/logoSmall_white.png" class="img-fluid" alt="Homepage" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">
                            <?php echo $lang['home']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="loyaltyProgram.php">
                            <?php echo $lang['loyaltyProgram']; ?></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="it.php">
                            <?php echo $lang['it']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
