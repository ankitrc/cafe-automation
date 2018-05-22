<head>
    <link rel="stylesheet" href="../../view/css/tables.css">
    <link rel="stylesheet" type="text/css" href='../../view/css/customer.css'>
</head>

<!-- <head> -->

<!-- </head> -->
<body id="sel">

    <?php
        // require '../model/db/dbn.php';
        $get = "select * from food;";
        $result = $conn->query($get);
        $option = '';
        $option .= "<table>";
        $option .= '<tr>';
            $option .= '<th>';
                $option .= 'select';
            $option .= '</th>';
            
            $option .= '<th>';
                $option .= 'food_name';
            $option .= '</th>';

            
            $option .= '<th>';
                $option .= 'price';
            $option .= '</th>';

            $option .= '<th>';
                $option .= 'discount';
            $option .= '</th>';

            $option .= '<th>';
                $option .= 'no. of items';
            $option .= '</th>';


        $option .= '</tr>';
        while($row = $result->fetch_assoc())
        {   $option .= "<tr>";
            $option .= '<td>';
            $option .= '<input type = "checkbox" name = "check_list[]" value = '.$row['food_id'].'>'.'</td>';
            $option .='<label>'. '<td>'.$row['food_name'].'</td>'.'<td>'.$row['food_price'].'</td>'.'<td>'
            .$row['food_discount'].'</td>'.'<label>';
            $option .= '<td>';
            $option .= '<input type="number" name= "food_qtt[]" value = "0">';
            $option .= '</td>';
            $option .= "</tr>";
            }
            $option .= '</table>';
        // $option .= '<br>';
        // include '../../view/css/customer.css';
    ?>






    <div style = "width:50%;">
        <form action="" method="post">
            <?php
                echo $option;
            ?>
            <br>
            <input type="submit" name="order_submit" value="order">
        </form>

    </div>
    <div style = "float:left;">
        <form action="" method="post">
            <input type="submit" name="done" id="" value = "done">
            <input type="submit" name="payment" id="" value = "payment">
            <br> <br>
        </form>
    </div>

</body>



