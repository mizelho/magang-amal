<?php
session_start();
include '../koneksi/koneksi.php';
if (!isset($_SESSION['admin'])) {
	header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<title>Halaman Admin</title>
</head>

<body>
	<header>
		<nav class="main-nav">
			<div class="brand text-main">
				<a href="index.php">
					<h1>Dwaters - Admin</h1>
				</a>
			</div>
			<div class="links">
				<ul>
					<li><a href="m_customer.php">Data Pembeli</a></li>
					<li><a href="m_produk.php">Data Produk</a></li>
				</ul>
			</div>
			<div class="icon-for-user">
				<a href="#">
					<img src="../assets/icons/person.png">
				</a>
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="proses/logout.php">Log Out</a>
				</div>
			</div>
		</nav>
	</header><!-- /header -->

	<br><br><br><br><br><br><br><br><br>
	<main>
		<div class="container text-center" style="padding-bottom: 300px;">
			<h2 class='text-black text-second'><b> Selamat datang di website Admin Dwaters Store!</b></h2><br>
			<h3 class='text-black text-second'> Ini adalah tempat untuk mengelola pembeli dan produk</h3>
			<h3 class='text-black text-second'> Anda dapat dengan mudah memerika data pembeli, menambahkan, menghapus, dan mengupdate produk.</h3>
			<h3 class='text-black text-second'> Terimakasih telah menjadi bagian dari Dwaters Store!</h3>
		</div>
	</main>


	<br>
	<footer>
		<div class="container">
			<div class="footer-content">
				<div class="footer-brand">
					<div>
						<h1 class="text-main">Dwaters</h1>
					</div>
				</div>

				<div class="footer-item">
					<div>
						<h3 class="text-main">Bisnis</h3>
						<p><a href="#">dwaters@gmail.com</a></p>
						<p><a href="#">098-765-4321</a></p>
						<p><a href="#">Bansel, Bandung Selatan</a></p>
					</div>
				</div>
			</div>
			<div class="copyright-section border-top">
				<div class="row">
					<div class="copyright-content text-center mt-4">
						<p class="text-second">Dwaters Store Copyright &copy; 2023 All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>