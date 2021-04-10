<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require_once 'config.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($con,"select * from user where Nama='$username' and Password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

		// buat session login dan username
	$_SESSION['nama'] = $data['Nama'];
	$_SESSION['password'] = $data['Password'];
	
	header("location:page.php");

}else{
	header("location:index.php?pesan=gagal");
	

}
?>
