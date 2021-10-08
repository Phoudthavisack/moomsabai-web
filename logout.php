<?php
session_start();
if(session_destroy())// ລ້າງ session destroy
{
	header("Location: index.php");// ປ່ຽນເສັ້ນທາງໄປໜ້າ login
}
?>