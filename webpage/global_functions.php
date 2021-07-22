<?php 

function getQueryCompany()
{
	global $conn;
	$result = mysqli_query($conn,"SELECT * FROM `company`");
    $row = mysqli_fetch_array($result);
    return $row;
}

function getQueryCompanyAbout()
{
	global $conn;
	$result = mysqli_query($conn,"SELECT * FROM `company_about`");
    $row = mysqli_fetch_array($result);
    return $row;
}

function getQueryTeam($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function getQueryClient($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function getRowPortofolio($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function getRowPortofolioCategory($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

$getRowQueryCompany = getQueryCompany();
$getRowQueryCompanyAbout = getQueryCompanyAbout();
?>