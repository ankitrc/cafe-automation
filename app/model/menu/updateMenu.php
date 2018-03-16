<?php
    if(isset($_POST['submit'])){
        require_once '../database/db.php';
        $upd = $_POST['upd'];
        $val = $_POST['updates'];
        $food_id = $_POST['food_id'];
        if($upd == 'food_price' || $upd == 'food_discount'){
            $val = (int)$val;
            $sql = "update food set $upd = $val where food_id = '$food_id'";
        }
        else{
           $sql = "update food set $upd = '$val' where food_id = '$food_id'";
        }   
        if($conn->query($sql)){
            echo "updated";
        }
        else{
            die('not updated');
        }
    }


?>

<form action="" method="post">
    <label for="food_id">food id</label> <br>
    <input type="text" name="food_id" id="food_id"> <br>
    <label for="updates">update</label> <br>
    <input type="text" name="updates" id="updates"> <br>
    <input type="radio" name="upd" value = "food_name" > food name
    <input type="radio" name="upd" value = "food_category" > food category
    <input type="radio" name="upd" value = "food_price" >  food price
    <input type="radio" name="upd" value = "food_discount" checked > food discount <br> <br>
    <input type="submit" name="submit">
</form>