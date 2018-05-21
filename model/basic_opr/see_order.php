<?php
    //security pending
    
    if(!isset($_SESSION['role'])){
        header('location:../../');
        // die('you are not autorized');
    }

    if($_SESSION['role'] == 0 or $_SESSION['role'] == 1){
        

    $sql = "select customer.table_no as table_no, cust_order.food_id as food_id, cust_order.food_name as food_name , 
        cust_order.quantity as quantity from cust_order inner join customer on cust_order.order_cid = customer.cid   where customer.status = 0";
    if($result = $conn->query($sql)){
        // echo "ok";
    }
    else{
        echo "helllo";
        echo $conn->error;  
    }

    echo '<table>';
    echo '<tr>';
        echo '<td>';
            echo 'table_no';
        echo '</td>';
        echo '<td>';
            echo 'food_name';
        echo '</td>';
        echo '<td>';
            echo 'food_quantity';
        echo '</td>';


    echo '</tr>';


    // echo 'table_no'."   ".'food_id'."  ".'food_name'."   ".'quantity'."<br>";
    // if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo '<td>' . $row['table_no'].'</td>' .'<td>' .$row['food_id'].
            '</td>' . '<td>' .$row['food_name']. '</td>' . '<td>' . $row['quantity'].'</td>';
            echo '</tr>';
        }
        echo "</table>";

    }

    else{
        die('not authorized');
    }
?>