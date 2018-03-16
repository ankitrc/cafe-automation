<?php
    if(isset($_POST['submit'])){
        require_once '../database/db.php';
        $upd = $_POST['upd'];
        $val = $_POST['del'];
        // $food_id = $_POST['food_id'];
        if($upd == 'food_price' || $upd == 'food_discount'){
            $val = (int)$val;
            $sql = "delete from food where $val = $upd";
        }
        else{
            $sql = "delete from food where '$val' = $upd";
        }   
        if($conn->query($sql)){
            echo "deleted";
        }
        else{
            die('not deleted');
        }
    }


?>

<form action="" method="post">
    <label for="del">delete</label> <br>
    <input type="text" name="del" id="del"> <br>
    <input type="radio" name="upd" value = "food_id"  checked> food id
    <input type="radio" name="upd" value = "food_name" > food name
    <input type="radio" name="upd" value = "food_category" > food category
    <input type="radio" name="upd" value = "food_price" >  food price
    <input type="radio" name="upd" value = "food_discount"  > food discount <br> <br>
    <input type="submit" name="submit">
</form>