<?php
    echo 'welcome to add staff';
    session_start();
    include_once '../../../model/db/dbn.php';
    if(!isset($_SESSION['role'])){
        header('location:../../');
    }
    include 'logout.php';
    if($_SESSION['role'] != 1){
        die('not autorized');
    }
    if($_SESSION['act']=="adding_staff"){
        include 'add_staff.php';
    }
    else if($_SESSION['act']=="deleting_staff"){
        include 'del_staff.php';
    }
    else if($_SESSION['act']=="bill"){
        // die('helllppp');
        include 'bill.php';
        // include '../../../admin/index.php';

    }
    else if($_SESSION['act']=="add_food"){
        include 'add_food.php';
    }
    else if($_SESSION['act']=="deleting_food"){
        include 'del_food.php';
    }

    else if($_SESSION['act']=="sales"){
        include 'sales.php';
    }
    else if($_SESSION['act'] == "order_offer"){
        require 'order_offer.php';
    }

   