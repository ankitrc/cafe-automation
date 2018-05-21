<?php
    session_start();
    if($_SESSION['role'] == -1){
        header('location:../../');
    }

    // echo "hey folk ".$_SESSION['role'];
    if(isset($_POST['logout'])){
        include '../../model/authentication/logout.php';
        header('location:../../../');
    }
    
    include '../../view/staff/index.php';
    include '../../model/db/dbn.php';

  
    if(isset($_POST['see_offer'])){
        // include '../add_staff/logout.php';
        include '../../model/basic_opr/see_menu.php';
    }
    else{
        include '../../model/basic_opr/see_order.php';
        
    }
    require '../../view/authentication/logout.php';
?>