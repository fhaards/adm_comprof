<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "comprof";

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}