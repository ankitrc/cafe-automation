<?php

    // include_once '../../dbn.php';
    // die('jjjaa');
    if(isset($_POST['new_bill'])){
        // echo "hey";
        // die('jjj');
        $cid = $_POST['order_id'];
        // $sql1 = "select food_id,food_name,food_price,food_discount from food where food_id in(select food_id from cust_order where order_cid = '$order_id');";
        // $sql2 = "select quantity from cust_order where order_cid = '$order_id'";
        // if($result1 = $conn->query($sql1)){
        //     echo "succ <br>";
        // }
        // else{
        //     echo "failure <br>";
        // }
        // if($result2 = $conn->query($sql2)){
        //     echo "succ <br>";
        // }
        // else{
        //     echo "failure <br>";
        // }
        
        $sql = "select cust_order.quantity as quantity , food.food_id as id,food.food_name as name,
            food.food_price as price,food.food_discount  as dsc 
            from food inner join
            cust_order on cust_order.food_id = food.food_id where cust_order.order_cid = '$cid' ";
        

        if($result = $conn->query($sql)){
            echo 'successful <br>';
        }
        else{
            echo $conn->error;
        }
        $total = 0;

        echo '<table>';
        echo '<tr>';
            echo '<td>';
                echo 'food_name';
            echo '</td>';
            echo '<td>';
                echo 'food_price';
            echo '</td>';
            echo '<td>';
                echo 'food_quantity';
            echo '</td>';
            echo '<td>';
                echo 'food_discount';
            echo '</td>';

            echo '<td>';
                echo 'total';
            echo '</td>';
        echo '</tr>';



        // echo 'food_name'. '  '.'food_price'.  '   ' . 'food_qtt'. '     ' . 'food_discount' . '  ' . "tot" .'<br>';
        while($row = $result->fetch_assoc()){
                    $food_new_price = $row['price']-($row['price']*$row['dsc'])/100;

                    echo '<tr>';
                    $x = $row['quantity']*$food_new_price;
                    $total += $x;
                    echo '<td>' . $row['name']. '</td>' . '<td>' . $row['price']. '</td>' . '<td>' .  
                    $row['quantity']. '</td>'  .  '<td>' . $row['dsc'] . '</td>' . '<td>' .   $x .'</td>' ;
            
            echo '</tr>';
       
        }
        echo '</table>';
        echo 'total : ';
        echo $total;


    }
    else{
        echo "helllooo";
    }

?>