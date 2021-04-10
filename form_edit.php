<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Edit Pesanan</title>
</head>

<body>

	<div class="container-fluid">
		<div class=" row justify-content-md-center">

			<div class="col-md-6">
				<br>
				<div class="card" style="width: 100%;">
					<div class="card-body">
						<h3 class="card-title text-center">Edit Data Makanan</h3>


						<?php
						$id = $_GET['id'];
						require_once 'config.php';
						$query = mysqli_query($con,"SELECT * FROM restoran WHERE id = '$id'");

						$data = mysqli_fetch_array($query);
						?>	

						<form action="proses_edit.php" method="post">
							<a href="page.php" class="btn btn-secondary"> < Lihat Data Pesanan</a>


						<!-- 	<div class="form-group">
								<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
								<label for="exampleFormControlSelect1">Pilih Restoran</label>
								<select class="form-control" name="resto" value="<?php echo $data['resto'] ?>">
									<option>Pilih Restoran</option>
									<option value="Warteg Kharisma">Warteg Kharisma</option>
									<option value="Restoran Padang Sederhana">Restoran Padang Sederhana</option>
									<option value="Soto Ayam Ndelik">Soto Ayam Ndelik</option>
								</select>
							</div> -->



							<div class="form-group">
								<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
								<label for="exampleFormControlSelect1">Pilih Restoran</label>
								<select class="form-control" name="resto" id="resto">
									<option>Pilih Restoran</option>
									<option value="Warteg Kharisma" <?php if($data['resto'] == 'Warteg Kharisma') { echo "selected"; } ?> >Warteg Kharisma</option>
									<option value="Restoran Padang Sederhana" <?php if ($data['resto'] == 'Restoran Padang Sederhana') { echo "selected"; } ?> >Restoran Padang Sederhana</option>
									<option value="Soto Ayam Ndelik" <?php if ($data['resto'] == 'Soto Ayam Ndelik') { echo "selected"; } ?>>Soto Ayam Ndelik</option>
								</select>
							</div>

							<div class="form-group">
								<label for="exampleFormControlSelect1">Pilih Menu Makanan</label>
								<select class="form-control" name="makanan">
									<option>Pilih Menu</option>
									<option value="Paket Nasi Tempe Orek" <?php if ($data['makanan'] == 'Paket Nasi Tempe Orek') { echo "selected"; } ?> >Paket Nasi Tempe Orek</option>
									<option value="Kentang Balado" <?php if ($data['makanan'] == 'Kentang Balado') { echo "selected"; } ?> >Kentang Balado</option>
									<option value="Oseng-oseng" <?php if ($data['makanan'] == 'Oseng-oseng') { echo "selected"; } ?> >Oseng-oseng</option>
									<option value="Tongkol" <?php if ($data['makanan'] == 'Tongkol') { echo "selected"; } ?> >Tongkol</option>
									<option value="Paket Nasi Padang" <?php if ($data['makanan'] == 'Paket Nasi Padang') { echo "selected"; } ?> >Paket Nasi Padang</option>
									<option value="Paket Nasi Soto Plus Mendoan" <?php if ($data['makanan'] == 'Paket Nasi Soto Plus Mendoan') { echo "selected"; } ?> >Paket Nasi Soto Plus Mendoan</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Harga</label>
								<select class="form-control" name="harga">
									<option>Harga</option>
									<option value="30.000" <?php if ($data['harga'] == '30.000') { echo "selected"; } ?> >30.000</option>
									<option value="35.000" <?php if ($data['harga'] == '35.000') { echo "selected"; } ?> >35.000</option>
									<option value="40.000" <?php if ($data['harga'] == '40.000') { echo "selected"; } ?> >40.000</option>                               
								</select>
							</div>


							<div class="form-group">
								<label for="exampleFormControlInput1">Nama Lengkap</label>
								<input type="text" class="form-control" name="nama" id="exampleFormControlInput1" value="<?php echo $data['nama'] ?>" required>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Nomor HP</label>
								<input type="text" class="form-control" name="nohp"  id="exampleFormControlInput1" value="<?php echo $data['nohp'] ?>" required >
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?php echo $data['email'] ?>" required>
							</div>
							<div><button type="submit" class="btn btn-primary">Ubah</button></div>
						</form>
					</div>
				</div>

			</div>

		</div>
	</div>
</body>
</html>
