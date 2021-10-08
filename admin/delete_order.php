<?php
include 'config.php';
$id = $_GET['id'];
$name = $_GET['name'];
$sql="DELETE FROM `order` WHERE id_table=$id and name='$name'";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
header("location:id_table.php?id=$id");
?>