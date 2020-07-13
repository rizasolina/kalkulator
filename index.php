<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kalkulator - Riza Maryam Solina</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="styles/css/bootstrap.min.css">
	<script src="styles/js/bootstrap.min.js"></script>
</head>
<body class="bg-light" style="font-family: 'Comic Sans MS';">
	<div class="container bg-primary mt-4 px-5 py-4 w-50 rounded">
		<div class="main-section">
			<div class="header py-1">
				<h1 class="text-white text-center">KALKULATOR</h1>
			</div>
		</div>
		<div class="section">
			<h6 class="text-white text-right py-1">by Riza Maryam Solina</h6>
			<form action="latihan5.php" method="post" class="py-2">
				<div class="form-group">
					<label class="text-white">Bilangan 1</label>
					<input type="number" class="form-control" name="bil1" placeholder="Bilangan 1" required autofocus>
				</div>
				<div class="form-group">
					<label class="text-white">Bilangan 2</label>
					<input type="number" class="form-control" name="bil2" placeholder="Bilangan 2" required>
				</div>
				<div class="form-group text-center">
					<input type="submit" class="btn btn-warning font-weight-bold" value="Hitung">
				</div>
			</form>
			<div class="bg-light p-3 rounded">
				<?php
				if (isset($_POST['bil1']) && isset($_POST['bil2'])) {
					$bil1 = $_POST['bil1'];
					$bil2 = $_POST['bil2'];

					function penjumlahan($bil1, $bil2) {
					  $hasil_jumlah = $bil1 + $bil2;
					  return $hasil_jumlah;
					}
					// membuat fungsi pengurangan
					function pengurangan($bil1, $bil2) {
					  $hasil_kurang = $bil1 - $bil2;
					  return $hasil_kurang;
					}
					// membuat fungsi perkalian
					function perkalian($bil1, $bil2) {
					  $hasil_kali = $bil1 * $bil2;
					  return $hasil_kali;
					}
					// membuat fungsi pembagian
					function pembagian($bil1, $bil2) {
					  $hasil_bagi = $bil1 / $bil2;
					  return $hasil_bagi;
					}
					?>
					<table>
						<tr>
							<td>Hasil penjumlahan</td>
							<td>: <?php echo penjumlahan($bil1, $bil2); ?></td>
						</tr>
						<tr>
							<td>Hasil pengurangan</td>
							<td>: <?php echo pengurangan($bil1, $bil2); ?></td>
						</tr>
						<tr>
							<td>Hasil perkalian</td>
							<td>: <?php echo perkalian($bil1, $bil2); ?></td>
						</tr>
						<tr>
							<td>Hasil pembagian</td>
							<td>: <?php echo pembagian($bil1, $bil2); ?></td>
						</tr>
					</table>
					<?php
				} else {
					?>
					<table>
						<tr>
							<td>Hasil penjumlahan</td>
							<td>:</td>
						</tr>
						<tr>
							<td>Hasil pengurangan</td>
							<td>:</td>
						</tr>
						<tr>
							<td>Hasil perkalian</td>
							<td>:</td>
						</tr>
						<tr>
							<td>Hasil pembagian</td>
							<td>:</td>
						</tr>
					</table>
					<?php
				}
				?>
				
				<!-- <p>Hasil penjumlahan : </p>
				<p>Hasil pengurangan : </p>
				<p>Hasil perkalian : </p>
				<p>Hasil pembagian : </p> -->
			</div>
		</div>
	</div>
	
</body>
</html>
