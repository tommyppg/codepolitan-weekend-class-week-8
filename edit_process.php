<?php
	include_once('config.php');
	
	$id_artikel = $_POST['id_artikel'];
	$judul_artikel = $_POST['judul_artikel'];
	$isi_artikel = $_POST['isi_artikel'];
	$author_artikel = $_POST['author_artikel'];
	$id_kategori = $_POST['id_kategori'];

	$result = mysqli_query($mysqli, "update artikel set judul_artikel='$judul_artikel', isi_artikel='$isi_artikel', author_artikel='$author_artikel', id_kategori=$id_kategori where id_artikel=$id_artikel");

	header("Location: index.php");
?>