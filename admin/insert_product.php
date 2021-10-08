<?php
	include 'config.php';

if(isset($_POST['name'])){
	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$inventory = $_POST['amount'];
    $type = $_POST['type'];
    $checkcode = 1;
$sql="SELECT * FROM `list_product`";
$res=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($res)){
	if($row['name_product'] == $name){
		echo "<script>alert('barcode ນີ້ຖືກໃຊ້ງານແລ້ວ');</script>";
		$checkcode = 0;
	}
}
	
if($checkcode > 0){
if($name != null && $price != null && $inventory != null){

if(isset($_FILES["add_img"]["name"])){

$allowedExts = array("jpg", "png");
$temp = explode(".", $_FILES["add_img"]["name"]);
$extension = end($temp);
$basename   = date("Ymdhis") . "." . $extension;
if (in_array($extension, $allowedExts)) {
    if ($_FILES["add_img"]["error"] > 0) {
        echo "Return Code: " . $_FILES["add_img"]["error"] . "<br>";
    } else {
        if (file_exists("img/" . $basename)) {
            echo "ຮູບພາບ ".$basename." ນີ້ ມີຢູ່ໃນຄັງຮູບຢູ່ແລ້ວ";
        } else {
            move_uploaded_file($_FILES["add_img"]["tmp_name"], "img/" . $basename);
            echo "ທີ່ຢູ່ຮູບສິນຄ້າ: img/" . $basename."<br>";
        }
		$query = "INSERT INTO `list_product` (name_product,price,inventory,product_type,product_picture) VALUES ('$name', '$price', '$inventory', '$type','img/$basename') ";  
		$run = $con->query($query);
    }
} else {
	$query = "insert into `list_product` (name_product,price,inventory,product_type) values ('$name', '$price', '$inventory', '$type') ";
	$run = $con->query($query);
}
}else{
	$query = "insert into `list_product` (name_product,price,inventory,product_type) values ('$name', '$price', '$inventory', '$type') ";
	$run = $con->query($query);
}
}else{ echo "ຂໍ້ມູນສິນຄ້າບໍ່ຄົບຖ້ວນ<br>";}
}

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
                <a href="product.php" class="back"><i class="fas fa-backward"></i> ກັບຄືນ</a>
            </div>
            <div class="right">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="insert">
            <form action="?" class="form" method="POST" enctype="multipart/form-data">
            <div class="form-insert">
            <ul class="label-form">
                <li>ຊື່ສິນຄ້າ</li>
                <li>ລາຄາ</li>
                <li>ຈຳນວນ</li>
                <li>ປະເພດ</li>
                <li>ຮູບສິນຄ້າ</li>
            </ul>
            <div class="input-form">
            <input class="input" type="text" name="name" required>
                <input class="input" type="text" class="price" name="price" required>
                <input class="input" type="text" class="amount" name="amount" required>
                <select class="input" name="type" size="4" required>  
                    <option value="ປະເພດຈິ້ມຈຸ່ມ"> ປະເພດຈິ້ມຈຸ່ມ </option>  
                    <option value="ເຄື່ອງດື່ມ"> ເຄື່ອງດື່ມ </option>  
                    <option value="ອາຫານ"> ອາຫານ </option>  
                    <option value="ຂອງຫວານ"> ຂອງຫວານ </option>  
                    <option value="ອື່ນໆ"> ອື່ນໆ </option>
                </select>
                <input type="file" class="add_img" name="add_img" required>
            </div>
            </div>
            <input type="submit" value="ເພີ່ມ" class="add">
            </form>
        </div>
    </div>
</body>
</html>