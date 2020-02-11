<?php

$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "db_login";

$conn = mysqli_connect($dbhost, $username, $password, $dbname);

if(!$conn){
	die("error in connection");}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek konfirmasi password
	if( $password !== $password2) {
		echo "<script> 
				alert('konfirmasi password tidak sesuai!');
			</script>";
		return false;
	}

	return 1;
}

//enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
return mysqli_affected_rows($conn);

?>