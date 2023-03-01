-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2022 pada 10.18
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `izin`
--

CREATE TABLE `izin` (
  `id` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tgl_input` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `izin`
--

INSERT INTO `izin` (`id`, `nama`, `nis`, `kelas`, `jenis_kelamin`, `jurusan`, `keterangan`, `tgl_input`) VALUES
(65, 'abizar', '2644', '12rpl1', 'laki', 'rpl', 'ke pim', '2022-08-20'),
(66, 'aisyan', '122344', '12rpl1', 'laki', 'rpl', 'pergi', '2022-08-24'),
(67, 'ANDHIKA NUGRAHA', '1234', '12rpl1', 'laki', 'rpl', 'pergi', '2022-09-10'),
(68, 'aisyan', '004', '12rpl1', 'laki', 'rpl', 'pergi', '2022-09-14'),
(71, 'indah nuraeni', '1234', '12rpl1', 'laki', 'rpl', 'demam', '2022-09-18'),
(72, 'aisyan', '004', '12rpl1', 'laki', 'rpl', 'pergi', '2022-09-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masuk`
--

CREATE TABLE `masuk` (
  `id` int(200) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `jurusan` varchar(200) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `masuk`
--

INSERT INTO `masuk` (`id`, `nama`, `nis`, `kelas`, `jenis_kelamin`, `jurusan`, `tgl_input`) VALUES
(1, 'andhika nugraha', '20684', '12rpl1', '', 'rpl', '2022-08-14'),
(2, 'aisyan', '004', '12rpl1', 'laki', 'rpl', '2022-09-18'),
(3, 'abizar', '1234', '12rpl1', 'laki', 'rpl', '2022-09-18'),
(4, 'aisyan', '004', '12rpl1', 'laki', 'rpl', '2022-09-23'),
(5, 'abizar', '1w1', '12rpl1', 'laki', 'rpl', '2022-09-23'),
(6, 'indah nuraeni', '004', '1212', 'perempuan', 'rpl', '2022-10-01'),
(7, 'abizar', '1234', '12rpl1', 'laki', 'rpl', '2022-10-01'),
(8, 'aisyan', '1w1', '12rpl1', 'laki', 'rpl', '2022-10-01'),
(9, 'aisyan', '004', '12rpl1', 'laki', 'rpl', '2022-10-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `multi_user`
--

CREATE TABLE `multi_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `multi_user`
--

INSERT INTO `multi_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin123', 'admin'),
(2, 'tatausaha', 'TU', '123', 'TU'),
(11, 'aisyan', 'aisyan', '123', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sakit`
--

CREATE TABLE `sakit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sakit`
--

INSERT INTO `sakit` (`id`, `nama`, `nis`, `kelas`, `jenis_kelamin`, `jurusan`, `status`, `gambar`, `tgl_input`) VALUES
(1, 'ada', '233', 'rre', 'laki', 'rpl', 'sakit', '', '2022-08-14'),
(2, 'abizar', '004', '12rpl1', 'laki', 'rpl', '', 'lengh.png', '2022-10-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `multi_user`
--
ALTER TABLE `multi_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sakit`
--
ALTER TABLE `sakit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `izin`
--
ALTER TABLE `izin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `multi_user`
--
ALTER TABLE `multi_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sakit`
--
ALTER TABLE `sakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
