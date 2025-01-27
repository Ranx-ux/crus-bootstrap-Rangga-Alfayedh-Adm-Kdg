<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    $hashed_password = hash('sha256', $password);

    $sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
    
    if ($mysqli->query($sql) === TRUE) {
        echo "Registrasi berhasil!";
        header('Location: login.php');
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $mysqli->close();
}
?>
