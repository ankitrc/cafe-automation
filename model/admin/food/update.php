<?php
    // session_start();
    // echo $_SESSION['role'];
    // $role = $_SESSION['role'];
    // include_once '../dbn.php';
    if(! isset($_SESSION['role']) or $_SESSION['role'] != 1){
        die('you r not authorized');
    }
    else{
        if(isset($_POST['add_food_submit'])){
            $food_id = $_POST['food_id'];
            $food_name = $_POST['food_name'];
            $food_category = $_POST['food_category'];
            $food_discount = $_POST['food_discount'];
            $food_price = $_POST['food_price'];
            // $sql = "insert into food values('$food_id','$food_name','$food_category','$food_price','$food_discount')";        
            
            // $sql ="update food set food_id = '$food_id' where food_id = '$food_id'";  
            if(!empty($food_name)){
                $sql ="update food set food_name = '$food_name' where food_id = '$food_id'";
                if($conn->query($sql)){
                    echo "food name updated successfully <br>";
                }
            }

            if(!empty($food_discount)){
                $sql ="update food set food_id = '$food_discount' where food_id = '$food_id'";
                if($conn->query($sql)){
                    echo "food discount  updated successfully <br>";
                }
            }
            if(!empty($food_price)){
                $sql ="update food set food_price = '$food_price' where food_id = '$food_id'";
                if($conn->query($sql)){
                    echo "food price updated successfully <br>";
                }
            }
            if(!empty($food_price)){
                $sql ="update food set food_category = '$food_category' where food_id = '$food_id'"; 
                if($conn->query($sql)){
                    echo "food category updated successfully <br>";
                }
            }   
             
        }

    }
?>