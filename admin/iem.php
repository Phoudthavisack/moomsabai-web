<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Income Expense Manager</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="logo">
            <i class="fas fa-chart-pie" style="color:#2196F3"></i>
            <h3>ລາຍຮັບ-ລາຍຈ່າຍ</h3>
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
    <section>
        <div class="container">
            <div class="chart-box">
                <div id="piechart"></div>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <?php
                include 'config.php';
                $sql1 = "SELECT * FROM `order`";
                $query1 = mysqli_query($con, $sql1);
                $sum1 = 0;
                $sum2 = 0;
                $sum3 = 0;
                while ($row = mysqli_fetch_array($query1)) {
                    $sum1 += ($row['price'] * $row['amount']);
                }
                $sql2 = "SELECT * FROM `orders_detail`";
                $query2 = mysqli_query($con, $sql2);

                while ($row2 = mysqli_fetch_array($query2)) {
                    $sum2 += $row2['total'];
                }

                $sql3 = "SELECT * FROM `exp`";
                $query3 = mysqli_query($con, $sql3);

                while ($row3 = mysqli_fetch_array($query3)) {
                    $sum3 += $row3['total'];
                }
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            ['ຍອດຂາຍຈາກຮ້ານ', <?php echo $sum1; ?>],
                            ['ຍອດຂາຍຈາກການສັ່ງຜ່ານເວັບ', <?php echo $sum2; ?>],
                            ['ລາຍຈ່າຍ', <?php echo $sum3; ?>]
                        ]);
                        var options = {
                            'title': 'ສະແດງລາຍການການເງິນ',
                            'width': 900,
                            'height': 400
                        };
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    }
                </script>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <!-- <div class="menu-iem">
                <ul>
                    <li><a href="#">ວັນ</a></li>
                    <li><a href="#">ເດືອນ</a></li>
                    <li><a href="#">ປີ</a></li>
                </ul>
            </div> -->
            <div class="detail">
                <table>
                    <tr>
                        <th>ລຳດັບ</th>
                        <th>ລາຍການ</th>
                        <th>ຍອດຂາຍຈາກຮ້ານ</th>
                        <th>ຍອດຂາຍຈາກເວັບ</th>
                        <th>ຍອດຂາຍລວມ</th>
                        <th>ລາຍຈ່າຍ</th>
                        <th>ກຳໄລສຸດທິ</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ລາຍວັນ (<span style="color: red;">14/9/2021</span>)</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ລາຍເດືອນ (<span style="color: red;">9/2021</span>)</td>
                        <td>45,000</td>
                        <td>0</td>
                        <td>45,000</td>
                        <td>0</td>
                        <td>45,000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>ລາຍປີ (<span style="color: red;">2021</span>)</td>
                        <td>425,000</td>
                        <td>3,220,000</td>
                        <td>3,645,000</td>
                        <td>748,000</td>
                        <td>2,897,000</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
</body>

</html>