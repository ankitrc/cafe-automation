<?php
    if(!isset($_SESSION['role']) or $_SESSION['role'] != 0){
        die('not authorized');
    }
?>

<head>
    <link rel="stylesheet" href="../../view/css/tables.css">
</head>
<body>
    <div>
        <form action="" method="post">
            <button name = "see_order" type="submit">see order</button>
            <button name = "see_offer" type="submit">see offer</button>
        </form>
    </div>
</body>
