<?php

$nama = "Umaira Rabani";
$kelas = " XI RPL";
$hobi = "main Game";
$warna_latar = "#aba6d1";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
body { 
    background-color: #f4f4f4; 
    font-family: Arial; 
    }
.kartu {
/* 2. PANGGIL VARIABEL WARNA LATAR DI DALAM CSS INI */
    background-color: <?php echo $warna_latar; ?>;
    color: white;
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}
    </style>
<body>
    
    <div class="kartu">
<!-- 3. PANGGIL VARIABEL DATA DIRI DI SINI -->
<h2><?php echo $nama; ?></h2>
<p>Kelas: <?php echo $kelas; ?></p>
<hr>
<p>Hobi: <?php echo $hobi; ?></p>
</div>
</body>
</html>
