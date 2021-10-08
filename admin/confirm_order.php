<?php
	include 'config.php';
    $id=$_GET['id'];
    $num=$_GET['num'];
    $sum=$_GET['sum'];

    $query = "INSERT INTO `confirm`(`id_table`, `number_table`, `sum`) VALUES ('$id','$num','$sum')";
    $con->query($query);
    

    $item_id=$_GET['id'];
    $delete_query="delete from `table` where id_table='$item_id'";
    $delete_query_result=mysqli_query($con,$delete_query)or die(mysqli_error($con));

    if($delete_query_result)
	{
		header('Location: table.php'); // ປ່ຽນເສັ້ນທາງ
	}
?>