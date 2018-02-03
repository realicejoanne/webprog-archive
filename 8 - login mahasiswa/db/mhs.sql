-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 02:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `npm` varchar(12) NOT NULL DEFAULT '',
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`npm`, `nama`, `alamat`, `jk`, `tgl_lhr`, `email`) VALUES
('140810160004', 'ahsan', 'Buah Batu Bandung', 'L', '1970-01-01', 'ahsan@gmail.com'),
('140810160006', 'Fajar', 'Ciseke Jatinangor', 'L', NULL, NULL),
('140810160009', 'raditya', '23333333333333333', 'P', NULL, '23231'),
('140810160061', 'Eko', 'ererewrfewfd', 'L', NULL, 'df34r4'),
('140810160062', 'Islam', 'eeeeeeeeeee', 'L', NULL, 'eeeeeee'),
('140810160065', 'Patricia', 'ddddddddddddddddddddd', 'P', '1995-01-01', 'ddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `level` char(1) DEFAULT NULL,
  `npm` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `level`, `npm`) VALUES
('312313', 'a06e79cf16afe9203d8502639683d0af88001425', NULL, '140810160009'),
('4r43r4', 'e950c1517ee0d7e20454d22c306c4c501a7cf11c', NULL, '140810160061'),
('admin', '829b36babd21be519fa5f9353daf5dbdb796993e', '3', '999'),
('ahsan1', '829b36babd21be519fa5f9353daf5dbdb796993e', '1', '140810160004'),
('eee', 'd6004a0f8fbb84595534a0f8323613b681917597', NULL, '140810160062'),
('fajar', '829b36babd21be519fa5f9353daf5dbdb796993e', '1', '140810160006'),
('rudi', '829b36babd21be519fa5f9353daf5dbdb796993e', '3', '888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
