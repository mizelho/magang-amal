<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $message = trim(htmlspecialchars($_POST['message']));

    // Validasi sederhana
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Validasi email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Kirim email ke admin
            $to = "evamichele282@gmail.com"; // Ganti dengan email admin
            $subject = "Pesan dari $name";
            $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
            $headers = "From: noreply@domainanda.com\r\n"; // Disarankan menggunakan alamat email tetap
            $headers .= "Reply-To: $email\r\n";

            if (mail($to, $subject, $body, $headers)) {
                echo "Pesan Anda berhasil dikirim!";
            } else {
                echo "Maaf, terjadi kesalahan. Pesan Anda gagal dikirim.";
            }
        } else {
            echo "Email yang Anda masukkan tidak valid.";
        }
    } else {
        echo "Semua field wajib diisi.";
    }
} else {
    echo "Invalid request.";
}
?>
