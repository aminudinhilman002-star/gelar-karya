<?php
    include "db/database.php";

    $register_message = "";

    if(isset($_POST["register"])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (nama, username, email, password) VALUES ('$nama', '$username', '$email', '$password')";

        if($conn->query($sql)) {
            $register_message = "Registrasi berhasil! Silakan <a href='login.php'>login</a>.";
        }else {
            $register_message = "Terjadi kesalahan silahkan coba lagi. Error: " . $conn->error;
        }
    }
?>
