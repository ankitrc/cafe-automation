<?php
    if($_SESSION['role'] != 1){
        die('not authorized');
    }


    if(isset($_POST['mon'])){
        require '../../model/admin/sales/month.php';
    }
    if(isset($_POST['day'])){
        require '../../model/admin/sales/day.php';
    }
    if(isset($_POST['year'])){
        require '../../model/admin/sales/year.php';
    }

    if(isset($_POST['food_id_sales_submit'])){
        require '../../model/admin/sales/food_id_sales.php';
    }
    if(isset($_POST['total_earning_submit'])){
        require '../../model/admin/sales/total_earning.php';
    }
    require '../../view/admin/sales.php';