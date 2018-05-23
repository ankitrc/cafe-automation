<?php
    $get = "select id , name  from staff where role != 1";
    $result = $conn->query($get);
    $option = '';
     while($row = $result->fetch_assoc())
    {
      $option .= '<option value = "'.$row['id'].'">'.$row['name'].'</option>';
    }
?>