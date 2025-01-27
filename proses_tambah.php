<?php
include 'koneksi.php';
session_start();

if ($_SESSION['role'] != 'admin') {
    die("Unauthorized access");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = mysqli_real_escape_string($mysqli, $_POST['nama']);
    $nim = mysqli_real_escape_string($mysqli, $_POST['nim']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $nomor = mysqli_real_escape_string($mysqli, $_POST['nomor']);
    $jurusan = mysqli_real_escape_string($mysqli, $_POST['jurusan']);

    $sql = "INSERT INTO mahasiswa (nama, nim, email, nomor, jurusan) VALUES ('$nama', '$nim', '$email', '$nomor', '$jurusan')";

    if ($mysqli->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

$mysqli->close();
?>
