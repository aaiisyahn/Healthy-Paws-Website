<?php
	$host = "localhost"; 
	$user = "root"; 
	$password = ""; 
	$database = "db_healthypaws"; 

	$conn = mysqli_connect($host, $user, $password, $database); 

	if (!$conn) {
		die("Koneksi ke database gagal: " . mysqli_connect_error());
	}
?>