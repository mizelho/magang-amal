<?php
session_start();
include '../koneksi/koneksi.php';

if (isset($_POST['username']) && isset($_POST['pass'])) {
    $username = $_POST['username'];
    $password = trim($_POST['pass']);
} else {
    header("Location: ../user_login.php?error=missing_credentials");
    exit;
}

$cek = mysqli_query($conn, "SELECT * FROM pelamar WHERE username = '$username'");
if (!$cek) {
    $error_message = urlencode(mysqli_error($conn));
    header("Location: ../user_login.php?error=query_error&message=$error_message");
    exit;
}

$jml = mysqli_num_rows($cek);
if ($jml == 1) {
    $row = mysqli_fetch_assoc($cek);
    if (isset($row['Password']) && password_verify($password, $row['Password'])) {
        $_SESSION['user'] = $row['nama'];
        $_SESSION['kd_pm'] = $row['kode_pelamar'];
        header('Location: ../index.php');
        exit;
    } else {
        header("Location: ../user_login.php?error=invalid_credentials");
        exit;
    }
} else {
    header("Location: ../user_login.php?error=user_not_found");
    exit;
}
?>
