<?php
include 'config.php';
$id = $_GET['id'];
$sql="DELETE FROM `users` WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
header("location:user.php");
?>