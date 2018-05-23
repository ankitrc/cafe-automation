<?php
    echo $_SESSION['role'];
    if($_SESSION['role'] ==1 or $_SESSION['role'] ==0){
        
    }
    else{
        die('u r not autorized');
    }

    
?>

<head>

    <style>
        button[name="logout"]{
            width:100px;
        }
    </style>
</head>

<body>
    
<div class="container text-center">
    <form action="" method="post">
        <button name = "logout" type="submit">logout</button>
    </form>

</div>

</body>