<?php
    if(!isset($_SESSION['role']) or $_SESSION['role'] != 1){
        die('you r not authorized');
    }
else{

    if(isset($_POST['view_staff_submit'])){
        $sql = "select * from staff where role != 1";
        $result = $conn->query($sql);
        echo 'id        name        role  <br>';
        while($row = $result->fetch_assoc()){
            echo $row['id'] . '     ' . $row['name'] . $row['role'] . '<br>';
        }
    }