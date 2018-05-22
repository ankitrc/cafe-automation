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


<head>
    <link rel="stylesheet" href="../../view/css/tables.css">
    <link rel="stylesheet" href="../../view/css/major.css">
</head>

<form action="" method="post"> 
    <br>
    <b> enter table no.: </b> <br> 
        <!-- <input type="text" name="id" id=""> -->
    
     <!-- <br> -->
  
    <select name = "table_no" required> 
        <?php echo $option; ?>
    </select>
    <!-- <br> <br> -->
    <input type="submit" name="bill" id=""> <br>
</form>