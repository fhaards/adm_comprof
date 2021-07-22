-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2021 pada 12.08
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
(11, 'PATRAJASA', '60f60a4169747.png'),
(12, 'ELNUSA', '60f60a5162d40.png'),
(13, 'KEMENTRIAN PERTANIAN REPUBLIK INDONESIA', '60f60a65dde78.png'),
(14, 'KEMENTRIAN PERHUBUNGAN REPUBLIK INDONESIA', '60f60a79de36d.png'),
(15, 'BADAN PENGELOLA TRANSPORTASI JABODETABEK', '60f60a8f85815.png');

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
(5, 'Adidaya Duta Mitrakom', 'The H Tower Unit 10-C\r\nJln. Rasuna Said Kav 20 Kel.Karet Kuningan Kec. Setiabudi Jakarta Selatan', 'pt.adidayadutamitrakom@gmail.com', '082110805359', ' 087883471110', 'adm_icon1.png', 'Based_Logo_longtext_subtitle.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `company_about`
--

CREATE TABLE `company_about` (
  `id_comp_about` int(10) NOT NULL,
  `comp_about` text NOT NULL,
  `comp_visi` text NOT NULL,
  `comp_misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `company_about`
--

INSERT INTO `company_about` (`id_comp_about`, `comp_about`, `comp_visi`, `comp_misi`) VALUES
(7, '&lt;p style=&quot;text-align: justify;&quot;&gt;PT. Adidaya Duta Mitrakom merupakan perusahaan yang ditujukan untuk mencakup berbagai bidang usaha yang secara prospektif dapat menjadikan unggulan atau kompetensi sehingga dapat melayani kebutuhan customer secara lebih komprehensif Sebagai upaya untuk mendapatkan tingkat pelayanan (services) yang memadai dan dapat diandalkan (reliable), PT. Adidaya Duta Mitrakom berupaya untuk memenuhi permintaan sesuai dengan persyaratan yang ditetapkan oleh customer.&lt;br /&gt;&lt;br /&gt;PT. Adidaya Duta Mitrakom berupaya untuk dapat memberikan kontribusi posistif terhadap main business customer, sehingga dapat turut serta dalam membangun citra customer. Untuk hal tersebut, maka PT. Adidaya Duta Mitrakom selalu berusaha dekat dengan customer.&lt;br /&gt;&lt;br /&gt;PT. Adidaya Duta Mitrakom memiliki Team Work dan Tenaga Ahli yang professional yand didukung dengan Personal Experience yang Qualified di bidangnya masingmasing sehingga mampu untuk saling mendukung dalam mewujudkan kepuasan konsumen.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;PT. Adidaya Duta Mitrakom selalu bertanggung jawab dan berusaha memberikan pelayanan yang terbaik kepada partner kerja dalam memberikan solusi-solusi di bidang IT, public safety, trading, mechanical electrical, general contractor, dan penyediaan manpower di dalam sektor bisnis perusahaan swasta dan sektor pemerintahan.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Menjadi suatu perusahaan yang dapat Go international dengan bekerjasama para pihak - pihak perusahaan lain baik dari dalam negeri ataupun luar negeri.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;', '&lt;p style=&quot;text-align: justify;&quot;&gt;Dalam era efisiensi dan efektifitas saat ini, PT. Adidaya Duta Mitrakom mencanangkan tujuan perusahaan untuk dapat menjadikan solusi bagi customer dalam memenuhi kebutuhan dan permintaan, sesuai dengan persyaratan Kualitas, Harga dan Waktu sehingga customer dapat lebih fokus terhadap main business-nya. Secara lebih progresif, PT. Adidaya Duta Mitrakom dapat menjadi mitra terpercaya dan solusi dalam Bidang-Bidang Keahlian yang diperlukan konsumen&lt;/p&gt;', '&lt;p style=&quot;text-align: justify;&quot;&gt;Membentuk SDM yang bekerja keras, serius, terukur, jujur dan bertanggung-jawab dalam melaksanakan tugas.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Menjalin dan menjaga hubungan yang harmonis serta kekompakan SDM / Team Work.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Melaksanakan pekerjaan dengan penuh tanggung-jawab, tepat waktu dan dengan hasil yang baik dan benar sesuai spesifikasi teknis pekerjaan.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Berpikir dan bertindak positif, komunikatif dan inovatif serta kreatif dalam menghadapi setiap kendala pekerjaan internal maupun external.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Memperhatikan dan meningkatkan kemampuan manajemen dan teknis SDM secara berkesinambungan dari waktu ke waktu.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Penyusunan Program yang terencana dengan baik (well organized) untuk ukuran kesuksesan melalui kepuasan konsumen.&lt;/p&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;Mendapatkan citra baik dalam pelayanan jasa saat ini dan di masa mendatang.&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `nama_port_cat` text NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `nama_port_cat`, `judul`, `keterangan`, `gambar`) VALUES
(21, 'Arcrylic', 'Extra Supplier Gathering', 'Arcrylic for Extra Supplier Gathering PLN', '60f8322a163a0.jpeg'),
(22, 'Arcrylic', 'Aqua Arcrylic', 'Aqua Arcrylic', '60f8337f28260.jpeg'),
(23, 'Arcrylic', 'Acrylic Company Name Plate', 'Acrylic Company Plate for PT. Rahman Abdijaya ', '60f833ce0e50f.jpeg'),
(24, 'Furnishing', 'Kitchen Set', '', '60f833f10b935.jpg'),
(26, 'Construction', 'Build Construction and Maintenance', '', '60f834908873e.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio_category`
--

CREATE TABLE `portofolio_category` (
  `id_port_cat` int(11) NOT NULL,
  `nama_port_cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portofolio_category`
--

INSERT INTO `portofolio_category` (`id_port_cat`, `nama_port_cat`) VALUES
(9, 'Construction'),
(10, 'Furnishing'),
(11, 'Arcrylic');

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
-- Indeks untuk tabel `company_about`
--
ALTER TABLE `company_about`
  ADD PRIMARY KEY (`id_comp_about`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portofolio_category`
--
ALTER TABLE `portofolio_category`
  ADD PRIMARY KEY (`id_port_cat`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `comp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `company_about`
--
ALTER TABLE `company_about`
  MODIFY `id_comp_about` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `portofolio_category`
--
ALTER TABLE `portofolio_category`
  MODIFY `id_port_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
