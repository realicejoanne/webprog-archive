<!DOCTYPE html>
<html>
	<head>
		<title>140810160065 | PW008</title>
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
			<center><h1>DAFTAR NAMA MAHASISWA</h1></center>
			<center><hr></center>
			<h4 align="right">
				<?php echo anchor('login', 'Tambah Data'); ?>
			</h4><br>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>NPM</th>
						<th>Nama Lengkap</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>Tanggal Lahir</th>
						<th>Email</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
				<?php 
					foreach ($mhs->result() as $row) {
				?>
					<tr>
						<td><?php echo $row->npm;?></td>
						<td><?php echo $row->nama;?></td>
						<td><?php echo $row->jk;?></td>
						<td><?php echo $row->alamat;?></td>
						<td><?php echo $row->tgl_lhr;?></td>
						<td><?php echo $row->email;?></td> 
						<td>
							<a href="<?php echo base_url()."index.php/login/edit_data/".$row->npm;?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Edit</a>
							<a href="<?php echo base_url()."index.php/login/delete_data/".$row->npm;?>" class="btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
						</td>      
					</tr>
				<?php
					}
				?>
				</tbody>
			</table>  
		</div>
		<!--Footer-->
		<footer>
			<div class="container"><h5 align="center">Copyright &copy; 140810160065 | Pemrograman Web 2017<br></h5></div>
		</footer>		
	</body>
</html>
