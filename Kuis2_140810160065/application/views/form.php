<!DOCTYPE html>
<html>
	<head>
		<title>INPUT DATA PEGAWAI</title>
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
			<center><h1>INPUT DATA PEGAWAI</h1></center>
			<center><hr></center>
			<br>
			<form class="form-horizontal" action="<?php echo base_url('index.php/login/input_data') ?>" method="post">
				<div class="form-group">
					<label class="control-label col-sm-3">NIP :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nip">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Nama :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Tempat Lahir :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="tempat_lahir">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Tanggal Lahir :</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" name="tgl_lahir">
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
						<input type="text" class="form-control" name="nama_user">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Password :</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" name="password" id="inputPassword">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Confirm Password :</label>
					<div class="col-sm-9">
						<input type="password" class="form-control"id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
						<div class="help-block with-errors"></div>
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
	</body>
</html>