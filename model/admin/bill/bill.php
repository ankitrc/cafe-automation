<?php

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

        $sql1 = "select food_id,food_name,food_price,food_discount from food where food_id in(select food_id from cust_order where order_cid = '$cid');";
        $sql2 = "select quantity from cust_order where order_cid = '$cid' ";
        if($result1 = $conn->query($sql1)){
            echo "succ <br>";
        }
        else{
            echo "failure <br>";
        }
        if($result2 = $conn->query($sql2)){
            echo "succ <br>";
        }
        else{
            echo "failure <br>";
        }
        
        $total = 0;
        echo 'food_name'. '  '.'food_price'.  '   ' . 'food_discount' . '  ' . "tot" .'<br>';
        while($row1 = $result1->fetch_assoc() and $row2 = $result2->fetch_assoc()){
            $food_new_price = $row1['food_price']-($row1['food_price']*$row1['food_discount'])/100;

            $x = $row2['quantity']*$food_new_price;
            $total += $x;
            echo $row1['food_name']. '  '.$row1['food_price']. '    ' .$row2['quantity']. '   ' . $row1['food_discount'] . '  ' . $x .'<br>';
        }
        echo $total;
        include '../../../model/admin/bill/change_status.php';
    }
    else{
        echo "helllooo";
    }

?>