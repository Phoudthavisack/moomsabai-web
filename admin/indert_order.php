<?php
include 'config.php';
$id=$_GET['id'];
$n=$_GET['n'];
$p=$_GET['p'];
$name=$_GET['name'];

$query = "insert into `order` (name,id_table,price,amount) values ('$name', '$id', '$p', '$n') ";  
$run = $con->query($query);
if($run){
    header('location:order_id_table.php?id=$id');
}
?> 