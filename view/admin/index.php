<!-- <form action="" method = "post">
    table_no: <br>
    <input type="text" name="table_no" id=""> <br> <br>
    <input type="submit" name="bill" id="">

</form> -->


<?php
    // require '../model/db/dbn.php';
    $get = "select table_no from customer where status = 0";
    $result = $conn->query($get);
    $option = '';
     while($row = $result->fetch_assoc())
    {
      $option .= '<option value = "'.$row['table_no'].'">'.$row['table_no'].'</option>';
    }
?>

<form action="" method="post"> 
    <br>
    table_no: <br> 
        <!-- <input type="text" name="id" id=""> -->
    
     <br>
  
    <select name = "table_no"> 
        <?php echo $option; ?>
    </select>
    <br> <br>
    <input type="submit" name="bill" id=""> <br>
</form>