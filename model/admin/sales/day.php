<?php
    if(! isset($_SESSION['role'])){
        die('not autorized');
    }
    
    if(isset($_SESSION['role'])  != 1){
        die('not autorized');
    }
    if(isset($_POST['day_submit'])){
        $today = $_POST['day'];

        $sql = "select sum(quantity* (food_price-(food_price*food_discount)/100)) 
             as b from cust_order inner join food on cust_order.food_id = food.food_id where dates = '$today'";
        if($result = $conn->query($sql)){
            echo "great" . '<br>';
        }
        else{
            echo $conn->error . '<br>';
        }

        $row = $result->fetch_assoc();

        echo $row['b'];
    }