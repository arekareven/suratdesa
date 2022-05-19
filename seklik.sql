-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 11:55 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seklik`
--

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `no_kk` varchar(16) NOT NULL,
  `nama_kk` varchar(50) DEFAULT NULL,
  `dusun` varchar(255) DEFAULT NULL,
  `rt` varchar(3) DEFAULT NULL,
  `rw` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`no_kk`, `nama_kk`, `dusun`, `rt`, `rw`) VALUES
('3521051802062633', 'YATNO', 'Kedungglagah 1', '2', '4'),
('3521052903070021', 'NUR ROKHIM', 'Kedungglagah 1', '5', '4');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nama_surat` varchar(50) DEFAULT NULL,
  `no_surat` varchar(45) DEFAULT NULL,
  `keperluan` varchar(2500) DEFAULT NULL,
  `alasan` varchar(2500) DEFAULT NULL,
  `isian` varchar(2500) DEFAULT NULL,
  `keterangan` varchar(2500) DEFAULT NULL,
  `tempat` varchar(35) DEFAULT NULL,
  `tanggal_surat` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `nik`, `nama`, `nama_surat`, `no_surat`, `keperluan`, `alasan`, `isian`, `keterangan`, `tempat`, `tanggal_surat`) VALUES
(82, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan KTP', '474.2/001/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '26-12-2021'),
(83, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan KTP', '474.2/002/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '26-12-2021'),
(84, '3521054608780002', 'SULASTRI', 'Surat Keterangan KTP', '474.2/003/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '27-12-2021'),
(85, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan KTP', '474.2/004/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '27-12-2021'),
(86, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan KTP', '474.2/005/404.319.04/2022', NULL, NULL, NULL, NULL, NULL, '17-01-2022'),
(87, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan KTP', '474.2/005/404.319.04/2022', NULL, NULL, NULL, NULL, NULL, '17-01-2022'),
(88, '3521051902970003', 'EKO FENDIK RIANTO', 'Surat Keterangan KTP', '474.2/006/404.319.04/2022', NULL, NULL, NULL, NULL, NULL, '17-01-2022'),
(89, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan KTP', '474.2/007/404.319.04/2022', NULL, NULL, NULL, NULL, NULL, '20-01-2022'),
(90, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan KTP', '474.2/008/404.319.04/2022', NULL, NULL, NULL, NULL, NULL, '19-05-2022');

-- --------------------------------------------------------

--
-- Table structure for table `user_2`
--

CREATE TABLE `user_2` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(15) DEFAULT NULL,
  `pass_user` varchar(32) DEFAULT NULL,
  `level_user` enum('Admin','Operator') DEFAULT NULL,
  `status_user` enum('Aktif','Tidak Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_2`
--

INSERT INTO `user_2` (`id_user`, `nama_user`, `pass_user`, `level_user`, `status_user`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(45) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
  `jenis_pekerjaan` varchar(50) DEFAULT NULL,
  `status_perkawinan` varchar(20) DEFAULT NULL,
  `hubungan_keluarga` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(10) DEFAULT NULL,
  `no_paspor` varchar(50) DEFAULT NULL,
  `no_kitas` varchar(50) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `nik_ayah` varchar(16) DEFAULT NULL,
  `nik_ibu` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`nik`, `no_kk`, `nama_lengkap`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `jenis_pekerjaan`, `status_perkawinan`, `hubungan_keluarga`, `kewarganegaraan`, `no_paspor`, `no_kitas`, `nama_ayah`, `nama_ibu`, `nik_ayah`, `nik_ibu`) VALUES
('3521050902790003', '3521052903070021', 'NUR ROKHIM', 'Laki-laki', 'MAGETAN', '1979-02-09', 'Islam', 'SLTA/Seder', 'PETANI/PEKEBUN', 'Kawin', 'Orang Tua', 'WNI', '-', '-', 'IMAM SOKEH', 'SAIMI', '-', '-'),
('3521051603160001', '3521052903070021', 'NARENDRA GENTA NUR SETYA', 'Laki-laki', 'NGAWI', '2016-03-16', 'Islam', 'SD/Sederaj', 'BELUM/TIDAK BEKERJA', 'Belum Kawin', 'Anak', 'WNI', '-', '-', 'NUR ROKHIM', 'TYAS SETYO UTAMI', '3521050902790003', '3521056006860006'),
('3521051902970003', '3521051802062633', 'EKO FENDIK RIANTO', 'Laki-laki', 'NGAWI', '1997-02-19', 'Islam', 'SLTA/Seder', 'PELAJAR/MAHASISWA', 'Belum Kawin', 'Anak', 'WNI', '-', '-', 'YATNO', 'SULASTRI', '3521053112650038', '3521054608780002'),
('3521053112650038', '3521051802062633', 'YATNO', 'Laki-laki', 'NGAWI', '1965-12-31', 'Islam', 'SLTP/Seder', 'PETANI/PEKEBUN', 'Kawin', 'Orang Tua', 'WNI', '-', '-', 'SARIYO', 'KASEMI', '-', '-'),
('3521054608780002', '3521051802062633', 'SULASTRI', 'Perempuan', 'NGAWI', '1978-08-05', 'Islam', 'SD/Sederaj', 'PETANI/PEKEBUN', 'Kawin', 'Orang Tua', 'WNI', '-', '-', 'KARNI', 'PARMI', '-', '-'),
('3521055404050001', '3521051802062633', 'NOVA DEA NABILA', 'Perempuan', 'NGAWI', '2006-04-14', 'Islam', 'SD/Sederaj', 'PELAJAR/MAHASISWA', 'Belum Kawin', 'Anak', 'WNI', '-', '-', 'YATNO', 'SULASTRI', '3521053112650038', '3521054608780002'),
('3521056006860006', '3521052903070021', 'TYAS SETYO UTAMI', 'Perempuan', 'NGAWI', '1986-06-20', 'Islam', 'SLTP/Seder', 'KARYAWAN SWASTA', 'Kawin', 'Orang Tua', 'WNI', '-', '-', 'SOEDJONO', 'GIYEM', '-', '-'),
('3521057009040001', '3521052903070021', 'SEPTIANA NUR UTAMI NUGRAHENI', 'Perempuan', 'NGAWI', '2004-09-30', 'Islam', 'SD/Sederaj', 'PELAJAR/MAHASISWA', 'Belum Kawin', 'Anak', 'WNI', '-', '-', 'NUR ROKHIM', 'TYAS SETYO UTAMI', '3521050902790003', '3521056006860006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user_2`
--
ALTER TABLE `user_2`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `no_kk` (`no_kk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `user_2`
--
ALTER TABLE `user_2`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `warga`
--
ALTER TABLE `warga`
  ADD CONSTRAINT `warga_ibfk_1` FOREIGN KEY (`no_kk`) REFERENCES `kk` (`no_kk`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
