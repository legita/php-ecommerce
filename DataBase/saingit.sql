-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2017 at 07:59 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `saingit`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `isi`, `date`) VALUES
(1, 'gi', 'Gitaapriyani16@gmail.com', 'good', '2017-06-13 20:08:12'),
(2, 'gitaaaa', 'fgdg@gm', 'SAYA MENCOBAAA KOMENTAR', '2017-06-13 20:12:25'),
(3, 'kinan', 'kinannan@gmail.com', 'i like it', '2017-06-15 09:04:45'),
(4, 'chibay', 'chibay@gmail.com', 'oke', '2017-06-15 10:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE IF NOT EXISTS `konfirmasi` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `rekening` varchar(20) NOT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `cara` varchar(25) DEFAULT NULL,
  `tanggal` varchar(20) DEFAULT NULL,
  `validasi` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id`, `username`, `email`, `rekening`, `no_tlp`, `cara`, `tanggal`, `validasi`) VALUES
(7, 'hg', 'hg@gm', '22-8282-6446', 'vbf', 'Bayar Di Tempat', '10102017', 'ok'),
(12, 'kai', 'kai@gmail.com', '22-8282-6446', '686986', 'ATM', '101017', 'ok'),
(14, 'do', 'do@gmail.com', '22-8282-6446', 'y786', 'ATM', '768', 'ok'),
(15, 'f', 'fgdg@gm', '22-8282-6446', '7686', 'ATM', '676', 'ok'),
(16, 'gta_a', 'gitaapriyani16@gmail', '22-8282-6446', '222', 'ATM', '1231212', 'ok'),
(17, 'dinaamalia', 'do@gmail.com', '22-8282-6446', '78978', 'ATM', '6467', 'ok'),
(18, 'sia', 'sia@gmail.com', '22-8282-6446', '21212', 'ATM', '315362', 'ok'),
(19, 'sia', 'sia@gmail.com', '22-8282-6446', '21212', 'ATM', '315362', 'ok'),
(20, 'chibay', 'chibay@gmail.com', '22-8282-6446', '0857', 'ATM', '120617', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_tlp` int(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `password`, `alamat`, `email`, `no_tlp`, `level`) VALUES
(3, 'Gita', 'admin', 'admin', 'bekasi', 'gitaapriyani16@gmail.com', 8765456, 'admin'),
(6, 'dia', 'dia', '1234', 'Bekasi', 'dia@gmail.com', 846272, ''),
(7, 'chibay', 'chibay', '1234', 'Bekasi', 'chibay@gmail.com', 8943, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
