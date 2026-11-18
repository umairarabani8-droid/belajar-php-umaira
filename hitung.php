<?php
echo "<h2> Hasil Perhitungan</h2>";
$nilai_a = $_POST['nilai_a'];
$nilai_b = $_POST['nilai_b'];
$hasil = $nilai_a + $nilai_b;

echo "<p>$nilai_a ditambah $nilai_b sama dengan <b>$hasil</b></p>";
echo "<br><a href='kalkulator.php'>Hitung Lagi</a>";
?>