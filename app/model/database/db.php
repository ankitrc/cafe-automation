<?php
    // if(isset($_POST['submit'])){
        $conn = new mysqli('localhost','root','','cafe');
        if($conn->connect_error){
            die('connection establishment failed '.$conn->connect->error)."<br>";
        }
        else{
            echo "connection established successfully <br>";
        }
    // }


?>