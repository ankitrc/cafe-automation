<?php

    // session_start();
    session_start();
    
    if($_SESSION['table_no'] == -1){
        die('not autorized');
    }
    
    include_once '../../model/db/dbn.php';
    // echo $_SESSION['table_no'];
    echo "customer controller <br>";
    echo $_SESSION['cid'];

    // include '../../view/customer/select_food.php';
    // 
    // if($_SESSION['act']=='cust_details'){
    //     include '../../customer/details.php';
    // }

    if(isset($_POST['order_submit'])){
        echo 'ekkk';
        include '../../model/customer/order.php';
    }
    else if(isset($_POST['payment'])){
        // echo "noth";
        include '../../model/customer/payment.php';
    }
    else if (isset($_POST['done'])){
        include '../../model/customer/payment.php';
    }
    // else{
        // echo 'ekkkoo';
        include '../../view/customer/select_food.php';
    // }