<?php
include '../koneksi/koneksi.php';

$kode = mysqli_query($conn, "SELECT kode_pelamar from pelamar order by kode_pelamar desc");
$data = mysqli_fetch_assoc($kode);
$num = substr($data['kode_pelamar'], 1, 4);
$add = (int) $num + 1;

if (strlen($add) == 1) {
    $format = "P000" . $add;
} else if (strlen($add) == 2) {
    $format = "P00" . $add;
} else if (strlen($add) == 3) {
    $format = "P0" . $add;
} else {
    $format = "P" . $add;
}

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$konfirmasi = $_POST['konfirmasi'];
$role = $_POST['role'];

$hash = password_hash($password, PASSWORD_DEFAULT);

if ($password === $konfirmasi) {
    $cek = mysqli_query($conn, "SELECT username from pelamar where username = '$username'");
    $jml = mysqli_num_rows($cek);

    if ($jml == 1) {
        echo json_encode([
            'status' => 'error',
            'message' => 'USERNAME IS ALREADY TAKEN'
        ]);
        exit;
    }

    // Menambahkan nilai role dalam query INSERT
    $result = mysqli_query($conn, "INSERT INTO pelamar (kode_pelamar, nama, email, username, password, role) 
                                    VALUES('$format','$nama', '$email', '$username', '$hash', '$role')");

    if ($result) {
        echo json_encode([
            'status' => 'success',
            'message' => 'REGISTRATION SUCCESSFUL'
        ]);
        exit;
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'DATABASE INSERTION FAILED'
        ]);
        exit;
    }
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'CONFIRMATION PASSWORD DOES NOT MATCH'
    ]);
    exit;
}
?>
