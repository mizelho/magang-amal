

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<title>Amal Solution</title>
</head>

<body>

	<header>
		<nav class="main-nav">
			<div class="brand text-main">
				<a href="index.php">
					<h1>Amal Solution</h1>
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
			<div class="icon-for-user">
				<a href="keranjang.php" style="padding-right: 40px;">
					<img src="assets/icons/check.png">
				</a>
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
		<!--BANNER-->
		<section class="banner">
		<div class="row justify-content-center align-items-center" style="height: 100%;">
    <div class="col-12 text-center">
        <div class="banner-image" style="max-width: 100%; height: auto;">
            <img src="assets/images/home.png" alt="image-banner" style="width: 100%; max-height: 600px; object-fit: cover; border-radius: 10px;">
        </div>
    </div>
</div>
		</section>

		<section class="sistiminformasi">
    <br>
    <br>
    <section class="sistiminformasi">
    <div class="container">
        <div class="text-sistiminformasi">
            <div class="title" style="text-align: center; margin-bottom: 20px;">
                <h3 class="text-main"><span>SISTIM INFORMASI</span> MANAJEMEN</h3>
            </div>
        </div>
        <div class="sistiminformasi-images" style="display: flex; gap: 20px; overflow: hidden; margin-top: 30px; justify-content: space-between;">
            <div class="sistiminformasi-image" style="flex: 1; width: 150px; height: 150px;">
                <a href="#">
                    <img src="assets/images/pct1.jpg" alt="pict1" style="width: 100%; height: 100%; object-fit: cover;">
                </a>
                <div style="text-align: center; margin-top: 10px;">
                    <p>Gambar 1: Deskripsi gambar 1</p>
                    <a href="#" class="btn">Selengkapnya</a>
                </div>
            </div>
            <div class="sistiminformasi-image" style="flex: 1; width: 150px; height: 150px;">
                <a href="#">
                    <img src="assets/images/pct2.jpg" alt="pict2" style="width: 100%; height: 100%; object-fit: cover;">
                </a>
                <div style="text-align: center; margin-top: 10px;">
                    <p>Gambar 2: Deskripsi gambar 2</p>
                    <a href="#" class="btn">Selengkapnya</a>
                </div>
            </div>
            <div class="sistiminformasi-image" style="flex: 1; width: 150px; height: 150px;">
                <a href="#">
                    <img src="assets/images/pct3.jpg" alt="pict3" style="width: 100%; height: 100%; object-fit: cover;">
                </a>
                <div style="text-align: center; margin-top: 10px;">
                    <p>Gambar 3: Deskripsi gambar 3</p>
                    <a href="#" class="btn">Selengkapnya</a>
                </div>
            </div>
            <div class="sistiminformasi-image" style="flex: 1; width: 150px; height: 150px;">
                <a href="#">
                    <img src="assets/images/pct4.jpg" alt="pict4" style="width: 100%; height: 100%; object-fit: cover;">
                </a>
                <div style="text-align: center; margin-top: 10px;">
                    <p>Gambar 4: Deskripsi gambar 4</p>
                    <a href="#" class="btn">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>

				</div>
			</div>
		</section>
<br>
<br>
<br>
<br>
<br>		<!--gambar kami-->
		<section class="products-section">
			<div class="container">
				<div class="text-products">
					<div class="title-product">
						<h2 class="text-main">TENTANG KAMI</h2>
					</div>
					<div class="text-show-all">
						<a href="tentangkami.php">
							<p>LIHAT SEMUA <img src="assets/icons/arrow-2.png" alt="icon-arrow"></p>
						</a>
					</div>
				

		</section>
		<section class="tentangkami" id="tentangkami">
			<div class="container">
				<div class="text-tentangkami">
					<h2 class="text-main">TENTANG KAMI</h2>
				</div>
				<div class="deskripsi">
				<p>
				PT. Gunung Amal Solution International, yang disingkat sebagai PT. AMAL Solution, didirikan pada tanggal 4 Maret 2017, di kota Bandung. Pendiriannya sebagai Perseroan Terbatas (PT) tercatat dalam Akta No. 01. Pengakuan atas status Badan Hukumnya sebagai Perseroan Terbatas secara resmi ditegaskan melalui Keputusan Menteri Hukum dan Hak Asasi Manusia (Kemenkumham) Republik Indonesia dengan Nomor AHU-0011571.AH.01.01 tahun 2017. Perusahaan bergerak dalam bidang Barang dan Jasa, dengan fokus utama pada Layanan Teknologi Informasi (TI). Kegiatan intinya meliputi pengembangan aplikasi komputer berbasis platform web dan mobile, penyediaan layanan konsultasi TI, serta penjualan produk berbasis perangkat lunak.

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">Visi</a></h4>
              <p class="description">Hidup untuk Berbagi, Berbagi untuk Kehidupan yang Lebih Baik dan Menjadi Profesional TI Kelas Dunia</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">Misi</a></h4>
               <p class="description">Menawarkan solusi kemitraan multi-level sebagai sistem berbagi untuk kehidupan yang lebih baik dan Membantu profesional TI kelas dunia melalui Solusi AMAL.</p>
            </div>

          
          </div>

          <div class="col-lg-6 background order-lg-2 order-1" data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>

		</section>

	</main>


	<footer>
		<div class="container">
			<div class="footer-content">
				<div class="footer-brand">
					<div>
						<h1 class="text-main">Amal Solution</h1>
					</div>
				</div>

				<div class="footer-item">
					<div>
						<h3 class="text-main">Bisnis</h3>
						<p><a href="#">amalsolution@gmail.com</a></p>
						<p><a href="#">081219613083</a></p>
						<p><a href="#">Bandung jawa barat</a></p>
					</div>
				</div>
			</div>

			<div class="copyright-section border-top">
				<div class="row">
					<div class="copyright-content text-center mt-4">
						<p class="text-second">© 2024 amalsolution. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>