<?php

include "../koneksi.php";

function countTeam()
{
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM `team`");
    $countsteam = mysqli_num_rows($result);
    return $countsteam;
}

function countProduk()
{
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM `produk`");
    $countsproduk = mysqli_num_rows($result);
    return $countsproduk;
}

function countPortfolio()
{
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM `portofolio`");
    $countportofolio = mysqli_num_rows($result);
    return $countportofolio;
}

function countClients()
{
	global $conn;
	$result = mysqli_query($conn, "SELECT * FROM `client`");
    $countsclient = mysqli_num_rows($result);
    return $countsclient;
}

