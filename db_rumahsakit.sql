-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Des 2020 pada 01.26
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rumahsakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bayar`
--

CREATE TABLE IF NOT EXISTS `tbl_bayar` (
`id_bayar` int(15) NOT NULL,
  `nama_pasien` varchar(25) NOT NULL,
  `jml_harga` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87655 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bayar`
--

INSERT INTO `tbl_bayar` (`id_bayar`, `nama_pasien`, `jml_harga`) VALUES
(87432, 'nisma', 1000000),
(87654, 'upin', 6000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokter`
--

CREATE TABLE IF NOT EXISTS `tbl_dokter` (
`id_dokter` int(20) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `spesialis` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87646 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_dokter`, `nama`, `spesialis`) VALUES
(4567, 'Adam Surya', 'jantung dan hati'),
(76589, 'Guspati', 'Anak'),
(87645, 'Kiki', 'THT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kamar`
--

CREATE TABLE IF NOT EXISTS `tbl_kamar` (
`id_pasien` int(15) NOT NULL,
  `nama_pasien` varchar(20) NOT NULL,
  `nama_dokter` varchar(20) NOT NULL,
  `jenis_kamar` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87635 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_pasien`, `nama_pasien`, `nama_dokter`, `jenis_kamar`) VALUES
(9876, 'Riri', 'Rara', 'Kelas 2'),
(26587, 'vista', 'visti', 'kelas 1'),
(87634, 'lala', 'lili', 'Kamar 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE IF NOT EXISTS `tbl_pasien` (
`id` int(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur` int(10) NOT NULL,
  `alamat` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12369 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`id`, `nama`, `jenis_kelamin`, `umur`, `alamat`) VALUES
(12357, 'upin', 'Laki-Laki', 6, 'Payakumbuh'),
(12367, 'nisma', 'Perempuan', 27, '			\r\n		Padang Panjang		'),
(12368, 'maman', 'Laki-Laki', 29, '			Pasaman\r\n				');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_petugas`
--

CREATE TABLE IF NOT EXISTS `tbl_petugas` (
`id_petugas` int(15) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `jam_jaga` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12568 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`id_petugas`, `nama_petugas`, `jam_jaga`) VALUES
(12345, 'Rita', 11),
(12567, 'Rise', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Admin'),
(3, 'user', 'user123', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
 ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
 ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
 ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
 ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
MODIFY `id_bayar` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87655;
--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
MODIFY `id_dokter` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87646;
--
-- AUTO_INCREMENT for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
MODIFY `id_pasien` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87635;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12369;
--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
MODIFY `id_petugas` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12568;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
