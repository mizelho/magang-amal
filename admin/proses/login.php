<?php
session_start();
include '../../koneksi/koneksi.php';

// Ambil data username dan password dari form
$username = $_POST['user'];
$pass = $_POST['pass'];

// Debugging: Menampilkan nilai username dan password yang diterima
echo "Username: " . htmlspecialchars($username) . "<br>";
echo "Password: " . htmlspecialchars($pass) . "<br>";

// Cek apakah data dikirim
if (isset($username) && isset($pass)) {
    // Cek user dalam database
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

    // Pastikan query berhasil
    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Debugging: Menampilkan hasil query
        var_dump($row);

        // Pastikan user ditemukan
        if ($row) {
            $user = $row['username'];
            $ps = $row['password'];

            // Debugging: Menampilkan data username dan password dari database
            echo "User from DB: " . htmlspecialchars($user) . "<br>";
            echo "Password from DB: " . htmlspecialchars($ps) . "<br>";

            // Cek apakah username dan password sesuai
            if ($username == $user && password_verify($pass, $ps)) {
                $_SESSION["admin"] = true;
                header('Location: ../halaman_utama.php');
                exit; // Pastikan setelah header redirect, script tidak lanjut
            } else {
                echo "
                <script>
                </script>
                ";
            }
        } else {
            echo "
            <script>
            </script>
            ";
        }
    } else {
        // Jika query gagal
        echo "
        <script>
        alert('Database query failed');
        window.location = '../index.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('Form tidak lengkap');
    window.location = '../index.php';
    </script>
    ";
}
?>
