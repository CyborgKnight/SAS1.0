<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn, "select * from multi_user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "admin") {

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/halaman_admin.php");

		// cek jika user login sebagai tu
	} else if ($data['level'] == "TU") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "TU";
		// alihkan ke halaman dashboard tu
		header("location:tu/halaman_tu.php");

		// cek jika user login sebagai siswa
	} else if ($data['level'] == "siswa") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "siswa";
		// alihkan ke halaman dashboard siswa
		header("location:siswa/halaman_siswa.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
} else {
	header("location:index.php?pesan=berhasil");
}
