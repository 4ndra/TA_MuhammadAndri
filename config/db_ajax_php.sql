-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2023 pada 00.44
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pengantar`
--

CREATE TABLE `surat_pengantar` (
  `nik` int(25) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` text NOT NULL,
  `agama` enum('islam','katolik','protestan','hindu','budha','konghucu') NOT NULL,
  `status` enum('menikah','pelajar') NOT NULL,
  `maksud_perihal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `surat_pengantar`
--

INSERT INTO `surat_pengantar` (`nik`, `nama_lengkap`, `tanggal_lahir`, `pekerjaan`, `agama`, `status`, `maksud_perihal`) VALUES
(123, 'andra', '2023-06-01', 'mahasiswa', 'islam', 'pelajar', 'membuat ktp'),
(12345, 'Muhammad Andri', '2023-05-01', 'pelajar', 'islam', 'pelajar', 'pembuatan ktp'),
(123456, 'Muhammad Andri Nur Hidayat', '2023-06-01', 'Mahasiswa', 'islam', 'pelajar', 'Membuat surat izin mengemudi');

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
(123, 'Muhammad Andri Nur Hidayat', 'Puri Indah Cileungsi', 'Islam', '', '2023-06-01'),
(13245, 'Muhammad Andri Nur Hidayat', 'Puri Indah Cileungsi', 'Islam', '', '2004-12-26'),
(1234567, 'muhammad andra', 'puri indah', 'Islam', '', '2004-12-26'),
(8967462, 'Bayu Gintara', 'Puri Indah Cileungsi', 'Islam', '', '2023-05-21'),
(12345678, 'andri', 'muajfja', 'Islam', '', '2023-05-02');

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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `surat_pengantar`
--
ALTER TABLE `surat_pengantar`
  ADD PRIMARY KEY (`nik`);

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
-- AUTO_INCREMENT untuk tabel `surat_pengantar`
--
ALTER TABLE `surat_pengantar`
  MODIFY `nik` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123457;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54322;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
