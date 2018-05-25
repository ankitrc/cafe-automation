<?php

if(isset($_POST['staff_submit'])){
    // extract($_POST);
    // echo 'hello';
    $staff_id = (int)$_POST['id'];
    $staff_pass = $_POST['pass'];
    // echo "$staff_id <br>";
    // echo "$staff_pass <br>";
    // echo gettype($staff_id)."<br>";
    include_once '../model/db/dbn.php';
    $sql = "select role from staff where id = '$staff_id' and pass = '$staff_pass';";
    if($result = $conn->query($sql)){
        if($result->num_rows >0){
            $row = $result->fetch_assoc();
            // session_start();
            $_SESSION['id'] = $staff_id;
            $_SESSION['role'] = $row['role'];
            // echo $_SESSION['role'].'myrole';
            // header('location:raw_material.php');
            
        }
        else{
            echo "check password or id <br>";
        }
    //     echo "hello";
    }
    else{
        die('query failed in login'.$result->error."<br>");
    }
}
else{
    echo "testing";
}
?>