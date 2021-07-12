-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2021 at 11:01 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16681808_wp_258627a49ba8bb95cad26485ca48e7d2`
--

-- --------------------------------------------------------

--
-- Table structure for table `THERAPISTS`
--

CREATE TABLE `THERAPISTS` (
  `Name` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(4) NOT NULL,
  `Address` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `THERAPISTS`
--

INSERT INTO `THERAPISTS` (`Name`, `ID`, `Address`) VALUES
('KAnishk', 123, 'Delhi'),
('Sreerag', 69, 'Delhi'),
('Sachin', 96, 'Bangalore'),
('Chatur', 66, 'Chennai');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
