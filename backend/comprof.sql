-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jul 2021 pada 22.03
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `userid` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `userid`, `username`, `password`) VALUES
(2, 'hildan', 'hildan', 'hildan'),
(6, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `client`
--

INSERT INTO `client` (`id`, `nama`, `gambar`) VALUES
(6, 'MRT JAKARTA', '60f47f3de3d47.png');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `keterangan`, `gambar`) VALUES
(9, 'asdasd', 'asdasd', '60f4804b4f1a8.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `text`) VALUES
(1, 'sdaas'),
(2, 'ada'),
(3, 'ada'),
(6, 'ada'),
(14, 'ada'),
(15, 'ada'),
(16, 'ada'),
(17, 'esvdsc'),
(22, 'ada'),
(23, 'ada'),
(24, 'ada'),
(25, 'qwq'),
(29, 'ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `difisi` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `difisi`, `keterangan`, `gambar`) VALUES
(3, 'JOKO WALUYO', 'DIREKTUR', '', '', '60f456a99a8a1.jpg'),
(4, 'IKA', 'KEPALA DIVISI', 'DIVISI KEUANGAN DAN HRD', '', '60f457386ed70.jpg'),
(5, 'AGUS SUNARNO', 'KEPALA DIVISI', 'DIVISI TEKNIK DAN ENGINEERING', '', '60f457730efd4.jpg'),
(6, 'YOGIANO HERMAN S', 'KEPALA DIVISI', 'DIVISI PEMASARAN DAN MARKETING', '', '60f457c968730.jpg'),
(7, 'HEFNI ACHYAR', 'HR', 'DIVISI KEUANGAN DAN HRD', '', '60f458919b945.jpg'),
(8, 'EKA SETYANINGYUN', 'ADMINISTRASI KEUANGAN', 'DIVISI KEUANGAN DAN HRD', '', '60f458bc7297e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
