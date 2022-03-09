<?php
session_start();
    if(!isset($_SESSION['xUserId']) && empty($_SESSION['xUserId'])){
        header('Location: ../admin.php?msg0=Please Login to continue');
        exit;
    }
?>
