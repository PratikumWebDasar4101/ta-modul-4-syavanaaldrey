<!DOCTYPE html>
<html>
<head>
	<title>LIST BELANJA</title>
</head>
<body>
	<form action="proses2.php" method="POST">
		<table align="center">
			<tr>
				<td>
					<input type="checkbox" name="listbarang[]" value="knalpot">Knalpot<br>
					<input type="checkbox" name="listbarang[]" value="jok">Jok Motor<br>
					<input type="checkbox" name="listbarang[]" value="spion">Spion Motor<br>
					<input type="checkbox" name="listbarang[]" value="lampu">Lampu Motor<br>
					<input type="checkbox" name="listbarang[]" value="jas">Jas Hujan<br>
				</td>
			<tr>
				<td>
					Jenis Pengiriman
				</td>
				<td>
					<input type="radio" name="jeniskirim" value="gosend">GO SEND
					<input type="radio" name="jeniskirim" value="jne">JNE
					<input type="radio" name="jeniskirim" value="tiki">TIKI
				</td>
			<tr>
				<td>
					Alamat
				</td>
				<td>
					<input type="text" name="alamat">
				</td>
			<tr>
				<td>
					<input type="hidden" name="tglbeli" value="<?php echo date("Y/m/d"); ?>">
				</td>
			<tr>
				<td>
					<input type="submit" name="submit" value="Send">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>