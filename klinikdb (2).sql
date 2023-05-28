-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2019 pada 14.46
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinikdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `spesialisasi` varchar(20) NOT NULL,
  `nomor_STR` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama`, `tanggal_lahir`, `spesialisasi`, `nomor_STR`) VALUES
(1, 'dr.Susi', '1989-10-10', 'Umum', '046890'),
(2, 'dr.Budi', '1982-09-09', 'Umum', '046871'),
(3, 'drg.Bambang', '1981-05-12', 'Gigi', '056525'),
(4, 'drg.Susan', '1979-10-14', 'Gigi', '053640'),
(5, 'Dr. Danang', '1978-02-02', 'Umum', '0896745'),
(6, 'drg aries', '1980-12-18', 'gigi', '9123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_pemeriksaan`
--

CREATE TABLE `hasil_pemeriksaan` (
  `id_pemeriksaan` int(10) NOT NULL,
  `subjective` varchar(100) NOT NULL,
  `objective` varchar(100) NOT NULL,
  `assesment` varchar(100) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `biaya` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil_pemeriksaan`
--

INSERT INTO `hasil_pemeriksaan` (`id_pemeriksaan`, `subjective`, `objective`, `assesment`, `plan`, `biaya`) VALUES
(1, 'contoh', 'contoh', 'contoh', 'contoh', 50000),
(2, 'contoh', 'contoh', 'contoh', 'contoh', 50000),
(3, 'apanih', 'apajuga', 'aw', 'tidur aja', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `passien`
--

CREATE TABLE `passien` (
  `nomor_rm` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `asuransi` enum('umum','BPJS','kontraktor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `passien`
--

INSERT INTO `passien` (`nomor_rm`, `nama`, `tanggal_lahir`, `gender`, `tanggal_daftar`, `asuransi`) VALUES
(1, 'Hanif Anam Maulana', '1998-10-24', 'L', '2019-12-20 15:42:10', 'BPJS'),
(2, 'rizz', '1994-12-10', 'P', '2019-12-25 22:54:35', 'BPJS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `nomor_rm` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_petugas` varchar(20) NOT NULL,
  `tanggal_pemeriksaan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_pemeriksaan`, `nomor_rm`, `id_dokter`, `id_petugas`, `tanggal_pemeriksaan`) VALUES
(1, 1, 1, 'Admin', '2019-12-20 15:16:06'),
(2, 2, 2, 'Bayu', '2019-12-20 15:28:02'),
(3, 3, 1, 'Bayu', '2019-12-20 15:28:22'),
(4, 2, 6, 'Bayu', '2019-12-25 23:40:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `password`, `nama`, `tanggal_lahir`, `level`) VALUES
('admin', 'admin', 'Bayu', '1998-10-24', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `hasil_pemeriksaan`
--
ALTER TABLE `hasil_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indeks untuk tabel `passien`
--
ALTER TABLE `passien`
  ADD PRIMARY KEY (`nomor_rm`);

--
-- Indeks untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `passien`
--
ALTER TABLE `passien`
  MODIFY `nomor_rm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
