<?php
    


    if(isset($_POST['order_submit'])){

        $food_qtts = array_values(array_filter($_POST['food_qtt']));

        $food_ids = $_POST['check_list'];
        $table_no = $_SESSION['table_no'];
        
        echo '<br>';
        // foreach($food_qtts as $food_id){
        //     echo $food_id . '<br>';
        // }
        $today =  date("Y-m-d");
        for($i = 0; $i < count($food_ids); $i++){
            $food_id = $food_ids[$i];
            $food_qtt = $food_qtts[$i];
            $sql = "select * from food where food_id = '$food_id';";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $food_name = $row['food_name']; 
            $sql = "select cid from customer where table_no = '$table_no' and status = 0;";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $cid = $row['cid'];
            $sql = "insert into cust_order values('$cid','$food_id','$food_name','$food_qtt','$today')";

            if($conn->query($sql)){
                echo 'oredered successfully <br>';
            }
            else{
                echo $conn->error;
            }
        }

    }

?>