<?php
    //security 

    
    if(!isset($_SESSION['role'])){
        // die('you are not autorized');
        header('location:../../control');
    }

    if($_SESSION['role'] == 0 or $_SESSION['role'] == 1){

        $sql = "select * from food where food_discount > 0";
        if($result = $conn->query($sql)){
            // echo "ok";
        }
        else{
            echo $conn->error;
        }

        echo '<table>';
            echo '<tr>';
                echo '<td>';
                    echo 'id';
                echo '</td>';
                echo '<td>';
                    echo 'food_name';
                echo '</td>';
                echo '<td>';
                    echo 'food_category';
                echo '</td>';
                echo '<td>';
                    echo 'food_price';
                echo '</td>';
                echo '<td>';
                    echo 'food_discount';
                echo '</td>';

            echo '</tr>';

        // if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                echo '<td>' . $row['food_id'].'</td>' . '<td>' . $row['food_name'].
                '</td>' . '<td>' . $row['food_category'].'</td>' . 
                '<td>' . $row['food_price'].'</td>' . '<td>' . $row['food_discount'].'</td>'  ;
                echo '</tr>';
            }
            echo "</table>";
        // }
    }
    else{
        die('not authorized');
    }

?>