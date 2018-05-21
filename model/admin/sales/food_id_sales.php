<?php
    if(! isset($_SESSION['role'])){
        die('not autorized');
    }
    
    if(isset($_SESSION['role'])  != 1){
        die('not autorized');
    }
    if(isset($_POST['food_id_sales_submit'])){
        $today = $_POST['food_id'];

        $sql = "select sum(quantity* (food_price-(food_price*food_discount)/100)) 
             as b from cust_order inner join food on cust_order.food_id = food.food_id where food.food_id = '$today'";
        if($result = $conn->query($sql)){
            echo "great" . '<br>';
        }
        else{
            echo $conn->error . '<br>';
        }

        echo "sales on food id ". $today .':'. '<br>';
        while($row = $result->fetch_assoc()){
            echo $row['b'];
        }

        
    }