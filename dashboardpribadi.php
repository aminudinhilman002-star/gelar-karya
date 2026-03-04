<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard MyPlan</title>

<link rel="stylesheet" href="css/dashboard.css">
</head>

<body>

<div class="navbar">
    <div class="nav-left">
        <div class="logo">MyPlan</div>
        <div class="menu">
            <a href="#" class="active">Dashboard</a>
            <a href="#">Kalender</a>
            <a href="#">Tugas</a>
            <a href="#">Keluarga</a>
        </div>
    </div>
    <input type="text" class="search" placeholder="Cari agenda...">
</div>

<div class="container">

    <div class="header">
        <div>
            <h2>Selamat Pagi,  👋</h2>
            <span>Mode Aktif: </span>
        </div>


        <div>
            <a href="tambahtugas.php" class="button">Tambah Tugas</a>
            <a href="tambahjadwal.php" class="button secondary">Tambah Jadwal</a>
        </div>    
    </div>

<?php
include "layout/dashboard/header.php";
?>

</div>

</body>
</html>
