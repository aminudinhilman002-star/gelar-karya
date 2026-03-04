<?php
include "proses/proseslogin.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/login.css">

</head>
<body>
    <h3>Login</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username" required/><br><br>
        <input type="password" placeholder="password" name="password" required/><br><br>
        <button type="submit" name="login">login</button>
    </form><br>

    <p>belum punya akun? </php><br>
    <a href="register.php">buat akun sekarang</a>

</body>
</html>