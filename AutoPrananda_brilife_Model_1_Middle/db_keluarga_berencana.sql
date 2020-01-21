-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2020 at 11:15 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_keluarga_berencana`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_kontrasepsi`
--

CREATE TABLE IF NOT EXISTS `list_kontrasepsi` (
  `id_kontrasepsi` int(11) NOT NULL,
  `nama_kontrasepsi` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kontrasepsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_kontrasepsi`
--

INSERT INTO `list_kontrasepsi` (`id_kontrasepsi`, `nama_kontrasepsi`) VALUES
(1, 'Pil'),
(2, 'Kondom'),
(3, 'IUD');

-- --------------------------------------------------------

--
-- Table structure for table `list_pemakai_kontrasepsi`
--

CREATE TABLE IF NOT EXISTS `list_pemakai_kontrasepsi` (
  `id_list` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kontrasepsi` int(11) NOT NULL,
  `jumlah_pemakai` int(11) NOT NULL,
  PRIMARY KEY (`id_list`),
  KEY `id_provinsi` (`id_provinsi`),
  KEY `id_kontrasepsi` (`id_kontrasepsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_pemakai_kontrasepsi`
--

INSERT INTO `list_pemakai_kontrasepsi` (`id_list`, `id_provinsi`, `id_kontrasepsi`, `jumlah_pemakai`) VALUES
(1, 1, 1, 50),
(2, 1, 2, 66),
(3, 1, 3, 25),
(4, 2, 1, 100),
(5, 2, 2, 75),
(6, 2, 3, 50),
(7, 1, 2, 40),
(8, 2, 2, 65),
(9, 3, 1, 90);

-- --------------------------------------------------------

--
-- Table structure for table `list_provinsi`
--

CREATE TABLE IF NOT EXISTS `list_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(30) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_provinsi`
--

INSERT INTO `list_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Bangka Belitung'),
(8, 'Sumatera Selatan'),
(9, 'Lampung');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list_pemakai_kontrasepsi`
--
ALTER TABLE `list_pemakai_kontrasepsi`
  ADD CONSTRAINT `list_pemakai_kontrasepsi_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `list_provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `list_pemakai_kontrasepsi_ibfk_2` FOREIGN KEY (`id_kontrasepsi`) REFERENCES `list_kontrasepsi` (`id_kontrasepsi`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
