<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Availability</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
        <?php 
            $roll = $_GET['roll number']
            $sql= mysqli_query('SELECT Id, Name, Salaray_Package, Recruting_Since, Interview_Mode, Interview_Type, min_qualification,cpi_cuttof FROM Companies WHERE cpi_cutoff<=(SELECT cpi FROM Carrer WHERE Roll_No='$roll' AND Is_Placed='no')')
           
           
        ?>

    
</body>
</html>