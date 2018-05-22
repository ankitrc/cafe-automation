<?php

    //security pending
    // if(isset($_POST['home'])){
    //     echo 'hiiii';
    // }

?>

<head>
    <style>
        button{
            padding: 15px 25px;
            font-size: 10px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #3CBC8D;
            border: none;
            /* border-radius: 15px; */
            /* box-shadow: 0 9px #999; */
        }
    </style>
</head>

<form action="" method="post">
    <button name = "home" type="submit">home</button>
    <button name = "add_staff_btn" type="submit">add staff</button>
    <button name = "delete_staff_btn" type="submit">delete staff</button>
    <button name = "add_food_btn" type="submit">add food</button>
    <button name = "delete_food_btn" type="submit">delete food</button>
    <button name = "update_food_btn" type="submit">update food</button>
    <button name = "bill" type="submit">bill</button>
    <button name = "sales" type="submit">sales</button>
    <button name = "order_offer" type="submit">order_offer</button>

</form>