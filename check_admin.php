<?php
// Hapus session_start() di sini
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Jika tidak memiliki role admin, alihkan ke halaman 404
    header('HTTP/1.0 404 Not Found');
    include('404.php');
    exit;
}
?>
