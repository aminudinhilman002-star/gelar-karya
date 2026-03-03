<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database_name = "db_gelar_karya";

$conn = mysqli_connect($hostname, $username, $password, $database_name);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>