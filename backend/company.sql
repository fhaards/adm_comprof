-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2021 pada 21.59
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comprof`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `comp_id` int(10) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `comp_address` text NOT NULL,
  `comp_email` varchar(50) NOT NULL,
  `comp_phone` varchar(20) NOT NULL,
  `comp_phone2` varchar(20) NOT NULL,
  `comp_logo` text NOT NULL,
  `comp_logo2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`comp_id`, `comp_name`, `comp_address`, `comp_email`, `comp_phone`, `comp_phone2`, `comp_logo`, `comp_logo2`) VALUES
(5, 'Adidaya Duta Mitrakoms', 'The H Tower Unit 10-C\r\nJln. Rasuna Said Kav 20 Kel.Karet Kuningan Kec. Setiabudi Jakarta Selatan', 'pt.adidayadutamitrakom@gmail.com', '082110805359', ' 087883471110', 'adm_icon1.png', 'Based_Logo_longtext_subtitle.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comp_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
