<?php
    // session_start();
    // echo $_SESSION['role'];
    // $role = $_SESSION['role'];
    // include_once '../../../model/db/dbn.php';
    if(! isset($_SESSION['role']) or $_SESSION['role'] != 1){
        die('you r not authorized');
    }
    else{
        if(isset($_POST['del_food_submit'])){
            $food_id = $_POST['food_id'];
            $sql = "delete from food where food_id = '$food_id'";
            if($conn->query($sql)){
                echo "deleted successfully";

            }
            else{
                echo $conn->error;
            }
         }

    }
?>