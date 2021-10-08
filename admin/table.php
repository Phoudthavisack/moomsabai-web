<?php 
    include 'config.php';
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
            <i class="fas fa-table" style="color:#FD0F7F"></i>
            <h3>ຈັດການໂຕະ</h3>
        </div>
    </div>
    <div class="container">
        <div class="nav">
            <div class="left">
                <a href="index.php" class="back"><i class="fas fa-backward"></i> ກັບຄືນ</a>
            </div>
            <div class="right">
                <a href="#" class="add" onclick="var table = prompt('ເລກໂຕະ',0); window.location.href='add_table.php?table=' + table">
                <i class="far fa-plus-square"></i> ເພີ່ມໂຕະ</a>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="table-box">
                <ul>
                    <?php 
                        $sql="SELECT * FROM `table`";
                        $res=mysqli_query($con,$sql);
                        while ($row=mysqli_fetch_array($res)):
                    ?>
                    <a href="id_table.php?id=<?php echo $row['id_table'];?>"><li><?php echo $row['number_table'];?></li></a>
                    <?php endwhile;?>
                </ul>
            </div>

        </div>
    </section>
</body>

</html>