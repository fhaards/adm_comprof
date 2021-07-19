<?php

function queryCompanyAbout()
{
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM `company_about`");
    $count = mysqli_num_rows($result);
    return $count;
}

function getQuery($query)
{
	global $conn;
	$result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    return $row;
}

function tambahAbout($data)
{
	global $conn;
	$comp_about = htmlspecialchars($data["comp_about"]);
	$comp_visi = htmlspecialchars($data["comp_visi"]);
	$comp_misi = htmlspecialchars($data["comp_visi"]);
	$query = "INSERT INTO company_about
				VALUES
				('', '$comp_about','$comp_visi','$comp_misi')
			";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;
	$id_comp_about = $data["id_comp_about"];
    $comp_about = htmlspecialchars($data["comp_about"]);
	$comp_visi = htmlspecialchars($data["comp_visi"]);
	$comp_misi = htmlspecialchars($data["comp_misi"]);
	// cek apakah user pilih gambar baru atau tidak
	$query = "UPDATE company_about SET
				comp_about = '$comp_about',
				comp_visi = '$comp_visi',
				comp_misi = '$comp_misi'
			  WHERE id_comp_about = $id_comp_about
			";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
