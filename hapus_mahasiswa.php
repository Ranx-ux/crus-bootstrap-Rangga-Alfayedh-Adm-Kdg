<?php
include 'koneksi.php';
session_start();

if ($_SESSION['role'] != 'admin') {
    die("Unauthorized access");
}

$id = $_GET['id'];

$query = "DELETE FROM mahasiswa WHERE id=$id";
if ($mysqli->query($query)) {
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
