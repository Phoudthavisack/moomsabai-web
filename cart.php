<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

if (isset($_GET['addtocart'])) {
    $product_id = $_GET['addtocart'];

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }
    header('location: cart.php');
}

if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
    header('location: cart.php');
}

/* if (isset($_GET['update'])) {
    $amount_array = $_POST['amount'];
    foreach ($amount_array as $product_id => $amount) {
        $_SESSION['cart'][$product_id] = $amount;
    }
} */
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
            <div class="sec2">
                <table class="table">
                    <tr>
                        <th>ລາຍການ</th>
                        <th>ລາຄາ</th>
                        <th>ຈຳນວນ</th>
                        <th>ລວມ</th>
                        <th>ເພີ່ມ</th>
                        <th>ລົບ</th>
                    </tr>
                    <?php
                    $total = 0;
                    if (!empty($_SESSION['cart'])) :
                        foreach ($_SESSION['cart'] as $product_id => $qty) :
                            $sql = "SELECT * FROM `list_product` WHERE id = $product_id";
                            $query = mysqli_query($con, $sql);
                            $row = mysqli_fetch_assoc($query);
                            $sum = $row['price'] * $qty;
                            $total += $sum;
                    ?>
                            <tr>
                                <td><?php echo $row['name_product'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $qty ?></td>
                                <td><?php echo number_format($sum); ?>₭</td>
                                <td><a href="cart.php?addtocart=<?php echo $product_id; ?>" class="buy">ເພີ່ມ</a></td>
                                <td><a href="cart.php?remove=<?php echo $product_id; ?>" class="dlt">ລົບ</a></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="5">ລາຄາລວມ: <?php echo number_format($total); ?>₭</td>
                            <td>
                                <input class="buy" type="button" value="ສັ່ງຊື້" onclick="window.location='confirm.php?total=<?php echo $total; ?>';">
                            </td>
                                
                        </tr>
                    <?php endif; ?>
                </table>
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