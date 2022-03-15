-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_sisfo_pei
CREATE DATABASE IF NOT EXISTS `db_sisfo_pei` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_sisfo_pei`;

-- Dumping structure for table db_sisfo_pei.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `nidn` varchar(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.dosen: ~8 rows (approximately)
/*!40000 ALTER TABLE `dosen` DISABLE KEYS */;
INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama_dosen`, `alamat`, `jenis_kelamin`, `email`, `telp`, `photo`, `password`, `updated_at`, `created_at`) VALUES
	(1, '12345678', 'Muhammad Nugraha', 'Purwakarta', 'Laki-laki', 'nugraha@pei.com', '081234567890', 'photo/1643051796-Person.jpg', '$2y$10$C8f1ThEJjmTA0d4HbfQYTejyTR3ijHLYBLIJiW3Rd/5X9ElGXZRQy', NULL, NULL),
	(2, '12345679', 'Musawarman', 'Purwakarta', 'Laki-laki', 'musawarman@pei.com', '081234567899', 'photo/1643051830-Person.jpg', '$2y$10$QpKe3wJXSBXJFHqRDrcI5uqZ6Lpng.r9Gi3UuolxsLzzguwK/K3ki', NULL, NULL),
	(4, '123456710', 'Ade Winarni', 'Purwakarta', 'Perempuan', 'ade@pei.com', '089999999', 'photo/1643051968-Person.jpg', '$2y$10$rvbFT1R6fZykw1pMQvFfguGF9C44p2pSf1n3rL1HxbrjNXAyI8IGW', NULL, NULL),
	(5, '123456711', 'Ricak agus', 'Purwakarta', 'Laki-laki', 'ricak@pei.com', '089999', 'photo/1643052035-Person.jpg', '$2y$10$LUdFXIdDMCS3y8ibha1DP.btKSTXvSeV8Gk2Rw93xgb6C2PRoSemi', NULL, NULL),
	(8, '123456712', 'Widya Andayani', 'Purwakarta', 'Perempuan', 'widya@pei.com', '0812312312131', 'photo/1643684982-Person.jpg', '$2y$10$yrgiXBsyVYZKKszpav0mEuP3fed4qj4BhbGJ7ME7wtf6YnVZk.N/y', NULL, NULL),
	(9, '123456713', 'Halimil Fathi', 'Purwakarta', 'Laki-laki', 'halimil@pei.com', '0891293121', 'photo/1643685017-Person.jpg', '$2y$10$WeKia310NSr5r9Ly5MX0Q.LrLaYj.7/VoS1NYl6sZmy5/auKPc2n2', NULL, NULL),
	(10, '123456714', 'Heti Mulyani', 'Purwakarta', 'Perempuan', 'heti@gmail.com', '08123412312', 'photo/1643685074-Person.jpg', '$2y$10$gql2R0kG09wWd4LQsAQAJ.03rqslSZIjWdIIkx/rHadf10Kq6vjJi', NULL, NULL);
/*!40000 ALTER TABLE `dosen` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.hubungi
CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hubungi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.hubungi: ~0 rows (approximately)
/*!40000 ALTER TABLE `hubungi` DISABLE KEYS */;
/*!40000 ALTER TABLE `hubungi` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.identitas
CREATE TABLE IF NOT EXISTS `identitas` (
  `id_identitas` int(11) NOT NULL AUTO_INCREMENT,
  `judul_website` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  PRIMARY KEY (`id_identitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.identitas: ~0 rows (approximately)
/*!40000 ALTER TABLE `identitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `identitas` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.informasi
CREATE TABLE IF NOT EXISTS `informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(50) NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `isi_informasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.informasi: ~0 rows (approximately)
/*!40000 ALTER TABLE `informasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `informasi` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.jurusan
CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_jurusan` varchar(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.jurusan: ~0 rows (approximately)
/*!40000 ALTER TABLE `jurusan` DISABLE KEYS */;
/*!40000 ALTER TABLE `jurusan` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.krs
CREATE TABLE IF NOT EXISTS `krs` (
  `id_krs` int(11) NOT NULL AUTO_INCREMENT,
  `id_thn_akad` int(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nilai_teori` double DEFAULT NULL,
  `nilai_praktek` double DEFAULT NULL,
  `nilai` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_krs`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.krs: ~45 rows (approximately)
/*!40000 ALTER TABLE `krs` DISABLE KEYS */;
INSERT INTO `krs` (`id_krs`, `id_thn_akad`, `nim`, `kode_matakuliah`, `nilai_teori`, `nilai_praktek`, `nilai`) VALUES
	(1, 2, '201904001', 'SE501', NULL, NULL, 0),
	(2, 2, '201904002', 'SE501', NULL, NULL, 0),
	(3, 1, '201904003', 'SE501', NULL, NULL, 0),
	(4, 1, '201904003', 'SE502', NULL, NULL, 0),
	(5, 1, '201904003', 'SE503', NULL, NULL, 0),
	(6, 1, '201904003', 'SE504', NULL, NULL, 0),
	(7, 1, '201904003', 'SE505', NULL, NULL, 0),
	(8, 1, '201904003', 'SE506', NULL, NULL, 0),
	(9, 1, '201904004', 'GC501', NULL, NULL, 0),
	(10, 1, '201904001', 'SE502', NULL, NULL, 0),
	(11, 1, '201904001', 'SE503', NULL, NULL, 0),
	(13, 1, '201904001', 'SE503', NULL, NULL, 0),
	(14, 2, '201904002', 'SE502', NULL, NULL, 0),
	(15, 2, '201904002', 'SE503', NULL, NULL, 0),
	(23, 6, '201904011', 'GC501', NULL, NULL, 0),
	(24, 6, '201904011', 'SE501', NULL, NULL, 0),
	(25, 6, '201904011', 'SE502', NULL, NULL, 0),
	(26, 6, '201904011', 'SE503', NULL, NULL, 0),
	(27, 6, '201904011', 'SE504', 90, 80, 85),
	(28, 6, '201904011', 'SE505', NULL, NULL, 0),
	(29, 6, '201904011', 'SE506', NULL, NULL, 0),
	(30, 6, '201904017', 'GC601', NULL, NULL, 0),
	(31, 6, '201904017', 'SE601', NULL, NULL, 0),
	(32, 6, '201904017', 'SE602', NULL, NULL, 0),
	(33, 6, '201904017', 'SE603', NULL, NULL, 0),
	(34, 6, '201904017', 'SE604', NULL, NULL, 0),
	(35, 6, '201904017', 'SE605', NULL, NULL, 0),
	(36, 6, '201904017', 'SE606', NULL, NULL, 0),
	(37, 6, '201904017', 'GC101', NULL, NULL, 0),
	(38, 6, '201904017', 'GC101', NULL, NULL, 0),
	(39, 6, '201904017', 'GC201', NULL, NULL, 0),
	(40, 6, '201904017', 'GC301', NULL, NULL, 0),
	(41, 6, '201904017', 'GC401', NULL, NULL, 0),
	(42, 6, '201904020', 'GC501', NULL, NULL, 0),
	(43, 6, '201904020', 'SE501', NULL, NULL, 0),
	(44, 6, '201904020', 'SE502', NULL, NULL, 80),
	(45, 6, '201904020', 'SE503', NULL, NULL, 0),
	(46, 6, '201904020', 'SE504', 85, 90, 87.5),
	(47, 6, '201904020', 'SE505', NULL, NULL, 0),
	(48, 6, '201904020', 'SE506', NULL, NULL, 0),
	(49, 6, '201904012', 'GC501', NULL, NULL, 0),
	(50, 6, '201904012', 'SE501', NULL, NULL, 0),
	(51, 6, '201904012', 'SE502', NULL, NULL, 0),
	(52, 6, '201904012', 'SE503', NULL, NULL, 0),
	(53, 6, '201904012', 'SE504', NULL, NULL, 0),
	(54, 6, '201904012', 'SE505', NULL, NULL, 0),
	(55, 6, '201904012', 'SE506', NULL, NULL, 0);
/*!40000 ALTER TABLE `krs` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(11) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tempat_lahir` varchar(120) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `nama_prodi` varchar(120) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.mahasiswa: ~21 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id`, `nim`, `nama_lengkap`, `alamat`, `email`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_prodi`, `photo`, `password`, `updated_at`, `created_at`) VALUES
	(1, '201904001', 'Ditya Ryani Sardi', 'Purwakarta', 'ditya@pei.com', '089999999901', 'Purwakarta', '2001-01-01', 'Perempuan', 'TRPL', 'photo/1642681734-IMG_1732.JPG', '$2y$10$aSOJUXmKd/h4VvJ9ZNwOaOEp1SrrhXzWwBJUzNBQsab8kK5qRskfm', '2022-01-20 12:02:27', '2022-01-20 12:02:34'),
	(2, '201904002', 'Nurul Aulia', 'Purwakarta', 'aul@pei.com', '089999999902', 'Purwakarta', '2001-01-01', 'Perempuan', 'TRPL', 'photo/1642727521-IMG_1761.JPG', '$2y$10$RCNhd/eboqGuZwNH7Suhr.4rCmhZQC25KWWFMAGJ3TT5L3MvjDV0G', '2022-01-20 12:02:30', '2022-01-20 12:02:35'),
	(5, '201904005', 'Nopi Rahmawati', 'Purwakarta', 'ahma@pei.com', '089999999903', 'Purwakarta', '2001-01-01', 'Perempuan', 'TRPL', 'photo/1642727682-IMG_1723.JPG', '$2y$10$QVIpwJVvamfEPmf94cWxcO458eF3YFLOoxRd27JGcBJxAcsekRmHa', '2022-01-20 12:02:32', '2022-01-20 12:02:37'),
	(6, '201904006', 'Farid Nabil Firdaus', 'Purwakarta', 'farid@pei.com', '089999999904', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642681962-IMG_1751.JPG', '$2y$10$n1RLqR5F/OINtNq.KUzboe4Ne1Ww/DShnktq3sNdJCDhNPgeIXreS', '2022-01-20 12:02:33', '2022-01-20 12:02:37'),
	(9, '201904009', 'Dendy Moh Ramdan', 'Purwakarta', 'dendy@pei.com', '089999999909', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642682191-IMG_1684.JPG', '$2y$10$1HyIRQd38ZQ.vNW/MaH8O.w7cAfGxT1gI4MMdrd1T3vdoK.SxNTGG', NULL, NULL),
	(10, '201904011', 'Muhamad Algi F', 'Purwakarta', 'algi@pei.com', '089999999911', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642682244-IMG_1665.JPG', '$2y$10$fZsh0GmPy519KL0OGr5yTuHymiN0/SR3cW0cXZKmn5FHPGP1gnC46', NULL, NULL),
	(11, '201904012', 'Muhammad Dwiki Y', 'Purwakarta', 'dwiki@pei.com', '089627286733', 'Purwakarta', '2001-07-17', 'Laki-laki', 'TRPL', 'photo/1642682322-WhatsApp Image 2021-07-29 at 19.39.30.jpeg', '$2y$10$v0P4vizNrN7N0MwTWz9tP.9sYmiIVmARPzd5494EU7zMAColTDg12', NULL, NULL),
	(12, '201904013', 'Muhammad Fadhiil Y', 'Purwakarta', 'fadhiil@pei.com', '089999999913', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642682381-IMG_1771.JPG', '$2y$10$okrUyuLjaixKmjFPmhyySuzMw8C4bZebajf.ILW45AIy44XxNQSPS', NULL, NULL),
	(13, '201904014', 'Muhamad Fauzan', 'Purwakarta', 'ojan@pei.com', '089999999914', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642682437-IMG_1659.JPG', '$2y$10$8AXlcjxzLpt2VTUWm6o9vu5EW8kcT0DSU5w.3WDh01Ct3PyTjQtNS', NULL, NULL),
	(14, '201904015', 'Rian Ajie Pangestu', 'Purwakarta', 'rian@pei.com', '089999999915', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642812129-Person.jpg', '$2y$10$6IqJcCsa894eJNrN6gLwculkrJy.MYk4CxOC7BBiFczqYxphLANCK', NULL, NULL),
	(15, '201904016', 'Ayu Siti Rohmah', 'Purwakarta', 'aay@pei.com', '089999999915', 'Purwakarta', '2001-01-01', 'Perempuan', 'TRPL', 'photo/1642682584-IMG_1718.JPG', '$2y$10$VVWuZsTY3pMwQAGDqRXm3O12IU9PVuZntmhy2i/sonA.4ti8oP4/e', NULL, NULL),
	(16, '201904017', 'Nurul Huda', 'Purwakarta', 'huda@pei.com', '089999999917', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642682642-WhatsApp Image 2021-07-29 at 19.39.31.jpeg', '$2y$10$GgZKkt3ZwJAuVgpcXmYWOOpq2NHireL64HcAMrEirLwuq0wMCKgJG', NULL, NULL),
	(17, '201904018', 'Muhammad Raffi', 'Purwakarta', 'raffi@gmail.com', '089999999918', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642682691-WhatsApp Image 2021-07-29 at 19.39.32 (1).jpeg', '$2y$10$gpGxfPhfhA56VZZgWDBVI.18gUnkFmjw6CjKtNsAEpESvEEUKPb8i', NULL, NULL),
	(18, '201904019', 'Amar Fauzi', 'Purwakarta', 'amar@pei.com', '089999999919', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642682740-IMG_1710.JPG', '$2y$10$sI6nPJi2usWA7gKY0.3ZxeX3L6HihVfka8KidoE2t3d1aQPskSRGS', NULL, NULL),
	(19, '201904020', 'Muhamad Azis', 'Purwakarta', 'azis@pei.com', '089999999920', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642682782-IMG_1674.JPG', '$2y$10$RAh.7b47mrXxrRAgsAq.tOeLPG78A2j16ifV5eX2xYH3Q8WzyWYQ2', NULL, NULL),
	(20, '201904021', 'Vira Virginia', 'Purwakarta', 'vira@pei.com', '089999999921', 'Purwakarta', '2001-01-01', 'Perempuan', 'TRPL', 'photo/1642812162-Person.jpg', '$2y$10$ORbrGR8cfzipHo.cXr/YiuxuwX95h2rKj41sjveRQ1gcyxH5GSio2', NULL, NULL),
	(21, '201904022', 'Nursita Setyawati', 'Purwakarta', 'sita@pei.com', '089999999922', 'Purwakarta', '2001-01-01', 'Perempuan', 'TRPL', 'photo/1642682903-IMG_1687.JPG', '$2y$10$cIaA6nS4VwcpgU1q6Jg.suYXnIAM5lwG370/cg3Xs6z4lip3Kd7ei', NULL, NULL),
	(22, '201904024', 'Luthfiyah Sakinah', 'Purwakarta', 'fia@pei.com', '089999999924', 'Purwakarta', '2001-01-01', 'Perempuan', 'TRPL', 'photo/1642682958-IMG_1700.JPG', '$2y$10$i9FC.ss4XqrJ7ipf94FchOGQwwm4NJgqq7eSmqmXwmlrXzSMqdRXi', NULL, NULL),
	(23, '201904025', 'Annisa Zachry Fauziah', 'Purwakarta', 'nisa@pei.com', '089999999925', 'Purwakarta', '2001-01-01', 'Perempuan', 'TRPL', 'photo/1642683013-IMG_1695.JPG', '$2y$10$237MWcinOv6xdTZB/zHgXO60OtPOOxqHaPrkV2ahahi.n.QcCOMeq', NULL, NULL),
	(24, '201904026', 'Ikhsan Rafli Fauzi', 'Purwakarta', 'ikhsan@pei.com', '089999999926', 'Purwakarta', '2001-01-01', 'Laki-laki', 'TRPL', 'photo/1642683076-IMG_1670.JPG', '$2y$10$YIr3PAIHUyxXNhDtXgwwGeUo.CYeK2kB2Di1lgj22u.WrRdzYcsAa', NULL, NULL),
	(25, '201904027', 'Adila Alaina Risqi', 'Purwakarta', 'adila@pei.com', '089999999927', 'Purwakarta', '2001-01-01', 'Perempuan', 'TRPL', 'photo/1642812193-Person.jpg', '$2y$10$fCxzAIjFCZm5YSO4.A4brOKjIJVZa5FQK6F2N4RvD1fyFQcaFz6PG', NULL, NULL);
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.matakuliah
CREATE TABLE IF NOT EXISTS `matakuliah` (
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(200) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` varchar(20) NOT NULL DEFAULT '',
  `nama_prodi` varchar(100) NOT NULL,
  `nidn` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.matakuliah: ~54 rows (approximately)
/*!40000 ALTER TABLE `matakuliah` DISABLE KEYS */;
INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `semester`, `nama_prodi`, `nidn`) VALUES
	('GC101', 'Bahasa Inggris 1 (VOCAB)', 2, '1', 'TRPL', '123456712'),
	('GC201', 'Bahasa Inggris 2 ( Speaking)', 2, '2', 'TRPL', '123456712'),
	('GC301', 'Bahasa Inggris 3 ( Reading)', 2, '3', 'TRPL', '123456712'),
	('GC401', 'Bahasa Inggris 4 (Writing)', 2, '4', 'TRPL', '123456712'),
	('GC501', 'Bahasa Inggris 5 (Tenses)', 2, '5', 'TRPL', '123456712'),
	('GC601', 'Bahasa Inggris 6 (TOEIC)', 2, '6', 'TRPL', '123456712'),
	('GC701', 'Bahasa Indonesia', 2, '7', 'TRPL', '1'),
	('GC702', 'Statistik', 3, '7', 'TRPL', '123456714'),
	('GC801', 'Kewarganegaraan', 2, '8', 'TRPL', '1'),
	('GC802', 'Pancasila', 2, '8', 'TRPL', '1'),
	('GC803', 'Pendidikan Agama', 2, '8', 'TRPL', '1'),
	('SE101', 'Algoritma & Pemrograman', 3, '1', 'TRPL', '12345679'),
	('SE102', 'Aljabar Linear', 2, '1', 'TRPL', '123456714'),
	('SE103', 'Kalkulus', 2, '1', 'TRPL', '123456714'),
	('SE104', 'Komunikasi Data & Jaringan Komputer', 3, '1', 'TRPL', '123456713'),
	('SE105', 'Pengantar Teknologi Informasi & Komunikasi', 2, '1', 'TRPL', '123456711'),
	('SE106', 'Praktek Magang DTY 1', 1, '1', 'TRPL', '123456711'),
	('SE107', 'Sistem Operasi', 3, '1', 'TRPL', '123456713'),
	('SE201', 'Arsitektur Komputer', 2, '2', 'TRPL', '1'),
	('SE202', 'Dasar-Dasar Keamanan Komputer', 3, '2', 'TRPL', '1'),
	('SE203', 'Design dan Pemrograman Database SQL', 3, '2', 'TRPL', '1'),
	('SE204', 'Pengantar Interaksi Manusia dan Komputer', 2, '2', 'TRPL', '1'),
	('SE205', 'Pengantar Rekayasa Perangkat Lunak', 2, '2', 'TRPL', '1'),
	('SE206', 'Praktek Magang DTY 2', 1, '2', 'TRPL', '1'),
	('SE207', 'Struktur Data', 3, '2', 'TRPL', '1'),
	('SE301', 'Analisis & Desain Perangkat Lunak', 3, '3', 'TRPL', '123456711'),
	('SE302', 'Pemrograman Database PL/SQL', 4, '3', 'TRPL', '123456713'),
	('SE303', 'Pemrograman Berorientasi Objek', 4, '3', 'TRPL', '12345678'),
	('SE304', 'Pemrograman WEB 1', 3, '3', 'TRPL', '12345678'),
	('SE305', 'Matematika Diskrit', 2, '3', 'TRPL', '123456714'),
	('SE401', 'Pemrograman XML', 3, '4', 'TRPL', '1'),
	('SE402', 'Keamanan Perangkat Lunak', 2, '4', 'TRPL', '1'),
	('SE403', 'Oracle Application Express (APEX)', 3, '4', 'TRPL', '1'),
	('SE404', 'Pemrograman Berorientasi Objek Lanjut', 4, '4', 'TRPL', '1'),
	('SE405', 'Pemrograman WEB 2 (PHP)', 3, '4', 'TRPL', '1'),
	('SE406', 'Rekayasa Kebutuhan Perangkat Lunak', 2, '4', 'TRPL', '1'),
	('SE501', 'Pemrograman Perangkat Bergerak 1', 3, '5', 'TRPL', '12345679'),
	('SE502', 'Pengujian Perangkat Lunak', 2, '5', 'TRPL', '123456711'),
	('SE503', 'Pemrograman Visual', 4, '5', 'TRPL', '12345679'),
	('SE504', 'Pemrograman WEB 3 (Framework)', 3, '5', 'TRPL', '12345678'),
	('SE505', 'Sistem Terdistribusi', 3, '5', 'TRPL', '123456710'),
	('SE506', 'Enterprise Resource Planning (ERP)', 3, '5', 'TRPL', '123456710'),
	('SE601', 'Data Mining', 3, '6', 'TRPL', '1'),
	('SE602', 'Pemrograman Perangkat Bergerak 2', 3, '6', 'TRPL', '1'),
	('SE603', 'Jaminan Kualitas Perangkat Lunak (SOA)', 3, '6', 'TRPL', '1'),
	('SE604', 'Manajemen Proyek Perangkat Lunak', 3, '6', 'TRPL', '1'),
	('SE605', 'Cloud Computing', 3, '6', 'TRPL', '1'),
	('SE606', 'Sistem Pendukung Keputusan', 3, '6', 'TRPL', '1'),
	('SE701', 'Metodologi Penelitian', 2, '7', 'TRPL', '123456711'),
	('SE702', 'Pemrograman IOS', 4, '7', 'TRPL', '123456710'),
	('SE703', 'Praktik Kerja Lapang', 6, '7', 'TRPL', '1'),
	('SE801', 'Etika Profesi', 2, '8', 'TRPL', '1'),
	('SE802', 'Tugas Akhir', 6, '8', 'TRPL', '1'),
	('SE803', 'Technopreneur', 2, '8', 'TRPL', '1');
/*!40000 ALTER TABLE `matakuliah` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_sisfo_pei.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.prodi
CREATE TABLE IF NOT EXISTS `prodi` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `kode_prodi` varchar(20) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.prodi: ~4 rows (approximately)
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `nama_jurusan`) VALUES
	(1, '01', 'Teknik Mesin', ''),
	(2, '02', 'Teknik Mekatronika', ''),
	(3, '03', 'Teknologi Listrik', ''),
	(4, '04', 'TRPL', '');
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.tahun_akademik
CREATE TABLE IF NOT EXISTS `tahun_akademik` (
  `id_thn_akad` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_akademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id_thn_akad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.tahun_akademik: ~6 rows (approximately)
/*!40000 ALTER TABLE `tahun_akademik` DISABLE KEYS */;
INSERT INTO `tahun_akademik` (`id_thn_akad`, `tahun_akademik`, `semester`, `status`) VALUES
	(1, '2018/2019', 'Ganjil', 'Aktif'),
	(2, '2018/2019', 'Genap', 'Aktif'),
	(3, '2020/2021', 'Ganjil', 'Aktif'),
	(4, '2020/2021', 'Genap', 'Aktif'),
	(5, '2021/2022', 'Ganjil', 'Aktif'),
	(6, '2021/2022', 'Genap', 'Aktif');
/*!40000 ALTER TABLE `tahun_akademik` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.tentang_kampus
CREATE TABLE IF NOT EXISTS `tentang_kampus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sejarah` varchar(1000) NOT NULL,
  `visi` varchar(250) NOT NULL,
  `misi` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.tentang_kampus: ~0 rows (approximately)
/*!40000 ALTER TABLE `tentang_kampus` DISABLE KEYS */;
/*!40000 ALTER TABLE `tentang_kampus` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.transkrip_nilai
CREATE TABLE IF NOT EXISTS `transkrip_nilai` (
  `id_transkrip` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(15) NOT NULL,
  `kode_matakuliah` varchar(15) NOT NULL,
  `nilai` varchar(15) NOT NULL,
  PRIMARY KEY (`id_transkrip`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.transkrip_nilai: ~5 rows (approximately)
/*!40000 ALTER TABLE `transkrip_nilai` DISABLE KEYS */;
INSERT INTO `transkrip_nilai` (`id_transkrip`, `nim`, `kode_matakuliah`, `nilai`) VALUES
	(1, '201904001', 'SE501', 'A'),
	(2, '201904001', 'SE502', 'A'),
	(3, '201904001', 'SE503', 'B'),
	(4, '201904004', 'GC501', 'B'),
	(5, '201904004', 'SE501', '');
/*!40000 ALTER TABLE `transkrip_nilai` ENABLE KEYS */;

-- Dumping structure for table db_sisfo_pei.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table db_sisfo_pei.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `level`, `blokir`, `id_session`, `updated_at`, `created_at`, `photo`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin@pei.com', 'admin', 'N', '', NULL, NULL, NULL),
	(2, 'Mahasiswa', '5787be38ee03a9ae5360f54d9026465f', NULL, 'msh@pei.com.com', 'user', 'Y', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL),
	(3, 'yudis', '48767461cb09465362c687ae0c44753b', NULL, 'yudis@pei.com', 'user', 'Y', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL),
	(4, 'a', 'c1ebb4933e06ce5617483f665e26627c', NULL, 'a@pei.com', 'user', 'Y', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL),
	(5, 'yudhistiradwiki', '$2y$10$3sBwhxeoJ0oWXGsrIo7xru24MTSErsIalWmXZbjfP7FxfMng.m0ki', 'Muhammad Dwiki Yudhistira', 'dadas@gmail.com', 'user', 'N', '', '2022-01-17 16:49:49', '2022-01-17 16:49:49', 'photo/1642438269-infrared album cover.png');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
