<?php

    if(!isset($_SESSION['role'])){
        header('location:../../../');
    }

    if(!isset($_POST['logout'])){
        include '../../../view/authentication/logout.php';
    }
    else{
        include '../../../model/authentication/logout.php';
        header('location:../../../');
    }
?>