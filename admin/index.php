<?php
    session_start();
    if(isset($_SESSION['c_user'])){}
    else{
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moomsabai</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            background-color: #292D33;
        }
    </style>
</head>

<body>
    <div class="body">
        <section class="contact1">
            <h1>ລະບົບຈັດການຮ້ານອາຫານມຸມສະບາຍ</h1>
            <p>ລະບົບຈັດການຮ້ານອາມຸມສະບາຍຖືກພັດທະນາຂື້ນເພື່ອປະກອບບົດໂຄງການຈົບຊັ້ນປະລິນຍາຕີ ຂອງ ນັກສຶກສາ
                ມະຫາວິທະຍາໄລສະຫວັນນະເຂດ ຄະນະເຕັກໂນໂລຊີຂໍ້ມູນຂ່າວ ພາກວິຊາ ເຕັກໂນໂລຊີສື່ປະສົມ</p>
        </section>
        <section class="contact2">
            <a href="table.php">
                <div class="menu">
                    <i class="fas fa-table" style="color:#FD0F7F"></i>
                    <h2>ຈັດການໂຕະ</h2>
                </div>
            </a>
            <a href="product.php">
                <div class="menu">
                    <i class="fas fa-align-left" style="color:#FFD664"></i>
                    <h2>ລາຍການອາຫານ</h2>
                </div>
            </a>
            <a href="iem.php">
                <div class="menu">
                    <i class="fas fa-chart-pie" style="color:#2196F3"></i>
                    <h2>ລາຍຮັບ-ລາຍຈ່າຍ</h2>
                </div>
            </a>
            <a href="user.php">
                <div class="menu">
                    <i class="fas fa-users" style="color:#BE4BDB"></i>
                    <h2>USER</h2>
                </div>
            </a>
            <a href="black.php">
                <div class="menu">
                    <i class="fas fa-align-left" style="color:#2196F3"></i>
                    <h2>ອໍເດີສັ່ງກັບບ້ານ</h2>
                </div>
            </a>
            <a href="expenses.php">
                <div class="menu">
                    <i class="fas fa-align-left" style="color:#2196F3"></i>
                    <h2>ລາຍຈ່າຍ</h2>
                </div>
            </a>
            <a href="logout.php">
            <div class="menu">
                <i class="fas fa-sign-out-alt" style="color: #DA3854"></i>
                <h2>ອອກຈາກລະບົບ</h2>
            </div>
            </a>
        </section>
        <footer>
            <p>Copyright © all rights reserved by <a href="#">Phoudthavisack lasaphong</a> & <a href="#">Naem
                    Lattanasingkham</a></p>
        </footer>
    </div>

</body>
</html>