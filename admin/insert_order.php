<?php
include 'config.php';
$id=$_GET['id'];
$n=$_GET['n'];
$p=$_GET['p'];
$name=$_GET['name'];

$ch = "SELECT * FROM `order` WHERE id_table=$id";
$data = mysqli_query($con,$ch);
$sh = false;
while($da=mysqli_fetch_array($data)){
    if($da['name'] == $name){
        $sh = true;
    }
}
if($sh){}else{
$query = "INSERT INTO `order` (name,id_table,price,amount) VALUES ('$name', '$id', '$p', '$n') "; 
$run = $con->query($query);
}
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