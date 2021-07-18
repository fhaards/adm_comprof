<?php
session_start();

include "koneksi.php";

$userid = mysqli_real_escape_string($conn, $_POST['userid']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = mysqli_query($conn, "SELECT * FROM admin WHERE userid='".$userid."' AND password='".$password."'");
$data = mysqli_fetch_array($sql);


if( ! empty($data)){
	$_SESSION['userid'] = $data['userid'];
	$_SESSION['username'] = $data['username'];
	
	setcookie("message","delete",time()-1);
	
	header("location: index.php");
}else{
	setcookie("message", "Maaf, Username atau Password salah", time()+3600);
	
	header("location: index.php");
}
