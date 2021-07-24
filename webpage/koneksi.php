<?php 
$host = "localhost";
$username = "u434983600_adm";
$password = "u434983600_Pamulang123";
$database = "u434983600_comprof";

$conn = mysqli_connect($host, $username, $password, $database);

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}