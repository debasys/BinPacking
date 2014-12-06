-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2014 at 01:23 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brotherhood`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`id` int(11) NOT NULL,
  `name` varchar(155) NOT NULL,
  `price` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `weight`) VALUES
(1, 'Item 1', 10, 200),
(2, 'Item 2', 100, 20),
(3, 'Item 3', 30, 300),
(4, 'Item 4', 20, 500),
(5, 'Item 5', 30, 250),
(6, 'Item 6', 40, 10),
(7, 'Item 7', 200, 10),
(8, 'Item 8', 120, 500),
(9, 'Item 9', 130, 790),
(10, 'Item 10', 20, 100),
(11, 'Item 11', 10, 340),
(12, 'Item 12', 4, 800),
(13, 'Item 13', 5, 200),
(14, 'Item 14', 240, 20),
(15, 'Item 15', 123, 700),
(16, 'Item 16', 245, 10),
(17, 'Item 17', 230, 20),
(18, 'Item 18', 110, 200),
(19, 'Item 19', 45, 200),
(20, 'Item 20', 67, 20),
(21, 'Item 21', 88, 300),
(22, 'Item 22', 10, 500),
(23, 'Item 23', 17, 250),
(24, 'Item 24', 19, 10),
(25, 'Item 25', 89, 10),
(26, 'Item 26', 45, 500),
(27, 'Item 27', 99, 790),
(28, 'Item 28', 125, 100),
(29, 'Item 29', 198, 340),
(30, 'Item 30', 220, 800),
(31, 'Item 31', 249, 200),
(32, 'Item 32', 230, 20),
(33, 'Item 33', 190, 700),
(34, 'Item 34', 45, 10),
(35, 'Item 35', 12, 20),
(36, 'Item 36', 5, 200),
(37, 'Item 37', 2, 200),
(38, 'Item 38', 90, 20),
(39, 'Item 39', 12, 300),
(40, 'Item 40', 167, 500),
(41, 'Item 41', 12, 250),
(42, 'Item 42', 8, 10),
(43, 'Item 43', 2, 10),
(44, 'Item 44', 9, 500),
(45, 'Item 45', 210, 790),
(46, 'Item 46', 167, 100),
(47, 'Item 47', 23, 340),
(48, 'Item 48', 190, 800),
(49, 'Item 49', 199, 200),
(50, 'Item 50', 12, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
