<?php
    // session_start();
    // echo $_SESSION['role'];
    // $role = $_SESSION['role'];
    include_once '../../../dbn.php';
    if($_SESSION['role']!=1){
        // include "../index.php";
        die('died in admin delete.php');
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