<!DOCTYPE html>
<html>
	<head>
		<title>Input nilai mahasiswa</title>
		<!-- css -->
		<link href="css/bootstrap.css" type="text/css" rel="stylesheet">
		<link href="css/style.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
	<?php
	$name = $_POST["name"];
	$status = $_POST["status"];
	$tgl = $_POST["tgl"];
	$asal = $_POST["asal"];
	$tujuan = $_POST["tujuan"];
	$dewasa = $_POST["dewasa"];
	$anak = $_POST["anak"];
			
	$JktD = 150000;
	$JktA = 100000;
	$SrbyD = 300000;
	$SrbyA = 240000;
	$YgktD = 275000;
	$YgktA = 230000;
	
	$penumpang = $dewasa + $anak;
			
	if($asal == 'Bandung' && $tujuan == 'Jakarta') {
		$hargatot = ($dewasa*$JktD)+($anak*$JktA);
	}
	else if($asal == 'Bandung' && $tujuan == 'Surabaya') {
		$hargatot = ($dewasa*$SrbyD)+($anak*$SrbyA);
	}
	else if($asal == 'Bandung' && $tujuan == 'Yogyakarta') {
		$hargatot = ($dewasa*$YgktD)+($anak*$YgktA);
	}
	
	if($status == 'member'){
		$diskon = $hargatot*0.025;
		$hargaakhir = $hargatot-$diskon;
	}
	else if($status == 'nomember'){
		$diskon = $hargatot*0;
		$hargaakhir = $hargatot-$diskon;
	}
	?>
	
	<div class="open">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h4 class="text-center">Daftar Pembelian Tiket Kereta Api</h4>
				<h6 class="text-center"><?php date_default_timezone_set('Asia/Jakarta'); echo date("d/m/Y h:i:s");?></h6>
            </div>
            <div class="panel-body">
				<table class="table table-condensed" style="margin-left:3px;text-align:left;padding:1px">
					<tr>
						<td>Nama Pembooking&nbsp;</td>
						<td>:&nbsp;</td>
						<td><?php echo "$name"?></td>
					</tr>
					<tr>
						<td>Jmlh Penumpang&nbsp;</td>
						<td>:&nbsp;</td>
						<td><?php echo "$penumpang"?></td>
					</tr>
					<tr>
						<td>Tgl Keberangkatan&nbsp;</td>
						<td>:&nbsp;</td>
						<td><?php echo "$tgl"?></td>
					</tr>
					<tr>
						<td>Rute Keberangkatan&nbsp;</td>
						<td>:&nbsp;</td>
						<td><?php echo "$asal"?> - <?php echo "$tujuan"?></td>
					</tr>
					<tr>
						<td>Total Harga&nbsp;</td>
						<td>:&nbsp;</td>
						<td><?php echo "$hargatot"?></td>
					</tr>
					<tr>
						<td>Diskon Member&nbsp;</td>
						<td>:&nbsp;</td>
						<td><?php echo "$diskon"?></td>
					</tr>
					<tr>
						<td>Total Bayar&nbsp;</td>
						<td>:&nbsp;</td>
						<td><?php echo "$hargaakhir"?></td></td>
					</tr>
				</table>
			</div>
            <div class="btn-group btn-group-justified"><a href="welcome.html" class="btn btn-primary">Yuk berangkat!</a></div>
        </div>
    </div>
	</body>
</html>