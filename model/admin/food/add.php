<?php
    // session_start();
    // echo $_SESSION['role'];
    // $role = $_SESSION['role'];
    if(!isset($_SESSION['role']) or $_SESSION['role'] !=1){
        // echo $_SESSION['role'];
        die('u r not authorized');
    }
    if(isset($_POST['add_food_submit'])){
        $food_id = $_POST['food_id'];
        $food_name = $_POST['food_name'];
        $food_category = $_POST['food_category'];
        $food_discount = $_POST['food_discount'];
        $food_price = $_POST['food_price'];
        $sql = "insert into food values('$food_id','$food_name','$food_category','$food_price','$food_discount')";        
        if($conn->query($sql)){
            echo "food added successfully";
        }
        else{
            echo $conn->error;
        }
    
    }


?>