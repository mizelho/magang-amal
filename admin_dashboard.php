<?php
    session_start();

    // Memeriksa apakah pengguna sudah login dan apakah role-nya adalah admin
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        // Jika tidak memiliki role admin, alihkan ke halaman 404
        header('HTTP/1.0 404 Not Found');
        include('404.php');
        exit;
    }
    include('check_admin.php'); // Memastikan pengguna adalah admin
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, Admin!</h1>
    <p>You have successfully logged in as an administrator.</p>
</body>
</html>
