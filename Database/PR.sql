-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 10:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PR`
--

-- --------------------------------------------------------

--
-- Table structure for table `BOOKS`
--

CREATE TABLE `BOOKS` (
  `id` int(11) NOT NULL,
  `BOOK_ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `COURSE` varchar(50) NOT NULL,
  `AUTHOR_NAME` varchar(50) NOT NULL,
  `PUBLISHER` varchar(50) NOT NULL,
  `COPIES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `BOOKS`
--

INSERT INTO `BOOKS` (`id`, `BOOK_ID`, `TITLE`, `COURSE`, `AUTHOR_NAME`, `PUBLISHER`, `COPIES`) VALUES
(9, 0, 'CHRIS1', 'CHRIS2', '', 'CHRIS4', 200),
(10, 2, '', 'CHRIS2', '', 'CHRIS4', 20),
(11, 23, '', 'CHRIS2', '', 'CHRIS4', 20),
(12, 0, '', 'CHRIS2', '', 'CHRIS4', 1),
(13, 9, 'MACHINE', 'PW', 'POLO', 'MORAN', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ISSUE`
--

CREATE TABLE `ISSUE` (
  `BOOK_ID` int(11) NOT NULL,
  `TITLE` varchar(50) NOT NULL,
  `libid` int(11) NOT NULL,
  `ISSUE_DATE` date NOT NULL,
  `RETURN_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ISSUE`
--

INSERT INTO `ISSUE` (`BOOK_ID`, `TITLE`, `libid`, `ISSUE_DATE`, `RETURN_DATE`) VALUES
(0, 'TITLE', 0, '0000-00-00', '0000-00-00'),
(0, 'TITLE', 0, '0000-00-00', '0000-00-00'),
(55, 'AA', 222, '2022-01-01', '2022-01-01'),
(55, 'AA', 222, '2222-04-09', '2222-04-09'),
(55, 'BB', 222, '2222-04-09', '2222-04-09'),
(3333, 'COMP SCIENCE', 654, '2222-04-10', '2222-04-18'),
(456, 'ANTO1', 2343, '2222-04-24', '2222-04-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `libid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `name`, `libid`, `email`, `pwd`) VALUES
(1, 'Munene', 222, 'weda@gmail.com', '123'),
(2, 'Munene', 111, 'peter@gmail.com', '234'),
(3, 'John Munene gggg', 111, 'john555555@gmail.com', '345'),
(4, 'Munene', 111, 'johnTT@gmail.com', '234'),
(5, 'Munene', 5566, 'john78@gmail.com', '123'),
(7, 'jab', 2002, 'jab@gmail.com', 'qwe'),
(8, 't', 12, 't@gmail.com', '345'),
(9, 'BRIAN ', 1001, 'brian12@gmail.com', 'brian123'),
(10, 'MULANDI CECILIA', 8, 'cecilia@gmail.com', '123'),
(11, 'kofi', 654, 'kofi@gmail.com', '123'),
(12, 'AnnaMaria Kerubo', 2343, 'irrizannamaria@gmail.com', 'IAmAwesome!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BOOKS`
--
ALTER TABLE `BOOKS`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BOOKS`
--
ALTER TABLE `BOOKS`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
