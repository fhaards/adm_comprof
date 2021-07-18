<?php 

include "../koneksi.php";

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;


	$keterangan  = htmlspecialchars($data["keterangan"]);



	$query = "INSERT INTO profile
				VALUES
				('', '$keterangan')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM 'profile' WHERE id = $id");
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;

	$id = $data["id"];
	$keterangan = htmlspecialchars($data["keterangan"]);

	$query = "UPDATE profile SET
				keterangan = '$keterangan',
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

