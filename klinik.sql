-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 02:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `nomor_resep` int(20) NOT NULL,
  `kode_obat` int(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `dosis` int(20) NOT NULL,
  `subtotal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`nomor_resep`, `kode_obat`, `harga`, `dosis`, `subtotal`) VALUES
(22, 11, 2000, 1, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `kode_dokter` int(20) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(20) NOT NULL,
  `kode_poliklinik` int(20) NOT NULL,
  `tarif` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kode_dokter`, `nama_dokter`, `spesialis`, `alamat`, `telepon`, `kode_poliklinik`, `tarif`) VALUES
(1, 'tamnvan', 'goreng ayam', 'kono kae', 57567567, 1, 564),
(2, 'Umar123', 'Bedah', 'D.I Yogyakarta', 2147483647, 3, 7000),
(3, 'Uniko12', 'Ngulik12', 'D.I Yogyakarta 12', 76867671, 2, 70001);

-- --------------------------------------------------------

--
-- Table structure for table `jenisobat`
--

CREATE TABLE `jenisobat` (
  `jenis_obat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenisobat`
--

INSERT INTO `jenisobat` (`jenis_obat`) VALUES
('Pulvis'),
('Pulveres'),
('Tablet'),
('Pil'),
('Kapsul'),
('Kaplet'),
('Larutan'),
('Suspensi'),
('Emulsi'),
(' Galenik'),
('Ekstrak'),
('Infusa'),
('Imunoserum'),
('Salep'),
('Suppositoria'),
('Obat tetes'),
('Injeksi');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `kode_obat` int(20) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga_obat` int(20) NOT NULL,
  `jumlah_obat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jenis_obat`, `kategori`, `harga_obat`, `jumlah_obat`) VALUES
(11, 'Obat Anti Pusing Gan', 'Pil', 'Dosis tinggi', 1000, 12),
(12, 'mantap14', 'Suppositoria', 'Dosis tinggi ', 1200, 1289);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `kode_pasien` int(20) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `umur` int(20) NOT NULL,
  `telepon` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kode_pasien`, `nama_pasien`, `alamat`, `gender`, `umur`, `telepon`) VALUES
(77, 'Kae Pokoke bos', 'kono pokoke', 'P', 12, 123),
(81, 'Anajar12', 'dsa', 'P', 144, 2147);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `nomor_pembayaran` int(11) NOT NULL,
  `kode_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`nomor_pembayaran`, `kode_pasien`, `tanggal`, `jumlah`) VALUES
(91, 77, '2019-05-10', 89998);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nomor_pendaftaran` int(20) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_dokter` int(20) NOT NULL,
  `kode_pasien` int(20) NOT NULL,
  `kode_poliklinik` int(20) NOT NULL,
  `biaya` int(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`nomor_pendaftaran`, `nama_pendaftar`, `tanggal`, `kode_dokter`, `kode_pasien`, `kode_poliklinik`, `biaya`, `keterangan`) VALUES
(6, 'namaku', '2019-05-10', 1, 77, 1, 1676, 'fdcgfd');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE `poliklinik` (
  `kode_poliklinik` int(11) NOT NULL,
  `nama_poliklinik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`kode_poliklinik`, `nama_poliklinik`) VALUES
(1, 'Mawar'),
(2, 'Melati');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `nomer_resep` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_dokter` int(20) NOT NULL,
  `kode_pasien` int(20) NOT NULL,
  `kode_poliklinik` int(20) NOT NULL,
  `total_harga` int(100) NOT NULL,
  `bayar` int(100) NOT NULL,
  `kembalian` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`nomer_resep`, `tanggal`, `kode_dokter`, `kode_pasien`, `kode_poliklinik`, `total_harga`, `bayar`, `kembalian`) VALUES
(332, '2019-04-03', 2, 77, 1, 400, 5000, 4600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD KEY `kode_obat` (`kode_obat`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`kode_dokter`),
  ADD KEY `kode_poliklinik` (`kode_poliklinik`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`kode_pasien`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`nomor_pembayaran`),
  ADD KEY `kode_pasien` (`kode_pasien`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`nomor_pendaftaran`),
  ADD KEY `kode_poliklinik` (`kode_poliklinik`),
  ADD KEY `kode_poliklinik_2` (`kode_poliklinik`),
  ADD KEY `kode_dokter` (`kode_dokter`),
  ADD KEY `kode_pasien` (`kode_pasien`);

--
-- Indexes for table `poliklinik`
--
ALTER TABLE `poliklinik`
  ADD PRIMARY KEY (`kode_poliklinik`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`nomer_resep`),
  ADD KEY `kode_dokter` (`kode_dokter`),
  ADD KEY `kode_pasien` (`kode_pasien`),
  ADD KEY `kode_poliklinik` (`kode_poliklinik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `kode_dokter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `kode_obat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `kode_pasien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `nomor_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `nomor_pendaftaran` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `poliklinik`
--
ALTER TABLE `poliklinik`
  MODIFY `kode_poliklinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resep`
--
ALTER TABLE `resep`
  MODIFY `nomer_resep` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
