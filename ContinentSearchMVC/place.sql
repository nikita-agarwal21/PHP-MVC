-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 06:48 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `place`
--

-- --------------------------------------------------------

--
-- Table structure for table `continent`
--

CREATE TABLE `continent` (
  `continent_code` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `continent`
--

INSERT INTO `continent` (`continent_code`, `name`) VALUES
(1, 'australia'),
(2, 'asia'),
(3, 'europe'),
(4, 'north america'),
(5, 'south america'),
(6, 'africa');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_code` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `capital` varchar(20) NOT NULL,
  `population` varchar(11) NOT NULL,
  `horbour` varchar(5) NOT NULL,
  `island` varchar(5) NOT NULL,
  `continent_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_code`, `name`, `area`, `capital`, `population`, `horbour`, `island`, `continent_code`) VALUES
(10, 'india', 'asia', 'new delhi', '1 million', 'yes', 'no', 2),
(11, 'algeria', 'africa', 'agiers', '70 lakh', 'yes', 'yes', 6),
(12, 'angola', 'africa', 'luanda', '70 lakh', 'yes', 'yes', 6),
(13, 'fiji', 'australia', 'suva', '200', 'no', 'yes', 1),
(14, 'kiribati', 'australia', 'tarawa', '200', 'no', 'yes', 1),
(15, 'new zealand', 'australia', 'wellington', '200', 'no', 'yes', 1),
(16, 'japan', 'asia', 'tokyo', '20 billion', 'yes', 'no', 2),
(17, 'korea', 'asia', 'seoul', '2000000', 'yes', 'no', 2),
(18, 'denmark', 'europe', 'copenhagen', '20 lakh', 'yes', 'no', 3),
(19, 'iceland', 'europe', 'reykjavik', '20 lakh', 'yes', 'no', 3),
(20, 'turkey', 'europe', 'ankara', '50 billion', 'yes', 'yes', 3),
(21, 'canada', 'NA', 'ottawa', '5 million', 'yes', 'no', 4),
(22, 'belize', 'NA', 'belmopan', '5 million', 'yes', 'no', 4),
(23, 'argentina', 'SA', 'buenos aires', '56 lakh', 'yes', 'no', 5),
(24, 'bolivia', 'SA', 'sucre', '70 lakh', 'yes', 'yes', 5),
(25, 'brazil', 'SA', 'brasilia', '10 million', 'yes', 'yes', 5),
(26, 'chile', 'SA', 'santiago', '56 lakh', 'yes', 'no', 5);

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `lang_type` varchar(50) NOT NULL,
  `country_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`lang_type`, `country_code`) VALUES
('african', 11),
('arabic', 20),
('arabic', 26),
('bolivian', 24),
('engish', 12),
('english', 10),
('english', 14),
('english', 16),
('english', 17),
('english', 18),
('english', 19),
('english', 20),
('english', 21),
('english', 22),
('english', 23),
('english', 25),
('english', 26),
('enlish', 15),
('fizian', 13),
('french', 14),
('hindi', 10),
('hindi', 13),
('hindi', 23),
('japanese', 16),
('kannada', 10),
('korean', 17),
('portuguese', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `continent`
--
ALTER TABLE `continent`
  ADD PRIMARY KEY (`continent_code`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_code`,`continent_code`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`lang_type`,`country_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
