<?php
    echo $_SESSION['role'];
    if($_SESSION['role'] ==1 or $_SESSION['role'] ==0){
        
    }
    else{
        die('u r not autorized');
    }

    
?>

<form action="" method="post">
    <button name = "logout" type="submit">logout</button>
</form>