-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2019 at 12:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_trashcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` char(30) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `pass_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `pass_admin`) VALUES
(1, 'admin', 'admin@tes.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` char(30) NOT NULL,
  `email_anggota` varchar(30) NOT NULL,
  `pass_anggota` varchar(10) NOT NULL,
  `nohp_anggota` varchar(15) NOT NULL,
  `alamat_anggota` varchar(30) NOT NULL,
  `images_anggota` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `email_anggota`, `pass_anggota`, `nohp_anggota`, `alamat_anggota`, `images_anggota`) VALUES
(1, 'anya', 'anda@tes.com', 'anda', '6281909899', 'mataram', 'images/griz.png'),
(2, 'Brian', 'brian@gmail.com', 'brian', '+6208123776546', 'mataram', 'images/men.png'),
(3, 'pingky', 'ping@gmail.com', 'pink', '6281909008', 'Pagutan', 'images/waiter.png');

-- --------------------------------------------------------

--
-- Table structure for table `banksampah`
--

CREATE TABLE `banksampah` (
  `id_banksampah` int(11) NOT NULL,
  `nama_banksampah` varchar(30) NOT NULL,
  `email_banksampah` varchar(30) NOT NULL,
  `pass_banksampah` varchar(10) NOT NULL,
  `alamat_banksampah` varchar(30) NOT NULL,
  `nohp_banksampah` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banksampah`
--

INSERT INTO `banksampah` (`id_banksampah`, `nama_banksampah`, `email_banksampah`, `pass_banksampah`, `alamat_banksampah`, `nohp_banksampah`) VALUES
(1, 'Infitive', 'in@tes.com', '123', 'Mataram', '08125');

-- --------------------------------------------------------

--
-- Table structure for table `dana`
--

CREATE TABLE `dana` (
  `no_resi` int(12) NOT NULL,
  `jumlah_pay` int(15) NOT NULL,
  `jenis_pay` char(25) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `id_mentor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dana`
--

INSERT INTO `dana` (`no_resi`, `jumlah_pay`, `jenis_pay`, `id_anggota`, `id_mentor`) VALUES
(1, 100000, 'M-Banking', 1, NULL),
(2, 100000, 'M-Banking', 1, NULL),
(3, 900000, 'M-Banking', 1, NULL),
(4, 123, 'M-Banking', 3, NULL),
(6, 135000, 'M-Banking', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `kode_event` varchar(5) NOT NULL,
  `img_event` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(5) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `jumlah_anggota` int(11) NOT NULL,
  `id_mentor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`kode_event`, `img_event`, `judul`, `deskripsi`, `tanggal`, `waktu`, `lokasi`, `jumlah_anggota`, `id_mentor`) VALUES
('AF001', '../images/harisampah.jpg', 'Lingkungan Hidup Sedunia', 'event ini diadakan dari dewan perwakilan rakyat dengan tema \"Mari tingkatkan kesadaran dan tindakan untuk mendorong perubahan dalam pelestarian lingkungan hidup\" ', '2019-06-05', '08.00', 'Mataram', 20, 1),
('FI001', '../images/GoGreen3.jpg', 'Green Challange', 'event Green Challange in the city dengan tema A Global Business Case Challange yang diadakan oleh Schneider Electric dengan kegiatan yaitu before and after challange dan lain lainnya.', '2019-06-26', '08.00', 'Mataram', 15, 3),
('MA002', '../images/green2.jpg', 'Go Green Run 2019', 'event ini diadakan oleh BIG SHOW asia youth generation dengan tema \"go green in conjuction with world environment day 2019\". ', '2019-06-05', '10.00', 'City Mall', 30, 1),
('MA003', '../images/green1.jpg', 'Putrajaya ECO Green', 'Putrajaya ECO Green adalah event have fun yang diadakan oleh Notrhen Runners dengan kerja sama degnan Ultron, dalam event kali ini diadakan Fun run dan Men/woman Open.', '2019-07-08', '07.30', 'Epicentrum Mall ', 23, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mengikuti`
--

CREATE TABLE `mengikuti` (
  `id_anggota` int(11) NOT NULL,
  `kode_event` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengikuti`
--

INSERT INTO `mengikuti` (`id_anggota`, `kode_event`) VALUES
(2, 'MA002'),
(1, 'MA002'),
(1, 'MA003'),
(1, 'AF001'),
(1, 'FI001');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(11) NOT NULL,
  `nama_mentor` char(30) NOT NULL,
  `email_mentor` varchar(30) NOT NULL,
  `pass_mentor` varchar(10) NOT NULL,
  `nohp_mentor` varchar(15) NOT NULL,
  `alamat_mentor` varchar(30) NOT NULL,
  `images_mentor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama_mentor`, `email_mentor`, `pass_mentor`, `nohp_mentor`, `alamat_mentor`, `images_mentor`) VALUES
(1, 'Sayang', 'black@tes.com', 'afif', '6281909008', 'Pagutan', 'images/user.png'),
(2, 'Desi', 'desi@gmail.com', 'desi', '+6208123775762', 'Kekeri', 'images/griz.png'),
(3, 'Firda', 'firda@gmail.com', 'firda', '+6285253834848', 'Ampenan', 'images/panda.png'),
(4, 'Siapa', 'siapa@gmail.com', '123', '0822', 'Mataram', '');

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `notrans_sampah` int(5) NOT NULL,
  `jenis_sampah` varchar(20) NOT NULL,
  `jenis_kirim` char(15) NOT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `id_banksampah` int(11) DEFAULT NULL,
  `id_mentor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sampah`
--

INSERT INTO `sampah` (`notrans_sampah`, `jenis_sampah`, `jenis_kirim`, `id_anggota`, `id_banksampah`, `id_mentor`) VALUES
(2, 'Plastik', 'Pick Up', 1, 1, NULL),
(3, 'Kaleng', 'On deliver', NULL, 1, 1),
(4, 'Kaleng', 'Pick Up', 1, 1, NULL),
(5, 'Plastik', 'On Deliver', 1, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `banksampah`
--
ALTER TABLE `banksampah`
  ADD PRIMARY KEY (`id_banksampah`);

--
-- Indexes for table `dana`
--
ALTER TABLE `dana`
  ADD PRIMARY KEY (`no_resi`),
  ADD KEY `tc4` (`id_anggota`),
  ADD KEY `tc11` (`id_mentor`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`kode_event`),
  ADD KEY `tc5` (`id_mentor`);

--
-- Indexes for table `mengikuti`
--
ALTER TABLE `mengikuti`
  ADD KEY `tc6` (`id_anggota`),
  ADD KEY `tc7` (`kode_event`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`notrans_sampah`),
  ADD KEY `tc8` (`id_anggota`),
  ADD KEY `tc9` (`id_mentor`),
  ADD KEY `tc10` (`id_banksampah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banksampah`
--
ALTER TABLE `banksampah`
  MODIFY `id_banksampah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dana`
--
ALTER TABLE `dana`
  MODIFY `no_resi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sampah`
--
ALTER TABLE `sampah`
  MODIFY `notrans_sampah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dana`
--
ALTER TABLE `dana`
  ADD CONSTRAINT `tc11` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`),
  ADD CONSTRAINT `tc4` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `tc5` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mengikuti`
--
ALTER TABLE `mengikuti`
  ADD CONSTRAINT `tc6` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tc7` FOREIGN KEY (`kode_event`) REFERENCES `event` (`kode_event`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sampah`
--
ALTER TABLE `sampah`
  ADD CONSTRAINT `tc10` FOREIGN KEY (`id_banksampah`) REFERENCES `banksampah` (`id_banksampah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tc8` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tc9` FOREIGN KEY (`id_mentor`) REFERENCES `mentor` (`id_mentor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
