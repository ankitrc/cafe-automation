<?php

if(! isset($_SESSION['role'])){
    die('not autorized');
}

if(isset($_SESSION['role'])  != 1){
    die('not autorized');
}

if(isset($_POST['year_submit'])){
    $today = $_POST['year'];
    // $today = $_POST['mon'];
    // $month = split("-",$today);
    // $m1 = $month[0];
    // $m2 = $month[1]; 

    $total = 0;

    $sql = "select distinct order_cid from cust_order where YEAR(dates) = '$today' ";

    if($result = $conn->query($sql)){
        // echo 'done <br>';
    }else{
        die($conn->error);
    }
    if($result->num_rows > 0){

        echo '<table>';
        echo '<tr>';
            echo '<th>';
            echo 'bill num:';
            echo '</th>';
            echo '<th>';
                echo 'food items:';
            echo '</th>';
            echo '<th>';
                echo 'food prices:';
            echo '</th>';
            echo '<th>';
                echo 'total:';
            echo '</th>';
        echo '</tr>';
        echo '</table>';

        while($row = $result->fetch_assoc()){
            $ccid = $row['order_cid'];
            $foods = '';
            $sql1 = "select cust_order.quantity , order_cid , food.food_name, food_price , food_discount 
                    from cust_order inner join food on 
                    cust_order.food_id = food.food_id where cust_order.order_cid = '$ccid'"; 
                
            if($result1 = $conn->query($sql1)){
                // echo "done1 <br>";
            }
            else{
                die($conn->error);
            }
            $x = 0;
            $prices = '';

            while($row1 = $result1->fetch_assoc()){
                $price = ($row1['food_price'] - ($row1['food_price']*$row1['food_discount'])/100)* $row1['quantity'];
                $foods .= $row1['quantity'] . ' ';
                $foods .= $row1['food_name'] . ',' . '  ';
                $prices .= $price . ',' .'  ';
                $x += $price;
            }
            $total += $x;
            $foods = rtrim($foods,' ');
            $foods = rtrim($foods,',');
            $prices = rtrim($prices,' ');
            $prices = rtrim($prices,',');
            echo '<table>';
            echo '<tr>';
                echo '<td>';
                    echo $ccid;
                echo '</td>';
                    
                echo '<td>';
                    echo $foods;
                echo '</td>';
                    
                echo '<td>';
                    echo $prices;
                echo '</td>';
                
                echo '<td>';
                    echo $x;
                echo '</td>';
            echo '</tr>';
            echo '</table>';

            
                        

        }
        // echo 'hey';
    }

    echo '<b>total earning of year '.$today . '   : '.$total.'</b>';  



}

?>