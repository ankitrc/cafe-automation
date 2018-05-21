<?php
    // require '../model/db/dbn.php';
    // $get = "select * from food;";
    // $result = $conn->query($get);
    // $option = '';
    //  while($row = $result->fetch_assoc())
    // {
    //   $option .= '<input type = "checkbox" name = "check_list[]" value = '.$row['food_id'].'>';
    //   $option .='<label>'.$row['food_name']."   ".$row['food_price']."    ".$row['food_discount'].'<label>';
    //   $option .= '<input type="number" name= "food_qtt[]" min="1" max="5">';

    //   $option .= "<br>";
    // }
?>



<!-- <form action="" method="post"> -->
    <?php
        // echo $option;
    ?>
    <!-- <input type="submit" name="order_submit" value="Submit">
    <input type="submit" name="payment" id="" value = "payment"> -->
<!-- </form> -->



<form action="" method="post">
    food id: <br>
    <input type="text" name="food_id" id="" required> <br> <br>
    food name: <br>
    <input type="text" name="food_name" id="" required> <br> <br>
    food qtt: <br>
    <input type="text" name="food_qtt" id="" required> <br> <br>
    <!-- food category: <br> -->
    <!-- <input type="text" name="food_category" id=""> <br> <br> -->
    <!-- food price: <br> -->
    <!-- <input type="text" name="food_price" id=""> <br> <br> -->
    <!-- food discount: <br> -->
    <!-- <input type="text" name="food_discount" id="">  <br> <br> -->
    <input type="submit" name="order_submit" id=""> <br> <br>
    
</form>

<form action="" method="post">
    <input type="submit" name="done" id="" value = "done">
    <input type="submit" name="payment" id="" value = "payment">
</form>

