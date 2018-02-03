<!DOCTYPE html>
<html>
	<head>
		<title>140810160065 | PW008</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css"> 
	</head>
	<style>
		.box {
			width: 500px;
			margin: auto;
			overflow: hidden;
		}
	</style>
	<body>
		<div class="box">     
			<center><h1>INPUT DATA MAHASISWA</h1></center>
			<center><hr></center>
			<br>
			<form class="form-horizontal" action="<?php echo base_url('index.php/login/input_data') ?>" method="post">
				<div class="form-group">
					<label class="control-label col-sm-3">NPM :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="npm">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Nama :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Tanggal Lahir :</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" name="tgl_lhr">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Jenis Kelamin :</label>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="jk" value="L"> Laki-Laki</label>
						<label class="radio-inline"><input type="radio" name="jk" value="P"> Perempuan</label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Alamat :</label>
					<div class="col-sm-9">
						<textarea class="form-control" rows="3" name="alamat"></textarea>
					</div>
				</div>	
				<div class="form-group">
					<label class="control-label col-sm-3">Email :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Username :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="username">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Password :</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" name="password">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3"></label>
					<div class="col-sm-9">
						<input type="submit" class="btn btn-primary" value="Submit" name="submit">
					</div>
				</div>
			</form>        
		</div>
		<!--Footer-->
		<footer>
			<div class="container"><h5 align="center">Copyright &copy; 140810160065 | Pemrograman Web 2017<br></h5></div>
		</footer>
	</body>
</html>