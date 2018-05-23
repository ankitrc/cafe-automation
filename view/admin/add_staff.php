<?php
    // echo $_SESSION['role']."<br>";
    // if($_SESSION['role']!=1){
    //     die('not autorized');
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        input{
            width:50%;
        }
    </style>

</head>
<body>
    <div  class="container text-center" style="border:2px solid black;min-height:300px;with:70%;" >
        <form action="" method="post">
            <div>
                <label for="staff_name"> staff name:  </label>  <br>  
                <input type="text" name="staff_name" id="staff_name" required>  
            </div>
            <div>
                <label for="staff_id">staff_id: </label> <br>
                <input type="number" name="staff_id" id="staff_id" required>
            </div>
            <div>
                <label for="staff_password">staff_password:</label> <br>
                <input type="password" name="staff_password" id="staff_password" required>
                
            </div>
            <div>
            <br> 
                <input type="submit" name="add_staff_submit" id="">
            </div>
            
         </form>
    </div>
</body>
</html>
