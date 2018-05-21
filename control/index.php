<?php

    session_start();
    require_once '../model/db/dbn.php';
    if(!isset($_SESSION['role']) or !isset($_SESSION['table_no'])){
        header('loacation : ../');
    }
    else{
        // die('not yet');
        if($_SESSION['role'] == 1){
            // die('not yet 1');
            header('location: admin');
        }
        else if($_SESSION['role'] == 0){
            // echo $_SESSION['role'];
            // die('not yet 4');
            header('location: staff');
        }
        else if($_SESSION['table_no'] != -1){
            // die('not yet');
            header('location: customer');
        }
        else{
            // die('not yet');
            if(isset($_POST['details_submit'])){
                include '../model/customer/details.php';
            }
            else if(isset($_POST['staff_submit'])){
                require '../model/authentication/login.php';
            }
            require '../view/customer/details.php';
            require '../view/authentication/login.php';
        }

        if($_SESSION['role'] == 1){
            // die('not yet 1');
            header('location: admin');
        }
        else if($_SESSION['role'] == 0){
            // echo $_SESSION['role'];
            // die('not yet 66');
            header('location: staff');
        }
        else if($_SESSION['table_no'] != -1){
            // die('not yet');
            // echo $_SESSION['table_no'];
            // die('not yet 66');
            header('location:customer');
            // die('not yet 66');
        }
    }