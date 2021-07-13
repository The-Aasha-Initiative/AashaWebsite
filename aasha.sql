-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 12:57 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aasha`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal details`
--

CREATE TABLE `personal details` (
  `Therapist ID` bigint(20) UNSIGNED NOT NULL,
  `Instagram Link` varchar(15) NOT NULL,
  `Linkedin Link` varchar(15) NOT NULL,
  `Phone Number` int(10) NOT NULL,
  `Aasha URL` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal details`
--

INSERT INTO `personal details` (`Therapist ID`, `Instagram Link`, `Linkedin Link`, `Phone Number`, `Aasha URL`, `Address`) VALUES
(1001, 'https://www.ins', 'https://www.lin', 2147483647, '#', 'S-69,Tamil Nadu'),
(1002, 'https://www.ins', 'https://www.lin', 2147483647, '#', 'Gurgaon');

-- --------------------------------------------------------

--
-- Table structure for table `therapists`
--

CREATE TABLE `therapists` (
  `Therapist ID` bigint(20) UNSIGNED NOT NULL,
  `Name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Designation` char(15) COLLATE utf8_unicode_ci NOT NULL,
  `Identifies As` char(25) COLLATE utf8_unicode_ci NOT NULL,
  `Client Group` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `Languages` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `Issues Related` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `Location` char(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `therapists`
--

INSERT INTO `therapists` (`Therapist ID`, `Name`, `Designation`, `Identifies As`, `Client Group`, `Languages`, `Issues Related`, `Location`) VALUES
(1001, 'Sreerag', 'Aasha CEO', 'Falcon', 'Dilshad Garden People', 'English', 'Mental Health', 'Delhi'),
(1002, 'Kanishk', 'Web Developer', 'Fogripper', 'Kids', 'English', 'Website', 'Delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal details`
--
ALTER TABLE `personal details`
  ADD PRIMARY KEY (`Therapist ID`),
  ADD UNIQUE KEY `Therapist ID` (`Therapist ID`);

--
-- Indexes for table `therapists`
--
ALTER TABLE `therapists`
  ADD PRIMARY KEY (`Therapist ID`),
  ADD UNIQUE KEY `Therapist ID` (`Therapist ID`),
  ADD UNIQUE KEY `Therapist ID_2` (`Therapist ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal details`
--
ALTER TABLE `personal details`
  MODIFY `Therapist ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `therapists`
--
ALTER TABLE `therapists`
  MODIFY `Therapist ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `personal details`
--
ALTER TABLE `personal details`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`Therapist ID`) REFERENCES `therapists` (`Therapist ID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
