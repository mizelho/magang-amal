<?php
session_start();
include '../koneksi/koneksi.php';
if (!isset($_SESSION['admin'])) {
	header('location:index.php');
}
?>

<?php
// generate kode material
$kode_produk = $_GET['kode'];
$kode = mysqli_query($conn, "SELECT * from produk where kode_produk = '$kode_produk'");
$data = mysqli_fetch_assoc($kode);

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<title>Edit Produk</title>
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
				<h2 class="text-main"><b>Edit Produk</b></h2>
			</div>

			<div class="tam-prod">
				<form action="proses/edit_produk.php" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="exampleInputFile"><img src="../assets/produk/<?= $data['image']; ?>" width="100"></label>
						<input type="file" id="exampleInputFile" name="files"><br><br>
						<p class="help-block">Pilih Gambar untuk Produk</p>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Kode Produk</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" disabled value="<?= $data['kode_produk']; ?>">
								<input type="hidden" name="kode" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" value="<?= $data['kode_produk']; ?>">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Produk</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Produk" name="nama" value="<?= $data['nama']; ?>">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Harga</label>
								<input type="number" class="form-control" id="exampleInputEmail1" placeholder="masukkan Harga" name="harga" value="<?= $data['harga']; ?>">
							</div>
						</div>
					</div>

					<br>
					<div class="button-wrapper">
						<button type="submit" class="btn btn-dark text-second">Edit</button>
					</div>
					<br>
					<div class="button-wrapper">
						<a href="m_produk.php" class="btn btn-dark text-second ">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</main>

	<br><br><br><br>
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