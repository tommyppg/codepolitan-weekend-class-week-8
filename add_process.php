<?php
	include_once('config.php');

	$judul_artikel = $_POST['judul_artikel'];
	$isi_artikel = $_POST['isi_artikel'];
	$author_artikel = $_POST['author_artikel'];
	$id_kategori = $_POST['id_kategori']; //id untuk di join ke tabel kategori

	$result = mysqli_query($mysqli, "insert into artikel values(null, '$judul_artikel', '$isi_artikel', '$author_artikel', null, $id_kategori)");

	header("Location: index.php");
?>