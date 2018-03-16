<?php
    if(isset($_POST['staff_submit'])){
        // extract($_POST);
        $staff_id = (int)$_POST['staff_id'];
        $staff_pass = $_POST['staff_pass'];
        echo "$staff_id <br>";
        echo "$staff_pass <br>";
        echo gettype($staff_id)."<br>";
        require_once 'db.php';
        $sql = "select role from staff;";
        if($result = $conn->query($sql)){
            if($result->num_rows >0){
                $row = $result->fetch_assoc();
                session_start();
                $_SESSION['id'] = $staff_id;
                $_SESSION['role'] = $row['role'];
                header('location:staff.php');
                
            }
            else{
                echo "check password or id <br>";
            }
            echo "hello";
        }
        // else{
        //     die('query failed in login'.$result->error."<br>");
        // }
    }
    else{
        echo "testing";
    }


?>