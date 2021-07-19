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

$getRowQueryCompany = getQueryCompany();
$getRowQueryCompanyAbout = getQueryCompanyAbout();
?>