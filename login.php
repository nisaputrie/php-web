<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>Selamat Datang Di Aplikasi TokoBuku</h1>
	</div>

	<div class="kotak-masuk">
		<div class="judul-masuk">Silahkan Login</div>

		<div class="masuk">
			<form action="" method="POST">
				<input type="text" name="user" placeholder="Masukkan Username"/>
				<input type="password" name="pass" placeholder="Masukkan Password"/><br>
				<input type="submit" name="masuk" value="Masuk"/>
				
			</form>
			<?php
			if (isset($_POST['masuk'])){
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			if ($user == "" && $pass == "") {
				header("Location: loginerror.php");}
			elseif ($user == "admin" && $pass == "pass") {
				header("Location: index.php");}
			else {
				echo "Data Anda Salah";}}
			?>
		</div>
	</div>

</body>
</html>