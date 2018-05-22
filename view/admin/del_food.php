<?php
    if(!isset($_SESSION['role'])){
        die('not autorized');
    }
    else if($_SESSION['role'] != 1){
        die('died in view admin add_food.php');
    }

    $get = "select food_id , food_name from food";
    $result = $conn->query($get);
    $option = '';
     while($row = $result->fetch_assoc())
    {
      $option .= '<option value = "'.$row['food_id'].'">'.$row['food_name'].'</option>';
    }
?>

<!-- <form action="" method="post">
    food id: <br>
    <input type="text" name="food_id" id="" required><br> <br>
    <input type="submit" name="del_food_submit" id="" value="del_food">
</form> -->

<head>
    <link rel="stylesheet" href="../../view/css/major.css">
    <style>
         /* select{
            width: 20%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            background-color: #3CBC8D;
            color: white;
        } */
    </style>
</head>

<body>
    

    <form action="" method="post">
        food id: <br>
        <select name = "food_id" > 
            <?php echo $option; ?>
        </select>
         <br> <br>
        <input type="submit" name="del_food_submit" id="" value="del_food">
    </form>

</body>