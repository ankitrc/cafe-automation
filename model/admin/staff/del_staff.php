<?php

if(!isset($_SESSION['role']) or $_SESSION['role'] != 1){
    die('you r not authorized');
}

    // include_once '../../dbn.php';
    if(isset($_POST['del_staff_submit'])){
        $id = (int)$_POST['id'];
        echo "$id <br>";
        $sql = "delete from staff where id = '$id' ";
        if($conn->query($sql)){
            echo "deleted successfully <br>";
        }
        else{
            echo "$conn->error <br>";
        }
    }

    echo "deletion <br>";
    // header('location:../../../');