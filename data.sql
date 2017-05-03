-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2017 at 04:46 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE IF NOT EXISTS `anak` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `fk_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pegawai_anak` (`fk_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_pegawai`
--

CREATE TABLE IF NOT EXISTS `jabatan_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaJabatan` varchar(255) NOT NULL,
  `tanggalMulai` date NOT NULL,
  `tanggalSelesai` date NOT NULL,
  `fk_pegawai` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pegawai` (`fk_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `tanggalLahir`, `alamat`, `foto`) VALUES
(104, 'Nanda Firmansyah', '1541180036', '1997-01-23', 'Mojokerto', '20170310_0907482.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(18, 'nanda', '859a37720c27b9f70e11b79bab9318fe'),
(19, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(20, 'admin2', 'c84258e9c39059a89ab77d846ddab909');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `fk_pegawai_anak` FOREIGN KEY (`fk_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `jabatan_pegawai`
--
ALTER TABLE `jabatan_pegawai`
  ADD CONSTRAINT `fk_pegawai` FOREIGN KEY (`fk_pegawai`) REFERENCES `pegawai` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
