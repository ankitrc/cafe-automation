<?php

if(! isset($_SESSION['role']) or $_SESSION['role'] != 1){
    die('you r not authorized');
}

$get = "select food_id , food_name from food";
    $result = $conn->query($get);
    $option = '';
     while($row = $result->fetch_assoc())
    {
      $option .= '<option value = "'.$row['food_id'].'">'.$row['food_name'].'</option>';
    }

?>