<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistem login RPL</title>

<body style="font-family: Arial; text-align: center; margin-top: 100px;">
    <h2>Silakan Login</h2>
    
    <form action="cek_login.php" method="POST">
        <label>Username : </label>
        <input type="text" name="user" required> <br><br>
        
        <label>Password : </label>
        <input type="password" name="pass" required> <br><br>
        
        <button type="submit">Masuk</button>
    </form>
</body>
</html>