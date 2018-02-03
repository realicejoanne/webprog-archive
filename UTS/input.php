<!DOCTYPE html>
<html>
	<head>
		<title>Booking tiket</title>
		<!-- css -->
		<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="css/style.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
	<div class="open">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4 class="text-center">Booking Tiket</h4>
            </div>
            <div class="panel-body">
				<form action="nilai.php" method="POST" class="form-group">
					<table>
						<tr>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Nama Pembooking&nbsp;</td>
							<td>:&nbsp;</td>
							<td><input type="text" name="name" size=10></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;&nbsp;&nbsp;</td>
							<td><input type="radio" name="status" value="member"> Member</td>
							<td><input type="radio" name="status" value="nomember"> Not Member</td>
						</tr>
						<tr>
							<td>Tgl Keberangkatan&nbsp;</td>
							<td>:&nbsp;</td>
							<td><input type="text" name="tgl" placeholder="dd/mm/yy" size=9></td>
						</tr>
						<tr>
							<td><hr></td>
							<td><hr></td>
							<td><hr></td>
							<td><hr></td>
							<td><hr></td>
						</tr>
						<tr>
							<td>Rute Asal&nbsp;</td>
							<td>:&nbsp;</td>
							<td><input type="radio" name="asal" value="Bandung"> Bandung</td>
						</tr>
						<tr>
							<td>Rute Tujuan&nbsp;</td>
							<td>:&nbsp;</td>
							<td><input type="radio" name="tujuan" value="Jakarta"> Jakarta</td>
							<td><input type="radio" name="tujuan" value="Surabaya"> Surabaya</td>
							<td><input type="radio" name="tujuan" value="Jogjakarta"> Jogjakarta</td>
						</tr>
						<tr>
							<td><hr></td>
							<td><hr></td>
							<td><hr></td>
							<td><hr></td>
							<td><hr></td>
						</tr>
						<tr>
							<td>Jumlah dewasa&nbsp;</td>
							<td>:&nbsp;</td>
							<td><input type="text" name="dewasa" size=1></td>
						</tr>
						<tr>
							<td>Jumlah anak&nbsp;</td>
							<td>:&nbsp;</td>
							<td><input type="text" name="anak" size=1></td>
						</tr>
					</table>
					<br>
				<div class="btn-group btn-group-justified"><div class="btn btn-primary"><input type="Submit" value="Beli tiketnya!"></div></div>
				</form>
			</div>
        </div>
    </div>
	</body>
</html>