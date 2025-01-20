<?php
session_start();
$loggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Karier</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header>
        <?php include './components/navbar.php'; ?>
    </header>

    <main>
    <section class="hero" style="background: linear-gradient(135deg, #6a5acd, #4b0082);">
    <h2>Karier di Amal Solution</h2>
    <p>Temukan peluang karier yang menantang dan inspiratif di dunia teknologi!</p>
</section>

        <section class="why-join-section">
            <h2>Mengapa Harus Menjadi Bagian Dari Kami</h2>
            <div class="container">
                <div class="why-join-content">
                    <div class="why-join-text">
                        <h4>1. Menjadi Tenaga IT Profesional</h4>
                        <p>Mengembangkan seseorang menjadi seorang profesional di bidang Teknologi Informasi (TI) melibatkan kombinasi pendidikan formal, pengembangan keterampilan, pengalaman praktis, dan sikap yang tepat.</p>
                        <h4>2. Kekeluargaan</h4>
                        <p>Menciptakan lingkungan kerja yang hangat, mendukung, dan memupuk rasa kebersamaan di antara anggota tim atau rekan kerja.</p>
                        <h4>3. Loyalitas</h4>
                        <p>Memenuhi kebutuhan dan harapan klien secara konsisten, merawat hubungan jangka panjang, dan tetap teguh dalam melayani mereka.</p>
                        <h4>4. Pengembangan Diri</h4>
                        <p>Ruang untuk belajar keterampilan baru dan mengasah kemampuan.</p>
                    </div>
                    <div class="why-join-image">
                        <img src="assets/images/bagian.jpg" alt="Team Photo">
                    </div>
                </div>
            </div>
        </section>

        <!-- Peluang Karier Section -->
        <section class="karier-section">
    <h2>Peluang Karier</h2>
    <p>Selamat datang di halaman karier kami! Inilah tempat di mana peluang dan impian menjadi kenyataan. Bergabunglah dengan tim kami yang berdedikasi untuk menciptakan masa depan gemilang.</p>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Software Engineer</h4>
                        <p class="card-text">Deskripsi Pekerjaan: Membangun dan memelihara aplikasi berbasis web dan mobile.</p>
                        <p class="card-text">Kualifikasi: Pengalaman minimal 2 tahun, menguasai PHP, JavaScript, dan Framework Laravel.</p>
                        <a href="#" class="btn btn-primary" id="apply-software">Lamar Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">UI/UX Designer</h4>
                        <p class="card-text">Deskripsi Pekerjaan: Mendesain antarmuka yang menarik dan pengalaman pengguna yang intuitif.</p>
                        <p class="card-text">Kualifikasi: Pengalaman minimal 1 tahun, menguasai Figma atau Adobe XD.</p>
                        <a href="#" class="btn btn-primary" id="apply-ux">Lamar Sekarang</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">IT Consultant</h4>
                        <p class="card-text">Deskripsi Pekerjaan: Memberikan solusi teknologi untuk kebutuhan klien.</p>
                        <p class="card-text">Kualifikasi: Pengalaman minimal 3 tahun di bidang konsultasi teknologi.</p>
                        <a href="#" class="btn btn-primary" id="apply-consultant">Lamar Sekarang</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </main>
    <?php include './components/footer.php'; ?>

    <script>
        // Fungsi untuk menampilkan alert
        function showAlert() {
            Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: 'Please log in first to apply!',
                confirmButtonText: 'OK'
            });
        }

        document.getElementById('apply-software').addEventListener('click', function(e) {
            e.preventDefault();
            <?php if (!$loggedIn) { ?>
                showAlert();
            <?php } else { ?>
                window.location.href = 'lamar.php';
            <?php } ?>
        });

        document.getElementById('apply-ux').addEventListener('click', function(e) {
            e.preventDefault();
            <?php if (!$loggedIn) { ?>
                showAlert();
            <?php } else { ?>
                window.location.href = 'lamar.php';
            <?php } ?>
        });

        document.getElementById('apply-consultant').addEventListener('click', function(e) {
            e.preventDefault();
            <?php if (!$loggedIn) { ?>
                showAlert();
            <?php } else { ?>
                window.location.href = 'lamar.php';
            <?php } ?>
        });
    </script>
</body>

</html>
