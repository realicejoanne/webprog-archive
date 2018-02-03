<!DOCTYPE html>
<html>
	<head>
		<title>DATA PEGAWAI</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.css"> 
	</head>
	<style>
		.box {
			width: 1000px;
			margin: auto;
			overflow: hidden;
		}
	</style>
	<body>
		<div class="box">     
			<center><h1>DAFTAR NAMA PEGAWAI</h1></center>
			<center><hr></center>
			<h4 align="right">
				<?php echo anchor('login', 'Tambah Data'); ?>
			</h4><br>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>NIP</th>
						<th>Nama Lengkap</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>Email</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					foreach ($peg->result() as $row) {
				?>
					<tr>
						<td><?php echo $row->nip;?></td>
						<td><?php echo $row->nama;?></td>
						<td><?php echo $row->jk;?></td>
						<td><?php echo $row->alamat;?></td>
						<td><?php echo $row->tempat_lahir;?></td>
						<td><?php echo $row->tgl_lahir;?></td>
						<td><?php echo $row->email;?></td> 
						<td>
							<a href="<?php echo base_url()."index.php/login/edit_data/".$row->nip;?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
							<a href="<?php echo base_url()."index.php/login/delete_data/".$row->nip;?>" class="btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
						</td>      
					</tr>
				<?php
					}
				?>
				</tbody>
			</table>  
		</div>    
	</body>
</html>
