-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2025 at 07:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webrt`
--

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `pendapatan` varchar(50) NOT NULL,
  `sumber` varchar(100) NOT NULL,
  `pengeluaran` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `warga_negara` varchar(25) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status_nikah` enum('Menikah','Belum Menikah') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no_kk` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `warga_negara`, `agama`, `status_nikah`, `alamat`, `no_telp`, `email`, `pendidikan_terakhir`, `pekerjaan`, `no_kk`, `nama_ayah`, `nama_ibu`) VALUES
(1, '6748329064324387', 'Hiu', 'Buaya', '2025-11-01', 'Laki-Laki', 'Indonesia', 'Islam', 'Belum Menikah', 'Kepo', '087656787655', 'hiuhiu@gmail.com', 'S1 - Informatika', 'Apapun', '678926473827362711', 'hui', 'ihu'),
(2, '7236327642892367', 'Hai', 'Huru', '2025-11-12', 'Laki-Laki', 'indonesia', 'Hindu', 'Menikah', 'Hara', '9808682673821', 'harahu@gmail.com', 'TK', 'dahuij', '673891876418902', 'dgahjk', 'tyuiwka'),
(3, '6748293087635127', 'Gui', 'Guyu', '2025-11-02', 'Perempuan', 'indonesia', 'Hindu', 'Belum Menikah', 'Gara', '98376256712', 'garahu@gmail.com', 'TK', 'dahuij', '5673892876563781902', 'nbcgsay', 'nbdhsaj');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `urgensi` enum('Tinggi','Sedang','Rendah') NOT NULL,
  `lampiran` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `status` enum('Menunggu Konfirmasi','Dalam Proses','Selesai','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jenis_surat` enum('Surat Pengantar','Surat Keterangan Domisili','Surat Izin Keramaian') NOT NULL,
  `lampiran` varchar(200) NOT NULL,
  `keperluan` text NOT NULL,
  `status` enum('Menunggu Konfirmasi','Disetujui','Ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `penduduk_id` int(11) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `role` enum('Admin','Pengurus','Warga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `penduduk_id`, `password`, `role`) VALUES
(1, 'Admin', 1, '$2b$12$8UyedYMAUeE0q./ZIPdTB./eWaMKlhDzRw/NpQ0vNFO/AckZClOcu', 'Admin'),
(2, 'Hai', 2, '$2y$10$uvu2eAX2m.u0ubGBL8aETe/wTj6NfM.F2pYHsqOrFkde9Dbjm.3Gi', 'Pengurus'),
(3, 'Gara', 3, '$2y$10$sKWBFoRu3YMW516xeYSibO5KjNQz94qSQm9lanVhrfF4pv/ivtO7.', 'Warga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
