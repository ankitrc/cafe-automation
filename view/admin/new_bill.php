<!-- <form action="" method = "post">
    order id: <br>
    <input type="text" name="order_id" id="" required> <br> <br>
    <input type="submit" name="new_bill" id="">

</form> -->


<?php
    // require '../model/db/dbn.php';
    $get = "select cid from customer";
    $result = $conn->query($get);
    $option = '';
     while($row = $result->fetch_assoc())
    {
      $option .= '<option value = "'.$row['cid'].'">'.$row['cid'].'</option>';
    }
?>

<form action="" method="post"> 
    <br>
    order id: <br> 
        <!-- <input type="text" name="id" id=""> -->
    
     <br>
  
    <select name = "order_id"> 
        <?php echo $option; ?>
    </select>
    <br> <br>
    <input type="submit" name="new_bill" id=""> <br>
</form>