<?php
    ob_start();
    if(!isset($_SESSION['role'])){
        header('location:../../');
    }

    if(!isset($_POST['logout'])){
        include '../../view/authentication/logout.php';
    }
    else{
        include '../../model/authentication/logout.php';
        // ob_end_flush();
        header('location:../../');
        // ob_end_flush();
        // include '../../index.php';
    }
 
?>