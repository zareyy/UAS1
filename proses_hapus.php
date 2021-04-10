<?php 
require_once 'config.php';
$id = $_GET['id'];
$query = mysqli_query($con,"DELETE FROM restoran WHERE id = '$id'");
if($query) {
	echo "<script>alert('Data berhasil dihapus!'); window.location='page.php';</script>";
} else {
	echo "<script>alert('Data gagal dihapus'); window.location='page.php';</script>";
}
?>
