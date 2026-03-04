<?php
session_start();
include "../db/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_user = $_SESSION['id_user'];

    $title = $_POST['title'];
    $mode = $_POST['mode'];
    $due_date = $_POST['due_date'];
    $due_time = $_POST['due_time'];
    $kuadran = $_POST['kuadran'];
    $description = $_POST['description'];

    $id_households = NULL;

    if ($mode == "households") {
        $id_households = $_SESSION['id_households'];
    }

    $query = "INSERT INTO tasks 
    (title, description, due_date, due_time, kuadran, id_user, id_households, created_at) 
    VALUES 
    ('$title', '$description', '$due_date', '$due_time', '$kuadran', '$id_user', " .
    ($id_households ? $id_households : "NULL") . ", NOW())";

    mysqli_query($conn, $query);

    header("Location: ../dashboardpribadi.php");
    exit;
}
?>