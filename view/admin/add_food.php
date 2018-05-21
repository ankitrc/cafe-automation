<?php
    if(!isset($_SESSION['role'])){
        die('not autorized');
    }
    else if($_SESSION['role'] != 1){
        die('died in view admin add_food.php');
    }
?>

<form action="" method="post">
    food id: <br>
    <input type="number" name="food_id" id="" required><br> <br>
    food_name: <br>
    <input type="text" name="food_name" id="" required> <br> <br>
    food category: <br>
    <input type="text" name="food_category" id="" required> <br> <br>
    food_price: <br>
    <input type="text" name="food_price" id="" required> <br> <br>
    food  discount: <br>
    <input type="text" name="food_discount" id=""> <br> <br>
    <input type="submit" name="add_food_submit" id="" required>
</form>