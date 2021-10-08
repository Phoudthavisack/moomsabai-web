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
                <a href="index.html" class="back"><i class="fas fa-backward"></i> ກັບຄືນ</a>
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
                    <th>ລາຍການ</th>
                    <th>ຈຳນວນ</th>
                    <th>ລາຄາ</th>
                </tr>
                <?php
                include 'config.php';
                $o_id=$_GET['o_id'];
                $sql = "SELECT * FROM `orders_detail` WHERE order_id='$o_id'";
                $res = mysqli_query($con, $sql);
                $c=0;
                while ($row = mysqli_fetch_array($res)) :
                    $c++;
                    $p_id=$row['product_id'];
                    $sql2="SELECT * FROM `list_product` WHERE id='$p_id'";
                    $name = "";
                    while($row1=mysqli_fetch_array(mysqli_query($con, $sql2))){
                        $name=$row1['name_product'];
                    }
                ?>
                    <tr>
                        <td><?php echo $c; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $row['qty']; ?></td>
                        <td><?php echo $row['total']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
    </div>
</body>

</html>