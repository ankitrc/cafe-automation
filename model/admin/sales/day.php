<?php
    if(! isset($_SESSION['role'])){
        die('not autorized');
    }
    
    if(isset($_SESSION['role'])  != 1){
        die('not autorized');
    }
    if(isset($_POST['day_submit'])){
        $today = $_POST['day'];

        $sql = "select cust_order.quantity, order_cid , food.food_name, food_price , food_discount 
                from cust_order inner join food on cust_order.food_id = food.food_id where dates = '$today' 
                order by cust_order.order_cid  ";

        if($result = $conn->query($sql)){
            // echo "dddd";
        }
        else{
            die($conn->error);
        }
        // $row  = $result->fetch_assoc();

        // echo $row['food_name'];
        // echo 'cid   food name      food price   food discount <br>';
        echo '<table>';
            echo '<tr>';
                echo '<td>';
                    echo 'cid';
                echo '</td>';
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
                echo 'food_quantity';
            echo '</td>';
            echo '</tr>';
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo '<tr>';
                    echo '<td>' . $row['order_cid'].'</td>'. '<td>' . $row['food_name'] . '</td>' 
                    . '<td>'. $row['food_price']. '</td>' . '<td>' . $row['food_discount'] . '</td>'
                    .'<td>' .$row['quantity'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }

        $sql = "select sum(quantity* (food_price-(food_price*food_discount)/100)) 
             as b from cust_order inner join food on cust_order.food_id = food.food_id where dates = '$today' ";
        if($result = $conn->query($sql)){
            // echo "great" . '<br>';
        }
        else{
            echo $conn->error . '<br>';
        }

        $row = $result->fetch_assoc();
        echo 'total :   ';
        echo $row['b'];
    }