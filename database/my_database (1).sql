-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2025 at 09:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `preffix` varchar(255) NOT NULL,
  `seven_digit` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `attempt` varchar(255) NOT NULL,
  `log_time` varchar(255) NOT NULL,
  `account_type` varchar(1) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `first_name`, `middle_name`, `last_name`, `gender`, `preffix`, `seven_digit`, `email`, `password`, `attempt`, `log_time`, `account_type`, `img`) VALUES
(4, 'Brian', 'Andal', 'Maines', 'Male', '0813', '4567890', 'brian.maines@example.com', 'AsDf3456', '3', '02:20 PM', '2', ''),
(5, 'Carl', 'Andrei', 'Rocafor', 'Male', '0813', '5678901', 'carl.rocafor@example.com', 'ZxCv7890', '2', '', '2', ''),
(6, 'Cxyris', 'N/A', 'Tan', 'Male', '0813', '6789012', 'cxyris.tan@example.com', 'VbNm1234', '', '', '2', ''),
(7, 'Dexter', 'John', 'De Guzman', 'Male', '0813', '7890123', 'dexter.deguzman@example.com', 'LmNo5678', '', '', '2', ''),
(8, 'EJAY', 'GUILLARTE', 'DIMAYUGA', 'Male', '0813', '8901234', 'ejay.dimayuga@example.com', 'ErTy9012', '', '', '2', ''),
(9, 'Gerard', 'N/A', 'Malaluan', 'Male', '0813', '9012345', 'gerard.malaluan@example.com', 'UiOp3456', '', '', '2', ''),
(22, '', '', '', '', '', '', 'admin@phplord.com', 'admin', '', '', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
