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
	$nama_port_cat  = htmlspecialchars($data["nama_port_cat"]);
	$keterangan  = htmlspecialchars($data["keterangan"]);


	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO portofolio
				VALUES
				('', '$nama_port_cat','$judul','$keterangan', '$gambar')
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
	$nama_port_cat  = htmlspecialchars($data["nama_port_cat"]);
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
				nama_port_cat = '$nama_port_cat',
				judul = '$judul',
				gambar = '$gambar',
				keterangan = '$keterangan'
			  WHERE id = $id
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

/* -------------------------------------------- function portofolio category ------------------------------------- */

function countPortofolioCategory()
{
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM `portofolio_category`");
	$countsteam = mysqli_num_rows($result);
	return $countsteam;
}

function queryPortofolioCategory($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambahPortofolioCategory($data)
{
	global $conn;
	$nama_port_cat 		 = htmlspecialchars($data["nama_port_cat"]);
	$query = "INSERT INTO portofolio_category
				VALUES
				('', '$nama_port_cat')
			";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function hapusPortofolioCategory($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM portofolio_category WHERE id_port_cat = $id");
	return mysqli_affected_rows($conn);
}

function ubahPortofolioCategory($data)
{
	global $conn;

	$id_port_cat = $data["id_port_cat"];
	$nama_port_cat  = htmlspecialchars($data["nama_port_cat"]);
	$query = "UPDATE portofolio_category SET nama_port_cat = '$nama_port_cat'
			  WHERE id_port_cat = $id_port_cat
			";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
