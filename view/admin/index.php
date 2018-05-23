<!-- <form action="" method = "post">
    table_no: <br>
    <input type="text" name="table_no" id=""> <br> <br>
    <input type="submit" name="bill" id="">

</form> -->


<?php
    // require '../model/db/dbn.php';
    // $get = "select table_no from customer where status = 0";
    // $result = $conn->query($get);
    // $option = '';
    //  while($row = $result->fetch_assoc())
    // {
    //   $option .= '<option value = "'.$row['table_no'].'">'.$row['table_no'].'</option>';
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
        select{
            width:50%;
        }
        input[type="submit"]{
            width:100px;
        }
    </style>
    
</head>
<body>
    <div class="container text-center" style="width=70%;" >
        <form action="" method="post"> 
            <div>
                <label for="table_no">enter table no.:</label> <br>
                
                <select name = "table_no" id="table_no" required> 
                    <?php echo $option2; ?>
                </select>
                <input type="submit" name="bill" id=""> <br>

            </div>
        </form>
    </div>
</body>
</html>


