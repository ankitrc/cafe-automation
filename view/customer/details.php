<?php
    $get = "select table_no from table_num where status = 1";
    $result = $conn->query($get);
    $option = '';
     while($row = $result->fetch_assoc())
    {
      $option .= '<option value = "'.$row['table_no'].'">'.$row['table_no'].'</option>';
    }
?>

<form action="" method="post">
    name: <br>
    <input type="text" name="cust_name" id="" required> <br> <br>
    mobile no.: <br>
    <input type="text" name="mob_no" id="">
    <br><br>
    table no.: <br>
    <select name = "table_no" > 
        <?php echo $option; ?>
    </select>
    <!-- <input type="text" name="table_no" id=""> <br> <br> -->
    <input type="submit" name="details_submit" id="">

</form>