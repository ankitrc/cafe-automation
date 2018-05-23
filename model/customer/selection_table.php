<?php
    $get = "select table_no from table_num where status = 1";
    $result = $conn->query($get);
    $option = '';
     while($row = $result->fetch_assoc())
    {
      $option .= '<option value = "'.$row['table_no'].'">'.$row['table_no'].'</option>';
    }
?>