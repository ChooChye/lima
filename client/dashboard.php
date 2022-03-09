<?Php

include "core/session.php";
include_once "core/config.php";
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<?php require "core/bootstrap.php"; ?>
<title>Client Zone | LIMA</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
.hoverimg{
    transition: all 1s ease 0s;
    width:40%;
}
.hoverimg:hover{
    width:50%;
}
@media screen and (max-width:800px){
    .hoverimg{
    transition: all 1s ease 0s;
    width:20%;
    }
    .hoverimg:hover{
        width:30%;
    }
}
</style></head>

<body>
<div class="container-fluid">


<?Php
//require "check.php";

if(empty($_SESSION['userid'])){
    print "<div class='alert alert-danger'>Please <a href='https://lima-asiadynamics.com/?view=client'>Login</a> to continue</div>";
}else{
    
    echo '<div class="row">';
            require "core/nav.php";
        
        echo '<div class="col">';
           echo '<div class="p-4">';
                 echo '<h2>Welcome to your Dashboard </h2><hr/>';
                echo '
                    <a href="reports/dailysales"><img class="hoverimg" src="img/dailysales1.png" alt="Daily Sales"/></a>
                    <a href="reports/weeklysales"><img class="hoverimg" src="img/weeklysales1.png" alt="Weekly Sales"/></a>
                ';
           echo '</div>';
        echo '</div>';
    echo '</div>';
    
    /*
    echo '<div class="container-fluid">';
    echo '<div class="col-md-12" style="padding-left:250px;">
    <div class="container-fluid"> 
    <h2 style="margin:0px; padding-top:10px;">Welcome to your Dashboard</h2><hr>
    </div><!-- /col-md-12 -->
    <div class="col-md-8 col-sm-offset-2" style="margin-top:5%;">
    <a href="reports/dailysales"><img class="hoverimg" src="img/dailysales1.png" alt="Daily Sales"/></a>
    <a href="reports/weeklysales"><img class="hoverimg" src="img/weeklysales1.png" alt="Weekly Sales"/></a>
    </div>
    </div><!-- row-->
      </div><!-- /container-fluid -->
      </div><!-- /row -->';*/
}

?>
</div><!-- END container -->
</body>
</html>
