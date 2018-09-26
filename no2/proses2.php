<?php
	session_start();

	$user = $_SESSION["user"];
	 $listbarang = $_POST["listbarang"];
	  $jeniskirim = $_POST["jeniskirim"];
	   $alamat = $_POST["alamat"];
	    $tglbeli	= $_POST["tglbeli"];
	     $harga	= 0; $hargakirim = 0;

	for ($i=0; $i < count($listbarang) ; $i++) { 
		if ($listbarang[$i] == "knalpot")
			$harga += 500000;
		elseif ($listbarang[$i] == "jok") 
			$harga += 100000;
		elseif ($listbarang[$i] == "spion") 
			$harga += 50000;
		elseif ($listbarang[$i] == "lampu") 
			$harga += 20000;
		elseif ($listbarang[$i] == "jas") 
			$harga += 75000;
	}

	if($jeniskirim == "gosend")
		$hargakirim == 15000;
	if($hargakirim == "jne")
		$hargakirim == 20000;
	if($hargakirim == "tiki")
		$hargakirim == 25000;

	function biaya($x, $y){
		return $x + $y;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TAMPILAN BELANJA</title>
</head>
<body>
	<table>
		<tr>
			<td>
				Tanggal Pembelian
			</td>
			<td>
				<?php echo $tglbeli; ?>
			</td>
		<tr>
			<td>
				Nama Pembeli
			</td>
			<td>
				<?php echo $user["nama"]; ?>
			</td>
		<tr>
			<td>
				Nomor Tlp
			</td>
			<td>
				<?php echo $user["notelepon"]; ?>
			</td>
		</tr>
		<tr>
			<td>
				Daftar Barang 
			</td>
			<td>
				<?php foreach ($listbarang as $barang => $barang2) {
					echo $barang2 . "<br>";
				}
				?>
		<tr>
			<td>
				Jenis Pengiriman
			</td>
			<td>
				<?php echo $jeniskirim . " " . $hargakirim; ?>
			</td>
		<tr>
			<td>
				Total Pembayaran
			</td>
			<td>
				<?php echo biaya($harga, $hargakirim); ?>
			</td>
		</tr>
	</table>
</body>
</html>