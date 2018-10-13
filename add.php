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
			<h1>Form Tambah Artikel</h1>
			<form action="add_process.php" method="POST">
				<div class="form-group">
					<label>Judul Artikel</label>
					<input type="text" class="form-control" name="judul_artikel" placeholder="Judul Artikel" required>
				</div>
				<div class="form-group">
					<label>Isi Artikel</label>
					<textarea class="form-control" name="isi_artikel" required></textarea>
				</div>
				<div class="form-group">
					<label>Author Artikel</label>
					<input type="text" class="form-control" name="author_artikel" placeholder="Author Artikel" required>
				</div>
				<?php
					$result = mysqli_query($mysqli, "select * from kategori");
				?>
				<div class="form-group">
					<label>Kategori</label>
					<select name="id_kategori" class="form-control">
						<option>-- Pilih Kategori --</option>
						<?php
							while($kategori_data = mysqli_fetch_array($result)){
								?>
								<option value="<?php echo $kategori_data['id_kategori']?>">
									<?php echo $kategori_data['nama_kategori']; ?>
								</option>
								<?php
							}
						?>
					</select>
				</div>
				
				<input type="submit" class="btn btn-primary" name="submit" value="Simpan">
				<a href="index.php" class="btn btn-default">Batal</a>
			</form>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>