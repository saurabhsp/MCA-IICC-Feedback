-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 01:49 PM
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
-- Database: `adityaportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `iicc_feedback`
--

CREATE TABLE `iicc_feedback` (
  `empid` varchar(45) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `phone` bigint(10) NOT NULL,
  `adress` text NOT NULL,
  `role` varchar(30) NOT NULL,
  `salary` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iicc_feedback`
--

INSERT INTO `iicc_feedback` (`empid`, `first_name`, `surname`, `dob`, `phone`, `adress`, `role`, `salary`) VALUES
('10', 'Saurabh', 'Pakhae', '2024-05-02', 932545722, 'Nagpur', 'Full stack dev', 3222),
('786', 'abhi', 'rakshit', '2003-08-09', 434241224, 'san Francisco', 'web dev ', 500000000),
('E01', 'Saurabh', 'Pakhale', '2001-05-01', 97677723, 'Nagpur', 'full stack', 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iicc_feedback`
--
ALTER TABLE `iicc_feedback`
  ADD PRIMARY KEY (`empid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
