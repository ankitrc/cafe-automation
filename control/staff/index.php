<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../view/bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../../view/css/tables.css">

</head>
<body>
<?php
    session_start();
    if($_SESSION['role'] == -1){
        header('location:../../');
    }

    // echo "hey folk ".$_SESSION['role'];
    if(isset($_POST['logout'])){
        include '../../model/authentication/logout.php';
        header('location:../../');
    }
    
    include '../../view/staff/index.php';
    include '../../model/db/dbn.php';

  
    if(isset($_POST['see_offer'])){
        // include '../add_staff/logout.php';
        include '../../model/basic_opr/see_menu.php';
    }
    else{
        include '../../model/basic_opr/see_order.php';
        
    }
    require '../../view/authentication/logout.php';
?>

<script src="../../view/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

</body>
</html>




    