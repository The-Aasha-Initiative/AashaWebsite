-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 05:57 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Phone Number` varchar(10) NOT NULL,
  `Aasha URL` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal details`
--

INSERT INTO `personal details` (`Therapist ID`, `Instagram Link`, `Linkedin Link`, `Phone Number`, `Aasha URL`, `Address`) VALUES
(1001, 'https://www.ins', 'https://www.lin', '2147483647', '#', 'JJ Colony, Madanpur Khadar, New Delhi, Delhi 11007'),
(1002, 'https://www.ins', 'https://www.lin', '2147483647', '#', 'Gurgaon'),
(1003, 'https://www.ins', 'https://www.lin', '2145814818', '#', 'Raj Nagar, Madanpur Khadar New Delhi, Delhi 110076'),
(1004, 'https://www.ins', 'https://www.lin', '9742467865', '', ' 86, Block A, Sector 105, Noida, Uttar Pradesh 201'),
(1005, 'https://www.ins', 'https://www.lin', '5267895477', '', 'Sikkarayapuram');

-- --------------------------------------------------------

--
-- Table structure for table `therapists`
--

CREATE TABLE `therapists` (
  `Therapist ID` bigint(20) UNSIGNED NOT NULL,
  `Name` char(50) NOT NULL,
  `Designation` char(15) NOT NULL,
  `Identifies As` char(25) NOT NULL,
  `Client Group` char(100) NOT NULL,
  `Languages` char(100) NOT NULL,
  `Issues Treated` char(100) NOT NULL,
  `Location` char(20) NOT NULL,
  `Intro` varchar(225) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `therapists`
--

INSERT INTO `therapists` (`Therapist ID`, `Name`, `Designation`, `Identifies As`, `Client Group`, `Languages`, `Issues Treated`, `Location`, `Intro`, `Image`) VALUES
(1001, 'Sreerag', 'Counsellor', 'Asian', 'Children', 'English', 'Anxiety', 'Delhi', 'Hello guys, I am a stand-up comic by profession and stream counter strike too.', 'images/therapists/sreerag.jpg'),
(1002, 'Kanishk', 'Counsellor', 'Fogripper', 'Adults', 'English', 'Eating', 'Delhi', '', 'images/therapists/kanishk.jpg\r\n'),
(1003, 'Ishdeep', 'Psychologist', 'Sasha', 'Adults', 'English', 'Depression', 'Delhi', 'CS will always remain special for me. Busy ranking up IRL.', 'images/therapists//ishdeep.jpg'),
(1004, 'Memento', 'Psychologist', 'Asian', 'Children', 'English, Kannada', 'Trauma', 'Delhi', 'Competent, compassionate, and uses an eclectic approach with affordable charges.', 'images/therapists/memento.jpg'),
(1005, 'Chatur', 'Psychologist', 'Asian', 'Couples', 'Tamil\r\n', 'Relationship', 'Chennai', '', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `therapists_contact_details`
--

INSERT INTO `therapists_contact_details` (`name`, `professional_title`, `qualifications`, `email`, `phone`, `instagramHandle`) VALUES
('Kanishk', 'Counsellor', 'Btech', '0', '2147483647', 'https://www.instagram.com/kanishk.grover/'),
('Sachin Jadhav', 'Psychologist', 'MBBS', 'jj@gmail.com', '8974247069', 'https://www.instagram.com/222/'),
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
  MODIFY `Therapist ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `therapists`
--
ALTER TABLE `therapists`
  MODIFY `Therapist ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

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
