<?php
	include_once('config.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Latihan Membuat Blog</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<!-- CONTENT GOES HERE -->
		<div class="container">
			<div class="blog-header">
				<h1 class="blog-title">My Blog</h1>
				<p class="lead blog-description">Selamat datang di blog saya!</p>
			</div>

			<div class="row">
				<div class="col-md-9 blog-main">
					<?php
						$result = mysqli_query($mysqli, "select * from artikel order by tanggal_artikel desc");
					?>

					<?php
						//fungsi cek jumlah baris dari hasil query
						if(mysqli_num_rows($result) == 0){
							echo "<em>Tidak ada artikel</em>";
						}else{
							while($artikel_data = mysqli_fetch_array($result)){
								?>
								<div class="blog-post">
									<h2 class="blog-post-title"><?php echo $artikel_data['judul_artikel']; ?></h2>
									<p class="blog-post-meta"><?= $artikel_data['tanggal_artikel'] ?> by <a href="#"><?= $artikel_data['author_artikel'] ?></a></p>

									<p>
										<?= $artikel_data['isi_artikel'] ?>
									</p>

									<a href="edit.php?id_artikel=<?php echo $artikel_data['id_artikel']; ?>" class="btn btn-primary">Edit</a>
									<a href="delete.php?id_artikel=<?php echo $artikel_data['id_artikel']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus artikel ini?');">Delete</a>
								</div>
								<?php
							}
						}
					?>

				</div>

				<div class="col-md-3">
					<a href="add.php" class="btn btn-primary btn-block">Tambah Artikel</a>
				</div>
			</div>

		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>