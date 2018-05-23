<?php

        $sql = "select food_category from food";

        if($result1 = $conn->query($sql)){
            // echo 'hjkl';
        }
        else{
            // echo 'dfghjkl';
        }

        while($row1  = $result1->fetch_assoc()){

        }
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
    ?>

