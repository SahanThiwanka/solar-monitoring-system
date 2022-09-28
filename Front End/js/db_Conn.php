<?php

$db = mysqli_connect("localhost","root","","db");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>