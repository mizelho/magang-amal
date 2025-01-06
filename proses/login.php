<?php
session_start();
include '../koneksi/koneksi.php';

// Cek apakah 'username' dan 'pass' ada di $_POST
if (isset($_POST['username']) && isset($_POST['pass'])) {
    $username = $_POST['username'];
    $password = trim($_POST['pass']); // Menghilangkan spasi yang tidak terlihat
} else {
    echo "<script>alert('Username atau password tidak ditemukan'); window.location = '../user_login.php';</script>";
    die;
}

// Periksa apakah query berjalan dengan benar
$cek = mysqli_query($conn, "SELECT * FROM pelamar WHERE username = '$username'");
if (!$cek) {
    echo "<script>alert('Query Error: " . mysqli_error($conn) . "'); window.location = '../user_login.php';</script>";
    die;
}

$jml = mysqli_num_rows($cek);

// Periksa apakah data ditemukan
if ($jml == 1) {
    $row = mysqli_fetch_assoc($cek);
    if (isset($row['Password']) && password_verify($password, $row['Password'])) {
        $_SESSION['user'] = $row['nama'];
        $_SESSION['kd_pm'] = $row['kode_pelamar'];
        header('Location: ../index.php');
        exit;
    } else {
        echo "<script>alert('Password / Username salah'); window.location = '../user_login.php';</script>";
        die;
    }
} else {
    echo "<script>alert('Username tidak ditemukan'); window.location = '../user_login.php';</script>";
    die;
}
?>
