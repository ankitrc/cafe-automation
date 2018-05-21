<?php
session_start();
// $_SESSION['role'] = 1;
if(!isset($_SESSION['role'])){
    header('location:../../');
}
// include 'add_staff/logout.php';
if($_SESSION['role']==1){
    include '../../view/admin/home.php';
    if(isset($_POST['add_staff_btn'])){
        echo 'add staff <br>';
        // include '../view/admin/add_staff.php';
        // include 'add_staff.php';
        $_SESSION['act'] = "adding_staff";
        header('location:add_staff');
    }   
    else if(isset($_POST['delete_staff_btn'])){
        echo "delete staff<br>";
        $_SESSION['act'] = "deleting_staff";
        header('location:add_staff');
    }
    else if(isset($_POST['add_food_btn'])){
        echo "add food <br>";
        $_SESSION['act'] = "add_food";
        header('location:add_staff');
    }
    else if(isset($_POST['delete_food_btn'])){
        echo "delete food <br>";
        $_SESSION['act'] = "deleting_food";
        header('location:add_staff');
    }
    else if(isset($_POST['update_food_btn'])){
        $_SESSION['act'] = "updating_food";
    }
    else if(isset($_POST['bill'])){
        $_SESSION['act'] = "bill";
        // header('location:../../admin/bill');
        header('location:add_staff');
        // include '../../admin/bill/index.php';
    }

    else if(isset($_POST['sales'])){
        $_SESSION['act'] = "sales";
        // header('location:../../admin/bill');
        header('location:add_staff');
        // include '../../admin/bill/index.php';
    }
    // else{
    
    // }  
    
}