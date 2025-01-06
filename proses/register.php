<?php
include '../koneksi/koneksi.php';
$kode = mysqli_query($conn, "SELECT kode_pelamar from pelamar order by kode_pelamar desc");
$data = mysqli_fetch_assoc($kode);
$num = substr($data['kode_pelamar'], 1, 4);
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

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$konfirmasi = $_POST['konfirmasi'];



$hash = password_hash($password, PASSWORD_DEFAULT);

if ($password == $konfirmasi) {
	$cek = mysqli_query($conn, "SELECT username from pelamar where username = '$username'");;
	$jml = mysqli_num_rows($cek);

	if ($jml == 1) {
		echo "
		<script>
		alert('USERNAME SUDAH DIGUNAKAN');
		window.location = '../register.php';
		</script>
		";
		die;
	}

	$result = mysqli_query($conn, "INSERT INTO pelamar VALUES('$format','$nama', '$email', '$username', '$hash')");
	if ($result) {
		echo "
		<script>
		alert('REGISTER BERHASIL');
		window.location = '../user_login.php';
		</script>
		";
	}
} else {
	echo "
	<script>
	alert('KONFIRMASI PASSWORD TIDAK SAMA');
	window.location = '../register.php';
	</script>
	";
}
