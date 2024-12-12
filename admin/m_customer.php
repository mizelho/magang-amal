<?php
session_start();
include '../koneksi/koneksi.php';
if (!isset($_SESSION['admin'])) {
	header('location:index.php');
}
?>

<?php
if (isset($_GET['page'])) {
	$kode = $_GET['kode'];
	$result = mysqli_query($conn, "DELETE FROM customer WHERE kode_customer = '$kode'");

	if ($result) {
		echo "
		<script>
		alert('DATA BERHASIL DIHAPUS');
		window.location = 'm_customer.php';
		</script>
		";
	}
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
	<title>Data Pembeli</title>
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
					<li class="active"><a href="m_customer.php">Data Pembeli</a></li>
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
				<h2 class="text-main"><b>Data Customer</b></h2>
			</div>
			<table class="table table-borderless">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Kode Customer</th>
						<th scope="col">Nama</th>
						<th scope="col">Email</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$result = mysqli_query($conn, "SELECT * FROM customer order by kode_customer asc");
					$no = 1;
					while ($row = mysqli_fetch_assoc($result)) {
					?>
						<tr>
							<th scope="row"><?php echo $no; ?></th>
							<td><?= $row['kode_customer'];  ?></td>
							<td><?= $row['nama'];  ?></td>
							<td><?= $row['email'];  ?></td>
							<td><a href="m_customer.php?kode=<?php echo $row['kode_customer']; ?>&page=del" class="btn btn-dark text-second" onclick="return confirm('Yakin Ingin Menghapus Data ?')">Hapus</a></td>
						</tr>
					<?php
						$no++;
					}
					?>
				</tbody>
			</table>
		</div>
	</main>

	<br><br><br><br><br><br><br><br><br><br><br>
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