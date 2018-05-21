
<?php
    // require '../model/db/dbn.php';
    $get = "select id , name  from staff where role != 1";
    $result = $conn->query($get);
    $option = '';
     while($row = $result->fetch_assoc())
    {
      $option .= '<option value = "'.$row['id'].'">'.$row['name'].'</option>';
    }
?>

<form action="" method="post"> 
    <br>
    id: <br> 
        <!-- <input type="text" name="id" id=""> -->
    
     <br>
  
    <select name = "id"> 
        <?php echo $option; ?>
    </select>
    <br> <br>
    <input type="submit" name="del_staff_submit" id=""> <br>
</form>