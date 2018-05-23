<?php

if(! isset($_SESSION['role']) or $_SESSION['role'] != 1){
    die('you r not authorized');
}

    $get = "select table_no from customer where status = 0";
    $result = $conn->query($get);
    $option2 = '';
     while($row = $result->fetch_assoc())
    {
      $option2 .= '<option value = "'.$row['table_no'].'">'.$row['table_no'].'</option>';
    }

?>