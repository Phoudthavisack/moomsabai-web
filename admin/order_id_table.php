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
            <i class="fas fa-table" style="color:#FD0F7F"></i>
            <h3>ເພີ່ມລາຍການ ໂຕະ <span style="color: #FD0F7F;"><?php 
            include 'config.php';
            $id=$_GET['id'];
            $numm=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM `table` WHERE id_table='$id' limit 1"));
            echo $numm['number_table'];
            ?></span></h3>
        </div>
    </div>
    <div class="container">
        <div class="nav">
            <div class="left">
                <a href="id_table.php?id=<?php echo $_GET['id'];?>" class="back"><i class="fas fa-backward"></i> ກັບຄືນ</a>
            </div>
            <div class="right">
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="contact3">
                <table class="table">
                    <tr>
                        <th>ປະເພດຈິ້ມຈຸ່ມ</th>
                        <th>ເຄື່ອງດື່ມ</th>
                        <th>ອາຫານ</th>
                        <th>ຂອງຫວານ</th>
                        <th>ອື່ນໆ</th>
                    </tr>
                    <?php
                    include 'config.php';
                    $sql="SELECT * FROM `list_product`";
                    $res=mysqli_query($con,$sql);
                    $ary1=[];$ap1=[];
                    $ary2=[];$ap2=[];
                    $ary3=[];$ap3=[];
                    $ary4=[];$ap4=[];
                    $ary5=[];$ap5=[];

                    while($row=mysqli_fetch_array($res)){
                        if(
                            $row['product_type'] == "ປະເພດຈິ້ມຈຸ່ມ"){
                            $ary1[]=$row['name_product'];
                            $ap1[]=$row['price'];
                            }
                            else if(
                                $row['product_type'] == "ເຄື່ອງດື່ມ"){
                                $ary2[]=$row['name_product'];
                                $ap2[]=$row['price'];
                                }
                                else if(
                                    $row['product_type'] == "ອາຫານ"){
                                    $ary3[]=$row['name_product'];
                                    $ap3[]=$row['price'];
                                    }
                                    else if(
                                        $row['product_type'] == "ຂອງຫວານ"){
                                        $ary4[]=$row['name_product'];
                                        $ap4[]=$row['price'];
                                        }
                                        else{
                                            $ary5[]=$row['name_product'];
                                            $ap5[]=$row['price'];
                                            }

                    }
                    $mx=max(count($ary1),count($ary2),count($ary3),count($ary4),count($ary5));
                    ?>
                    <?php
                    for($i=0;$i<$mx;$i++):
                    ?>
                    <tr>
                    <td>
                        <a class="order" onclick='if(ev = prompt("<?php echo $ary1[$i]?>:",1)){ window.location.href="insert_order.php?id=<?php echo $_GET["id"];?>&n="+ev+"&p=<?php echo $ap1[$i]?>&name=<?php echo $ary1[$i]?>";}'>
                            <?php echo @$ary1[$i];?>
                        </a>
                    </td>
                    <td>
                        <a class="order" onclick='if(ev = prompt("<?php echo $ary2[$i]?>:",1)){ window.location.href="insert_order.php?id=<?php echo $_GET["id"];?>&n="+ev+"&p=<?php echo $ap2[$i]?>&name=<?php echo $ary2[$i]?>";}'>
                            <?php echo @$ary2[$i];?>
                        </a>
                    </td>
                    <td>
                        <a class="order" onclick='if(ev = prompt("<?php echo $ary3[$i]?>:",1)){ window.location.href="insert_order.php?id=<?php echo $_GET["id"];?>&n="+ev+"&p=<?php echo $ap3[$i]?>&name=<?php echo $ary3[$i]?>";}'>
                            <?php echo @$ary3[$i];?>
                        </a>
                    </td>
                    <td>
                        <a class="order" onclick='if(ev = prompt("<?php echo $ary4[$i]?>:",1)){ window.location.href="insert_order.php?id=<?php echo $_GET["id"];?>&n="+ev+"&p=<?php echo $ap4[$i]?>&name=<?php echo $ary4[$i]?>";}'>
                            <?php echo @$ary4[$i];?>
                        </a>
                    </td>
                    <td>
                        <a class="order" onclick='if(ev = prompt("<?php echo $ary5[$i]?>:",1)){ window.location.href="insert_order.php?id=<?php echo $_GET["id"];?>&n="+ev+"&p=<?php echo $ap5[$i]?>&name=<?php echo $ary5[$i]?>";}'>
                            <?php echo @$ary5[$i];?>
                        </a>
                    </td>
                    </tr>
                    <?php endfor;?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>