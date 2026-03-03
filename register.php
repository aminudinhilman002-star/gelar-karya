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

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    background: radial-gradient(circle at top left, #0f2a47, #071421 60%);
    color:white;
}

/* TITLE */
h3{
    font-size:34px;
    font-weight:600;
    margin-bottom:8px;
}

i{
    display:block;
    font-style:normal;
    font-size:14px;
    color:#9aa4b2;
    margin-bottom:25px;
}

/* FORM CARD */
form{
    width:100%;
    max-width:420px;
    padding:40px;
    border-radius:18px;
    background:rgba(255,255,255,0.04);
    backdrop-filter:blur(25px);
    border:1px solid rgba(255,255,255,0.08);
    box-shadow:0 0 50px rgba(0,0,0,0.6);
}

/* INPUT */
input{
    width:100%;
    padding:14px 16px;
    margin-bottom:18px;
    border-radius:10px;
    border:1px solid rgba(255,255,255,0.08);
    background:rgba(255,255,255,0.06);
    color:white;
    font-size:14px;
    transition:0.3s;
}

input::placeholder{
    color:#7c8aa5;
}

input:focus{
    border:1px solid #2e8cff;
    box-shadow:0 0 12px rgba(46,140,255,0.5);
    outline:none;
}

/* BUTTON REGISTER */
button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:linear-gradient(90deg,#2e8cff,#0066ff);
    font-weight:600;
    font-size:15px;
    color:white;
    cursor:pointer;
    transition:0.3s;
    margin-top:5px;
}

button:hover{
    background:linear-gradient(90deg,#1e6fe0,#004fd1);
    transform:translateY(-2px);
}

/* LINK */
a{
    margin-top:18px;
    display:block;
    text-align:center;
    color:#2e8cff;
    text-decoration:none;
    font-size:14px;
}

a:hover{
    text-decoration:underline;
}

/* Responsive */
@media(max-width:480px){
    form{
        padding:30px;
    }
}
</style>
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