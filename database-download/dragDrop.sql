-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 09, 2023 at 09:30 AM
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
-- Database: `dragDrop`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `display_order` int(5) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image_name`, `display_order`, `created`, `modified`, `status`) VALUES
(1, '1691397268_5e1a2df0697c01a8c75c.jpeg', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(2, '1691397268_504aa2434383c46a0405.jpeg', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(3, '1691397268_36602f9baa55a8df8f20.jpeg', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(4, '1691397268_9a7d8493425ece3be57c.jpeg', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(5, '1691397420_a18c76c03b972ea59301.jpeg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(6, '1691397420_d2b67e7c2ec1a5aeb69d.jpeg', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(7, '1691425104_54ceb3d21927477d6e35.jpeg', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(8, '1691425104_ab141963d291f5eb1500.jpeg', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(9, '1691425104_59a39cf8a1f3bb3aee98.jpeg', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(10, '1691425104_cdb84a98a11e3a971a31.jpeg', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(11, '1691556699_4a88c449a475cdbeed94.jpeg', 11, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
