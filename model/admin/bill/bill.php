<?php

if(! isset($_SESSION['role']) or $_SESSION['role'] != 1){
    die('you r not authorized');
}

    // include_once '../../dbn.php';
    if(isset($_POST['bill'])){
        // echo "hey";
        
        $table_no = $_POST['table_no'];

        $sql = "select cid from customer where table_no = '$table_no' and status = 0";
        if($result = $conn->query($sql)){
            echo "succ <br>";
        }
        else{
            echo "failure1 <br>";
        }
        
        $row = $result->fetch_assoc();

        $cid = $row['cid'];

        
               
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

        echo '<b> bill no.: '.$cid.'</b>';

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
        
        
        
        
        include '../../model/admin/bill/change_status.php';
    }
    else{
        // echo "helllooo";
    }

?>