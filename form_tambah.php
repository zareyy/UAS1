
<?php 
include "config.php";
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<title>Tambah Pesanan</title>
</head>

<body>

	<div class="container-fluid">
		<div class=" row justify-content-md-center">

			<div class="col-md-6">
				<br>
				<div class="card" style="width: 100%;">
					<div class="card-body">
						<h3 class="card-title text-center">Input Data Makanan</h3>

						<form action="proses_tambah.php" method="post" style="font-size: small;">		

							
							<a href="page.php" class="btn btn-secondary" > < Lihat Data Pesanan</a>
							

							<div class="form-group">
								<label for="exampleFormControlSelect1">Pilih Restoran</label>
								<select class="form-control" name="resto">
									<option>Pilih Restoran</option>
									<option value="Warteg Kharisma">Warteg Kharisma</option>
									<option value="Restoran Padang Sederhana">Restoran Padang Sederhana</option>
									<option value="Soto Ayam Ndelik">Soto Ayam Ndelik</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Pilih Menu Makanan</label>
								<select class="form-control" name="makanan">
									<option>Pilih Menu</option>
									<option value="Paket Nasi Tempe Orek">Paket Nasi Tempe Orek</option>
									<option value="Kentang Balado">Kentang Balado</option>
									<option value="Oseng-oseng">Oseng-oseng</option>
									<option value="Tongkol">Tongkol</option>
									<option value="Paket Nasi Padang">Paket Nasi Padang</option>
									<option value="Paket Nasi Soto Plus Mendoan">Paket Nasi Soto Plus Mendoan</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Harga</label>
								<select class="form-control" name="harga">
									<option>Harga</option>
									<option value="30.000">30.000</option>
									<option value="35.000">35.000</option>
									<option value="40.000">40.000</option>                               
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Nama Lengkap</label>
								<input type="text" class="form-control" name="nama" id="exampleFormControlInput1">
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Nomor HP</label>
								<input type="text" class="form-control" name="nohp"  id="exampleFormControlInput1">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" name="email" id="exampleInputEmail1">
							</div>
							<div><button type="submit" class="btn btn-primary">Tambah</button></div>
						</form>
					</div>
				</div>

			</div>

		</div>
	</div>
</body>
</html>
