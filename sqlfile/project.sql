-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 10:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `confirmedpatient`
--

CREATE TABLE `confirmedpatient` (
  `patient_id` int(50) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `ph_number` bigint(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` time NOT NULL,
  `day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmedpatient`
--

INSERT INTO `confirmedpatient` (`patient_id`, `patient_name`, `doctor_name`, `ph_number`, `email`, `date`, `day`) VALUES
(138, 'abc', 'Zainab Rizwan (Ortho-pedic)', 986253435, 'haseeb@gmail.com', '21:40:00', 'tue'),
(139, 'khan jee', 'Wajahat Ahmed (Surgeon)', 98765677, 'admin@gmail.com', '20:00:00', 'tue'),
(140, 'haseeb', 'Wajahat Ahmed (Surgeon)', 98765098765, 'xyza@gmail.com', '21:40:00', 'mon');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `eml` varchar(255) NOT NULL,
  `mobno` bigint(20) NOT NULL,
  `sub` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`user_id`, `name`, `eml`, `mobno`, `sub`) VALUES
(1, 'haseeb', 'haseebkhanhk601@gmail.com', 987654323, 'jhgfdsashjlkjhgfddcvn'),
(2, 'haseeb javed', 'haseebkhanhk601@gmail.com', 98765409876, ' hgfdjhgf'),
(3, 'haseeb javed', 'haseebkhanhk601@gmail.com', 98765409876, ' hgfdjhgf');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `linki_id` int(11) NOT NULL,
  `link_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`linki_id`, `link_name`) VALUES
(1, 'zzz'),
(2, 'registration.php');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(50) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `ph_number` bigint(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date` time NOT NULL,
  `day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `patient_name`, `doctor_name`, `ph_number`, `email`, `date`, `day`) VALUES
(141, 'jhanzaib', 'Haseeb (specialist)', 9862534355, 'haseebjaved601@gmail.com', '00:00:00', 'wed'),
(142, 'jhanzaib', 'Haseeb (specialist)', 93939393388, 'example@gmail.com', '00:00:00', 'wed');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(50) NOT NULL,
  `slots` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`, `slots`) VALUES
(1, '20:00:00'),
(2, '20:20:00'),
(3, '20:40:00'),
(4, '21:00:00'),
(5, '21:20:00'),
(6, '21:40:00'),
(7, '22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `available` varchar(50) NOT NULL,
  `slots` varchar(255) DEFAULT NULL,
  `fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `day`, `email`, `password`, `available`, `slots`, `fee`) VALUES
(129, 'Haseeb (specialist)', 'mon to fri', 'haseebkhanhk601@gmail.com', 'haseeb123', 'YES', '10pm to 12 am', '600 pkr'),
(142, 'Wajahat Ahmed (Surgeon)', 'mon and tue', 'wajahatahmed@gmail.com', 'wajahat123', 'NO', '10pm to 12pm', '100000pkr'),
(161, 'Zainab Rizwan (Ortho-pedic)', 'mon to fri', 'zainabrizwan@gmail.com', 'zainab123', 'yes', '10pm to 12 am', '100000pkr'),
(162, 'farhan ahmad farooqi (opd)', 'mon to fri', 'farhan@gmail.com', 'farhan123', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `uid` int(50) NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `confirmedpatient`
--
ALTER TABLE `confirmedpatient`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `ph_number` (`ph_number`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`linki_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `ph_number` (`ph_number`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `linki_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
