<?php
session_start();
include "../db/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_user = $_SESSION['id_user'];

    $title = $_POST['title'];
    $mode = $_POST['mode'];
    $due_date = $_POST['due_date'];
    $due_time = $_POST['due_time'];
    $description = $_POST['description'];

    $id_households = NULL;

    if ($mode == "household") {
        $id_households = 1; // nanti ambil dari session / pilihan user
    }

    $query = "INSERT INTO tasks 
    (title, description, due_date, id_user, id_households, created_at) 
    VALUES 
    ('$title', '$description', '$due_date', '$id_user', " .
    ($id_households ? $id_households : "NULL") . ", NOW())";

    mysqli_query($conn, $query);

    header("Location: ../dashboard.php");
    exit;
}
?>