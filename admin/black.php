<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ສັ່ງກັບບ້ານ</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-chart-pie" style="color:#2196F3"></i>
            <h3>ອໍເດີສັ່ງອາຫານກັບບ້ານ</h3>
        </div>
    </div>
    <div class="container">
        <div class="nav">
            <div class="left">
                <a href="index.php" class="back"><i class="fas fa-backward"></i> ກັບຄືນ</a>
            </div>
            <div class="right">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="user-bar">
        </div>
        <div class="table-wrap">
            <table class="table">
                <tr>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Detail</th>
                    <th>Delete</th>
                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM `orders`";
                $res = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($res)) :
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['mail']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <a href="details.php?o_id=<?php echo $row['id']; ?>" class="add">ລາຍລະອຽດ</a>
                        </td>
                        <td>
                            <a href="delete_black.php?id=<?php echo $row['id']; ?>" class="confirm">ລົບ</a>

                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>

</html>