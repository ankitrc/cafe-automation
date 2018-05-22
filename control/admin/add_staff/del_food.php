<?php

    if(isset($_POST['del_food_submit'])){
        include '../../model/admin/food/delete.php';
        $_SESSION['act'] = 'nothing';
    }

    include '../../view/admin/del_food.php';

?>