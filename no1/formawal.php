<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
	<form action="proses.php" method="POST" enctype="multipart/form-data">
		<table align="center">
			<tr>
				<td>
					Nama
				</td>
				<td>
					<input type="text" name="nama">
				</td>
			<tr>
				Upload Gambar
				<td><input type="file" name="filegambar" id="filegambar"></td>
			<tr>
				<td>
					Apa Hobi Anda?<br>
				</td>
			<tr>
				<td>
					<input type="checkbox" name="hobbi[]" value="membaca"> Membaca
				</td>
			<tr>
				<td>
					<input type="checkbox" name="hobbi[]" value="berenang"> Berenang
				</td>
			<tr>
				<td>
					<input type="checkbox" name="hobbi[]" value="nonton"> Nonton
				</td>
			<tr>
				<td>
					<input type="checkbox" name="hobbi[]" value="travelling"> Travelling
				</td>
			<tr>
				<td>
					Genre Film Disukai<br>
				</td>
			<tr>
				<td>
					<input type="checkbox" name="film[]" value="Drama"> Drama
				</td>
			<tr>
				<td>
					<input type="checkbox" name="film[]" value="Komedi"> Komedi
				</td>
			<tr>
				<td>
					<input type="checkbox" name="film[]" value="aksi"> Action
				</td>
			<tr>
				<td>
					<input type="checkbox" name="film[]" value="horror"> Horror
				</td>
			<tr>
				<td>
					Tempat tujuan wisata Travelling<br>
				</td>
			<tr>
				<td>
					<input type="checkbox" name="wisata[]" value="bali"> Bali
				</td>
			<tr>
				<td>
					<input type="checkbox" name="wisata[]" value="rajaampat"> Raja Ampat
				</td>
			<tr>
				<td>
					<input type="checkbox" name="wisata[]" value="derawan"> Pulau Derawan
				</td>
			<tr>
				<td>
					<input type="checkbox" name="wisata[]" value="bangka"> Bangka Belitung
				</td>
			<tr>
				<td>
					<input type="submit" name="upload" id="upload" value="Upload" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>