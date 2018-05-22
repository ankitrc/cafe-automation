<?php

    if(!isset($_SESSION['role']) or $_SESSION['role'] != 1){
            die('died in bill index.php');
    }

    else{

        require '../../view/admin/order_offer.php';

        if(isset($_POST['see_offer'])){
            require '../../model/basic_opr/see_menu.php';
            
        }
        else if(isset($_POST['see_order'])){
            require '../../model/basic_opr/see_order.php';
        }
        else if(isset($_POST['menu'])){
            require '../../model/basic_opr/menu.php';
            
        }
    }