<?php
	include_once('config.php');

	$judul_artikel = $_POST['judul_artikel'];
	$isi_artikel = $_POST['isi_artikel'];
	$author_artikel = $_POST['author_artikel'];

	$result = mysqli_query($mysqli, "insert into artikel values(null, '$judul_artikel', '$isi_artikel', '$author_artikel', null)");

	header("Location: index.php");
?>