
<?php
    // require '../model/db/dbn.php';
    // $get = "select id , name  from staff where role != 1";
    // $result = $conn->query($get);
    // $option = '';
    //  while($row = $result->fetch_assoc())
    // {
    //   $option .= '<option value = "'.$row['id'].'">'.$row['name'].'</option>';
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
                input,select{
                    width:50%;
                }
    </style>
</head>
    <body>
        <div class="container text-center" style="border:2px solid black;min-height:300px;width:70%;">
            <form action="" method="post"> 
                <div>
                    <label for="del_staff">select staff name to delete:</label>  <br>       
                    <select name = "id" id="del_staff"> 
                        <?php echo $option; ?>
                    </select> 

                </div>
                <div>
                <br>
                    <input type="submit" name="del_staff_submit" id=""> <br>
                </div>
                
            </form>
        </div>
    </body>
</html>

