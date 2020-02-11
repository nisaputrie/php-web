<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Buku</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('image/paisley.png'); background-repeat: repeat;">

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM buku WHERE id_buku='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">

	<h3>Update Data Buku</h3>
	<form role="form" action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id_bk" value="<?php echo $row['id_buku']; ?>">
		<br><br>
		<div class="form-group">
			<label>Judul Buku</label>
			<input type="text" name="judul_bk" class="form-control" value="<?php echo $row['judul_buku']; ?>">			
		</div>
		<br><br>
		<div class="form-group">
			<label>Penerbit Buku</label>
			<input type="text" name="terbit_bk" class="form-control" value="<?php echo $row['penerbit_buku']; ?>">			
		</div>
		<br><br>
		<div class="form-group">
			<label>Genre Buku</label>
			<input type="text" name="genre_bk" class="form-control" value="<?php echo $row['genre_buku']; ?>">			
		</div>
		<br><br>
		<div class="form-group">
			<label>Harga Buku</label>
			<input type="text" name="harga_bk" class="form-control" value="<?php echo $row['harga_buku']; ?>">			
		</div>
		<br><br>
		<button type="submit" class="btn btn-success btn-block">Update Buku</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 