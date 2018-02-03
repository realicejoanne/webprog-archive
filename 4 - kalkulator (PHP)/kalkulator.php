<!DOCTYPE html>
<html>
<head>
	<title>140810160065 | PW004</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $bil1+$bil2;
			break;
			case 'kurang':
				$hasil = $bil1-$bil2;
			break;
			case 'kali':
				$hasil = $bil1*$bil2;
			break;
			case 'bagi':
				$hasil = $bil1/$bil2;
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<center><h2>KALKULATOR</h2></center>
		<form method="post" action="kalkulator.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Bilangan Kedua">
			<table>
				<tr>
					<td></td>
					<td>
						<div class="select">
							<select name="operasi">
								<option value="tambah">+</option>
								<option value="kurang">-</option>
								<option value="kali">x</option>
								<option value="bagi">/</option>
							</select>
						</div>
					</td>
					<td>&nbsp;&nbsp;</td>
					<td>
						<input type="submit" name="hitung" value="Hitung" class="tombol">
					</td>
				</tr>
			</table>
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>