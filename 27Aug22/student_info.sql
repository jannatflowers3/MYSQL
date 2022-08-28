-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 06:13 PM
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
-- Database: `wdpf51`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `stud_id` int(11) NOT NULL,
  `stud_code` int(11) NOT NULL,
  `stud_name` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `marks` tinytext NOT NULL,
  `phone` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`stud_id`, `stud_code`, `stud_name`, `subject`, `marks`, `phone`) VALUES
(1, 101, 'MARK', 'English', '68', '3456987'),
(2, 102, 'Joseph', 'Physics', '70', '98765439'),
(3, 103, 'john', 'Math', '70', '56565656'),
(4, 104, 'Barak', 'Maths', '90', '34567990'),
(5, 105, 'Rinky', 'Math', '85', '56778787878'),
(6, 106, 'Adnan', 'English', '65', '56778787878'),
(7, 107, 'Andrew', 'Phsics', '75', '943566767'),
(8, 108, 'Jukerbark', 'Chemisty', '85', '7864454'),
(9, 109, 'Barek', 'Science', '95', '4545');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
