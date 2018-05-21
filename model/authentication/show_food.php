<?php
    include_once '../dbn.php';
    // $sql = 'select category from food;';
    // $result = $conn->query($sql);
    $sql = "select *from food order by food_category";
    // $sql = "select *from food group by food_category";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<b>".$row['food_id']."   ".$row['food_name']."    ".$row['food_category']."    ".$row['food_price']."   ".$row['food_discount']."<b> <br>";
        }
    }
    else{
        echo 'no entry';
    }