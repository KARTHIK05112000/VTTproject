-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 05:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `logd`
--

CREATE TABLE `logd` (
  `email` varchar(330) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `confirm password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logd`
--

INSERT INTO `logd` (`email`, `username`, `password`, `confirm password`) VALUES
('arun@gmail.com', 'arun', 'ert', 'ert'),
('dinesh@gmail.com', 'dinesh', '12345', '12345'),
('Hffhvhh@gmail.com', 'shjsg', '12345', '12345'),
('iloveyou@gmail.com', 's.k', '2104', '2104'),
('imran@gmail.com', 'imran', 'imran', 'imran'),
('karthik25325@gmail.com', 'karthik', '1234', '1234'),
('karthik@gmail.com', 'karthik05', '12345', '12345'),
('kkkk@jk.com', 'kkk', '098', '098'),
('test@demo.com', 'karthik', '789', '789');

-- --------------------------------------------------------

--
-- Table structure for table `userc`
--

CREATE TABLE `userc` (
  `username` varchar(30) NOT NULL,
  `usercommand` varchar(5000) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userc`
--

INSERT INTO `userc` (`username`, `usercommand`, `email`) VALUES
('imran', 'hi bro', 'imran@gmail.com'),
('karthik', '<h1>good</h1> is used for\r\nany think', 'karthik@gmail.com'),
('karthik', '<html>', 'Hffhvhh@gmail.com'),
('karthik', '<html>', 'Hffhvhh@gmail.com'),
('karthik', 'xjbjssssssssssssss\r\nskknksknsk\r\nnjjdbjdb', 'imran@gmail.com'),
('', '', ''),
('', '', ''),
('', '', ''),
('pugal', 'I want MySQL tutorial please upload earlier please do it.\r\nand then your video is awesome, it easy to understand coding \r\nlogics and tricks,keep it up 😁😁😁😁😁😁❤', 'pugal@gmail.com'),
('pugal', 'I want MySQL tutorial please upload earlier please do it.\r\nand then your video is awesome, it easy to understand coding \r\nlogics and tricks,keep it up 😁😁😁😁😁😁❤', 'pugal@gmail.com'),
('pugal', 'I want MySQL tutorial please upload earlier please do it.\r\nand then your video is awesome, it easy to understand coding \r\nlogics and tricks,keep it up 😁😁😁😁😁😁❤', 'pugal@gmail.com'),
('karthik', 'nice video', 'imran@gmail.com'),
('karthik', 'nice bro', 'karthik@gmail.com'),
('karthik', 'nubvfbbfffffffffdddddddddddddddddddddddddddddddddddddddddddd\r\nddddddddddddddddddddddddddddddddddddddddddddddd', 'Hffhvhh@gmail.com'),
('karthik', ' nice tutorial,keep it up.\r\n in html,why should we use h1 tag?', 'karthik@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logd`
--
ALTER TABLE `logd`
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
