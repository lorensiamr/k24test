-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 03:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `foto_diri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `password`, `no_hp`, `tgl_lahir`, `email`, `jenis_kelamin`, `no_ktp`, `foto_diri`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', '', '0000-00-00', 'admin', '', '', ''),
('asd', '81dc9bdb52d04dc20036dbd8313ed055', '12', '2022-02-07', 'loren1@gmail.com', 'L', '1244', 'Pas Photo.jpg'),
('mawar', '827ccb0eea8a706c4c34a16891f84e7b', '123', '2022-02-02', 'loren@gmail.com', 'P', '123', 'profile.png'),
('lorensia dwi mawarti', 'a5a7158118e59ee590424b55bb9aed17', '087837900153', '2022-02-03', 'lorensia@gmail.com', 'P', '1029330', 'Pas Photo (2).jpg'),
('test foto', 'd9b1d7db4cd6e70935368a1efb10e377', '081', '2022-02-03', 'test@gmail.com', '1', '01920', 'profile.png'),
('tes tes', '202cb962ac59075b964b07152d234b70', '0888', '2022-02-01', 'testes@gmail.com', 'L', '1234', 'profile.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
