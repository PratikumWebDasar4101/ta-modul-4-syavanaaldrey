<?php
session_start();

$dir = "upload/";
$nama_file = $_FILES["filegambar"]["name"];
$nama_file_tmp = $_FILES["filegambar"]["tmp_name"];
$target_file = $dir.$nama_file;

if (move_uploaded_file($nama_file_tmp, $target_file)) {
	echo "Berhasil Upload";
	header("Location: halamanakhir.php");
}

$user = array(
	"nama"	=> $_POST["nama"],
	"filegambar" => $target_file,
	"hobbi" => $_POST["hobbi"],
	"film" => $_POST["film"],
	"wisata" => $_POST["wisata"]
	
);

$_SESSION["user"] = $user;

print_r($user);
?>