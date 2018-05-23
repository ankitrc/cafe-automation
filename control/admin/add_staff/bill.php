<?php

    // session_start();
    if(!isset($_SESSION['role'])){
        die('died in bill index.php');
    }
    if($_SESSION['act']=="bill"){
        require '../../model/admin/bill/bill_selection.php';
        require '../../model/admin/bill/new_bill_selection.php';
        if(!isset($_POST['bill'])){
            include '../../view/admin/index.php';
        }
        else if(isset($_POST['bill'])){
            include '../../model/admin/bill/bill.php';
        }
        if(!isset($_POST['new_bill'])){
            include '../../view/admin/new_bill.php';
        }
        else if(isset($_POST['new_bill'])){
            include '../../model/admin/bill/new_bill.php';
            // die('ggg');
        }


    }