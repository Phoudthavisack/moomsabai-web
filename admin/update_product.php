<?php 
include 'config.php';
$id=$_GET['id'];
$name=$_POST['name'];
$price=$_POST['price'];
$inv=$_POST['amount'];
$type=$_POST['type'];

if(isset($_POST['name'])){
$sql="UPDATE `list_product` SET name_product='$name', price='$price', inventory='$inv', product_type='$type' WHERE id=$id";
$con->query($sql);
header('location:product.php');
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
            <h3>ລາຍການອາຫານ</h3>
        </div>
    </div>
    <div class="container">
        <div class="nav">
            <div class="left">
                <a href="product.php" class="back"><i class="fas fa-backward"></i> ກັບຄືນ</a>
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
                        <li>ລາຄາ</li>
                        <li>ຈຳນວນ</li>
                        <li>ປະເພດ</li>
                        <li>ຮູບສິນຄ້າ</li>
                    </ul>
                    <div class="input-form">
                        <?php 
                        include 'config.php';
                        $id=$_GET['id'];
                        $sql="SELECT * FROM `list_product` WHERE id='$id' LIMIT 1";
                        $res = mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($res)):
                        ?>
                        <input class="input" type="text" name="name" value="<?php echo $row['name_product'];?>">
                        <input class="input" type="text" class="price" name="price" value="<?php echo $row['price'];?>">
                        <input class="input" type="text" class="amount" name="amount" value="<?php echo $row['inventory'];?>">
                        <select class="input" name="type" size="4">
                            <option value="ປະເພດຈິ້ມຈຸ່ມ"> ປະເພດຈິ້ມຈຸ່ມ </option>
                            <option value="ເຄື່ອງດື່ມ"> ເຄື່ອງດື່ມ </option>
                            <option value="ອາຫານ"> ອາຫານ </option>
                            <option value="ຂອງຫວານ"> ຂອງຫວານ </option>
                            <option value="ອື່ນໆ"> ອື່ນໆ </option>
                        </select>
                        <?php endwhile; ?>
                        <input class="input" type="file" name="add_img">
                    </div>
                </div>
                <input type="submit" value="ເພີ່ມ" class="add">
            </form>
        </div>
    </div>
</body>

</html>