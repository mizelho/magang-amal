<?php
session_start(); 
include 'koneksi/koneksi.php';
if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    header('HTTP/1.0 404 Not Found');
    include('404.php');
    exit;
}

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


  <title>Amal Solution</title>
</head>

<body>
  <header>
  <?php include './components/navbar.php'; ?>
  </header>
  
  <main>
    <section class="banner">
      <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
          <div class="banner-image">
            <img src="assets/images/home.png" alt="image-banner" class="img-fluid rounded">
          </div>
        </div>
      </div>
    </section>
    <section class="sistiminformasi py-5">
      <div class="container">
        <div class="text-center mb-4">
          <h3 class="text-main fw-bold">SISTEM INFORMASI MANAJEMEN</h3>
        </div>

        <div class="row g-4">
          <div class="col-md-3 mb-3">
            <div class="card album-card">
              <img src="assets/images/pct1.jpg" class="card-img-top" alt="pict1">
              <div class="card-body text-center">
                <h5 class="card-title">Aplikasi Website</h5>
                <p class="card-text text-muted text-truncate" style="max-height: 60px;">Aplikasi Website adalah perangkat lunak yang diakses melalui peramban web (browser). Aplikasi ini memungkinkan pengguna untuk mengakses data dan layanan secara online.</p>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal1">Selengkapnya</a>
              </div>
            </div>
          </div>

          <div class="modal fade" id="infoModal1" tabindex="-1" aria-labelledby="infoModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="infoModalLabel1">Aplikasi Website: Deskripsi Detail</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Aplikasi Website adalah perangkat lunak yang memungkinkan interaksi pengguna dengan layanan online melalui browser. Contohnya termasuk sistem manajemen informasi dan aplikasi e-commerce.</p>
                  <img src="assets/images/pct1.jpg" class="img-fluid" alt="pict1">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card album-card">
              <img src="assets/images/pct2.jpg" class="card-img-top" alt="pict2">
              <div class="card-body text-center">
                <h5 class="card-title">Aplikasi Desktop</h5>
                <p class="card-text text-muted text-truncate" style="max-height: 60px;">Aplikasi desktop adalah perangkat lunak yang dirancang dan dikembangkan untuk dijalankan pada sistem operasi desktop, seperti Windows atau macOS.</p>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal2">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="modal fade" id="infoModal2" tabindex="-1" aria-labelledby="infoModalLabel2" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="infoModalLabel2">Aplikasi Desktop: Deskripsi Detail</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Aplikasi desktop seperti Microsoft Word atau Adobe Photoshop dirancang untuk digunakan langsung pada komputer dan memiliki fitur lebih kompleks dibandingkan aplikasi berbasis web.</p>
                  <img src="assets/images/pct2.jpg" class="img-fluid" alt="pict2">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card album-card">
              <img src="assets/images/pct3.jpg" class="card-img-top" alt="pict3">
              <div class="card-body text-center">
                <h5 class="card-title">Aplikasi Mobile</h5>
                <p class="card-text text-muted text-truncate" style="max-height: 60px;">Aplikasi mobile adalah perangkat lunak yang dirancang khusus untuk dijalankan pada perangkat mobile seperti smartphone dan tablet.</p>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal3">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="modal fade" id="infoModal3" tabindex="-1" aria-labelledby="infoModalLabel3" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="infoModalLabel3">Aplikasi Mobile: Deskripsi Detail</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Aplikasi mobile seperti Instagram dan WhatsApp dirancang untuk memberikan kenyamanan pada pengguna perangkat mobile dengan tampilan yang responsif dan intuitif.</p>
                  <img src="assets/images/pct3.jpg" class="img-fluid" alt="pict3">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card album-card">
              <img src="assets/images/pct4.jpg" class="card-img-top" alt="pict4">
              <div class="card-body text-center">
                <h5 class="card-title">Pemetaan Website</h5>
                <p class="card-text text-muted text-truncate" style="max-height: 60px;">Peta situs adalah berkas XML yang berisi daftar halaman pada suatu website untuk memudahkan pengindeksan oleh mesin pencari.</p>
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#infoModal4">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="modal fade" id="infoModal4" tabindex="-1" aria-labelledby="infoModalLabel4" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="infoModalLabel4">Pemetaan Website: Deskripsi Detail</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Pemetaan website membantu struktur navigasi website lebih mudah dipahami oleh mesin pencari dan pengunjung situs. Peta situs juga mempercepat proses pengindeksan halaman.</p>
                  <img src="assets/images/pct4.jpg" class="img-fluid" alt="pict4">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section id="tentangkami" class="visi-misi py-5 bg-light">
      <div class="container">
        <div class="row text-center">
          <div class="col-12 mb-4">
            <h2 class="text-main fw-bold">PT. Gunung Amal Solution International</h2>
            <p class="text-muted">PT. Gunung Amal Solution International, yang disingkat sebagai PT. AMAL Solution, didirikan pada tanggal 4 Maret 2017, di kota Bandung. Pendiriannya sebagai Perseroan Terbatas (PT) tercatat dalam Akta No. 01. Pengakuan atas status Badan Hukumnya sebagai Perseroan Terbatas secara resmi ditegaskan melalui Keputusan Menteri Hukum dan Hak Asasi Manusia (Kemenkumham) Republik Indonesia dengan Nomor AHU-0011571.AH.01.01 tahun 2017. Perusahaan bergerak dalam bidang Barang dan Jasa, dengan fokus utama pada Layanan Teknologi Informasi (TI). Kegiatan intinya meliputi pengembangan aplikasi komputer berbasis platform web dan mobile, penyediaan layanan konsultasi TI, serta penjualan produk berbasis perangkat lunak.</p>
          </div>
        </div>
        <div class="row g-4">
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
    <section id="kenapamemilihkami" class="py-5 bg-white">
      <div class="container">
        <div class="text-center mb-4">
          <h2 class="text-main fw-bold">Kenapa Memilih Kami?</h2>
          <p class="text-muted">Keunggulan kami dalam memberikan solusi teknologi terbaik untuk kebutuhan Anda.</p>
        </div>
        <div class="row g-4">
          <div class="col-md-4 text-center">
            <div class="card border-0 shadow-sm h-100 p-4">
              <div class="icon mb-3">
                <i class="bi bi-lightbulb" style="font-size: 3rem; color: #ffc107;"></i>
              </div>
              <h5 class="fw-bold">Inovasi Berkelanjutan</h5>
              <p>Kami selalu mencari cara baru dan kreatif untuk memberikan solusi teknologi yang relevan dan efisien.</p>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="card border-0 shadow-sm h-100 p-4">
              <div class="icon mb-3">
                <i class="bi bi-person-check" style="font-size: 3rem; color: #28a745;"></i>
              </div>
              <h5 class="fw-bold">Tim Profesional</h5>
              <p>Tim kami terdiri dari profesional yang berpengalaman dan berdedikasi untuk memberikan yang terbaik.</p>
            </div>
          </div>
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
  <?php include './components/footer.php'; ?>

</body>
</html>
