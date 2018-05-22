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

<head>
    <link rel="stylesheet" href="../../view/css/major.css">
    <link rel="stylesheet" href="../../view/css/tables.css">
</head>

<form action="" method="post"> 
    <br>
    <b> enter order id: </b> <br> 
        <!-- <input type="text" name="id" id=""> -->
    
     <br>
  
    <select name = "order_id"> 
        <?php echo $option; ?>
    </select>
    <!-- <br> <br> -->
    <input type="submit" name="new_bill" id=""> <br>
</form>