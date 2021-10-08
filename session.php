<?php
//ຕວດສອບການເຂົ້າສູ່ລະບົບ ກອນການລົບ product

	include 'config.php';
	
	session_start();
	// ຈັດເກັບ session
	$echeck= $_SESSION['c_user'];
	// SQL Query ເພື່ອດຶງຂໍ້ມູນຂອງຜູ້ໃຊ້
	$sql=mysqli_query($con,"SELECT * FROM login WHERE username ='$echeck'");
	$row = mysqli_fetch_assoc($sql);
	$cusr =$row['username'];
	
	if(!isset($cusr)){
	mysqli_close($con); // ປິດການເຊື່ອມຕໍ່
	header('Location: login.php'); // ປ່ຽນເສັ້ນທາງໄປໜ້າ login
	}
?>