<?php


function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data)
{
	global $conn;

	$nama 		 = htmlspecialchars($data["nama"]);


	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO `client`
				VALUES
				('', '$nama', '$gambar')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function upload()
{

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];


	if ($error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	if ($ukuranFile > 1000000) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}


	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'client/img/' . $namaFileBaru);

	return $namaFileBaru;
}




function hapus($id)
{
	global $conn;
	$cekQuery = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `client` where id= $id "));
	$oldImage = $cekQuery['gambar'];
	$hapusImage = unlink("client/img/" . $oldImage);
	if ($hapusImage) {
		mysqli_query($conn, "DELETE FROM client WHERE id = $id");
		return mysqli_affected_rows($conn);
	}
}


function ubah($data)
{
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		unlink("client/img/" . $gambarLama);
		$gambar = upload();
	}


	$query = "UPDATE client SET
				nama = '$nama',
				gambar = '$gambar'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
