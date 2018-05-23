<head>
    <!-- <link rel="stylesheet" href="../../view/css/tables.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href='../../view/css/customer.css'>
    <link rel="stylesheet" type="text/css" href='../../view/css/major.css'> -->
</head>

<!-- <head> -->

<!-- </head> -->
<body id="sel">

    

<div class="container text-center" style="border:2px solid black;min-height:400px;width:70%;" >


    <div>
        <form action="" method="post">
            <?php
                echo $option;
            ?>
            <br>
            <input type="submit" name="order_submit" value="order">
        </form>

    </div>

    <div>
        <form action="" method="post">
            <input type="submit" name="done" id="" value = "done">
            <input type="submit" name="payment" id="" value = "payment">
            <br> <br>
        </form>
    </div>
</div>

</body>



