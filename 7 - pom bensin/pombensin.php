<!DOCTYPE html>
<html>
	<head>
		<title>140810160065 | PW007</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.css">
	</head>
	<style>
		.box {
			width: 500px;
			height: 580px;
			margin: 20px 440px 0px;
		}
	</style>
	<body>
		<center>
			<div class="box">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h2>SPBU Pertamina Online</h2>
					</div>
					<div class="panel-body">
						<form method="POST">
							<table class="table">
								<tr>
									<th>No.</th>				
									<th>Jenis</th>				
									<th>Harga</th>
									<th>Pilih</th>
								</tr>
								<tr>
									<td>1.</td>				
									<td>Solar</td>				
									<td>Rp 5.000/Ltr</td>
									<td><input type="radio" name="jenis" value="Solar" checked></td>
								</tr>				
								<tr>
									<td>2.</td>				
									<td>Premium</td>				
									<td>Rp 6.500/Ltr</td>
									<td><input type="radio" name="jenis" value="Premium"></td>
								</tr>		
								<tr>
									<td>3.</td>				
									<td>Pertalite</td>				
									<td>Rp 7.500/Ltr</td>
									<td><input type="radio" name="jenis" value="Pertalite"></td>
								</tr>		
								<tr>
									<td>4.</td>				
									<td>Pertamax</td>				
									<td>Rp 8.500/Ltr</td>
									<td><input type="radio" name="jenis" value="Pertamax"></td>
								</tr>
								<tr>
									<td>5.</td>				
									<td>Pertamax+</td>				
									<td>Rp 9.500/Ltr</td>
									<td><input type="radio" name="jenis" value="Pertamax+"></td>
								</tr>
							</table>
							<br>
							<table class="table" align="center">
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<select name="jenisBayar" class="form-control">
										  <option value="uang">Uang</option>
										  <option value="liter">Liter</option>
										</select>
									</td>
									<td><input type="text" class="form-control" name="jumlah" placeholder="Masukkan jumlah"></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
							<input class="btn btn-danger" type="submit" name="submit" value="Beli">
						</form>
					</div>
				</div>
				<?php
					if(isset($_POST['submit'])){
						$jenis = $_POST['jenis'];
						$jenisBayar = $_POST['jenisBayar'];
						$jumlah = $_POST['jumlah'];
						$Harga = 0;
						if($jenis == "Solar"){
							$Harga = 5000;
						}
						elseif ($jenis == "Premium") {
							$Harga = 6500;
						}
						elseif ($jenis == "Pertalite") {
							$Harga = 7500;
						}
						elseif ($jenis == "Pertamax") {
							$Harga = 8500;
						}
						elseif ($jenis == "Pertamax+") {
							$Harga = 9500;					
						}
						if($jenisBayar=="liter"){
							$Total = $Harga * $jumlah;
							$text = "Anda membeli $jenis sebanyak $jumlah Liter dengan harga Rp. $Total";
						}
						else {
							$Total = $jumlah/$Harga;					
							$text = "Anda membeli $jenis sebanyak Rp. $jumlah dengan jumlah $Total Liter";
						}
				?>
				<div class="panel panel-danger">
					<div class="panel-heading">
						<?php echo "$text";?>	
					</div>
				</div>
				<?php
					}
				?>
				<!--Footer-->
				<footer>
					<h5 align="center">Copyright &copy; 140810160065 | Pemrograman Web 2017<br></h5>
				</footer>
			</div>
		</center>
	</body>
</html>