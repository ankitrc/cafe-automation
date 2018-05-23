<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../view/bootstrap-3.3.7-dist/css/bootstrap.css">

</head>
<body>

    <?php

    session_start();
    require_once '../model/db/dbn.php';
    // require '../view/major_glob.php';
    if(!isset($_SESSION['role']) or !isset($_SESSION['table_no'])){
        header('loacation : ../');
    }
    else{

        // require '../model/basic_opr/see_order.php';
        // die('not yet');
        if($_SESSION['role'] == 1){
            // die('not yet 1');
            header('location: admin');
        }
        else if($_SESSION['role'] == 0){
            // echo $_SESSION['role'];
            // die('not yet 4');
            header('location: staff');
        }
        else if($_SESSION['table_no'] != -1){
            // die('not yet');
            header('location: customer');
        }
        else{
            // die('not yet');
            if(isset($_POST['details_submit'])){
                include '../model/customer/details.php';
            }
            else if(isset($_POST['staff_submit'])){
                require '../model/authentication/login.php';
            }
            require '../view/switch.php';
            if(isset($_POST['admin'])){
                require '../view/authentication/login.php'; 
            }
            else{
                require '../model/customer/selection_table.php';
                require '../view/customer/details.php';
                
            }
        }

        if($_SESSION['role'] == 1){
            // die('not yet 1');
            header('location: admin');
        }
        else if($_SESSION['role'] == 0){
            // echo $_SESSION['role'];
            // die('not yet 66');
            header('location: staff');
        }
        else if($_SESSION['table_no'] != -1){
            // die('not yet');
            // echo $_SESSION['table_no'];
            // die('not yet 66');
            header('location:customer');
            // die('not yet 66');
        }
    }

    ?>

    <script src="../view/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>
</html>


