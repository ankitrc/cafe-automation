<?php
    //security 

    
    if(!isset($_SESSION['role'])){
        // die('you are not autorized');
        header('location:../../control');
    }

    if($_SESSION['role'] != 0){
        die('not autorized');
    }
    $sql = "select * from food where food_discount > 0";
    if($result = $conn->query($sql)){
        // echo "ok";
    }
    else{
        echo $conn->error;
    }
    // if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo $row['food_id']."  ".$row['food_name']."   ".$row['food_category']."   ".$row['food_price']."  ".$row['food_discount']."<br>";
        }
    // }

?>