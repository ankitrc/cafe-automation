<?php
    $conn = new mysqli('localhost','root','','cafe');
    if($conn->connect_error){
        die("connection failed ".$conn->connect_error);
    }
    else{
        echo "connection established successfully <br>";
    }

    // $sql = "drop table tasks;";
    // $sql = "create database cafe";
    // if($conn->query($sql)){
    //     echo "database created successfully";
    // }
    // else{
    //     die("failed to create database ".$conn->error);
    // }

    // $sql = "create table food(item_name varchar(30) not null primary key ,item_price int,
    // item_dsc int, final_price int;";

    // $sql = "create table customer(cid int primary key AUTO_INCREMENT,name varchar(30) not null,mobile_no int(11) not null,table_no int not null,status int(2) default 0 );";
    // $sql = "create table staff(id int primary key auto_increment,name varchar(30) not null,role int(2) default 0,pass varchar(20) not null);";
    // $sql = "insert into staff values(2,'shubham',0,'hello');";
    // $sql = "create table food (food_id varchar(10) primary key,food_name varchar(40) not null,food_category varchar(20)
    // not null,food_price int(10) not null,food_discount int(5) not null);";
    // $sql = "create table cust_order(order_cid int(11) not null,food_id varchar(10) not null, quantity int(2) default 1,
    // FOREIGN KEY (order_cid) REFERENCES customer(cid) );";
    // $sql = "create table raw_mat(raw_mat_id int(11) primary key,raw_mat_name varchar(15),raw_mat_qtt int11) );";
    // $sql = "insert into raw_mat()"
    // $sql = "create table table_num(table_no int primary key,status int default 1)";
    // $sql = 'insert into table_num(table_no) values(7);';
    // $sql = "update  table_num set status = 1 where table_no = 2;";
    // $sql = "alter table cust_order add tab_no int(2);";
    // $sql = "INSERT INTO food VALUES(5,'d','alphabet',10,5)";
    $sql = "truncate table cust_order";
    if($conn->query($sql)){
        echo "table created successfully <br>";
    }
    else{
        die('failed to create table<br> '.$conn->error);
    }

    $conn->close();


?>