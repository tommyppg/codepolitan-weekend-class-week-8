<?php
	include_once('config.php');
	
	//get id artikel dari URL
	$id_artikel = $_GET['id_artikel'];
	
	//query delete berdasarkan id artikel
	$result = mysqli_query($mysqli, "delete from artikel where id_artikel=$id_artikel");
	
	//redirect to index.php
	header('Location: index.php');
?>