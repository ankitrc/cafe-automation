<?php

    $sql = 'select * from food';
    require_once '../database/db.php';

    $result = $conn->query($sql);
    // if(!$result->error){
        echo "<table>";
        echo "<tr>";
        echo "<th>food id </th> <th>food name </th> <th>food category</th> <th>food price </th> <th>
        food discount </th>";
        echo "</tr>";
        while($row = $result->fetch_assoc()){

            echo "<tr>";
            echo "<td>".$row['food_id']."</td> <td>".$row['food_name']."</td> <td>".$row['food_category']."</td> <td>".$row['food_price'] ."</td> <td>".
            $row['food_discount']." </td>";
            echo "</tr>";
        }
    // }
?>