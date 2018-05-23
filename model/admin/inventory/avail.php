<?php
    // session_start();
    if(!isset($_SESSION['role']) or $_SESSION['role'] != 1){
        die('you r not authorized');
    }
    if($_SESSION['role'] == 1){
       
        if(isset($_POST['avail'])){
            include_once '../../../model/db/dbn.php';

            $sql = "select * from raw_mat;";
            if($result = $conn->query($sql)){
                if($result->num_rows >0){
                    while($row = $result->fetch_assoc()){
                        echo $row['raw_mat_id'].'   '.$row['raw_mat_name'].'      '.$row['raw_mat_qtt'].'<br>';
                    }
                    // header('location:raw_material.php');               
                }
                else{
                    echo $conn->error . "<br>";
                }
            //     echo "hello";
            }
            else{
                die($result->error."<br>");
            }
        } 


    }