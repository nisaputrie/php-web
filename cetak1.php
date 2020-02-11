<!DOCTYPE html>
<html lang="en">
<head>
	<title>CETAK PRINT LAPORAN</title>
	
	
</head>
<body style="background-image: url('image/paisley.png')" >

	<center style="background-color: #EC9C23">
		<hr size="20%" color="#665038">
		<h4>TOKO BUKU</h4>
		<h2>DATA LAPORAN BUKU YANG TERJUAL</h2>
		<hr size="20%" color="#665038">
	</center>

	<?php
	//tambahkan dbconnect
	include('dbconnect.php');

	//query
	$query = "SELECT * FROM buku";

	$result = mysqli_query($conn , $query);

	?>

	<div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
		<hr>
		<div class="row">
			
			<div class="col-sm-8" >
				<h3>Tabel Daftar Buku Terjual</h3>
				<table border="1" style="width: 100%" >
					<thead>
						<tr bgcolor="#b2976b" align="center">
							<th width="1%">No</th>
							<th width="35%">Judul Buku</th>
							<th>Penerbit Buku</th>
							<th>Genre Buku</th>
							<th width="10%">Harga Buku</th>
							<th width="5%">Jumlah Buku</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr bgcolor="#e7c685" align="center">
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['judul_buku']; ?></td>
							<td><?php echo $row['penerbit_buku']; ?></td>
							<td><?php echo $row['genre_buku']; ?></td>
							<td><?php echo $row['harga_buku']; ?></td>
							<td><?php echo $row['jumlah_buku']; ?></td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>

<p><a href="index.php" type="text" name="kembali">BACK</a></p>

</body>

	
</html> 