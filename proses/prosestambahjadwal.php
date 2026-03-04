<?php
session_start();
include "../db/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id_user = $_SESSION['id_user'];

    $title = $_POST['title'];
    $mode = $_POST['mode'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $id_households = NULL;

    if ($mode == "households") {
        $id_households = $_SESSION['id_households'];
    }

    $query = "INSERT INTO schedules 
    (title, date, time, id_user, id_households, created_at) 
    VALUES 
    ('$title', '$date', '$time', '$id_user', " .
    ($id_households ? $id_households : "NULL") . ", NOW())";

    mysqli_query($conn, $query);

    header("Location: ../dashboardpribadi.php");
    exit;
}
?>