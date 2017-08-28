-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Agu 2017 pada 09.22
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `info_unpam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  `judul` varchar(250) DEFAULT NULL,
  `isi` text,
  `created_date` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `id_kategori`, `id_user`, `id_foto`, `judul`, `isi`, `created_date`, `updated`, `deleted`) VALUES
(12, 2, 1, 2, '''ini isi dari judul baru''', '''<p>isi dari <strong>wisudahan</strong></p>''', '2017-08-26 18:29:53', '2017-08-26 18:29:53', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE IF NOT EXISTS `tbl_foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_rev` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `file_name` varchar(250) DEFAULT NULL,
  `set_profile` enum('0','1') DEFAULT '0',
  `keterangan` text,
  `created_date` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id`, `id_rev`, `id_kategori`, `file_name`, `set_profile`, `keterangan`, `created_date`, `updated`, `deleted`) VALUES
(1, 1, 1, 'umum.jpg', '1', NULL, '2017-08-12 18:48:23', '2017-08-12 18:48:23', '0'),
(2, 2, 2, 'wisuda.jpg', '1', NULL, '2017-08-12 18:48:44', '2017-08-12 18:48:44', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `created_date` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id`, `nama`, `keterangan`, `created_date`, `updated`, `deleted`) VALUES
(1, 'umum', NULL, '2017-08-12 18:40:56', '2017-08-12 18:41:02', '0'),
(2, 'wisuda', NULL, '2017-08-12 18:45:02', '2017-08-12 18:45:06', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text,
  `level` enum('1','2','3','4','5') DEFAULT '5',
  `created_date` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `password`, `tanggal_lahir`, `alamat`, `level`, `created_date`, `updated`, `deleted`) VALUES
(1, 'riky', 'rikycloud@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2017-08-23', 'pamulang', '1', '2017-08-09 17:13:28', '2017-08-09 17:13:33', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
