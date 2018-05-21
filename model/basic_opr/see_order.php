<?php
    //security pending
    
    if(!isset($_SESSION['role'])){
        header('location:../../');
        // die('you are not autorized');
    }

    if($_SESSION['role'] != 0){
        die('not autorized');
    }

    $sql = "select * from cust_order where order_cid in(select cid from customer where status = 0)";
    if($result = $conn->query($sql)){
        // echo "ok";
    }
    else{
        echo "helllo";
        echo $conn->error;  
    }
    echo 'tab_no'."   ".'food_id'."  ".'food_name'."   ".'quantity'."<br>";
    // if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo $row['tab_no']."   ".$row['food_id']."  ".$row['food_name']."   ".$row['quantity']."<br>";
        }
?>