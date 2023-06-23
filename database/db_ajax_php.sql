-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2023 pada 03.34
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ajax_php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id_user` int(25) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` enum('admin','warga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_user`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(12345, 'admin', 'admin', 'admin', 'admin'),
(54321, 'Muhammad Andri', 'andri', 'andri', 'warga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga1`
--

CREATE TABLE `warga1` (
  `nik` int(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `agama` enum('Islam','kristen','protestan','hindu','budha','konghucu') NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `warga1`
--

INSERT INTO `warga1` (`nik`, `nama`, `alamat`, `agama`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(12, 'Muhammad Andri Nur Hidayat', 'Puri Indah Cileungsi', 'Islam', 'laki-laki', '2004-12-12'),
(9865, 'siti aminah', 'Puri Indah Cileungsi', 'Islam', 'perempuan', '2012-02-05'),
(12345, 'Muhammad Yusuf', 'Puri Indah Cileungsi', 'Islam', 'laki-laki', '2023-01-02'),
(54321, 'Muhammad Andra', 'Puri Indah Cileungsi', 'Islam', 'laki-laki', '2004-01-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga2`
--

CREATE TABLE `warga2` (
  `nik` int(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `agama` enum('Islam','kristen','protestan','hindu','budha','konghucu') NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `warga2`
--

INSERT INTO `warga2` (`nik`, `nama`, `alamat`, `agama`, `jenis_kelamin`, `tanggal_lahir`) VALUES
(54321, 'Muhammad Andri', 'Puri Indah Cileungsi', 'Islam', 'laki-laki', '2023-03-07'),
(54321, 'Muhammad Andri', 'Puri Indah Cileungsi', 'Islam', 'laki-laki', '2023-03-07'),
(54321, 'Agung Kuncoro', 'Citra Indah', 'Islam', 'laki-laki', '2004-01-02'),
(54321, 'Agung Kuncoro', 'Citra Indah', 'Islam', 'laki-laki', '2004-01-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `warga1`
--
ALTER TABLE `warga1`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54322;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
