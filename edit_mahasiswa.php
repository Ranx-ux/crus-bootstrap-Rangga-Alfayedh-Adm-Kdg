<?php
include 'koneksi.php';
session_start();

if ($_SESSION['role'] != 'admin') {
    die("Unauthorized access");
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Data Mahasiswa</h2>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required><br>
            <label for="nim">NIM:</label>
            <input type="text" name="nim" value="<?php echo htmlspecialchars($data['nim']); ?>" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($data['email']); ?>" required><br>
            <label for="nomor">Nomor:</label>
            <input type="text" name="nomor" value="<?php echo htmlspecialchars($data['nomor']); ?>" required><br>
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" value="<?php echo htmlspecialchars($data['jurusan']); ?>" required><br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
