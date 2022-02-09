-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2022 pada 17.40
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(9) NOT NULL,
  `Agama` varchar(9) NOT NULL,
  `Sekolah_Asal` varchar(20) NOT NULL,
  `Foto_Maba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `calon_mhs`
--

INSERT INTO `calon_mhs` (`Id`, `Nama`, `Alamat`, `Jenis_Kelamin`, `Agama`, `Sekolah_Asal`, `Foto_Maba`) VALUES
(1, 'Siti Nuraini', 'Keroncong Permai', 'Perempuan', 'Islam', 'SMA PGRI 109', 0),
(2, 'Ayu Puspita', 'Gebang Raya', 'Perempuan', 'Islam', 'SMAN 15', 0),
(3, 'Bambang Wahyudi', 'Pondok Makmur', 'Laki-laki', 'Islam', 'SMA PGRI 109', 0),
(4, 'Bunga', 'Griya Cibodas Asri', 'Perempuan', 'Islam', 'SMAN 15', 0),
(5, 'Ilyas Rosyid', 'Keroncong Permai', 'Laki-laki', 'Islam', 'SMK 8', 0),
(6, 'Hisyam Rosyid', 'Gebang Raya', 'Laki-laki', 'Islam', 'SMAN 15', 0),
(7, 'Debby Melinda Putri', 'Keroncong Permai ', 'Perempuan', 'Islam', 'SMAN 11', 0),
(8, 'Renata', 'Sangiang', 'Perempuan', 'Islam', 'SMAN 11', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_dosen`
--

CREATE TABLE `daftar_dosen` (
  `Id` int(10) NOT NULL,
  `nidn` int(10) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` varchar(10) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `s1` varchar(10) NOT NULL,
  `s2` varchar(30) NOT NULL,
  `s3` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`Id`, `nidn`, `nama`, `email`, `jenis_kelamin`, `alamat`, `agama`, `s1`, `s2`, `s3`, `foto`) VALUES
(1, 40109903, 'Djamaludin', 'Djamaludin@unis.ac,id', 'Laki-Laki', 'Tangerang', 'Islam', 'Pendidikan', 'Pendidikan S2', 'Pendidikan S3', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
