-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Feb 2020 pada 01.52
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `djari`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumentasi`
--

CREATE TABLE IF NOT EXISTS `tb_dokumentasi` (
  `id_dokumentasi` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokumentasi`
--

INSERT INTO `tb_dokumentasi` (`id_dokumentasi`, `id_kategori`, `gambar`, `keterangan`) VALUES
(4, 1, '69f22d2f2f3080b6e1af34017de2c714.jpg', 'Wedding'),
(5, 2, '32c2c7f579c74394794bd6d2bb906435.jpg', 'Family Shoot');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_selesai`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_selesai` (
  `id_jadwal_selesai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal_selesai`
--

INSERT INTO `tb_jadwal_selesai` (`id_jadwal_selesai`, `id_jadwal`, `nama`, `alamat`, `tanggal`) VALUES
(1, 1, 'Dikaso', 'jl.sidoasri', '2020-01-16'),
(2, 2, 'cobak', 'Jl.mawar', '2020-01-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Wedding '),
(2, 'Photo Shoot');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `jabatan`, `username`, `password`, `gambar`) VALUES
(1, 'Walter White', 'Chief Executive Officer', 'ceo', '81dc9bdb52d04dc20036dbd8313ed055', 'team-1.jpg'),
(2, 'Sarah Jhonson', 'Product Manager', 'pm', '81dc9bdb52d04dc20036dbd8313ed055', 'team-2.jpg'),
(3, 'William Anderson', 'Chief Technology Officer', 'cto', '81dc9bdb52d04dc20036dbd8313ed055', 'team-3.jpg'),
(4, 'Amanda Jepson', 'Accountant', 'act', '81dc9bdb52d04dc20036dbd8313ed055', 'team-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  ADD PRIMARY KEY (`id_dokumentasi`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_jadwal_selesai`
--
ALTER TABLE `tb_jadwal_selesai`
  ADD PRIMARY KEY (`id_jadwal_selesai`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  MODIFY `id_dokumentasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_jadwal_selesai`
--
ALTER TABLE `tb_jadwal_selesai`
  MODIFY `id_jadwal_selesai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
