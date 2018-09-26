<?php  
session_start();
$user = $_SESSION['user'];
?>

<h1 align="center">Tampil Data</h1>
<table border="1" align="center">
	<tr valign="top">
		<td><?php echo $user['nama']; ?></td>
		<td>
			<img width="300" src="<?php echo $user['filegambar'];  ?>">
		</td>
		<td>
			<?php
				foreach ($user['hobbi'] as $hobbi => $hobbi2) {
			 		echo $hobbi2 . '<br>';
			 	} 	
			?>
		</td>
		<td>
			<?php
				foreach ($user['film'] as $film => $film2) {
			 		echo $film2 . '<br>';
			 	} 	
			?>
		</td>
		<td><?php
				foreach ($user['wisata'] as $wisata => $wisata2) {
			 		echo $wisata2 . '<br>';
			 	} 	
			?></td>
	</tr>
	<tr><td colspan="5"><a href="login1.php"><input type="submit" name="logout" value="logout"></a></td></tr>
</table>