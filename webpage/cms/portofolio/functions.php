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

	$judul 		 = htmlspecialchars($data["judul"]);
	$keterangan  = htmlspecialchars($data["keterangan"]);


	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO portofolio
				VALUES
				('', '$judul', '$keterangan', '$gambar')
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

	move_uploaded_file($tmpName, 'portofolio/img/' . $namaFileBaru);

	return $namaFileBaru;
}




function hapus($id)
{
	global $conn;
	$cekQuery = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM `portofolio` where id= $id "));
	$oldImage = $cekQuery['gambar'];
	$hapusImage = unlink("portofolio/img/" . $oldImage);
	if ($hapusImage) {
		mysqli_query($conn, "DELETE FROM portofolio WHERE id = $id");
		return mysqli_affected_rows($conn);
	}
}


function ubah($data)
{
	global $conn;

	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	$gambarLama = htmlspecialchars($data["gambarLama"]);

	// cek apakah user pilih gambar baru atau tidak
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		unlink("portofolio/img/" . $gambarLama);
		$gambar = upload();
	}


	$query = "UPDATE portofolio SET
				judul = '$judul',
				gambar = '$gambar',
				keterangan = '$keterangan'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
