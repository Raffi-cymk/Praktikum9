<?php
require_once __DIR__ . '/../config/database.php';

$data = mysqli_query($conn, "SELECT * FROM users");
?>

<h2>Daftar User</h2>

<a href="../index.php?page=user/form">+ Tambah User</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($data)) : ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['email']; ?></td>
        <td>
            <a href="../index.php?page=user/edit&id=<?= $row['id']; ?>">Edit</a> |
            <a href="../user/delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus user ini?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
