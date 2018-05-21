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
    <input type="text" name="food_id" id="" required><br> <br>
    <input type="submit" name="del_food_submit" id="" value="del_food">
</form>