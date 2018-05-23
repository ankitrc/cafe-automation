<?php
    if(!isset($_SESSION['role'])){
        die('not autorized');
    }
    else if($_SESSION['role'] != 1){
        die('died in view admin add_food.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
                input{
                    width:50%;
                }
    </style>
</head>
<body>
    <div class="container text-center" style="border:2px solid black;min-height:400px;width:70%;">
        <form action="" method="post">
            <div>
                <label for="food_id">food id:</label>  <br>
                <input type="number" name="food_id" id="food_id" required>
            </div>
            <div>
                <label for="food_name">food_name:</label>  <br>
                <input type="text" name="food_name" id="food_name" required> 
                
            </div>
            <div>
                <label for="food_category">food category:</label>  <br>
                <input type="text" name="food_category" id="food_category" required>
            </div>
            <div>
                <label for="food_price">food_price:</label>  <br>
                <input type="text" name="food_price" id="food_price" required>
            </div>
            <div>
                <label for="food_discount">food  discount:</label>     <br>
                <input type="text" name="food_discount" id="food_discount"> 
            
            </div>
            <div>
                <br>
                <input type="submit" name="add_food_submit" id="" required>
            </div>
        </form>
    </div>
</body>
</html>

