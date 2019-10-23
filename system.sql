-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 07:29 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `iduser` int(100) NOT NULL,
  `acctno` int(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `passwd` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`iduser`, `acctno`, `username`, `mail`, `passwd`) VALUES
(2, 789, 'bryan', 'bryandevadatha283@gmail.com', '$2y$10$d/0KpVkRg58Ldqq3AtzAdeVPgIOCdEn/VZiyYMDAQa57lO0CzWy1u'),
(6, 890, 'kakashi', 'kakshi7@yahoo.com', '$2y$10$6ke9gEI41HjiErOgTCxW2.5/7ZS6Yso2NSHm3PpDz9SAKJ4iCBvK6');

-- --------------------------------------------------------

--
-- Table structure for table `admin_trans`
--

CREATE TABLE `admin_trans` (
  `id` int(100) NOT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `acctno` int(40) DEFAULT NULL,
  `t_type` varchar(50) DEFAULT NULL,
  `amount` int(100) DEFAULT NULL,
  `t_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_trans`
--

INSERT INTO `admin_trans` (`id`, `branch`, `acctno`, `t_type`, `amount`, `t_time`) VALUES
(1, 'vasai', 123, 'refilled', NULL, '2019-10-03 19:01:52'),
(2, 'borivali', 123, 'refilled', NULL, '2019-10-03 19:54:02'),
(3, 'borivali', 123, 'transfer', 233, '2019-10-03 19:54:22'),
(4, 'vasai', 123, 'withdraw', 400, '2019-10-03 19:54:35'),
(5, 'borivali', 123, 'deposit', 900, '2019-10-03 19:54:52'),
(6, 'vasai', 123, 'refilled', NULL, '2019-10-03 19:55:09'),
(8, 'thane', 123, 'withdraw', 12, '2019-10-13 16:24:41'),
(9, 'thane', 123, 'withdraw', 12, '2019-10-13 16:26:48'),
(10, 'thane', 123, 'withdraw', 12, '2019-10-13 16:28:32'),
(11, 'thane', 123, 'withdraw', 12, '2019-10-13 16:29:15'),
(12, 'thane', 123, 'withdraw', 12, '2019-10-13 16:30:11'),
(13, 'thane', 123, 'withdraw', 12, '2019-10-13 16:30:29'),
(14, 'thane', 123, 'withdraw', 12, '2019-10-13 16:30:48'),
(15, 'thane', 123, 'withdraw', 12, '2019-10-13 16:31:19'),
(16, 'thane', 123, 'withdraw', 12, '2019-10-13 16:31:45'),
(17, 'thane', 123, 'withdraw', 12, '2019-10-13 16:32:26'),
(18, 'thane', 123, 'withdraw', 12, '2019-10-13 16:32:35'),
(21, 'thane', 123, 'transfer', 222, '2019-10-13 16:46:46'),
(22, 'thane', 123, 'deposit', 222, '2019-10-13 17:28:54'),
(23, 'thane', 123, 'deposit', 223, '2019-10-13 17:29:51'),
(24, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:05'),
(25, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:13'),
(26, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:22'),
(27, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:30'),
(28, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:38'),
(29, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:51'),
(30, 'thane', 123, 'withdraw', 232, '2019-10-13 17:31:11'),
(31, 'thane', 123, 'transfer', 0, '2019-10-13 17:33:57'),
(32, 'thane', 123, 'transfer', 0, '2019-10-13 17:34:04'),
(33, 'thane', 123, 'transfer', 31, '2019-10-13 17:34:23'),
(34, 'thane', 123, 'transfer', 0, '2019-10-13 18:01:51'),
(35, 'thane', 123, 'transfer', 0, '2019-10-13 18:02:16'),
(36, 'thane', 123, 'transfer', 0, '2019-10-13 18:02:38'),
(37, 'thane', 123, 'transfer', 0, '2019-10-13 18:02:41'),
(38, 'thane', 123, 'transfer', 0, '2019-10-13 18:03:06'),
(39, 'thane', 123, 'transfer', 0, '2019-10-13 18:03:07'),
(40, 'thane', 123, 'transfer', 0, '2019-10-13 18:03:26'),
(41, 'thane', 123, 'transfer', 0, '2019-10-13 18:03:30'),
(42, 'thane', 123, 'transfer', 23, '2019-10-13 18:05:29'),
(43, 'thane', 123, 'transfer', 0, '2019-10-13 18:08:29'),
(44, 'thane', 123, 'transfer', 2, '2019-10-13 18:08:47'),
(45, 'thane', 123, 'transfer', 0, '2019-10-13 18:09:05'),
(46, 'thane', 123, 'deposit', 33, '2019-10-13 18:13:22'),
(47, 'thane', 123, 'refilled', NULL, '2019-10-15 13:56:12'),
(48, 'thane', 123, 'refilled', NULL, '2019-10-15 14:19:57'),
(49, 'thane', 123, 'refilled', NULL, '2019-10-15 14:20:28'),
(50, 'thane', 123, 'refilled', NULL, '2019-10-15 14:20:51'),
(51, 'vasai', 123, 'refilled', NULL, '2019-10-15 15:09:35'),
(52, 'thane', 123, 'refilled', NULL, '2019-10-15 15:10:49'),
(53, 'borivali', 123, 'refilled', NULL, '2019-10-15 18:15:15'),
(54, 'thane', 123, 'refilled', NULL, '2019-10-15 18:31:24'),
(55, 'borivali', 123, 'refilled', NULL, '2019-10-15 18:31:26'),
(56, 'thane', 123, 'deposit', 123, '2019-10-16 14:28:33'),
(57, 'thane', 123, 'transfer', 23, '2019-10-16 14:29:31'),
(58, 'thane', 123, 'withdraw', 600, '2019-10-17 04:16:38'),
(59, 'borivali', 123, 'deposit', 200, '2019-10-17 04:17:00'),
(60, 'vasai', 123, 'withdraw', 258, '2019-10-17 04:17:27'),
(61, 'thane', 123, 'transfer', 200, '2019-10-17 04:18:07'),
(62, 'vasai', 123, 'transfer', 2000, '2019-10-17 04:18:58'),
(63, 'thane', 112233, 'withdraw', 1200, '2019-10-17 04:19:33'),
(64, 'vasai', 123, 'refilled', NULL, '2019-10-17 04:20:39'),
(65, 'borivali', 123, 'withdraw', 2000, '2019-10-17 08:57:20'),
(66, 'thane', 123, 'deposit', 3000, '2019-10-17 08:57:35'),
(67, 'vasai', 123, 'transfer', 5000, '2019-10-17 08:58:19'),
(68, 'vasai', 123, 'refilled', NULL, '2019-10-17 09:00:06'),
(69, 'vasai', 123, 'withdraw', 200, '2019-10-17 09:02:10'),
(70, 'vasai', 123, 'withdraw', 200, '2019-10-17 09:02:17'),
(71, 'thane', 123, 'withdraw', 12, '2019-10-17 09:21:02'),
(72, 'thane', 123, 'transfer', 200, '2019-10-17 09:22:17'),
(73, 'vasai', 123, 'refilled', NULL, '2019-10-17 09:23:02'),
(74, 'vasai', 777, 'deposit', 987, '2019-10-23 17:10:34'),
(75, 'borivali', 777, 'transfer', 1000, '2019-10-23 17:11:39'),
(76, 'vasai', 666, 'withdraw', 6900, '2019-10-23 17:12:15'),
(77, 'thane', 666, 'transfer', 890, '2019-10-23 17:12:33'),
(78, 'thane', 666, 'transfer', 890, '2019-10-23 17:12:39'),
(79, 'borivali', 890, 'refilled', NULL, '2019-10-23 17:19:31'),
(80, 'vasai', 789, 'refilled', NULL, '2019-10-23 17:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `atm_machines`
--

CREATE TABLE `atm_machines` (
  `id` int(100) NOT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `amount` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atm_machines`
--

INSERT INTO `atm_machines` (`id`, `branch`, `amount`) VALUES
(1, 'thane', 900),
(2, 'borivali', 900000),
(3, 'vasai', 789000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `iduser` int(100) NOT NULL,
  `acctno` int(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `mail` varchar(30) DEFAULT NULL,
  `passwd` longtext DEFAULT NULL,
  `amount` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`iduser`, `acctno`, `username`, `mail`, `passwd`, `amount`) VALUES
(3, 123, 'bryan', 'bryandevadatha283@gmail.com', '$2y$10$72jk7QuWyY6G3Bduc/S8gO5bjhDcAQSbGV3X06qnc7xnRRPUlGqZO', 318888),
(4, 233, 'brendan', 'brendan@gmail.com', '$2y$10$FOUdWbXsoMz3r3qlBQj2du96AoPU.lr1iy8.T2SyeQP2gD7NHM2JC', 21673),
(8, 666, 'Naruto', 'naruto@gmail.com', '$2y$10$TQU5RGyfeXI48MLkvbNrwus8Odpn.C8UQwYWWFTtn5uEMJotUEk6O', 2229),
(9, 777, 'sasuke', 'sasuke90@gmail.com', '$2y$10$KGYJVZR3a5NIEvNEKWAYk.Yqk9G/DS29aA5duWalNpX/Gzjy5Hdbe', 5676),
(10, 888, 'tony', 'tony3@yahoo.com', '$2y$10$qvbXc/xAoIxwUC/iHR0/P.67tq3OBAPaPTHrkvjhLmgVLc75wqkv6', 900);

-- --------------------------------------------------------

--
-- Table structure for table `cust_trans`
--

CREATE TABLE `cust_trans` (
  `id` int(100) NOT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `acctno` int(50) DEFAULT NULL,
  `t_type` varchar(20) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `t_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_trans`
--

INSERT INTO `cust_trans` (`id`, `branch`, `acctno`, `t_type`, `amount`, `t_time`) VALUES
(1, 'thane', 123, 'withdraw', 42, '2019-10-02 14:01:09'),
(2, 'thane', 123, 'withdraw', 200, '2019-10-02 14:02:26'),
(3, 'borivali', 123, 'withdraw', 600, '2019-10-02 14:02:30'),
(4, 'vasai', 123, 'withdraw', 580, '2019-10-02 14:02:36'),
(5, 'thane', 123, 'transfer', 500, '2019-10-02 14:10:42'),
(6, 'borivali', 123, 'transfer', 600, '2019-10-02 14:10:52'),
(7, 'vasai', 123, 'transfer', 440, '2019-10-02 14:17:07'),
(8, 'thane', 123, 'deposit', 800, '2019-10-02 14:25:15'),
(9, 'borivali', 123, 'deposit', 500, '2019-10-02 14:25:21'),
(10, 'vasai', 123, 'deposit', 700, '2019-10-02 14:25:26'),
(11, 'borivali', 123, 'transfer', 233, '2019-10-03 19:54:22'),
(12, 'vasai', 123, 'withdraw', 400, '2019-10-03 19:54:35'),
(13, 'borivali', 123, 'deposit', 900, '2019-10-03 19:54:52'),
(15, 'thane', 123, 'withdraw', 12, '2019-10-13 16:24:41'),
(16, 'thane', 123, 'withdraw', 12, '2019-10-13 16:26:48'),
(17, 'thane', 123, 'withdraw', 12, '2019-10-13 16:28:32'),
(18, 'thane', 123, 'withdraw', 12, '2019-10-13 16:29:15'),
(19, 'thane', 123, 'withdraw', 12, '2019-10-13 16:30:11'),
(20, 'thane', 123, 'withdraw', 12, '2019-10-13 16:30:29'),
(21, 'thane', 123, 'withdraw', 12, '2019-10-13 16:30:48'),
(22, 'thane', 123, 'withdraw', 12, '2019-10-13 16:31:19'),
(23, 'thane', 123, 'withdraw', 12, '2019-10-13 16:31:44'),
(24, 'thane', 123, 'withdraw', 12, '2019-10-13 16:32:26'),
(25, 'thane', 123, 'withdraw', 12, '2019-10-13 16:32:35'),
(28, 'thane', 123, 'transfer', 222, '2019-10-13 16:46:46'),
(29, 'thane', 123, 'deposit', 222, '2019-10-13 17:28:54'),
(30, 'thane', 123, 'deposit', 223, '2019-10-13 17:29:51'),
(31, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:05'),
(32, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:13'),
(33, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:22'),
(34, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:30'),
(35, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:38'),
(36, 'thane', 123, 'deposit', 223, '2019-10-13 17:30:51'),
(37, 'thane', 123, 'withdraw', 232, '2019-10-13 17:31:11'),
(38, 'thane', 123, 'transfer', 0, '2019-10-13 17:33:57'),
(39, 'thane', 123, 'transfer', 0, '2019-10-13 17:34:04'),
(40, 'thane', 123, 'transfer', 31, '2019-10-13 17:34:23'),
(41, 'thane', 123, 'transfer', 0, '2019-10-13 18:01:51'),
(42, 'thane', 123, 'transfer', 0, '2019-10-13 18:02:16'),
(43, 'thane', 123, 'transfer', 0, '2019-10-13 18:02:38'),
(44, 'thane', 123, 'transfer', 0, '2019-10-13 18:02:41'),
(45, 'thane', 123, 'transfer', 0, '2019-10-13 18:03:05'),
(46, 'thane', 123, 'transfer', 0, '2019-10-13 18:03:07'),
(47, 'thane', 123, 'transfer', 0, '2019-10-13 18:03:26'),
(48, 'thane', 123, 'transfer', 0, '2019-10-13 18:03:30'),
(49, 'thane', 123, 'transfer', 23, '2019-10-13 18:05:29'),
(50, 'thane', 123, 'transfer', 0, '2019-10-13 18:08:29'),
(51, 'thane', 123, 'transfer', 2, '2019-10-13 18:08:47'),
(52, 'thane', 123, 'transfer', 0, '2019-10-13 18:09:04'),
(53, 'thane', 123, 'deposit', 33, '2019-10-13 18:13:22'),
(54, 'thane', 123, 'deposit', 123, '2019-10-16 14:28:32'),
(55, 'thane', 123, 'transfer', 23, '2019-10-16 14:29:31'),
(56, 'thane', 123, 'withdraw', 600, '2019-10-17 04:16:38'),
(57, 'borivali', 123, 'deposit', 200, '2019-10-17 04:17:00'),
(58, 'vasai', 123, 'withdraw', 258, '2019-10-17 04:17:27'),
(59, 'thane', 123, 'transfer', 200, '2019-10-17 04:18:07'),
(60, 'vasai', 123, 'transfer', 2000, '2019-10-17 04:18:58'),
(61, 'thane', 112233, 'withdraw', 1200, '2019-10-17 04:19:32'),
(62, 'borivali', 123, 'withdraw', 2000, '2019-10-17 08:57:20'),
(63, 'thane', 123, 'deposit', 3000, '2019-10-17 08:57:35'),
(64, 'vasai', 123, 'transfer', 5000, '2019-10-17 08:58:19'),
(65, 'vasai', 123, 'withdraw', 200, '2019-10-17 09:02:10'),
(66, 'vasai', 123, 'withdraw', 200, '2019-10-17 09:02:17'),
(67, 'thane', 123, 'withdraw', 12, '2019-10-17 09:21:02'),
(68, 'thane', 123, 'transfer', 200, '2019-10-17 09:22:17'),
(69, 'vasai', 777, 'deposit', 987, '2019-10-23 17:10:34'),
(70, 'borivali', 777, 'transfer', 1000, '2019-10-23 17:11:39'),
(71, 'vasai', 666, 'withdraw', 6900, '2019-10-23 17:12:15'),
(72, 'thane', 666, 'transfer', 890, '2019-10-23 17:12:33'),
(73, 'thane', 666, 'transfer', 890, '2019-10-23 17:12:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `admin_trans`
--
ALTER TABLE `admin_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atm_machines`
--
ALTER TABLE `atm_machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `cust_trans`
--
ALTER TABLE `cust_trans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `iduser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_trans`
--
ALTER TABLE `admin_trans`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `atm_machines`
--
ALTER TABLE `atm_machines`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `iduser` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cust_trans`
--
ALTER TABLE `cust_trans`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
