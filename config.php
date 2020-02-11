<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "db_login";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if(!$conn){
	die("error in connection");}

// $koneksi = mysql_connect($dbhost,$dbuser,$dbpassword) or die ("Koneksi ke server error!");
// mysql_select_db($dbname,$koneksi) or die ("Koneksi ke database error!");
?>
