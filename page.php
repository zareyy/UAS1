
<!DOCTYPE>
<html>
<head>
	<title>Dasboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<style>

		.judul {
			background: #87D1D8;
			padding: 10px;
			text-align: center;
		}

		a {
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}

		.table{
			border-collapse: collapse;
		}
		.table tr th, .table tr td {
			padding: 5px;
		}

		#customers {
			font-family: Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		#customers td, #customers th {
			border: 1px solid #000;
			padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}
		#customers tr:hover {background-color: #ddd;}
		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #81c784;
			color: #000;

		}

		.flexbtn {
			display: flex;
			justify-content: space-between;
		}


	</style>



</head>
<body>

	<div style=" background-color: white; margin: 5px auto;">
		<div class="card-body">

			<div class="judul">		
				<h3>Data Pemesanan Makanan</h3>
				<?php
				function tgl ($tanggal) {
					$bulan = array (
						1 => 'Januari',
						'Februari',
						'Maret',
						'April',
						'Mei',
						'Juni',
						'Juli',
						'Agustus',
						'September',
						'Oktober',
						'November',
						'Desember'
					);
					$tanda = explode('-', $tanggal);
					return $tanda[2] . ' ' . $bulan[(int)$tanda[1] ] . ' ' . $tanda[0];
				}

				date_default_timezone_set('Asia/Jakarta');
				$jam = date("H:i:s");
				?>
				<center>
					<td>
						<h3>
							<?php
							echo "Per " . tgl(date('Y-m-d'));
							echo " ".$jam."<br>";
							?>
						</h3>

					</td>
				</div>

				<br />
				<div class="flexbtn">
					<a href="form_tambah.php" class="btn btn-secondary">+ Tambah Menu</a>
					<a align="right" href="logout.php" class="btn btn-danger">Logout</a>
				</div>

				<br />

				<form>
					

					<div style="overflow: auto;">
						<table id="customers" border="2" class="table" style="font-size: small; ">
							<tr>
								<th>No.</th>
								<th>Jenis Restoran</th>
								<th>Makanan</th>
								<th>Harga</th>
								<th>Nama Lengkap</th>
								<th>Nomor HP</th>
								<th>Email</th>
								<th class="opsitable">Opsi</th>		
							</tr>
							<?php 
							require_once 'config.php';
							$query = mysqli_query($con,"SELECT * FROM restoran");
							$nomor = 1;
							while($data = mysqli_fetch_array($query)) { ?>
								<tr>
									<td align="center"><?php echo $nomor++; ?>.</td>
									<td><?php echo $data['resto']; ?></td>
									<td><?php echo $data['makanan']; ?></td> 
									<td><?php echo $data['harga']; ?></td> 
									<td><?php echo $data['nama']; ?></td>
									<td><?php echo $data['nohp']; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td class="opsi" width="90px" align="center">
										<a class="edit"  href="form_edit.php?id=<?php echo $data['id']; ?>">Edit</a> | 
										<a class="hapus" href="proses_hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin hapus data?')">Hapus</a>					
									</td>
								</tr>
								<?php
							} ?>

						</table>
						
						<p align="right">
							<a  href="cetakpdf.php" class="btn btn-primary">Print Pembayaran</a>
						</p>

					</center>
				</div>
			</form>

		</div>
	</div>
</form>
</div>
</body>
</html>
