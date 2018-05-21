<?php

    if(!isset($_SESSION['role']){
        die('not authorized');
    }

    if($_SESSION['role'] !=){
        die('not authorized');
    }

    if($_POST['update_inventory']){
        $food_id = $_POST['food_id'];

        $food_qtt = $_POST['food_qtt'];
        $sql = "update raw_mat set raw_mat_qtt = '$food_qtt' where raw_mat_id = '$food_id' ";

        if($conn->query($sql)){
            echo 'updated successfully <br>';
        }
        else{
            echo $conn->error . '<br>';
        }
    }