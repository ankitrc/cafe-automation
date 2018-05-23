<?php

    include_once '../model/db/dbn.php';
    if(isset($_POST['details_submit'])){
        $name = $_POST['cust_name'];
        // echo "hellllllllllo";
        $mob = (int)$_POST['mob_no'];
        $table_no = (int)$_POST['table_no'];
        // echo "hellllllllllo";
        if($name == "" or $mob == "" or $table_no == ""){
            header('location: ../');
            die('ooooosss');
        }
        // else{
        //     echo "no";
        // }
        $sql = "select status from table_num where table_no = '$table_no';";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row['status'];
        if($row['status'] == 0){
            die('table is already booked ');
        }
        else{
            $sql = "update table_num set status = 0 where table_no = '$table_no'";
            if($conn->query($sql)){
                echo 'updated succ <br>';
            }
            else{
                die('error');
            }
            $sql = "insert into customer(name,mobile_no,table_no,status) values('$name','$mob','$table_no',0);";
            // session_start();
            $_SESSION['table_no'] = $table_no;

            if($conn->query($sql)){
                echo "table upd <br>";
            }
            else{
                die('erro insert');
            }

        }
        $sql = "select cid from customer where table_no = '$table_no' and status = 0";
        // header('location:../customer');
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $cust_id = $row['cid'];
        $_SESSION['cid'] = $cust_id;

    }