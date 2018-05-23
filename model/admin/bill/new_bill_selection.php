<?php
if(! isset($_SESSION['role']) or $_SESSION['role'] != 1){
    die('you r not authorized');
}

    $get = "select cid from customer";
    $result = $conn->query($get);
    $option = '';
    while($row = $result->fetch_assoc())
    {
    $option .= '<option value = "'.$row['cid'].'">'.$row['cid'].'</option>';
    }

?>