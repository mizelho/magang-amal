<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $job = htmlspecialchars($_POST['job']);
    $cv = $_FILES['cv'];

    // Direktori penyimpanan file CV
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadFile = $uploadDir . basename($cv['name']);

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Status Lamaran</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-color: #f8f9fa;
                margin: 0;
            }

            .card {
                max-width: 500px;
                margin: 20px;
            }

            .card h1 {
                font-size: 1.75rem;
            }

            .btn-back {
                text-decoration: none;
                font-size: 14px;
                color: #6c757d;
            }

            .btn-back:hover {
                color: #343a40;
            }
        </style>
    </head>

    <body>
        <div class="card shadow p-4">
            <?php
            if (move_uploaded_file($cv['tmp_name'], $uploadFile)) {
                // Kirim email konfirmasi
                $to = $email;
                $subject = "Konfirmasi Lamaran Pekerjaan";
                $message = "
                    Hai $name,

                    Terima kasih telah melamar posisi $job di Amal Solution. Kami akan menghubungi Anda jika sesuai dengan kualifikasi.

                    Salam,
                    Amal Solution
                ";
                $headers = "From: no-reply@amalsolution.com";

                if (mail($to, $subject, $message, $headers)) {
                    ?>
                    <div class="text-center">
                        <h1 class="text-success">Lamaran Berhasil Dikirim</h1>
                        <p>Terima kasih, <strong><?php echo $name; ?></strong>. Lamaran Anda untuk posisi <strong><?php echo $job; ?></strong> telah kami terima.</p>
                        <p>Kami akan menghubungi Anda melalui email di <strong><?php echo $email; ?></strong>.</p>
                        <a href="index.php" class="btn btn-primary mt-3">Kembali ke Halaman Utama</a>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="text-center">
                        <h1 class="text-danger">Gagal Mengirim Email</h1>
                        <p>Mohon maaf, terjadi kesalahan saat mengirim email konfirmasi. Silakan coba lagi.</p>
                        <a href="lamar.php?job=<?php echo urlencode($job); ?>" class="btn btn-warning mt-3">Kembali ke Form Lamaran</a>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="text-center">
                    <h1 class="text-danger">Gagal Mengunggah CV</h1>
                    <p>Mohon maaf, terjadi kesalahan saat mengunggah CV Anda. Silakan coba lagi.</p>
                    <a href="lamar.php?job=<?php echo urlencode($job); ?>" class="btn btn-warning mt-3">Kembali ke Form Lamaran</a>
                </div>
                <?php
            }
            ?>
        </div>
    </body>

    </html>
    <?php
}
