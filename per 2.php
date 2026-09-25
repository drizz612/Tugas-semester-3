<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>per 2</title>
</head>
<body>
<?php
    define("persegi", "1.Mencari Luas dan keliling persegi panjang");
    $panjang = 10;
    $lebar = 5;
    $luas_prsg = $panjang * $lebar;
    $keliling_prsg= 2 * ($panjang + $lebar);

    echo persegi . "<br><br>";
    echo "Luas persegi panjang  <br>";
    echo "Panjang persegi = $panjang <br> ";
    echo "Lebar persegi = $lebar <br>";
    echo "Hasil Luas persegi panjang = $luas_prsg <br><br>";

    echo "Keliling persegi panjang  <br>";
    echo "Panjang persegi = $panjang <br> ";
    echo "Lebar persegi = $lebar <br>";
    echo "Luas persegi = $luas_prsg <br>";
    echo "Hasil Keliling persegi panjang = $keliling_prsg <br><br>";

    define("segitiga", "2.Mencari luas dan keliling segitiga");
    $alas = 8;
    $tinggi = 6;
    $luas_stg = 0.5 * $alas * $tinggi;
    $sisi1 = 4;
    $sisi2 = 6;
    $sisi3 = 8;
    $keliling_stg = $sisi1 + $sisi2 + $sisi3;

    echo segitiga . "<br><br>";
    echo "Alas segitiga = $alas <br>";
    echo "Tinggi segitiga = $tinggi <br>";
    echo "Hasil luas segitiga = $luas_stg <br><br>";

    echo "Keliling segitiga <br>";
    echo "Sisi 1 = $sisi1 <br> ";
    echo "Sisi 2 = $sisi2 <br>";
    echo "Sisi 3 = $sisi3 <br>";
    echo "Hasil Keliling segitiga = $keliling_stg <br><br>";
?>   
</body>
</html>
