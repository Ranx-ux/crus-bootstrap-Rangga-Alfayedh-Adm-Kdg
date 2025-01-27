<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Data Mahasiswa</h2>
        <form action="proses_tambah.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required><br>
            <label for="nim">NIM:</label>
            <input type="text" name="nim" required><br>
            <label for="email">Email:</label>
            <input type="email" name="email" required><br>
            <label for="nomor">Nomor:</label>
            <input type="text" name="nomor" required><br>
            <label for="jurusan">Jurusan:</label>
            <input type="text" name="jurusan" required><br>
            <button type="submit">Tambah</button>
        </form>
    </div>
</body>
</html>
