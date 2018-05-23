<?php
    if(!isset($_SESSION['role'])){
        die('not autorized');
    }
    else if($_SESSION['role'] != 1){
        die('died in view admin add_food.php');
    }

    // $get = "select food_id , food_name from food";
    // $result = $conn->query($get);
    // $option = '';
    //  while($row = $result->fetch_assoc())
    // {
    //   $option .= '<option value = "'.$row['food_id'].'">'.$row['food_name'].'</option>';
    // }
?>


<head>
    <style>
        select{
            width:50%;
        }
        input[type="submit"]{
            width:100px;
        }
    </style>
</head>

<body>
    
    <div class="container text-center">
        <form action="" method="post">
            food id: <br>
            <select name = "food_id" > 
                <?php echo $option; ?>
            </select>
           
            <input type="submit" name="del_food_submit" id="" value="del_food">
        </form>
    </div>

    

</body>