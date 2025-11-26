<?php
require_once __DIR__ . '/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$file = __DIR__ . '/' . $page . '.php';

if (file_exists($file)) {
    include $file;
} else {
    echo "<h2>Halaman tidak ditemukan</h2>";
}

require_once __DIR__ . '/footer.php';
?>
