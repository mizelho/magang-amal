<?php
session_start();
include '../koneksi/koneksi.php';
if (!isset($_SESSION['admin'])) {
	header('location:index.php');
}
?>

<?php
$kode = mysqli_query($conn, "SELECT kode_produk FROM produk ORDER BY kode_produk DESC");
$data = mysqli_fetch_assoc($kode);
if ($data) {
	$num = substr($data['kode_produk'], 1, 4);
	$add = (int) $num + 1;
	if (strlen($add) == 1) {
		$format = "P000" . $add;
	} else if (strlen($add) == 2) {
		$format = "P00" . $add;
	} else if (strlen($add) == 3) {
		$format = "P0" . $add;
	} else {
		$format = "P" . $add;
	}
} else {
	// If no existing records, start from P0001
	$format = "P0001";
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
	<title>Tambah Produk</title>
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

	<main>
		<div class="container">
			<div class="text-prod">
				<h2 class="text-main"><b>Tambah Produk</b></h2>
			</div>

			<div class="tam-prod">
				<form action="proses/tm_produk.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="exampleInputFile">Pilih Gambar </label>
						<input type="file" id="exampleInputFile" name="files">
					</div>
					<br>
					<div class="row">
						<div class="col-md-14">
							<div class="form-group">
								<label for="exampleInputEmail1">Kode Produk</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" disabled value="<?= $format; ?>">
								<input type="hidden" name="kode" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" value="<?= $format; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-14">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Produk</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" name="nama">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-14">
							<div class="form-group">
								<label for="exampleInputEmail1">Harga</label>
								<input type="number" class="form-control" id="exampleInputEmail1" placeholder="Contoh : 12000" name="harga">
								<p class="help-block">Isi Harga tanpa menggunakan Titik(.) atau Koma (,)</p>
							</div>
						</div>
					</div>
					<br>
					<div class="button-wrapper">
						<button type="submit" class="btn btn-dark text-second"> Tambah</button>
					</div>
					<br>
					<div class="button-wrapper">
						<a href="m_produk.php" class="btn btn-dark text-second">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</main>

	<br><br><br><br><br>
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