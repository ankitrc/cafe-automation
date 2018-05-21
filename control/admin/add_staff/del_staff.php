<?php
    if($_SESSION['role'] != 1){
        die('not authorized');
    }
    if(!isset($_POST['del_staff_submit'])){
        include '../../../view/admin/del_staff.php';
    }
    if(isset($_POST['del_staff_submit'])){
        include '../../../model/admin/staff/del_staff.php';
        echo "hellooo";
    }
    else
        // (isset($_POST['add_staff_submit']))
        {
        echo 'hello';
        // include '../admin/add_staff.php';
    } 