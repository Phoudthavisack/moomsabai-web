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
            <i class="fas fa-users" style="color:#BE4BDB"></i>
            <h3>ຈັດການບັນຊີຜູ້ໃຊ້</h3>
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
                    <th>.No</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Delete</th>
                </tr>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM `users`";
                $res = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($res)) :
                ?>
                    <tr>
                        <td>
                            <label>
                                <span><?php echo $row['id_u']; ?></span>
                            </label>
                        </td>
                        <td>
                            <?php echo $row['name']; ?>
                        </td>
                        <td>
                            <?php echo $row['user']; ?>
                        </td>
                        <td>
                            ######
                        </td>
                        <td>
                            <div class="Name-product">
                                <?php echo $row['mail']; ?>
                            </div>
                        </td>
                        <td>
                            <?php echo $row['address']; ?>
                        </td>
                        <td>
                            <a class="delete" onclick="if(confirm('ລົບຜູ້ໃຊ້: <?php echo $row['name']; ?>')){window.location.href='delete_user.php?id=<?php echo $row['id']; ?>'}">
                                <i class="fas fa-trash-alt"></i> ລົບ</a>
                        </td>

                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>

</html>