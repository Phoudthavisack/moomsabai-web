<?php
	include 'config.php';
    $id=$_GET['table'];

    $sql="SELECT * FROM `table`";
    $qq=mysqli_query($con,$sql);
    $add =true;
    while($row=mysqli_fetch_array($qq)){
        if($row['number_table'] == $id){
            echo "ມີແລ້ວ";
            $add=false;
        break;
        }
    }

    if($add){    
        $query = "insert into `table` (number_table) values ($id)";
        $con->query($query);
    }
  header('Location: table.php');
?>