<?php
session_start(); // Make sure the session starts
include 'koneksi/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <style>
   /* General Styles */
   body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f9f9f9, #eaeff2);
            margin: 0;
            padding: 0;

h1, h2, h3, h4, h5, h6 {
  font-family: 'Roboto', sans-serif;
  color: #222;
}
p {
  line-height: 1.6;
  margin-bottom: 1rem;
}

a {
  text-decoration: none;
  transition: color 0.3s ease-in-out;
}

a:hover {
  color: #ffc107;
}

/* Navigation Bar */
.main-nav {
  background-color: #ffffff;
  padding: 10px 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.main-nav .brand {
  display: flex;
  align-items: center;
}

.main-nav .brand img {
  width: 50px;
  margin-right: 10px;
}

.main-nav h1 {
  font-size: 1.5rem;
  color: #222;
}

.main-nav .links ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

.main-nav .links ul li {
  margin: 0 15px;
}

.main-nav .links ul li a {
  font-weight: 500;
  color: #555;
}

.main-nav .links ul li a:hover {
  color: #ffc107;
}

.icon-for-user a {
  color: #555;
  font-size: 1.2rem;
}

.icon-for-user a:hover {
  color: #ffc107;
}

/* Banner Section */
.banner img {
  width: 100%;
  max-height: 500px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 20px;
}

/* Sistim Informasi Section */
.sistiminformasi {
  background-color: #ffffff;
  padding: 40px 0;
}

.sistiminformasi h3 {
  color: #222;
}

.card {
  border: 1px solid #ddd;
  border-radius: 10px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover {
  transform: translateY(-10px);
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.card .card-title {
  font-size: 1.2rem;
  color: #333;
}

.card .card-text {
  font-size: 0.9rem;
  color: #666;
}

.card .btn-primary {
  background-color: #ffc107;
  border: none;
  color: #fff;
}

.card .btn-primary:hover {
  background-color: #ffca2c;
  color: #000;
}

/* Visi & Misi Section */
#tentangkami {
  padding: 60px 20px;
  background: linear-gradient(135deg, #eef2f3, #d9e4f5); /* Gradient background for a modern look */
  color: #333; /* Default text color for contrast */
}

#tentangkami h2 {
  color: #222; /* Darker for strong contrast */
  margin-bottom: 40px;
  text-transform: uppercase; /* Add emphasis */
  font-weight: bold;
  font-size: 2.5rem; /* Larger font for impact */
  text-align: center;
}

#tentangkami .card {
  border: none;
  text-align: center;
  transition: transform 0.4s ease, box-shadow 0.4s ease;
  padding: 30px;
  border-radius: 15px; /* Smooth, elegant corners */
  background: #ffffff; /* Clean white background for contrast */
  color: #555; /* Neutral text color */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1); /* Elegant shadow */
}

#tentangkami .card:hover {
  transform: translateY(-12px); /* Smooth lift effect */
  box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15); /* More pronounced shadow on hover */
}

#tentangkami .card .icon {
  font-size: 3.5rem; /* Larger for visibility */
  color: #fff; /* White icon color */
  margin-bottom: 20px;
  padding: 20px;
  border-radius: 50%; /* Circular background */
  display: inline-block;
  transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transitions */
}

#tentangkami .bg-primary {
  background: linear-gradient(135deg, #6a9ae2, #4a90e2); /* Modern gradient blue */
}

#tentangkami .bg-success {
  background: linear-gradient(135deg, #58c686, #42a35c); /* Modern gradient green */
}

#tentangkami .card:hover .icon {
  transform: rotate(15deg) scale(1.1); /* Add a dynamic hover effect */
  background: rgba(255, 255, 255, 0.3); /* Subtle highlight */
}

#tentangkami .card .text {
  font-size: 1.1rem; /* Slightly larger text */
  line-height: 1.6; /* Better readability */
  color: #444; /* Ensure text stands out */
}
/* Footer */
footer {
            background: #1e2a47;
            color: #bbb;
            padding: 40px 20px;
            text-align: center;
        }

        footer .footer-brand h1 {
            font-size: 1.75rem;
            color: #fff;
            margin-bottom: 15px;
        }

        footer a {
            color: #ffca2c;
            text-decoration: none;
        }

        footer a:hover {
            color: #ffd966;
        }

        footer p {
            margin: 5px 0;
        }

        .copyright-section {
            margin-top: 20px;
            border-top: 1px solid #444;
            padding-top: 20px;
            font-size: 0.9rem;
        }

/* Utility Classes */
.text-main {
  color: #222;
}

.text-second {
  color: #666;
}

.text-muted {
  color: #888;
}

/* Responsive Styles */
@media (max-width: 768px) {
  .main-nav {
    flex-wrap: wrap;
  }

  .main-nav .links ul {
    flex-direction: column;
    align-items: center;
  }

  .banner img {
    max-height: 300px;
  }

  #tentangkami .card {
    margin-bottom: 20px;
  }
}



    .icon-for-user a {
      color: #f8f9fa;
    }

    .icon-for-user a:hover {
      color: #ffc107;
    }
  </style>
  <title>Amal Solution</title>
</head>

<body>
  <header>
    <nav class="main-nav d-flex justify-content-between align-items-center">
      <div class="brand text-main">
        <!-- Logo -->
        <img src="assets/images/logo.png" alt="Logo">
        <!-- Nama Perusahaan -->
        <a href="index.php" class="text-decoration-none">
          <h1 class="m-0">Amal Solution</h1>
        </a>
      </div>
      <div class="links">
        <ul class="d-flex">
          <li><a href="index.php">Home</a></li>
          <li><a href="media.php">Media</a></li>
          <li><a href="karier.php">Karier</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="#tentangkami">Tentang Kami</a></li>
        </ul>
      </div>
      <div class="icon-for-user">
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
  </header>

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
                <p class="card-text fs-5">Hidup untuk Berbagi, Berbagi untuk Kehidupan yang Lebih Baik, dan Menjadi Profesional TI Kelas Dunia.
                </p></p>
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
                <p class="card-text fs-5"> Menawarkan solusi kemitraan multi-level untuk kehidupan yang lebih baik dan membantu profesional TI kelas dunia melalui Solusi AMAL.
                </p></p>
              </div>
            </div>
          </div>
          <!-- Kenapa Memilih Kami -->
<section id="kenapamemilihkami" class="py-5 bg-white">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="text-main fw-bold">Kenapa Memilih Kami?</h2>
      <p class="text-muted">Keunggulan kami dalam memberikan solusi teknologi terbaik untuk kebutuhan Anda.</p>
    </div>
    <div class="row g-4">
      <!-- Keunggulan 1 -->
      <div class="col-md-4 text-center">
        <div class="card border-0 shadow-sm h-100 p-4">
          <div class="icon mb-3">
            <i class="bi bi-lightbulb" style="font-size: 3rem; color: #ffc107;"></i>
          </div>
          <h5 class="fw-bold">Inovasi Berkelanjutan</h5>
          <p>Kami selalu mencari cara baru dan kreatif untuk memberikan solusi teknologi yang relevan dan efisien.</p>
        </div>
      </div>
      <!-- Keunggulan 2 -->
      <div class="col-md-4 text-center">
        <div class="card border-0 shadow-sm h-100 p-4">
          <div class="icon mb-3">
            <i class="bi bi-person-check" style="font-size: 3rem; color: #28a745;"></i>
          </div>
          <h5 class="fw-bold">Tim Profesional</h5>
          <p>Tim kami terdiri dari profesional yang berpengalaman dan berdedikasi untuk memberikan yang terbaik.</p>
        </div>
      </div>
      <!-- Keunggulan 3 -->
      <div class="col-md-4 text-center">
        <div class="card border-0 shadow-sm h-100 p-4">
          <div class="icon mb-3">
            <i class="bi bi-globe" style="font-size: 3rem; color: #007bff;"></i>
          </div>
          <h5 class="fw-bold">Layanan Global</h5>
          <p>Kami siap melayani kebutuhan teknologi Anda di mana saja, kapan saja, dengan kualitas yang konsisten.</p>
        </div>
      </div>
    </div>
  </div>
</section>
  </main>

  <footer>
        <div class="footer-brand">
            <img src="assets/images/logo.png" alt="Logo" style="width: 40px;">
            <h1>Amal Solution</h1>
        </div>
        <div class="contact-details">
            <p>Bandung, Jawa Barat</p>
            <p><a href="mailto:amalsolution@gmail.com">amalsolution@gmail.com</a></p>
            <p><a href="tel:+6291219613083">+6281219613083</a></p>
        </div>
        <div class="social-links">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
        </div>
        <div class="copyright">
            &copy; 2024 Amal Solution Store. All Rights Reserved.
        </div>
    </footer>
</body>

</html>
