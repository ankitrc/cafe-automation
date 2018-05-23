<?php

    $conn = new mysqli('localhost','root','','cafe');
    if($conn->connect_error){
        die("connection failed ".$conn->connect_error);
    }
    else{
        // echo "connection established successfully <br>";
    }
