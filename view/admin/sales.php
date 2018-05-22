

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

<head>
    <link rel="stylesheet" href="../../../view/css/major.css">
    <link rel="stylesheet" href="../../../view/css/tables.css">
    <style>
        input[type=date],input[type=month]{
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

<div>
    <form action="" method="post">
        month: <br>
        <input type="month" name="mon" id="" required>
        <br> <br>
        <input type="submit" name="month_submit" id=""  value = "month sale">


    </form>
</div>
<div>
    <form action="" method="post">
        date: <br>
        <input type="date" name="day" id="" required> <br> <br>
        <input type="submit" name="day_submit" id="" value = "day sale">

    </form>
</div>

<div>
    <form action="" method="post">
        year: <br>
        <input type="month" name="year" id="" required> <br> <br>
        <input type="submit" name="year_submit" id="" value = "year sale">
    </form>
</div>

<div>
    <form action="" method="post">
        total earning: <br>
        <!-- <input type="month" name="year" id="" required> <br> <br> -->
        <input type="submit" name="total_earning_submit" id="" value = "total earning">
    </form>
</div>

<div>

    <form action="" method="post">
        food id: <br>
        <select name = "food_id" > 
            <?php echo $option; ?>
        </select> <br> <br>
        <input type="submit" name="food_id_sales_submit" id="" value = "food_id">

    </form>
</div>