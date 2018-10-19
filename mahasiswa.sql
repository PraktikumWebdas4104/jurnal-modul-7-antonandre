-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.04
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mhs`
--

CREATE TABLE `data_mhs` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `motto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mhs`
--

INSERT INTO `data_mhs` (`nim`, `nama`, `jk`, `prodi`, `fakultas`, `asal`, `motto`) VALUES
('6701174034', 'Anugrah', 'Laki-laki', 'S1 - TEKNIK FISIKA', 'Fakultas Teknik Elektro', 'Bandung', 'HIDUP AING KUMAHA AING'),
('6701175455', 'BABAB', 'Laki-laki', 'D3 - SISTEM INFORMASI', 'Fakultas Ilmu Terapan', 'Bandung', 'AAAAA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_mhs`
--
ALTER TABLE `data_mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
