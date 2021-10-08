<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        
</head>

<body>
    <script src="js/script.js"></script>
    <div class="container">
        <div class="logo">
            <i class="fas fa-table" style="color:#FD0F7F"></i>
            <h3>ຈັດການອໍເດີ ( ໂຕະເບີ <span style="color: #FD0F7F;"><?php 
            include 'config.php';
            $id=$_GET['id'];
            $numm=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM `table` WHERE id_table='$id' limit 1"));
            echo $numm['number_table'];
            ?></span> )</h3>
        </div>
    </div>
    <div class="container">
        <div class="nav">
            <div class="left">
                <a href="table.php" class="back"><i class="fas fa-backward"></i> ກັບຄືນ</a>
            </div>
            <div class="right">
                <a href="order_id_table.php?id=<?php echo $_GET['id']; ?>" class="add"><i class="far fa-plus-square"></i> ເພີ່ມສິນຄ້າ</a>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="table-wrap">
                <table class="table">
                    <tr>
                        <th>.No</th>
                        <th>List</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                        include 'config.php';
                        $sql="SELECT * FROM `order`";
                        $res=mysqli_query($con,$sql);
                        $i=0;
                        while($row=mysqli_fetch_array($res)){
                        if($row['id_table'] == $_GET['id']):
                        $i++;
                        $nam=$row['name'];
                    ?>
                    <tr>
                        <td>
                            <label>
                                <span><?php echo $i;?></span>
                            </label>
                        </td>
                        <td class="Name-product">
                            <div class="Name-product">
                                <p><?php echo $row['name'];?></p>
                            </div>
                        </td>
                        <td><?php echo number_format($row['price']);?> ₭</td>
                        <td><?php echo $row['amount'];?></td>
                        <td><?php echo number_format($row['amount'] * intval($row['price'])); ?> ₭</td>
                        <td>
                            <a class="update" onclick="if( up = prompt('ແກ້ໄຂຈຳນວນ: ',<?php echo $row['amount'];?>) ){window.location.href='update_order.php?id=<?php echo $_GET['id'];?>&name=<?php echo $row['name'];?>&n='+up;}">
                            <i class="fas fa-edit"></i> ຈຳນວນ</a>
                        </td>
                        <td>
                            <a class="delete" onclick="if(confirm('ລົບລາຍການ: <?php echo $row['name'];?>')){window.location.href='delete_order.php?id=<?php echo $_GET['id'];?>&name=<?php echo $row['name'];?>'}">
                                <i class="fas fa-trash-alt"></i> ລົບ</a>
                        </td>
                    </tr>
                        <?php endif;} ?>
                </table>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="contact3">
                <a href="print.php?id=<?php echo $_GET['id'] ?>" class="add"><i class="fas fa-print"></i> ພິມ</a>
                <a class="confirm" onclick=' if(confirm("ຍື່ນຍັນການຊຳລະເງິນ")){ window.location.href="confirm_order.php?id=<?php echo $_GET['id']?>"}'>
                    <i class="fas fa-check-circle"></i> ຍື່ນຍັນການຊຳລະເງິນ</a>
            </div>
        </div>
    </section>
</body>

</html>