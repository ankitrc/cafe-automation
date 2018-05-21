<?php
    if($_SESSION['role'] != 1){
        die('not authorized');
    }


    if(isset($_POST['mon'])){
        require '../../../model/admin/sales/month.php';
    }
    if(isset($_POST['day'])){
        require '../../../model/admin/sales/day.php';
    }
    if(isset($_POST['year'])){
        require '../../../model/admin/sales/year.php';
    }

    require '../../../view/admin/sales.php';