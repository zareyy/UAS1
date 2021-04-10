<?php 
require_once 'config.php';
// session_start();

$id = $_POST['id'];
$jenis_restoran = $_POST['resto'];
$jenis_makanan= $_POST['makanan'];
$harga_makanan= $_POST['harga'];
$nama_lengkap= $_POST['nama'];
$nomor_hp = $_POST['nohp'];
$user_email= $_POST['email'];

$query = mysqli_query($con,"UPDATE restoran SET resto='$jenis_restoran', makanan='$jenis_makanan', harga='$harga_makanan', nama='$nama_lengkap', nohp='$nomor_hp', email='$user_email' WHERE id='$id'");

if($query) {
	echo "<script>alert('Data berhasil diedit!'); window.location='page.php';</script>";
} else {
	echo "<script>alert('Data gagal diedit');</script>";
}



?>
