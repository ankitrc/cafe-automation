<?php
    // session_start();

        // echo 'hellllssoo';
    if(!isset($_SESSION['role'])){
        die('you r not authorized');
    }
    // if($_SESSION['role'] == -1){
    //     die('you r not authorized');
    // }
    if($_SESSION['role'] == 1 or $_SESSION['role'] == 0){
        if(isset($_POST['logout'])){
            session_unset();
            session_destroy();
            // die('logged out');
            // header('location:../../');
        
        }
    }
    else{
        die('not auth');
    }

?>