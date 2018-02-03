<?php
	$nama = $_POST["nama"];
	$tempat_lahir = $_POST["tempat_lahir"];
	$tgl_lahir = $_POST["tgl_lahir"];
	$jk = $_POST["jk"];
	$alamat = $_POST["alamat"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Data Diri</title>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	</head>
	<style>
		.box {
			width: 500px;
			height: 560px;
			margin: 60px auto 0px auto;
			overflow: hidden;
		}
	</style>
	<body>
		<div class="box">
			<div class="bg-danger">
				<center><h1>DATA DIRI</h1></center>
				<center><hr></center>
			</div>
				<br>
			<table class="table table-danger">
				<tr>
					<td class="col-sm-3">Nama</td>
					<td class="col-sm-1">:</td>
					<td class="col-sm-8"><?php echo "$nama"?></td>
				</tr>
				<tr>
					<td class="col-sm-3">Tempat Lahir</td>
					<td class="col-sm-1">:</td>
					<td class="col-sm-8"><?php echo "$tempat_lahir"?></td>
				</tr>
				<tr>
					<td class="col-sm-3">Tanggal Lahir</td>
					<td class="col-sm-1">:</td>
					<td class="col-sm-8"><?php echo "$tgl_lahir"?></td>
				</tr>
				<tr>
					<td class="col-sm-3">Jenis Kelamin</td>
					<td class="col-sm-1">:</td>
					<td class="col-sm-8"><?php echo "$jk"?></td>
				</tr>
				<tr>
					<td class="col-sm-3">Alamat</td>
					<td class="col-sm-1">:</td>
					<td class="col-sm-8"><p><?php echo "$alamat"?></p></td>
				</tr>
			</table>
		</div>
		<!--Footer-->
			<footer>
				<div class="container"><h5 align="center">Copyright &copy; 140810160065 | Pemrograman Web 2017<br></h5></div>
			</footer>
	</body>
</html>