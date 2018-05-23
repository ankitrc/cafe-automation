<?php

    // session_start();
    if(! isset($_SESSION['role']) or $_SESSION['role'] != 1){
        die('you r not authorized');
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