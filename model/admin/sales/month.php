<?php

if(! isset($_SESSION['role'])){
    die('not autorized');
}

if(isset($_SESSION['role'])  != 1){
    die('not autorized');
}

$today = $_POST['mon'];
$month = split("-",$today);
// echo gettype($month[1]);
// echo gettype($today);
// echo $today;
$m1 = $month[0];
$m2 = $month[1];
// echo $m1;
$sql = "select sum(quantity* (food_price-(food_price*food_discount)/100)) 
     as b from cust_order inner join food on cust_order.food_id = food.food_id YEAR(dates) = '$m1' ";

// $sql = "select MONTH(dates) as b from cust_order";

if($result = $conn->query($sql)){
        echo "great" . '<br>';
    }
    else{
        echo $conn->error . '<br>';
    }

    $row = $result->fetch_assoc();

    echo $row['b']

?>