-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 07:01 PM
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
-- Database: `align`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_joinees`
--

CREATE TABLE `new_joinees` (
  `name` varchar(25) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `linkedIn` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_joinees`
--

INSERT INTO `new_joinees` (`name`, `role`, `email`, `phone`, `linkedIn`) VALUES
('Sachin', 'Web Developer', 'sachinj28939@gmail.com', '9742485069', 'https://www.linkedin.com/in/sachin-jadhav-651a71127/');

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
(1002, 'https://www.ins', 'https://www.lin', 2147483647, '#', 'Gurgaon'),
(1003, 'https://www.ins', 'https://www.lin', 2145814818, '#', 'S1-999, Amritsar');

-- --------------------------------------------------------

--
-- Table structure for table `therapists`
--

CREATE TABLE `therapists` (
  `Therapist ID` bigint(20) UNSIGNED NOT NULL,
  `Name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Designation` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Identifies As` char(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Client Group` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Languages` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Issues Treated` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Location` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `Intro` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `therapists`
--

INSERT INTO `therapists` (`Therapist ID`, `Name`, `Designation`, `Identifies As`, `Client Group`, `Languages`, `Issues Treated`, `Location`, `Intro`, `Image`) VALUES
(1001, 'Sreerag', 'Aasha CEO', 'Falcon', 'Kids', 'English', 'Mental Health', 'Delhi', 'Hello guys, I am a stand-up comic by profession and stream counter strike too.', 'images/sreerag.jpg'),
(1002, 'Kanishk', 'Web Developer', 'Fogripper', 'Kids', 'English', 'Website', 'Delhi', '', 'images/kanishk.jpg\r\n'),
(1003, 'Ishdeep', 'Doctor', 'Sasha', 'Children', 'English', 'Chronic Pain', 'Delhi', 'CS will always remain special for me. Busy ranking up IRL.', 'images/ishdeep.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `therapists_contact_details`
--

CREATE TABLE `therapists_contact_details` (
  `name` varchar(120) NOT NULL,
  `professional_title` varchar(120) NOT NULL,
  `qualifications` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `instagramHandle` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `therapists_contact_details`
--

INSERT INTO `therapists_contact_details` (`name`, `professional_title`, `qualifications`, `email`, `phone`, `instagramHandle`) VALUES
('Kanishk', 'Counsellor', 'Btech', '0', '2147483647', 'https://www.instagram.com/kanishk.grover/'),
('Memento', 'Psychiatrist', 'MBBS', 'sachinj28939@gmail.com', '975506345', '@Memento_mori22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_joinees`
--
ALTER TABLE `new_joinees`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `therapists_contact_details`
--
ALTER TABLE `therapists_contact_details`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal details`
--
ALTER TABLE `personal details`
  MODIFY `Therapist ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `therapists`
--
ALTER TABLE `therapists`
  MODIFY `Therapist ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

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
