<?php
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
$order_name = "";
$order_phone = 0;
$order_email = "";
$order_address = "";

$total = $_GET['total'];
$cust_name = $_SESSION['username'];

$sql="SELECT * FROM `users` WHERE user='$cust_name' LIMIT 1";
$query=mysqli_query($con,$sql);
$order_date = Date("Y-m-d G:i:s");
while($row=mysqli_fetch_array($query)){
    $order_name = $row['name'];
    $order_phone = $row['phone'];
    $order_email = $row['mail'];
    $order_address = $row['address'];
}

$sql1 = "INSERT INTO `orders` ( `date`,`name`, `mail`, `phone`, `address`, `total`, `c_name`) VALUES ('$order_date','$order_name', '$order_email', '$order_phone', '$order_address', $total, '$cust_name');";
$query1 = mysqli_query($con, $sql1);

$sql2 = "SELECT max(id) as id FROM orders";
$query2 = mysqli_query($con, $sql2);
$row = mysqli_fetch_assoc($query2);
$o_id = $row['id'];

foreach ($_SESSION['cart'] as $product_id => $qty) {
    $sql3 = "SELECT * FROM list_product WHERE id = $product_id;";
    $query3 = mysqli_query($con, $sql3);
    $row3 = mysqli_fetch_assoc($query3);
    $total = $row3['price'] * $qty;
    $count = mysqli_num_rows($query3);

    $sql4 = "INSERT INTO orders_detail (order_id,product_id,qty,total) VALUES ($o_id,$product_id,$qty,$total);";
    $query4 = mysqli_query($con, $sql4);

    //cut stock
    for ($i = 0; $i < $count; $i++) {
        $instock = $row3['inventory'];
        $stock = $instock - $qty;
        $sqlstock = "UPDATE list_product SET inventory = $stock WHERE id = $product_id;";
        $querystock = mysqli_query($con, $sqlstock);
    }
}

if ($query1 && $query4) {

    foreach ($_SESSION['cart'] as $product_id) {
        unset($_SESSION['cart']);
    }
    echo "<script type='text/javascript'>";
    echo "alert('ບັນທຶກຂໍ້ມູນ ສຳເລັດແລ້ວ !');";
    echo "window.location = 'product.php';";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('ມີບາງຢ່າງບໍ່ຖືກຕ້ອງ !');";

    echo "</script>";
}
mysqli_close($con);
?>
