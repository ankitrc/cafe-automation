<?php
    // $get = "select table_no from table_num where status = 1";
    // $result = $conn->query($get);
    // $option = '';
    //  while($row = $result->fetch_assoc())
    // {
    //   $option .= '<option value = "'.$row['table_no'].'">'.$row['table_no'].'</option>';
    // }
?>

<head>
    <!-- <link rel="stylesheet" href="../view/css/admin_staff.css"> -->
    <!-- <link rel="stylesheet" href="../view/css/customer.css"> -->
</head>

<body>
    
    <div class="container text-center">
        <form action="" method="post">
            name: <br>
            <input type="text" name="cust_name" id="" required> <br> <br>
            mobile no.: <br>
            <input type="text" name="mob_no">
            <br><br>
            table no.: <br>
            <select name = "table_no" > 
                <?php echo $option; ?>
            </select>
            <!-- <input type="text" name="table_no" id=""> <br> <br> -->
            <br>  <br>
            <input type="submit" name="details_submit" id="">
            <br> <br>
        </form>


    </div>

    
</body>