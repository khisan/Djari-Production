-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2020 pada 02.58
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `tb_client`
--

CREATE TABLE `tb_client` (
  `id_client` int(11) NOT NULL,
  `nama_client` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_client`
--

INSERT INTO `tb_client` (`id_client`, `nama_client`, `alamat`, `id_product`) VALUES
(7, 'Bokur', 'Jl Dr Suhardjo No 30 A-B Depan Muktamar/Lap, pondok, Lirboyo, Kec. Mojoroto, Kediri, Jawa Timur 64116, Indonesia', 1),
(9, 'Hamdan', 'Jl. Jenderal Basuki Rahmat No.32, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119, Indonesia', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokumentasi`
--

CREATE TABLE `tb_dokumentasi` (
  `id_dokumentasi` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_dokumentasi`
--

INSERT INTO `tb_dokumentasi` (`id_dokumentasi`, `id_kategori`, `gambar`, `keterangan`) VALUES
(4, 1, '480b6edd535f2f2fc09449cf0df2dd52.jpg', 'Wedding cuy'),
(5, 2, '32c2c7f579c74394794bd6d2bb906435.jpg', 'Family Shoot'),
(6, 1, '4a7d3b52de0839bd06e8e44dc52ba6d9.jpg', 'Wedding 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_client`, `alamat`, `tanggal`) VALUES
(9, 7, 'Jl Dr Suhardjo No 30 A-B Depan Muktamar/Lap, pondok, Lirboyo, Kec. Mojoroto, Kediri, Jawa Timur 64116, Indonesia', '2020-05-26'),
(10, 9, 'Jl. Jenderal Basuki Rahmat No.32, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119, Indonesia', '2020-05-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal_selesai`
--

CREATE TABLE `tb_jadwal_selesai` (
  `id_jadwal_selesai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `tanggal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal_selesai`
--

INSERT INTO `tb_jadwal_selesai` (`id_jadwal_selesai`, `id_jadwal`, `id_client`, `tanggal`) VALUES
(8, 9, 7, '2020-05-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Wedding '),
(2, 'Photo Shoot');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_client`, `nominal`, `keterangan`) VALUES
(6, 7, 30000, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `nama_product` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `nama_product`, `harga`, `keterangan`) VALUES
(1, 'Canon EOS 7D Kit l', 870000, 'test cuy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `jabatan`, `username`, `password`, `gambar`) VALUES
(1, 'Walter White ', 'Chief Executive Officer ', 'ceo ', '81dc9bdb52d04dc20036dbd8313ed055', 'team-1.jpg'),
(2, 'Sarah Jhonson', 'Vice Chief Executive Officer', 'vc', '81dc9bdb52d04dc20036dbd8313ed055', 'team-2.jpg'),
(3, 'William Anderson ', 'Employee ', 'em ', '81dc9bdb52d04dc20036dbd8313ed055', 'testimonial-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_client`
--
ALTER TABLE `tb_client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `tb_client_ibfk_1` (`id_product`);

--
-- Indeks untuk tabel `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  ADD PRIMARY KEY (`id_dokumentasi`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `tb_jadwal_ibfk_1` (`id_client`);

--
-- Indeks untuk tabel `tb_jadwal_selesai`
--
ALTER TABLE `tb_jadwal_selesai`
  ADD PRIMARY KEY (`id_jadwal_selesai`),
  ADD KEY `tb_jadwal_selesai_ibfk_1` (`id_jadwal`),
  ADD KEY `tb_jadwal_selesai_ibfk_2` (`id_client`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_client` (`id_client`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_client`
--
ALTER TABLE `tb_client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  MODIFY `id_dokumentasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal_selesai`
--
ALTER TABLE `tb_jadwal_selesai`
  MODIFY `id_jadwal_selesai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_client`
--
ALTER TABLE `tb_client`
  ADD CONSTRAINT `tb_client_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_dokumentasi`
--
ALTER TABLE `tb_dokumentasi`
  ADD CONSTRAINT `tb_dokumentasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id_client`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tb_jadwal_selesai`
--
ALTER TABLE `tb_jadwal_selesai`
  ADD CONSTRAINT `tb_jadwal_selesai_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `tb_client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
