<?php

    $host = "localhost"; 
    $user = "root";
    $password = "";
    $dbname = "db";

    $con = mysqli_connect("$host", "$user", "$password","$dbname");
    if (!$con) {
     die("Connection failed: " . mysqli_connect_error());
    }

    $chartQuery = "select * from solar order by id desc limit 100";
    $chartQueryRecords = mysqli_query($con,$chartQuery);
    $chartQuery2 = "select * from solar order by id desc limit 100";
    $chartQueryRecords2 = mysqli_query($con,$chartQuery2);
    $chartQuery3 = "select * from solar order by id desc limit 100";
    $chartQueryRecords3 = mysqli_query($con,$chartQuery3);
    $chartQuery4 = "select * from solar order by id desc limit 10";
    $chartQueryRecords4 = mysqli_query($con,$chartQuery4);
    
?>