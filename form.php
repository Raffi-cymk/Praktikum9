<?php
require_once __DIR__ . '/../config/database.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO users (nama, email) VALUES ('$nama', '$email')");

    header("Location: ../index.php?page=user/list");
    exit;
}
?>

<h2>Tambah User</h2>

<form method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit" name="submit">Simpan</button>
</form>
