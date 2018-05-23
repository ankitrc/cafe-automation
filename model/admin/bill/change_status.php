<?php

if(! isset($_SESSION['role']) or $_SESSION['role'] != 1){
    die('you r not authorized');
}

    $sql = "update cust_order set status = 1 where tab_no = '$table_no' and status = 0 ";
    $sql1 = "update table_num set status = 1 where table_no = '$table_no' ";
    $sql2 = "update customer set status = 1 where table_no = '$table_no' and status = 0 ";
    $conn->query($sql);
    $conn->query($sql1);
    $conn->query($sql2);
    // session_start();
    // $_SESSION['table_no'] = -1;
?>