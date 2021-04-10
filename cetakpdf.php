<!DOCTYPE html>
<html>
<head>
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
			border: 2px solid #000;
			padding: 8px;
		}

		
		#customers th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #81c784;
			color: #000;

		}


		@media print {

			.kembali  {
				display: none;
			}
		}
	</style>

</head>
<body>

	<div style=" margin: 5px auto;">
		<div class="card-body">
			<div>
				<center>
					<h1>Data Pemesanan Makanan</h1>
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

					<td>
						<h2>
							<?php
							echo "Per " . tgl(date('Y-m-d'));
							echo " ".$jam."<br>";
							?>
						</h2>
					</td>
				</div>
			</center>

			<a href="page.php" class="kembali"> < Kembali </a>
			<br />
			<form>
				<div style="overflow: auto; " >
					<table border="2" class="table" style="font-size: large; ">
						<tr>
							<th>No.</th>
							<th>Jenis Restoran</th>
							<th>Makanan</th>
							<th>Harga</th>
							<th>Nama Lengkap</th>
							<th>Nomor HP</th>
							<th>Email</th>
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
							</td>
						</tr>
						<?php
					} ?>

					<script>
						window.print()
					</script>

				</table>

			</div>
		</form>

	</div>
</div>


</body>
</html>
