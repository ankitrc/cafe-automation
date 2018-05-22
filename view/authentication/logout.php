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
        button{
            padding: 15px 25px;
            font-size: 10px;
            text-align: center;
            cursor: pointer;
            outline: none;
            color: #fff;
            background-color: #3CBC8D;
            border: none;
            /* border-radius: 15px; */
            /* box-shadow: 0 9px #999; */
        }
    </style>
</head>

<body>
    

<form action="" method="post">
    <button name = "logout" type="submit">logout</button>
</form>

</body>