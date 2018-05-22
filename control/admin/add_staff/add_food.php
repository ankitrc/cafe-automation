<?php

    if(isset($_POST['add_food_submit'])){
        include '../../model/admin/food/add.php';
    }

    include '../../view/admin/add_food.php';

?>