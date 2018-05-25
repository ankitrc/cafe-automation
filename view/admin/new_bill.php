<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        select{
            width:50%;
        }
        input[type="submit"]{
            width:100px;
        }
    </style>
</head>
<body>
    <div class="container text-center" style="width=70%;">
        <form action="" method="post"> 
        
        <b> enter order id: </b> <br> 
            <!-- <input type="text" name="id" id=""> -->
        
        <br>
    
        <select name = "order_id"> 
            <?php echo $option; ?>
        </select>
        <!-- <br> <br> -->
        <input type="submit" name="new_bill" id=""> <br>
        </form>
    </div>
</body>
</html>

