<?php
    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../view/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../view/css/tables.css">
</head>

<body style="padding:10px;">
<?php
// error_reporting(0);
session_start();
// $_SESSION['role'] = 1;
if(!isset($_SESSION['role'])){
    header('location:../../');
}
// include 'add_staff/logout.php';
if($_SESSION['role']==1){

    // require '../../view/major_glob.php';
    include '../../view/admin/home.php';
    require_once '../../model/db/dbn.php';
    // require '../../model/basic_opr/see_order.php';
    if(isset($_POST['add_staff_btn'])){
        // echo 'add staff <br>';
        // include '../view/admin/add_staff.php';
        // include 'add_staff.php';
        $_SESSION['act'] = "adding_staff";
        // header('location:add_staff');
    }   
    else if(isset($_POST['delete_staff_btn'])){
        echo "delete staff<br>";
        $_SESSION['act'] = "deleting_staff";
        // header('location:add_staff');
    }
    else if(isset($_POST['add_food_btn'])){
        echo "add food <br>";
        $_SESSION['act'] = "add_food";
        // header('location:add_staff');
    }
    else if(isset($_POST['delete_food_btn'])){
        echo "delete food <br>";
        $_SESSION['act'] = "deleting_food";
        // header('location:add_staff');
    }
    else if(isset($_POST['update_food_btn'])){
        $_SESSION['act'] = "updating_food";
    }
    else if(isset($_POST['bills'])){
        $_SESSION['act'] = "bill";
        // header('location:../../admin/bill');
        // header('location:add_staff');
        // include '../../admin/bill/index.php';
    }

    else if(isset($_POST['sales'])){
        $_SESSION['act'] = "sales";
        // header('location:../../admin/bill');
        // header('location:add_staff');
        // include '../../admin/bill/index.php';
    }

    else if(isset($_POST['order_offer'])){
        $_SESSION['act'] = 'order_offer';

        // header('location:add_staff');
    }
    // else{
    
    // }  

    if(isset($_SESSION['act'])){
        require 'add_staff/index.php';
    }
    
}

?>
    <script src="../../view/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../view/bootstrap-3.3.7-dist/css/bootstrap.css">

</body>