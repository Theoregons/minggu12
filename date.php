<?php 

$todayDate = "30 nov 2023";  
$returnDate = date('d-m-Y', strtotime('-500 day', strtotime($todayDate)));  
// echo date("l Y-m-d", mktime(20, 03, 0, 05, 26, 2001));
// echo date("l", strtotime("26 May 2030"));
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        Tanggal hari ini = <?= $todayDate;  ?>
        <br>
        Tanggal 500 hari sebelum dari skrg = <?= $returnDate;  ?>
    </h3>
</body>
</html>