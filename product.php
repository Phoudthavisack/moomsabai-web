<?php
include 'config.php';

?>
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
    <section>
        <div class="container">
            <div class="row">
                <h2>ເມນູອາຫານ</h2>
            </div>

            <div class="row">
                <?php 
                    $sql = "SELECT * FROM `list_product`";
                    $res = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($res)) :
                ?>
                <div class="box">
                    <div class="img">
                        <img src="admin/<?php echo $row['product_picture'];?>"
                            alt="">
                    </div>
                    <h2><?php echo $row['name_product'];?></h2>
                    <div class="atp"><p><?php echo $row['about_the_product'];?></p></div>
                    <a href="cart.php?addtocart=<?php echo $row['id'];?>" class="buy">ຊື້</a>
                </div>
                <?php endwhile;?>
            </div>
        </div>

    </section>
    <footer>
        <div class="container">
            <div class="footer">
                <p>Copyright © all rights reserved by <a href="#">Phoudthavisack lasaphong</a></p>
            </div>
        </div>
    </footer>


</body>

</html>