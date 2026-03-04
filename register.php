<?php
include "proses/prosesregister.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/register.css">

</head>
<body>
    <h3>Daftar sekarang</h3>
    <i><?php echo $register_message; ?></i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="masukan nama anda" name="nama" required/><br><br>
        <input type="text" placeholder="username" name="username" required/><br><br>
        <input type="email" placeholder="masukan email anda" name="email" required/><br><br>
        <input type="password" placeholder="password" name="password" required/><br><br>
        <button type="submit" name="register">register</button>
    </form><br>

    <a href="login.php">kembali</a>
</body>
</html>