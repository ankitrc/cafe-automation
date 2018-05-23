<?php


    $get = "select cid from customer";
    $result = $conn->query($get);
    $option = '';
    while($row = $result->fetch_assoc())
    {
    $option .= '<option value = "'.$row['cid'].'">'.$row['cid'].'</option>';
    }

?>