<?php
require_once __DIR__ . '/../config/database.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    mysqli_query($conn, "UPDATE users SET nama='$nama', email='$email' WHERE id=$id");

    header("Location: ../index.php?page=user/list");
    exit;
}
?>

<h2>Edit User</h2>

<form method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $user['nama']; ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $user['email']; ?>" required><br><br>

    <button type="submit" name="submit">Update</button>
</form>
