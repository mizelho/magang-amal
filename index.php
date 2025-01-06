<?php
session_start();
include 'koneksi/koneksi.php';
if (isset($_SESSION['kd_cm'])) {
	$kode_cs = $_SESSION['kd_cm'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/main.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Amal Solution</title>
    <style>
         footer {
            background-color: #222;
            color: #fff;
            padding: 40px 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 30px;
        }

        .footer-content .footer-brand h1 {
            font-size: 1.75rem;
            color: #d1d1d1;
        }

        .footer-content .footer-item h3 {
            font-size: 1.25rem;
            color: #fff;
        }

        .footer-content .footer-item p {
            margin: 5px 0;
            color: #bbb;
        }

        .footer-content .footer-item a {
            color: #d1d1d1;
            text-decoration: none;
        }

        .footer-content .footer-item a:hover {
            color: #a6a6a6;
        }
    </style>

</head>

<body>

    <header>
    <nav class="main-nav">
        <div class="brand text-main" style="display: flex; align-items: center;">
            <!-- Logo -->
            <img src="assets/images/logo.png" alt="Logo" style="width: 50px; height: auto; margin-right: 10px;">
            <!-- Nama Perusahaan -->
            <a href="index.php">
                <h1 class="">Amal Solution</h1>
            </a>
        </div>
            <div class="links">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="media.php">Media</a></li>
                    <li><a href="karier.php">Karier</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#tentangkami">Tentang Kami</a></li>
                </ul>
            </div>

                <a href="#">
                    <img src="assets/icons/person.png">
                </a>
                <?php
                if (!isset($_SESSION['user'])) {
                ?>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="user_login.php">Login</a>
                        <a class="dropdown-item" href="register.php">Register</a>
                    </div>
                <?php
                } else {
                ?>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['user']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="proses/logout.php">Log Out</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </nav>
    </header><!-- /header -->

    <main>
        <!-- Banner Section -->
        <section class="banner">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center">
                    <div class="banner-image">
                        <img src="assets/images/home.png" alt="image-banner" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>

        <!-- Sistim Informasi Section -->
        <section class="sistiminformasi py-5">
            <div class="container">
                <div class="text-center mb-4">
                    <h3 class="text-main fw-bold">SISTIM INFORMASI MANAJEMEN</h3>
                </div>
                <br>
                <br>
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-3 mb-3">
                        <div class="card album-card">
                            <img src="assets/images/pct1.jpg" class="card-img-top" alt="pict1">
                            <div class="card-body text-center">
                                <h5 class="card-title">Aplikasi Website</h5>
                                <p class="card-text text-muted">Aplikasi Website adalah perangkat lunak yang diakses melalui peramban web (browser)... </p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal1">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal 1 -->
                    <div class="modal fade" id="infoModal1" tabindex="-1" aria-labelledby="infoModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="infoModalLabel1">Gambar 1: Deskripsi Detail</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Detail dari gambar 1 bisa disini...</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-3 mb-3">
                        <div class="card album-card">
                            <img src="assets/images/pct2.jpg" class="card-img-top" alt="pict2">
                            <div class="card-body text-center">
                                <h5 class="card-title">Aplikasi Desktop</h5>
                                <p class="card-text text-muted">Aplikasi desktop adalah perangkat lunak yang dirancang dan dikembangkan...</p>
                                <a href="#" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-3 mb-3">
                        <div class="card album-card">
                            <img src="assets/images/pct3.jpg" class="card-img-top" alt="pict3">
                            <div class="card-body text-center">
                                <h5 class="card-title">Aplikasi Mobile</h5>
                                <p class="card-text text-muted">Aplikasi mobile adalah perangkat lunak dalam bentuk aplikasi yang dirancang khusus untuk dijalankan...</p>
                                <a href="#" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-3 mb-3">
                        <div class="card album-card">
                            <img src="assets/images/pct4.jpg" class="card-img-top" alt="pict4">
                            <div class="card-body text-center">
                                <h5 class="card-title">Pemetaan Website</h5>
                                <p class="card-text text-muted">Peta situs adalah berkas XML yang berisi daftar halaman pada suatu website...</p>
                                <a href="#" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi & Misi Section -->
        <section id="tentangkami" class="visi-misi py-5 bg-light">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12 mb-4">
                        <h2 class="text-main fw-bold">PT. Gunung Amal Solution International</h2>
                        <p class="text-muted">PT. Gunung Amal Solution International, yang disingkat sebagai PT. AMAL Solution, didirikan pada tanggal 4 Maret 2017, di kota Bandung. Pendiriannya sebagai Perseroan Terbatas (PT) tercatat dalam Akta No. 01. Pengakuan atas status Badan Hukumnya sebagai Perseroan Terbatas secara resmi ditegaskan melalui Keputusan Menteri Hukum dan Hak Asasi Manusia (Kemenkumham) Republik Indonesia dengan Nomor AHU-0011571.AH.01.01 tahun 2017. Perusahaan bergerak dalam bidang Barang dan Jasa, dengan fokus utama pada Layanan Teknologi Informasi (TI). Kegiatan intinya meliputi pengembangan aplikasi komputer berbasis platform web dan mobile, penyediaan layanan konsultasi TI, serta penjualan produk berbasis perangkat lunak.</p>
                    </div>
                </div>
                <div class="row g-4">
            <!-- Kartu Visi -->
            <div class="col-md-6">
                <div class="card border-0 shadow-lg h-100" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body text-center p-5 bg-primary text-white rounded-3">
                        <div class="icon mb-3">
                            <i class="bi bi-eye" style="font-size: 2rem;"></i>
                        </div>
                        <h4 class="card-title fw-bold mb-3">Visi</h4>
                        <p class="card-text fs-5">
                            Hidup untuk Berbagi, Berbagi untuk Kehidupan yang Lebih Baik, dan Menjadi Profesional TI Kelas Dunia.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Kartu Misi -->
            <div class="col-md-6">
                <div class="card border-0 shadow-lg h-100" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body text-center p-5 bg-success text-white rounded-3">
                        <div class="icon mb-3">
                            <i class="bi bi-bullseye" style="font-size: 2rem;"></i>
                        </div>
                        <h4 class="card-title fw-bold mb-3">Misi</h4>
                        <p class="card-text fs-5">
                            Menawarkan solusi kemitraan multi-level untuk kehidupan yang lebih baik dan membantu profesional TI kelas dunia melalui Solusi AMAL.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </main>


            <footer>
        <div class="container">
            <div class="footer-content d-flex justify-content-between align-items-start">
                <div class="footer-brand">
                    <h1 class="text-main">Amal Solution</h1>
                </div>
                <div class="footer-item">
                    <h3 class="text-main">Bisnis</h3>
                    <p><a href="mailto:amalsolution@gmail.com">amalsolution@gmail.com</a></p>
                    <p><a href="tel:+6291219613083">091219613083</a></p>
                    <p>Bandung, Jawa Barat</p>
                </div>
            </div>
            <div class="copyright-section border-top mt-4 pt-3 text-center">
                <p class="text-second">Amal Solution Store Copyright &copy; 2024 All Rights Reserved</p>
            </div>
        </div>
    </footer>



    <script>
        AOS.init();

        // Scroll to "Tentang Kami" section
        document.querySelector('a[href="#tentangkami"]').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('tentangkami').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>

</html>
