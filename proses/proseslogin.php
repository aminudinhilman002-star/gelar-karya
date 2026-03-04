<?php
session_start();
include "db/database.php";

if(isset($_POST['login'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0) {

        $data = $result->fetch_assoc();

        if(password_verify($password, $data['password'])) {

            
            $_SESSION['username'] = $data['username'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['id_user'] = $data['id_user'];

            
            header("Location: dashboardpribadi.php");
            exit();

        } else {
            echo "Password salah!";
        }

    } else {
        echo "Username tidak ditemukan!";
    }
}
?>