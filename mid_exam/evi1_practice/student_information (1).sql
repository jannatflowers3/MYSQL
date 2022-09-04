-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 06:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf_exam1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `manufactureid_table_proce` (IN `manufac_name` VARCHAR(50), IN `manufac_address` VARCHAR(100), IN `manufac_contact` INT(50))   INSERT INTO manufacturer VALUES(null,manufac_name,manufac_address,manufac_contact)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufac_id` int(11) NOT NULL,
  `manufac_name` varchar(50) COLLATE utf8mb4_german2_ci NOT NULL,
  `manufac_address` varchar(100) COLLATE utf8mb4_german2_ci NOT NULL,
  `manufac_contact` varchar(50) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufac_id`, `manufac_name`, `manufac_address`, `manufac_contact`) VALUES
(2, 'singer', 'mirpur', '0179645345'),
(3, 'nokia', 'chittagong', '01300656'),
(8, 'xiomi', 'maxpro', '223434'),
(10, 'oppo', 'dhaka', '198765'),
(11, 'oppo', 'dhaka', '198765565');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `manufactureid_delete` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product WHERE manufacture_id = OLD.manufac_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `pr_name` varchar(50) NOT NULL,
  `pr_price` int(5) NOT NULL,
  `manufacture_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `pr_name`, `pr_price`, `manufacture_id`) VALUES
(3, 'singer machin', 8000, 2),
(4, 'singer tv', 20000, 2),
(5, 'nokia note7', 3000, 3),
(6, 'nokia pro3', 20000, 3),
(7, 'nokia note7', 3000, 3),
(11, 'walton pro ac', 50000, 6);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list_view`
-- (See below for the actual view)
--
CREATE TABLE `product_list_view` (
`product_id` int(11)
,`pr_name` varchar(50)
,`pr_price` int(5)
,`manufac_name` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'alkima', '2050'),
(2, 'sultana', '2001'),
(3, 'jannat', '20055'),
(4, 'farjana', '2010');

-- --------------------------------------------------------

--
-- Structure for view `product_list_view`
--
DROP TABLE IF EXISTS `product_list_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list_view`  AS SELECT `product`.`product_id` AS `product_id`, `product`.`pr_name` AS `pr_name`, `product`.`pr_price` AS `pr_price`, `manufacturer`.`manufac_name` AS `manufac_name` FROM (`product` join `manufacturer`) WHERE `manufacturer`.`manufac_id` = `product`.`manufacture_id` AND `product`.`pr_price` > 50005000  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufac_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
