<?php
    session_start();
    // $_SESSION['table_no'] = -1;

    // $_SESSION['role'] = 1;
    include_once '../dbn.php';
    // echo $_SESSION['table_no'];
    echo $_SESSION['role'];
    // die('hhhh');

    if($_SESSION['role']=="nothing"){
        // die('goo');
        if(isset($_POST['staff_submit'])){
            // include '../mod/show_food.php';
            // die('nnnn');
            echo 'hello';
            include '../mod/login.php';
            // include 'admin.php';
            if($_SESSION['role']==1){
                header('location:admin');
            }
            else if($_SESSION['role']==0 and $_SESSION['role'] != "nothing"){
                // die('nnnn');
                header('location:staff');
            }
        }
        // else if(isset($_POST['details_submit'])){
        //     include 'details.php';
        //     // include 'index.php';
            
        // }

        else if(isset($_POST['details_submit'])){
            // $_SESSION['act'] = "cust_details";
            include '../customer/details.php';
            header('location:customer');
        
        }

        // else if($_SESSION['role']==1){
        //     include 'admin.php';
        // }
        else{
            // die('nnnn');
            include '../view/details.php';
            include '../view/login.php';

        }
    }
    else{
        include_once '../dbn.php';
        // die('nnnn');
        if($_SESSION['table_no'] != -1){
            // echo $_SESSION['table_no']."  ffff";
            // die('nnnn');
            header('location:customer');
        }

        if($_SESSION['role']==1){
            header('location:admin');
        }
        else if($_SESSION['role']==0){
            // echo "<br>".$_SESSION['role']."<br>";
            // die('here');
            header('location:staff');
        }
    }
   
   