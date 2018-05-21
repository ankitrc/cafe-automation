<?php

    if(!isset($_SESSION['role']) or $_SESSION['role'] != 1){
        die('not authorized');
    }

    if(isset($_POST['menu'])){
        $sql = 'select * from food';

        if($result = $conn->query($sql)){
            // die($conn->error);
            // echo 'dd';
        }
        else{
            die($conn->error);
        }
        
        // echo 'ff';

        echo '<table>';
        echo '<tr>';
            echo '<td>';
                echo 'food_name';
            echo '</td>';
            echo '<td>';
                echo 'food_price';
            echo '</td>';
            echo '<td>';
                echo 'food_discount';
            echo '</td>';
            echo '<td>';
                echo 'food_category';
            echo '</td>';
        echo '</tr>';

        while ($row = $result->fetch_assoc()){

            echo '<tr>';
            // // echo 'hhh';
            echo '<td>' . $row['food_name'] .'</td>' . '<td>' .$row['food_price'] . '</td>' .'<td>' . $row['food_discount'] . '</td>' .  '<td>'.$row['food_category'] . '</td>'; 
            echo '</tr>';
        }
        echo '</table>';
    }