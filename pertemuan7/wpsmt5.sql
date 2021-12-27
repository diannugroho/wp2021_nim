-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 13 Des 2021 pada 13.11
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `wpsmt5`
--
CREATE DATABASE IF NOT EXISTS `wpsmt5` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wpsmt5`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE IF NOT EXISTS `calon_mhs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(2, 'Sukisno', 'perum 1', 'laki -lak', 'Islam', 'SMA 109', 'foto2.png'),
(3, 'Maulia Mahardika', 'Mauk, Kab Tangerang', 'Perempuan', 'Islam', 'SMA 1 Mauk', 'foto1.png'),
(4, 'Ricko Alamsyah', 'Jayanti, Kab Tangerang', 'laki laki', 'Islam', 'SMA 112 Serang', 'foto2.png'),
(5, 'Rheza Maulana', 'Pakuhaji, Kab Tangerang', 'laki laki', 'Islam', 'SMA 1 Mauk', 'foto1.png'),
(7, 'Muhammad Rizky Hananda', 'cipondoh, kota tangerang', 'laki laki', 'Islam', 'SMA 1 Tangerang', 'foto1.jpg'),
(8, 'Hayunda Avianingtyas', 'ciledug, kota Tangerang', 'Perempuan', 'Islam', 'SMA 109', 'foto2.png'),
(9, 'Ahmad Fauzi', 'Kronjo, Kab Tangerang', 'laki laki', 'Islam', 'SMA 1 Mauk', 'foto1.png'),
(10, 'Mikhayla Prasetiyani', 'Grand Batavia', 'Perempuan', 'Islam', 'SMA 1 Tangerang', 'foto1.jpg'),
(24, 'jono', '&lt;h1&gt;halo&lt;/h1&gt;', 'Laki Laki', 'Islam', 'SMK 1 Tangerang', 'qwqwq'),
(25, 'selly sri', 'perum3', 'Perempuan', 'Islam', 'smk nusantara', 'seli');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
