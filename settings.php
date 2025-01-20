<?php
session_start();

// Memeriksa apakah pengguna sudah login dan apakah role-nya adalah admin
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    // Jika tidak memiliki role admin, alihkan ke halaman 404
    header('HTTP/1.0 404 Not Found');
    include('404.php');
    exit;
}
?>