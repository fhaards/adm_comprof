<?php
session_start(); // Start session nya

include "koneksi.php"; // Load file koneksi.php

$userid = mysqli_real_escape_string($conn, $_POST['userid']); // Ambil value username yang dikirim dari form
$password = mysqli_real_escape_string($conn, $_POST['password']); // Ambil value password yang dikirim dari form
// $password = md5($password); // Kita enkripsi (encrypt) password tadi dengan md5

// Buat query untuk mengecek apakah ada data user dengan username dan password yang dikirim dari form
$sql = mysqli_query($conn, "SELECT * FROM admin WHERE userid='".$userid."' AND password='".$password."'");
$data = mysqli_fetch_array($sql); // Ambil datanya dari hasil query tadi

// Cek apakah variabel $data ada datanya atau tidak
if( ! empty($data)){ // Jika tidak sama dengan empty (kosong)
	$_SESSION['userid'] = $data['userid']; // Set session untuk username (simpan username di session)
	$_SESSION['username'] = $data['username']; // Set session untuk nama (simpan nama di session)
	
	setcookie("message","delete",time()-1); // Kita delete cookie message
	
	header("location: web/index.php"); // Kita redirect ke halaman welcome.php
}else{ // Jika $data nya kosong
	// Buat sebuah cookie untuk menampung data pesan kesalahan
	setcookie("message", "Maaf, Username atau Password salah", time()+3600);
	
	header("location: index.php"); // Redirect kembali ke halaman index.php
}
?>
