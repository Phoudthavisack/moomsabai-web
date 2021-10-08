<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "moomsabai";

$connection = mysqli_connect($host, $user, $pass);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $db);
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

$con=mysqli_connect($host, $user, $pass, $db)or die("Failed To Connect Database");
?>
