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
    <div class="container">
        <div class="logo">
            <i class="fas fa-align-left" style="color:#FFD664"></i>
            <h3>ລາຍການອາຫານ</h3>
        </div>
    </div>
    <div class="container">
        <div class="nav">
            <div class="left">
                <a href="index.php" class="back"><i class="fas fa-backward"></i> ກັບຄືນ</a>
            </div>
            <div class="right">
                <a href="insert_product.php" class="add"><i class="far fa-plus-square"></i> ເພີ່ມສິນຄ້າ</a>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="table-wrap">
                <table class="table">
                    <tr>
                        <th>.No</th>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php 
                        include 'config.php';
                        $sql="SELECT * FROM `list_product`";
                        $res=mysqli_query($con,$sql);
                        while ($row=mysqli_fetch_array($res)):
                    ?>
                    <tr>
                        <td>
                            <label>
                                <span><?php echo $row['id']; ?></span>
                            </label>
                        </td>
                        <td>
                            <div class="img-product">
                                <img src="<?php echo $row['product_picture'];?>" alt="">
                            </div>
                        </td>
                        <td>
                            <div class="Name-product">
                                <p><?php echo $row['name_product']; ?></p>
                            </div>
                        </td>
                        <td><?php if($row['price'] != null){ echo number_format($row['price']); }else{echo " - ";}?> ₭</td>
                        <td><?php echo $row['inventory']; ?></td>
                        <td>
                            <a href="update_product.php?id=<?php echo $row['id']; ?>" class="update"><i class="fas fa-edit"></i> ແກ້ໄຂ</a>
                        </td>
                        <td>
                            <a class="delete" onclick="if(confirm('ລົບລາຍການ: <?php echo $row['name_product'];?>')){window.location.href='delete_product.php?id=<?php echo $row['id'];?>'}">
                            <i class="fas fa-trash-alt"></i> ລົບ</a>
                        </td>
                        
                    </tr>
                    <?php endwhile;?>
                </table>
            </div>
        </div>
    </section>
</body>

</html>