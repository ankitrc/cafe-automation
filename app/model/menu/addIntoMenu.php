<?php
    if(isset($_POST['submit'])){
        extract($_POST);
        require_once '../database/db.php';
        $food_discount = (int)$food_discount;
        $food_price = (int)$food_price;
        echo $food_category;
        $sql = "insert into food values('$food_id','$food_name','$food_category',$food_price,$food_discount);";
        if($conn->query($sql)){
            echo "added successfully";
        }
        else{
            die('failed to add');
        }
    }

?>

<form action="" method = "post">
    <label for="food_id">food id</label> <br>
    <input type="text" name="food_id" id="food_id"> <br>
    <label for="food_name">food name</label> <br>
    <input type="text" name="food_name" id="food_name"> <br>
    <label for="food_category">food category</label> <br>
    <input type="text" name="food_category" id="food_category"> <br>
    <label for="food_price"> food_price </label> <br>
    <input type="text" name="food_price" id="food_price"> <br>
    <label for="food_discount">food discount</label> <br>
    <input type="text" name="food_discount" id="food_discount"> <br> <br>
    <input type="submit" name="submit">
</form>