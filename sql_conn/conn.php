<?php 
    define('HOST','localhost');
    define('USER','blog');
    define('PASS','');
    define('DBNAME','blog');

    if ($conn=mysqli_connect(HOST,USER,PASS,DBNAME)) {
        mysqli_query($conn,"set names utf8");
        // echo ("Login successful");
    }
    else {
     echo ("Database connection failed");
    }
 ?>