-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2022 at 07:02 PM
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
-- Database: `wdpf_exam2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_student` (IN `stname` VARCHAR(30), IN `staddress` VARCHAR(30), IN `stmobile` VARCHAR(20))   INSERT INTO student VALUES(null,stname,staddress,stmobile)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `re_id` int(20) NOT NULL,
  `module_name` varchar(20) NOT NULL,
  `totalmarks` int(5) NOT NULL,
  `student_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`re_id`, `module_name`, `totalmarks`, `student_id`) VALUES
(2, 'graphic designer', 46, 2),
(3, 'graphic designer', 47, 3),
(5, 'web designer', 77, 2),
(6, 'web designer', 55, 3);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(30) NOT NULL,
  `stname` varchar(50) NOT NULL,
  `st_address` varchar(100) NOT NULL,
  `st_mobile` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `stname`, `st_address`, `st_mobile`) VALUES
(2, 'aklima', 'mirpur', '01987663'),
(3, 'sultana', 'malibag', '0178854545'),
(5, 'sultana akter', 'badda', '767565'),
(6, 'jannatul', '', '97434'),
(7, 'jannatul ferdaush', 'jatrabari', '65645454');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `student_delete_triger` AFTER DELETE ON `student` FOR EACH ROW DELETE FROM results WHERE student_id = OLD.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_result`
-- (See below for the actual view)
--
CREATE TABLE `student_result` (
`id` int(30)
,`stname` varchar(50)
,`st_mobile` varchar(20)
,`module_name` varchar(20)
,`totalmarks` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'jannat@gmail.com', 'jannat'),
(2, 'rahima@gmail.com', 'rahima');

-- --------------------------------------------------------

--
-- Structure for view `student_result`
--
DROP TABLE IF EXISTS `student_result`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_result`  AS SELECT `student`.`id` AS `id`, `student`.`stname` AS `stname`, `student`.`st_mobile` AS `st_mobile`, `results`.`module_name` AS `module_name`, `results`.`totalmarks` AS `totalmarks` FROM (`student` join `results`) WHERE `student`.`id` = `results`.`re_id` ORDER BY `student`.`stname` ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `re_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
