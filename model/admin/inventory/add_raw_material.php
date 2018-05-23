<?php

if(! isset($_SESSION['role']) or $_SESSION['role'] != 1){
    die('you r not authorized');
}

    if(isset($_POST['add_raw_material'])){
        include_once '../../../model/db/dbn.php';
        $raw_mat_id  = $_POST['raw_mat_id'];
        $raw_mat_name = $_POST['raw_mat_name'];
        $raw_mat_qtt = $_POST['raw_maty_qtt'];
        $sql = "insert into raw_mat value('$raw_mat_id','$raw_mat_name','$raw_mat_qtt')";
        
        if($conn->query($sql)){
            echo $raw_mat_name . '  added successfully';
        }
        else{
            echo $conn->error;
        }
    }

