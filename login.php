<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ລະບົບຈັດການ Blogger</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,500;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <h2>ຮ້ານອາຫານມຸມສະບາຍ</h2>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">ໜ້າຫຼັກ</a></li>
                        <li><a href="product.php">ເມນູອາຫານ</a></li>
                        <?php
                            session_start();
                            if (isset($_SESSION['username'])):
                        ?>
                        <li><a href="cart.php">ກະຕ໋າ</a></li>
                        <li><a href="logout.php" style="color:red">ອອກຈາກລະບົບ</a></li>
                        <?php
                            endif;
                            if (!isset($_SESSION['username'])):
                        ?>
                        <li><a href="login.php">ເຂົ້າສູ່ລະບົບ</a></li>
                        <?php endif;?>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="bar">
            </div>
        </div>
    </header>
    <div class="container">
        <div class="login">
            <h1>Login</h1>
            <div class="box-login">
                <form action="login.php?login=on" method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="submit" class="submit" value="login">
                </form>
                <a href="signin.php" style="text-decoration: underline; color:blue">ລົງທະບຽນນຳໃຊ້</a>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="footer">
                <p>Copyright © all rights reserved by <a href="#">Phoudthavisack lasaphong</a></p>
            </div>
        </div>
    </footer>
</body>
</html>
<?php
session_start();

include 'config.php';

if(isset($_REQUEST["submit"]))
{
    $username=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    $quer="SELECT * FROM users ";
    
    $result=mysqli_query($con,$quer);
    if($result)
    {
       
        while($row=mysqli_fetch_array($result)){
        
            if($row['user'] == $username && $row['pass'] == $password ){
            	
            	
 				$_SESSION['username']=$row['user'];


            	header("Location: product.php");
            }
        }
        	echo '<script type="text/javascript">';
			echo 'alert("Invalid user");';
			
			echo '</script>';

    	

    }

}
mysqli_close($con);
?>