<?php
include 'config.php';
$id = $_GET['id'];
$name = $_GET['name'];
$sql="DELETE FROM `orders` WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
header("location:black.php?id=$id");
?>