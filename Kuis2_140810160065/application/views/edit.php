<!DOCTYPE html>
<html>
	<head>
		<title>EDIT DATA PEGAWAI</title>
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
			<center><h1>EDIT BIODATA</h1></center>
			<center><hr></center>
			<br>
			<form class="form-horizontal" action="<?php echo base_url('index.php/login/update_data')?>" method="post">
				<div class="form-group">
					<label class="control-label col-sm-3">NIP :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nip" value="<?php echo $peg->nip;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Nama :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="nama" value="<?php echo $peg->nama;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Tempat Lahir :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $peg->tempat_lahir;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Tanggal Lahir :</label>
					<div class="col-sm-9">
						<input type="date" class="form-control" name="tgl_lahir" value="<?php echo $peg->tgl_lahir;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Jenis Kelamin :</label>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="jk" value="L" <?php if($peg->jk=="L"):?>checked="checked" <?php endif;?>> Laki-Laki</label>
						<label class="radio-inline"><input type="radio" name="jk" value="P" <?php if($peg->jk=="P"):?>checked="checked" <?php endif;?>> Perempuan</label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Alamat :</label>
					<div class="col-sm-9">
						<textarea class="form-control" rows="3" name="alamat" maxlength="100" required><?php echo $peg->alamat;?></textarea>
					</div>
				</div>	
				<div class="form-group">
					<label class="control-label col-sm-3">Email :</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="email" value="<?php echo $peg->email;?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3"></label>
					<div class="col-sm-9">
						<input type="submit" class="btn btn-primary" value="Update" name="update">
					</div>
				</div>
			</form>        
		</div>
	</body>
</html>