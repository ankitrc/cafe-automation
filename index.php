<?php
    include_once './app/view/html/static/header.html';
    // $x = NULL;
    if(isset($_POST['staff_login'])){
        include_once './app/view/html/login/login.html';
    }
    else if(isset($_POST['menu'])){
        include_once './app/view/html/login/menu.html';
    }
    else{
        include_once './app/view/html/login/menu.html';
    }

    if(!isset($_POST['staff_login'])){
        // <form action="">
        // </form>
        include_once './app/view/html/static/login_button.html';
        // echo $_POST['staff_id'];
    }
    else{
        include_once './app/view/html/static/menu_button.html';
    }

    include_once './app/view/html/static/footer.html'
?>