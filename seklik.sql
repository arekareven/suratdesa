-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 03:58 AM
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
  `tanggal_surat` varchar(45) DEFAULT NULL,
  `ttd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `nik`, `nama`, `nama_surat`, `no_surat`, `keperluan`, `alasan`, `isian`, `keterangan`, `tempat`, `tanggal_surat`, `ttd`) VALUES
(147, '1215', 'asd', 'Surat Keterangan KTP', '474.2/001/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(148, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan KTP', '474.2/002/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(149, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan KTP', '474.2/003/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(150, '3521051902970003', 'EKO FENDIK RIANTO', 'Surat Keterangan KTP', '474.2/004/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(151, '3521053112650038', 'YATNO', 'Surat Keterangan KTP', '474.2/005/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(152, '3521054608780002', 'SULASTRI', 'Surat Keterangan KTP', '474.2/006/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(153, '3521055404050001', 'NOVA DEA NABILA', 'Surat Keterangan KTP', '474.2/007/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(154, '3521056006860006', 'TYAS SETYO UTAMI', 'Surat Keterangan KTP', '474.2/008/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(155, '3521057009040001', 'SEPTIANA NUR UTAMI NUGRAHENI', 'Surat Keterangan KTP', '474.2/009/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(156, '1215', 'asd', 'Surat Keterangan Bepergian', '478.3/001/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(157, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan Bepergian', '478.3/002/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(158, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan Bepergian', '478.3/003/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(159, '3521051902970003', 'EKO FENDIK RIANTO', 'Surat Keterangan Bepergian', '478.3/004/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(160, '3521053112650038', 'YATNO', 'Surat Keterangan Bepergian', '478.3/005/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(161, '3521054608780002', 'SULASTRI', 'Surat Keterangan Bepergian', '478.3/006/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(162, '3521055404050001', 'NOVA DEA NABILA', 'Surat Keterangan Bepergian', '478.3/007/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(163, '3521056006860006', 'TYAS SETYO UTAMI', 'Surat Keterangan Bepergian', '478.3/008/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(164, '3521057009040001', 'SEPTIANA NUR UTAMI NUGRAHENI', 'Surat Keterangan Bepergian', '478.3/009/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(170, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan Bepergian', '478.3/010/404.319.04/2021', '', '', '', '', '', '20-04-2021', ''),
(171, '1215', 'asd', 'Surat Keterangan Belum Menikah', '455.2/001/404.319.04/2021', NULL, NULL, NULL, '-', NULL, '20-04-2021', ''),
(172, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan Belum Menikah', '455.2/002/404.319.04/2021', NULL, NULL, NULL, '', NULL, '20-04-2021', ''),
(173, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan Belum Menikah', '455.2/003/404.319.04/2021', NULL, NULL, NULL, '', NULL, '20-04-2021', ''),
(174, '3521051902970003', 'EKO FENDIK RIANTO', 'Surat Keterangan Belum Menikah', '455.2/004/404.319.04/2021', NULL, NULL, NULL, '', NULL, '20-04-2021', ''),
(175, '3521053112650038', 'YATNO', 'Surat Keterangan Belum Menikah', '455.2/005/404.319.04/2021', NULL, NULL, NULL, '', NULL, '20-04-2021', ''),
(176, '3521054608780002', 'SULASTRI', 'Surat Keterangan Belum Menikah', '455.2/006/404.319.04/2021', NULL, NULL, NULL, '', NULL, '20-04-2021', ''),
(177, '3521055404050001', 'NOVA DEA NABILA', 'Surat Keterangan Belum Menikah', '455.2/007/404.319.04/2021', NULL, NULL, NULL, '', NULL, '20-04-2021', ''),
(178, '3521056006860006', 'TYAS SETYO UTAMI', 'Surat Keterangan Belum Menikah', '455.2/008/404.319.04/2021', NULL, NULL, NULL, '', NULL, '20-04-2021', ''),
(179, '3521057009040001', 'SEPTIANA NUR UTAMI NUGRAHENI', 'Surat Keterangan Belum Menikah', '455.2/009/404.319.04/2021', NULL, NULL, NULL, '', NULL, '20-04-2021', ''),
(181, '3521055404050001', 'NOVA DEA NABILA', 'Surat Keterangan Belum Menikah', '455.2/010/404.319.04/2021', NULL, NULL, NULL, '', NULL, '20-04-2021', ''),
(182, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan KTP', '474.2/011/404.319.04/2021', NULL, NULL, NULL, NULL, NULL, '20-04-2021', ''),
(184, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan Bepergian', '478.3/011/404.319.04/2021', '', '', '', '', '', '21-04-2021', ''),
(185, '1215', 'asd', 'Surat Keterangan Usaha', '486.6/001/404.319.04/2021', '', '', NULL, NULL, NULL, '21-04-2021', ''),
(186, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan Usaha', '486.6/002/404.319.04/2021', '', '', NULL, NULL, NULL, '21-04-2021', ''),
(187, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan Usaha', '486.6/003/404.319.04/2021', '', '', NULL, NULL, NULL, '21-04-2021', ''),
(188, '3521051902970003', 'EKO FENDIK RIANTO', 'Surat Keterangan Usaha', '486.6/004/404.319.04/2021', '', '', NULL, NULL, NULL, '21-04-2021', ''),
(189, '3521053112650038', 'YATNO', 'Surat Keterangan Usaha', '486.6/005/404.319.04/2021', '', '', NULL, NULL, NULL, '21-04-2021', ''),
(190, '3521054608780002', 'SULASTRI', 'Surat Keterangan Usaha', '486.6/006/404.319.04/2021', '', '', NULL, NULL, NULL, '21-04-2021', ''),
(191, '3521055404050001', 'NOVA DEA NABILA', 'Surat Keterangan Usaha', '486.6/007/404.319.04/2021', '', '', NULL, NULL, NULL, '21-04-2021', ''),
(192, '3521056006860006', 'TYAS SETYO UTAMI', 'Surat Keterangan Usaha', '486.6/008/404.319.04/2021', '', '', NULL, NULL, NULL, '21-04-2021', ''),
(193, '3521057009040001', 'SEPTIANA NUR UTAMI NUGRAHENI', 'Surat Keterangan Usaha', '486.6/009/404.319.04/2021', '', '', NULL, NULL, NULL, '21-04-2021', ''),
(194, '1215', 'asd', 'Surat Keterangan Administrasi TKI', '425.1/001/404.319.04/2021', '', NULL, '', NULL, NULL, '21-04-2021', ''),
(195, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan Administrasi TKI', '425.1/002/404.319.04/2021', '', NULL, '', NULL, NULL, '21-04-2021', ''),
(196, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan Administrasi TKI', '425.1/003/404.319.04/2021', '', NULL, '', NULL, NULL, '21-04-2021', ''),
(197, '3521051902970003', 'EKO FENDIK RIANTO', 'Surat Keterangan Administrasi TKI', '425.1/004/404.319.04/2021', '', NULL, '', NULL, NULL, '21-04-2021', ''),
(198, '3521053112650038', 'YATNO', 'Surat Keterangan Administrasi TKI', '425.1/005/404.319.04/2021', '', NULL, '', NULL, NULL, '21-04-2021', ''),
(199, '3521054608780002', 'SULASTRI', 'Surat Keterangan Administrasi TKI', '425.1/006/404.319.04/2021', '', NULL, '', NULL, NULL, '21-04-2021', ''),
(200, '3521055404050001', 'NOVA DEA NABILA', 'Surat Keterangan Administrasi TKI', '425.1/007/404.319.04/2021', '', NULL, '', NULL, NULL, '21-04-2021', ''),
(201, '3521056006860006', 'TYAS SETYO UTAMI', 'Surat Keterangan Administrasi TKI', '425.1/008/404.319.04/2021', '', NULL, '', NULL, NULL, '21-04-2021', ''),
(202, '3521057009040001', 'SEPTIANA NUR UTAMI NUGRAHENI', 'Surat Keterangan Administrasi TKI', '425.1/009/404.319.04/2021', '', NULL, '', NULL, NULL, '21-04-2021', ''),
(204, '1215', 'asd', 'Surat Keterangan Kematian', '411.4/001/404.319.04/2021', '', '', '', '', '', '21-04-2021', ''),
(205, '3521050902790003', 'NUR ROKHIM', 'Surat Keterangan Kematian', '411.4/002/404.319.04/2021', '', '', '', '', '', '21-04-2021', ''),
(206, '3521051603160001', 'NARENDRA GENTA NUR SETYA', 'Surat Keterangan Kematian', '411.4/003/404.319.04/2021', '', '', '', '', '', '21-04-2021', ''),
(207, '3521051902970003', 'EKO FENDIK RIANTO', 'Surat Keterangan Kematian', '411.4/004/404.319.04/2021', '', '', '', '', '', '21-04-2021', ''),
(208, '3521053112650038', 'YATNO', 'Surat Keterangan Kematian', '411.4/005/404.319.04/2021', '', '', '', '', '', '21-04-2021', ''),
(209, '3521054608780002', 'SULASTRI', 'Surat Keterangan Kematian', '411.4/006/404.319.04/2021', '', '', '', '', '', '21-04-2021', ''),
(210, '3521055404050001', 'NOVA DEA NABILA', 'Surat Keterangan Kematian', '411.4/007/404.319.04/2021', '', '', '', '', '', '21-04-2021', ''),
(211, '3521056006860006', 'TYAS SETYO UTAMI', 'Surat Keterangan Kematian', '411.4/008/404.319.04/2021', '', '', '', '', '', '21-04-2021', ''),
(212, '3521057009040001', 'SEPTIANA NUR UTAMI NUGRAHENI', 'Surat Keterangan Kematian', '411.4/009/404.319.04/2021', '', '', '', '', '', '21-04-2021', '');

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
('1215', '3521051802062633', 'asd', 'Laki-laki', 'NGAWI', '2021-02-10', 'Islam', 'SD/Sederaj', 'PETANI/PEKEBUN', 'Kawin', 'Anak', 'WNI', '-', '-', 'tfu', 'dtu', '4', 'drurd'),
('3521050902790003', '3521052903070021', 'NUR ROKHIM', 'Laki-laki', 'MAGETAN', '1979-02-09', 'Islam', 'SLTA/Seder', 'PETANI/PEKEBUN', 'Kawin', 'Orang Tua', 'WNI', '-', '-', 'IMAM SOKEH', 'SAIMI', '-', '-'),
('3521051603160001', '3521052903070021', 'NARENDRA GENTA NUR SETYA', 'Laki-laki', 'NGAWI', '2016-03-16', 'Islam', 'SD/Sederaj', 'BELUM/TIDAK BEKERJA', 'Belum Kawin', 'Anak', 'WNI', '-', '-', 'NUR ROKHIM', 'TYAS SETYO UTAMI', '3521050902790003', '3521056006860006'),
('3521051902970003', '3521051802062633', 'EKO FENDIK RIANTO', 'Laki-laki', 'NGAWI', '1997-02-19', 'Islam', 'SLTA/Seder', 'PELAJAR/MAHASISWA', 'Belum Kawin', 'Anak', 'WNI', '-', '-', 'YATNO', 'SULASTRI', '3521053112650038', '3521054608780002'),
('3521053112650038', '3521051802062633', 'YATNO', 'Laki-laki', 'NGAWI', '1965-12-31', 'Islam', 'SLTP/Seder', 'PETANI/PEKEBUN', 'Kawin', 'Orang Tua', 'WNI', '-', '-', 'SARIYO', 'KASEMI', '-', '-'),
('3521054608780002', '3521051802062633', 'SULASTRI', 'Perempuan', 'NGAWI', '05-08-1978', 'Islam', 'SD/Sederaj', 'PETANI/PEKEBUN', 'Kawin', 'Orang Tua', 'WNI', '-', '-', 'KARNI', 'PARMI', '-', '-'),
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
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

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
