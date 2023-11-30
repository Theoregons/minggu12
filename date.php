<?php 

// echo date("l Y-m-d", mktime(20, 03, 0, 05, 26, 2001));
// echo date("l", strtotime("26 May 2030"));
function salam($waktu, $nama){
    return "Selamat ". $waktu. $nama;
}

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
    <h2><?= salam("Pagi ", "Baktiar")?> !</h2>
    <h2>Hasil Perkalian = <?= $hasil ?> </h2>
</body>
</html>