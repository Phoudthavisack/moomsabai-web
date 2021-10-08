<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
	<h2>ຈິ່ມຈຸ່ມມູມສະບາຍ</h2>
		<div id="login">
			<a>ກະລຸນາເຂົ້າສູ່ລະບົບ</a>
			<form action="login.php" method="post">
				<input type="text" name="username" placeholder="Username"/>
				<input type="password" name="password" placeholder="Password"/>
				<button name="submit" type="submit"><i class="fa fa-lock"></i> ເຂົ້າສູ່ລະບົບ</button>
			</form>
			<div>
				<p style="float:left">© 2021 phoudthavisack</p>
				<p><a href="#">ກ່ຽວກັບ</a> | <a href="#">ເງື່ອນໄຂ</a> | <a href="#">ຕິດຕໍ່ເຮົາ</a></p>
			</div>
		</div>
	</body>
</html>
<?php
session_start();

include 'config.php';

if(isset($_REQUEST["submit"]))
{
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $quer="SELECT * FROM login ";
    
    $result=mysqli_query($con,$quer);
    if($result)
    {
       
        while($row=mysqli_fetch_array($result))
        
            if($row['username'] == $username && $row['password'] == $password ){
            	
            	
 				$_SESSION['c_user']=$row['username'];


            	header("Location: index.php");
            }
        	echo '<script type="text/javascript">';
			echo 'alert("Invalid user");';
			
			echo '</script>';

    	

    }

}
mysqli_close($con);
?>