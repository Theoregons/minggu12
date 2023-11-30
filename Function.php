<?php 
    function perkalian($angka1, $angka2){
        $perhitungan = $angka1 * $angka2;
        return $perhitungan;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $hasil = perkalian(9,2); ?>
    <h2>Hasil Perkalian = <?= $hasil ?> </h2>
</body>
</html>