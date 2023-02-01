-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 07:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cropfello`
--

-- --------------------------------------------------------

--
-- Table structure for table `postitem`
--

CREATE TABLE `postitem` (
  `post_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `item_id` bigint(100) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `exp` date NOT NULL,
  `unit` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `stock_size` int(11) NOT NULL,
  `stock_size1` varchar(10) NOT NULL,
  `discount` int(11) NOT NULL,
  `discount1` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postitem`
--

INSERT INTO `postitem` (`post_id`, `user_id`, `item_id`, `item_type`, `exp`, `unit`, `price`, `size`, `stock_size`, `stock_size1`, `discount`, `discount1`, `Address`, `postalcode`, `city`, `image`, `description`) VALUES
(25, 5, 1, 'vegitable', '0000-00-00', 'KG    ', 600, 100, 20, 'KG', 17, '%', '30/1/A High level road Meegoda', 10504, 'Colombo', '63848231979f1.jpg', 'available'),
(26, 2, 2, 'vegitable', '2000-11-25', 'KG', 20000, 200, 50, 'KG', 20, '%', '38/1/A High level road Meegoda', 50687, 'Nuwara', '638482aaf3e32.jpg', 'vghghcfcghcgf'),
(27, 3, 3, 'fruit', '2000-07-20', 'KG', 50000, 1000, 100, 'KG', 25, '%', '30/1/A nuwara Road Gampaha', 90508, 'Katugasthota', '638483221a3a1.jpg', 'good apples'),
(28, 2, 4, 'fruit', '0000-00-00', 'kg', 600, 5, 20, 'KG', 15, '%', '30/1/A High level road kalubowila', 10509, 'waththegedara', '6384d86b4fd0b.jpg', 'dfdfdf'),
(30, 6, 0, 'vegitable', '0000-00-00', 'KG', 350, 1000, 100, 'KG', 30, '%', '34/5 nawala nuwaraeliya', 45698, 'NuwaraEliya', '6387fa702854c.jpeg', 'sdsdsdsdsdss'),
(31, 3, 5, 'vegitable', '0000-00-00', 'KG', 800, 900, 100, 'KG', 500, 'Rs', '90/5 galleRoad Colombo 10', 10908, 'Colombo', '6387fbd2da471.jpg', 'galle'),
(32, 5, 8, 'fruit', '0000-00-00', 'TREES', 10000, 80, 5, 'KG', 0, '%', '30/1/A High level road Meegoda', 60908, 'thissamaharama', '6387fcca0857e.jpeg', 'a good condition mango'),
(34, 2, 8, 'fruit', '0000-00-00', 'TREES', 800, 10, 1, 'KG', 5, '%', '30/9 madulawa road galle', 10908, 'galle', '6388007b3ca56.jpeg', 'ghgfhfhgfghfhg'),
(35, 3, 0, 'vegitable', '0000-00-00', 'KG', 80, 600, 100, 'KG', 27, '%', '60?15 flower Road Peradeniya', 90603, 'Peradeniya', '63880231b227d.jpeg', 'sdsdsdssds'),
(36, 6, 7, 'veg', '0000-00-00', '500', 500, 0, 40, '', 2, '', '', 0, '', '63880231b227d.jpeg', ''),
(37, 3, 3, 'friut', '2023-01-19', 'TREES', 10000, 5, 1, 'TREES', 9, '%', '30/9 madulawa road galle', 90807, 'haputhale', '639b543478bea.jpg', 'good Apples are Available'),
(38, 3, 6, 'vegitable', '2023-02-17', 'KG', 8000, 20, 200, 'KG', 5, '%', '40/5/A  polgasowita road piliyandala', 90763, 'homagma', '639b55784bf5e.jpg', 'a good raddish'),
(39, 2, 8, 'fruit', '2023-01-27', 'TREES', 9000, 10, 100, 'KG', 2, '%', '30/9 madulawa road galle', 20401, 'Mathara', '639baad46bc0c.jpeg', 'sdsadsdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postitem`
--
ALTER TABLE `postitem`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `item_fk` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postitem`
--
ALTER TABLE `postitem`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `postitem`
--
ALTER TABLE `postitem`
  ADD CONSTRAINT `postitem_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
