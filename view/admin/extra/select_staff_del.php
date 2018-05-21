<?php
    require '../model/db/dbn.php';
    $get = "select id , name  from staff";
    $result = $conn->query($get);
    $option = '';
     while($row = $result->fetch_assoc())
    {
      $option .= '<option value = "'.$row['table_no'].'">'.$row['table_no'].'</option>';
    }
?>