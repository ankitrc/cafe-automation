<?php
    // echo 'hey';
    // if(isset($_POST['order_submit'])){
    //         $table_no = $_SESSION['table_no'];
    //         $food_id = $_POST['food_id'];
    //     // foreach($_POST['check_list'] as $sel and $_POST['food_qtt'] as $food_qtt){
    //         // $sql = "select * from food where food_id = '$sel';";
    //         // $result = $conn->query($sql);
    //         // $row = $result->fetch_assoc();


    //         $food_name = $_POST['food_name']; 
    //         $food_qtt = $_POST['food_qtt'];
    //         // $food_id = $sel;
    //         $today =  date("Y-m-d");
    //         // echo $today;
    //         $sql = "select cid from customer where table_no = '$table_no' and status = 0;";
    //         $result = $conn->query($sql);
    //         $row = $result->fetch_assoc();
    //         $cid = $row['cid'];
    
    //         $sql = "insert into cust_order values('$cid','$food_id','$food_name','$food_qtt','$today')";
    
    //         if($conn->query($sql)){
    //             echo 'oredered successfully <br>';
    //         }
    //         else{
    //             echo $conn->error;
    //         }
    //     // }

    // }



?>

<?php
    


    if(isset($_POST['order_submit'])){

        $food_qtts = array_values(array_filter($_POST['food_qtt']));

        $food_ids = $_POST['check_list'];
        $table_no = $_SESSION['table_no'];
        

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