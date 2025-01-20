<?php
// Pastikan PHPMailer telah terinstall
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Autoload PHPMailer
require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Validasi input
    if (empty($name) || empty($email) || empty($message)) {
        echo "Semua field harus diisi!";
        exit;
    }

    // Konfigurasi PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Pengaturan server SMTP
        $fromEmail = "amalmagang@gmail.com";
        $fromSecret = "M@g4ng@ma1!";
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $fromEmail;
        $mail->Password   = $fromSecret; // Jika menggunakan Gmail, gunakan Password Aplikasi
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Menggunakan TLS
        $mail->Port       = 587;
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true,
            ],
        ];

        // Pengirim dan penerima
        $mail->setFrom($fromEmail, 'PT. Amal Solution'); // Email dan nama pengirim
        $mail->addAddress($email, 'Penerima'); // Ganti dengan email tujuan

        // Konten email
        $mail->isHTML(true);
        $mail->Subject = "Pesan dari $name";
        $mail->Body    = "<strong>Nama:</strong> $name<br><strong>Email:</strong> $email<br><strong>Pesan:</strong><br>$message";
        $mail->AltBody = "Nama: $name\nEmail: $email\nPesan:\n$message";

        // Kirim email
        $mail->send();
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href = 'contact.php';</script>";
    } catch (Exception $e) {
      echo "<script>alert('Pesan gagal dikirim. Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
}
?>
