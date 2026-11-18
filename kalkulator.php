<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator web</title>
</head>
<body>
    <h2>kalkulator penjumlahan</h2>
    <form action="hitung.php" method="POST">
        <label>Angka pertama:</label>
        <input type="number" name="angka1" required><br><br>

        <label>angka kedua:</label>
        <input type="number" name="angka2" required><br><br>

        <button type="submit">Tambahkan!</button>
    </form>
</body>
</html>