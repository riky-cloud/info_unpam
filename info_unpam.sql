-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 06 Sep 2017 pada 10.41
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_unpam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `isi` text,
  `created_date` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `id_kategori`, `id_user`, `id_foto`, `judul`, `isi`, `created_date`, `updated`, `deleted`) VALUES
(12, 6, 1, 7, 'Informasi lowongan atau tempat kerja praktik', '<p><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">Informasi bagi yang membutuhkan lowongan atau tempat kerja praktik</span></p>', '2017-09-05 22:24:47', '2017-09-05 22:24:47', '0'),
(13, 6, 1, 1, 'INFO IKATAN DINAS ERESHA', '<p><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">yang nama tertera dalam file ini dinyatakan lulus dan untuk yg belum berhasil silahkan dicoba kembali dikesempatan berikutnya . dan untuk pendaftran gelombang 4 ditutup tanggal 30 Agustus 2017. jika kurang jelas , silahan langsung ke sekretariat eresha .terimakasih</span></p>', '2017-09-05 22:20:02', '2017-09-05 22:20:02', '0'),
(14, 5, 1, 4, 'info kalender akademik semester ganjil 2017-2018', '<p style="margin: 6px 0px; font-family: Helvetica, Arial, sans-serif; color: #1d2129;">Berikut ini terlampir pada postingan ini Kalender akademik tahun ajar semester ganjil 2017-2018.</p>\r\n<p style="margin: 6px 0px; font-family: Helvetica, Arial, sans-serif; color: #1d2129;">pastikan aktifitas akademik kalian jangan sampai terlewatkan, dan sesuaikan dengan kalender akademik pada tahun ajar semseter ganjil 2017-2018.</p>\r\n<div class="text_exposed_show" style="display: inline; font-family: Helvetica, Arial, sans-serif; color: #1d2129;">\r\n<p style="margin: 0px 0px 6px; font-family: inherit;">Terima kasih&nbsp;<br />&nbsp;ttd&nbsp;<br />Prodi T. Informatika UNPAM</p>\r\n<p style="margin: 0px 0px 6px; font-family: inherit;">&nbsp;</p>\r\n<p style="margin: 0px 0px 6px; font-family: inherit;">link download</p>\r\n</div>', '2017-09-05 22:13:57', '2017-09-05 22:13:57', '0'),
(15, 6, 1, 6, 'Selamat bergabung di Universitas Pamulang (Propesa 2017-2018)', '<p style="margin: 0px 0px 6px; font-family: Helvetica, Arial, sans-serif; color: #1d2129;">Selamat bergabung di Universitas Pamulang" ...</p>\r\n<p style="margin: 6px 0px; font-family: Helvetica, Arial, sans-serif; color: #1d2129;">Semoga sukses dimasa yg akan datang.</p>\r\n<p>&nbsp;</p>\r\n<p style="margin: 6px 0px 0px; display: inline; font-family: Helvetica, Arial, sans-serif; color: #1d2129;">(Propesa 2017-2018)</p>', '2017-09-05 22:18:48', '2017-09-05 22:18:48', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id` int(11) NOT NULL,
  `file_name` varchar(250) DEFAULT NULL,
  `keterangan` text,
  `created_date` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id`, `file_name`, `keterangan`, `created_date`, `updated`, `deleted`) VALUES
(1, 'umum.jpg', '<p>fefefe</p>', '2017-08-12 18:48:23', '2017-08-28 20:19:23', '0'),
(2, 'wisuda.jpg', '<p>grgrgr</p>', '2017-08-12 18:48:44', '2017-08-28 20:19:52', '0'),
(3, 'a25fa66ea27527ec1d5c0b574446aa21.jpg', '<p>tentang&nbsp;</p>', '2017-08-28 20:47:40', '2017-08-28 20:47:40', '0'),
(4, 'c3c93c8ab42f40f5f37e6a2114c906ea.png', '<p>kalender akademik</p>', '2017-09-05 22:21:50', '2017-09-05 22:21:50', '0'),
(5, 'eba79faac3e746dedbb99a8d65177b14.jpg', '', '2017-09-05 22:11:58', '2017-09-05 22:11:58', '0'),
(6, 'a531265656fb8b4d61bf2e5aa13e1e0f.jpg', '<p><span style="color: #1d2129; font-family: Helvetica, Arial, sans-serif;">Propesa</span></p>', '2017-09-05 22:18:04', '2017-09-05 22:18:04', '0'),
(7, '1a92443659bd5b44755b6156f12e40f4.jpg', '<p>jobs alert</p>', '2017-09-05 22:23:11', '2017-09-05 22:23:11', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `created_date` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama`, `keterangan`, `created_date`, `updated`, `deleted`) VALUES
(1, 'umum 66', '<p>ini untuk informasi unum</p>', '2017-08-28 16:30:23', '2017-08-28 20:18:02', '0'),
(2, 'wisuda', '<p>y5y5y55</p>', '2017-08-28 17:59:13', '2017-08-28 17:59:13', '0'),
(3, 'baru', NULL, '2017-08-28 16:20:55', '2017-08-28 16:20:55', '0'),
(4, 'test', '', '2017-09-05 21:32:06', '2017-09-05 21:32:06', '1'),
(5, 'kalender akademik', NULL, '2017-09-05 22:06:34', '2017-09-05 22:06:34', '0'),
(6, 'umum', NULL, '2017-09-05 22:06:44', '2017-09-05 22:06:44', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text,
  `level` enum('1','2','3','4','5') DEFAULT '5',
  `created_date` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `password`, `tanggal_lahir`, `alamat`, `level`, `created_date`, `updated`, `deleted`) VALUES
(1, 'riky', 'rikycloud@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-08-23', 'pamulang', '1', '2017-08-09 17:13:28', '2017-08-09 17:13:33', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
