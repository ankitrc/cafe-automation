<?php
    if(isset($_POST['logout'])){
        require_once 'db.php';
        session_unset();
        session_destroy();
        $conn->close;
        // echo "hello";
        header("location:index.php");
    }


?>