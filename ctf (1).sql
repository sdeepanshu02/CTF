-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2017 at 03:28 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctf`
--

-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE `que` (
  `q_no` int(11) NOT NULL,
  `q_url` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `que`
--

INSERT INTO `que` (`q_no`, `q_url`, `ans`) VALUES
(1, 'el99HIjl.jpg', 'robowars'),
(2, 'SCVSteCl.jpg', 'mafia'),
(3, 'UvSgSkfl.jpg', 'bullsandbears'),
(4, 'ntLFzhe.jpg', 'surat'),
(5, 'YaRsmVW.jpg', 'apttusindia'),
(6, 'GyAivHy.jpg', 'nehakakkar'),
(7, 'IdOKYLF.jpg', 'minetrack'),
(8, 'j8pkaoC.jpg', 'supersonic'),
(9, 'kNnXr0C.png', 'sparshnitsurat'),
(10, 'kKc4ITe.jpg', 'rajpatil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `curr_que` int(11) NOT NULL DEFAULT '1',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `last_correct` varchar(50) NOT NULL DEFAULT 'no_correct'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`, `curr_que`, `attempts`, `last_correct`) VALUES
('deep', 'deep@gmail.com', '1234', 1, 0, 'no_correct'),
('tan', 'tanishqq.khatri@gmail.com', '123', 1, 0, 'no_correct'),
('ded', 'ded@gmail.com', '123', 6, 5, '2017-02-12 07:57:23am');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
