<?php

    // session_start();
    if(!isset($_SESSION['role'])){
        die('died in bill index.php');
    }
    if($_SESSION['act']=="bill"){
        if(!isset($_POST['bill'])){
            include '../../view/bill/index.php';
        }
        else if(isset($_POST['bill'])){
            include 'bill.php';
        }
        if(!isset($_POST['new_bill'])){
            include '../../view/bill/new_bill.php';
        }
        else if(isset($_POST['new_bill'])){
            include 'new_bill.php';
            // die('ggg');
        }
    }