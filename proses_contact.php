<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Proses data, misalnya mengirim email atau menyimpan ke database
    echo "Terima kasih, $name. Pesan Anda telah diterima!";
}
?>
