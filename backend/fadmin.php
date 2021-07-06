<?php 
include '../koneksi.php';


?> 
<?php
function query($query) {
	global $conn;

	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function ubah_admin($data) {
	global $conn;

	$id = $data["id"];
	$userid = htmlspecialchars($data["userid"]);
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);
	


	$query = "UPDATE admin SET
				userid = '$userid',
				username = '$username',
				password = '$password'				
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}


function registrasi($data) {

	global $conn;

	$userid = strtolower(stripslashes($data["userid"]));
	$username = stripslashes($data["username"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


	$result = mysqli_query($conn, "SELECT userid FROM admin WHERE userid = '$userid'");
	if ( mysqli_fetch_assoc($result)) {
		echo "<script>alert('User Id Sudah Terdaftar!'); </script>";

		return false;
	}



	if ( $password !== $password2 ) {
		echo "<script>alert('Konfirmasi password tidak sesuai!'); </script>";
	return false;
	}

	mysqli_query($conn, "INSERT INTO admin VALUES('', '$userid', '$username', '$password')");

	return mysqli_affected_rows($conn);

}










?>