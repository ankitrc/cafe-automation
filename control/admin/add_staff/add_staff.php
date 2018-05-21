<?php
    echo $_SESSION['role']."<br>";
    // include '../../view/logout.php';
    if($_SESSION['role'] != 1){
        die('not authorized');
    }
    echo 'ehy';
    if(!isset($_POST['add_staff_submit'])){
        include '../../../view/admin/add_staff.php';
    }
    if(isset($_POST['add_staff_submit'])){
        include '../../../model/admin/food/add_staff.php';
        echo "hellooo";
    }
    else
        // (isset($_POST['add_staff_submit']))
        {
        echo 'hello';
        // include '../admin/add_staff.php';
    }   
?>
