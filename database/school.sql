-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 10:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--
DROP DATABASE IF EXISTS `school`;
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`) VALUES
(14, 'admin', 'admin'),
(15, 'saad', 'saad'),
(16, 'siam', 'siam'),
(17, 'razia', 'razia');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`ID`, `Date`, `Message`) VALUES
(5, '2022-06-01', 'Result of 2022 is published online!!'),
(6, '2022-06-02', 'Leave on Saturday '),
(7, '2022-05-28', 'Today is a off day');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Class` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Bangla` int(11) NOT NULL,
  `English` int(11) NOT NULL,
  `Math` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Grade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Class`, `ID`, `Name`, `Bangla`, `English`, `Math`, `Total`, `Grade`) VALUES
(1, 1, 'Saad', 56, 45, 77, 178, 'C'),
(1, 2, 'Razia', 88, 67, 92, 247, 'A+'),
(1, 3, 'Benazir', 77, 85, 95, 257, 'A+'),
(1, 4, 'Siam', 69, 56, 98, 223, 'A'),
(1, 5, 'Sakib', 56, 74, 86, 216, 'A'),
(1, 6, 'Yeasmin', 55, 74, 56, 185, 'B'),
(1, 7, 'Ben', 66, 56, 54, 176, 'C'),
(1, 8, 'Kowshik', 45, 74, 55, 174, 'C'),
(1, 9, 'Shuvo', 95, 80, 0, 175, 'Held'),
(1, 10, 'Rupa', 56, 45, 45, 146, 'C'),
(1, 11, 'Sadman Adib', 0, 0, 0, 0, 'Failed'),
(2, 1, 'Saiym', 12, 13, 11, 36, 'Failed'),
(2, 3, 'Tajul', 12, 17, 57, 86, 'Held'),
(2, 4, 'Mridha', 74, 45, 57, 176, 'C'),
(2, 5, 'Saiful', 56, 77, 73, 206, 'B'),
(2, 6, 'Sinha', 85, 82, 55, 222, 'A'),
(2, 7, 'Akib', 77, 77, 58, 212, 'A'),
(2, 8, 'Khan', 86, 95, 34, 215, 'A'),
(2, 9, 'Ben', 86, 95, 86, 267, 'A+'),
(3, 1, 'Sadia', 56, 45, 77, 178, 'C'),
(3, 2, 'Mithi', 45, 78, 45, 168, 'C'),
(3, 3, 'Rokshana', 12, 6, 2, 20, 'Failed'),
(3, 4, 'Nuzhat', 67, 7, 44, 118, 'Held'),
(3, 5, 'Sadi', 55, 98, 99, 252, 'A+'),
(3, 6, 'Pranto', 98, 89, 77, 264, 'A+'),
(3, 7, 'Sia ', 0, 0, 0, 0, 'Failed'),
(4, 1, 'Polok', 77, 45, 76, 198, 'B'),
(4, 2, 'Hari', 82, 83, 84, 249, 'A+'),
(4, 3, 'Shankar', 21, 65, 87, 173, 'Held'),
(4, 4, 'Anindo', 12, 0, 0, 12, 'Failed'),
(4, 5, 'Haldar', 100, 100, 100, 300, 'A+'),
(4, 6, 'Uruba', 55, 22, 0, 77, 'Held'),
(4, 7, 'Tonu', 99, 98, 89, 286, 'A+'),
(5, 1, 'Mahmudul', 100, 100, 100, 300, 'A+'),
(5, 2, 'Aarpo', 76, 89, 55, 220, 'A'),
(5, 3, 'Sadman', 78, 22, 67, 167, 'Held'),
(5, 4, 'Adib', 50, 60, 70, 180, 'B'),
(5, 5, 'Khan', 0, 0, 0, 0, 'Failed'),
(5, 6, 'Adib', 50, 60, 70, 180, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sn` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sn`, `class`, `id`, `pass`) VALUES
(27, 1, 2, 'rteas'),
(28, 1, 3, 'fgh'),
(29, 1, 4, 'sdgd'),
(30, 1, 5, 'rgdgf'),
(31, 1, 6, 'wrws'),
(32, 1, 7, 'bsdb'),
(39, 1, 8, 'wrws'),
(44, 1, 9, 'xdffs'),
(45, 1, 10, 'erye'),
(47, 2, 1, 'fdsas'),
(49, 2, 3, 'dtasd'),
(50, 2, 4, 'ytsr'),
(51, 2, 5, 'sdg'),
(52, 2, 6, 'hfdhd'),
(53, 2, 7, 'rysh'),
(54, 2, 8, 'hdsh'),
(55, 2, 9, 'hdsh'),
(56, 3, 1, 'dfh'),
(57, 1, 1, 'asfsdg'),
(60, 3, 2, 'gfds'),
(64, 3, 3, 'dfsg'),
(65, 3, 4, 'dfghdf'),
(66, 3, 5, 'hfcfb'),
(67, 4, 1, 'rdgdgh'),
(68, 4, 2, 'sdfg'),
(69, 4, 3, 'xdfg'),
(70, 4, 4, 'fdsz'),
(71, 4, 5, 'ghdfh'),
(72, 5, 1, 'fsfasf'),
(73, 5, 2, 'sfdfxdgf'),
(74, 5, 3, 'anika'),
(77, 5, 5, 'dgsdg'),
(78, 5, 4, 'dgs'),
(81, 1, 11, 'asf'),
(82, 5, 6, 'rdtesr'),
(83, 3, 6, 'cgasd'),
(84, 4, 6, 'dfbdzfhb'),
(85, 3, 7, 'fgd'),
(86, 4, 7, 'saad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Class`,`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sn`),
  ADD KEY `class` (`class`,`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`class`,`id`) REFERENCES `result` (`Class`, `ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
