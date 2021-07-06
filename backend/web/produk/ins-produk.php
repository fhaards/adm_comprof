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

function tambah_profile($data) {
	global $conn;


    $nama = htmlspecialchars($data["nama"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	$text = htmlspecialchars($data["text"]);
	

	$query = "INSERT INTO `profile`
				VALUES
			  ('', '$nama', '$tanggal', '$text')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus_profile($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM berkas WHERE id = $id");
	return mysqli_affected_rows($conn);
}



function ubah_berkas($data) {
	global $conn;

	$id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
	$tanggal = htmlspecialchars($data["tanggal"]);
	$text = htmlspecialchars($data["text"]);
	
	

	

	$query = "UPDATE profile SET
                nama = '$nama',
				tanggal = '$tanggal',
				text = '$text',
								
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

?>