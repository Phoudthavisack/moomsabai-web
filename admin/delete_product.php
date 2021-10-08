<?php
include 'config.php';
$id = $_GET['id'];
$sql="DELETE FROM `list_product` WHERE id=$id";
$con->query($sql);
header("location:product.php");
?>