<?php
include 'config.php';

if (isset($_POST['name'])) {
$name=$_POST['name'];
$total=$_POST['total'];
$sql="INSERT INTO `exp` (list, total) VALUES ('$name', '$total')";
$con->query($sql);

    header('location:expenses.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-align-left" style="color:#FFD664"></i>
            <h3>ເພີ່ມລາຍການ</h3>
        </div>
    </div>
    <div class="container">
        <div class="nav">
            <div class="left">
                <a href="expenses.php" class="back"><i class="fas fa-backward"></i> ກັບຄືນ</a>
            </div>
            <div class="right">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="insert">
            <form action="" class="form" method="POST">
                <div class="form-insert">
                    <ul class="label-form">
                        <li>ຊື່ສິນຄ້າ</li>
                        <li>ຈຳນວນເງິນ</li>
                    </ul>
                    <div class="input-form">
                        <input class="input" type="text" name="name" required>
                        <input class="input" type="text" class="amount" name="total" required>
                    </div>
                </div>
                <input type="submit" value="ເພີ່ມ" class="add">
            </form>
        </div>
    </div>
</body>

</html>