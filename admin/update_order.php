<?php
include 'config.php';
$id=$_GET['id'];
$n=$_GET['n'];
$name=$_GET['name'];

$sql = "UPDATE `order` SET amount=$n WHERE name='$name' AND id_table=$id LIMIT 1";
$con->query($sql);

$ls=0;
$price=0;
$sql="SELECT * FROM `order` WHERE id_table=$id";
$query=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($query)){
$ls=$ls+$row['amount'];
$price= $price + $row['amount'] * intval($row['price']);
}

$sql = "UPDATE `table` SET list=$ls , price=$price WHERE id_table=$id";
$con->query($sql);

header('location:id_table.php?id='.$id);
?>