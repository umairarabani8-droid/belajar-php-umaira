<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Mesin Pencari RPL</h2>
    <form action="" method="get">
        <input type="text" name="kat_kunci" placeholder="cari apa saja">
        <button type="submit">cari</button>
</form>
<hr>

<?php
    if(isset(GET['kata kunci'])) { 
        $cari = $_GET[kata_kunci];
        echo "<p>Manampilkan hasil pencarian untuk: <b>$cari</b></p>";
    }
?>
</body>
</html>