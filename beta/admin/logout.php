<?php
session_start();

if(isset($_SESSION['xUserId']) && isset($_SESSION['id'])){
    session_destroy();
    session_unset();
    header('Location: ../admin.php');
}else{
    header('Location: ../admin.php');
}
?>
