<?php

if(! isset($_SESSION['role'])){
    die('not autorized');
}

if(isset($_SESSION['role'])  != 1){
    die('not autorized');
}


if(isset($_POST['mon'])){
    $total = 0;
    $today = $_POST['mon'];
    $month = split("-",$today);
    // echo gettype($month[1]);
    // echo gettype($today);
    // echo $today;
    $m1 = $month[0];
    $m2 = $month[1];
    // echo $m1;

    // $ccid = array();

    $sql = "select distinct order_cid from cust_order where MONTH(dates) = '$m2' and YEAR(dates) = '$m1' ";

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
    echo '<b>total earnings of month '.$m2 . ' : '.$total.'</b>';
}


































// $sql = "select cust_order.quantity , order_cid , food.food_name, food_price , food_discount 
//                 from cust_order inner join food on cust_order.food_id = food.food_id where MONTH(dates) = '$m2' and YEAR(dates) = '$m1' 
//                 order by cust_order.order_cid  ";

//         if($result = $conn->query($sql)){
//             // echo "dddd";
//         }
//         else{
//             die($conn->error);
//         }
//         // $row  = $result->fetch_assoc();

//         // echo $row['food_name'];
//         // echo 'cid   food name      food price   food discount <br>';

//         echo '<table>';
//         echo '<tr>';
//             echo '<td>';
//                 echo 'cid';
//             echo '</td>';
//             echo '<td>';
//                 echo 'food_name';
//             echo '</td>';
//             echo '<td>';
//                 echo 'food_price';
//             echo '</td>';
//             echo '<td>';
//                 echo 'food_discount';
//             echo '</td>';
//             echo '<td>';
//             echo 'food_quantity';
//         echo '</td>';
//         echo '</tr>';

//         if($result->num_rows > 0){
//             while($row = $result->fetch_assoc()){
//                 echo '<tr>';
//                     echo '<td>' . $row['order_cid'].'</td>'. '<td>' . $row['food_name'] . '</td>' 
//                     . '<td>'. $row['food_price']. '</td>' . '<td>' . $row['food_discount'] . '</td>'
//                    .'<td>' .$row['quantity'] . '</td>';
//                 echo '</tr>';

//             }

//             echo '</table>';
//         }





// $sql = "select sum(quantity* (food_price-(food_price*food_discount)/100)) 
//         as b from cust_order inner join food on 
//         cust_order.food_id = food.food_id where MONTH(dates) = '$m2' and YEAR(dates) = '$m1' ";

// $sql = "select MONTH(dates) as b from cust_order";

// if($result = $conn->query($sql)){
//         // echo "great" . '<br>';
//     }
//     else{
//         echo $conn->error . '<br>';
//     }

//     $row = $result->fetch_assoc();
//     echo '<br> total : ';
//     echo $row['b'] . '<br>';

?>