<?php
    $years = array('2010','2011','2012','2017','2018');

    $option2 = '';
    foreach($years as $year){
        $option2 .= '<option value = "'.$year.'">'.$year.'</option>';
    }

?>

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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input[type="month"],input[type="date"],select{
            width:50%;
        }
        input[type='submit']{
            width:100px;
        }
    </style>
</head>
    <body>

        <div class="container text-center" style="border:2px solid black;min-height:300px;width:70%;padding:30px; margin-top:30px;">
            <div>
                <div >
                    <form action="" method="post">
                        <div>
                            <label for="month">month:</label>  <br>
                            <input type="month" name="mon" id="month" value = "2018-05" required>
                            <input type="submit" name="month_submit" id=""  value = "month sale">    
                        </div>
                        


                    </form>
                </div>
                <div >
                    <form action="" method="post">
                        <div>
                            <label for="date">date:</label>  <br>
                            <input type="date" name="day" id="date" required> 
                            <!-- <br> <br> -->
                            <input type="submit" name="day_submit" id="" value = "day sale">

                        </div>
                        
                    </form>
                    </div>

            </div>
            
            <div>

                <div>
                    <form action="" method="post">
                        <div>
                            <label for="year">year:</label>  <br>
                            <!-- <input type="month" name="year" id="" required> -->
                            <!-- <br> <br> -->
                            <select name="year" id="year">
                                <?php echo $option2; ?>
                            </select>
                            <input type="submit" name="year_submit" id="" value = "year sale">
                        
                        </div>
                    </form>
                </div>



                <div>

                    <form action="" method="post">
                        <div>
                            <label for="food_id">food id:</label>  <br>
                            <select name = "food_id" id="food_id"> 
                                <?php echo $option; ?>
                            </select> 
                            <!-- <br> <br> -->
                            <input type="submit" name="food_id_sales_submit" id="" value = "food_id">

                        </div>
                        
                    </form>
                </div>
            </div>


            <div>
                <form action="" method="post">
                    <div>
                    <label for="total_earning">total earning:</label>  <br>
                    <!-- <input type="month" name="year" id="" required> <br> <br> -->
                    <input type="submit" name="total_earning_submit" id="total_earning" value = "total earning">
                
                    </div>
                    </form>
            </div>

        </div>



    </body>
</html>

