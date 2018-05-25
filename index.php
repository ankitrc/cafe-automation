<?php

session_start();
if(!isset($_SESSION['role'])){
    $_SESSION['role'] = -1;
}

if(!isset($_SESSION['table_no'])){
     $_SESSION['table_no'] = -1;
}

// $_SESSION['table_no'] = -1; 
// $_SESSION['role'] = -1;
//  echo $_SESSION['table_no'];
//  echo $_SESSION['role'];
header('location:control');