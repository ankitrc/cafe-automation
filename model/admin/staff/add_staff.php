<?php
    // session_start();
    // echo $_SESSION['role'];
    // $role = $_SESSION['role'];
    // $_SESSION['role'] = 1;
    include_once '../../dbn.php';
    if($_SESSION['role']!=1){
        // include "../index.php";
        die('you are not authorized');
    }
    else{
        echo "hey <br>";
        if(isset($_POST['add_staff_submit'])){
            echo "there <br>";
            $staff_name = $_POST['staff_name'];
            $staff_id = $_POST['staff_id'];
            $staff_password = $_POST['staff_password'];
            $sql = "insert into staff values('$staff_id','$staff_name',0,'$staff_password');";
            if($conn->query($sql)){
                echo "$staff_name added successfully <br>";
                header('location:../');

            }      
            else{
                // echo "ban gaya popat <br>";
                echo $conn->error;
            }  
        }
        else{
            echo "error <br>";
        }

    }
    header('location:../');
?>