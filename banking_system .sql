-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2021 at 02:22 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `amount`) VALUES
('Brajesh', 'Ayush', 1000),
('Shreya', 'Brajesh', 1000),
('Brajesh', 'Ayush', 1000),
('Brajesh', 'Ayush', 1000),
('Brajesh', 'Ayush', 1),
('Ayush', 'Brajesh', 10000),
('Brajesh', 'Ayush', 1000),
('Amrita', 'Brajesh', 1000),
('Brajesh', 'Priya', 1000),
('Brajesh', 'Ayush', 1000),
('Brajesh', 'Ayush', 1000),
('Brajesh', 'Ayush', 1000),
('Brajesh', 'Lucky', 1000),
('Brajesh', 'Ayush', 100),
('Amrita', 'Brajesh', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `current_balance` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `current_balance`) VALUES
('Brajesh', 'Brajesh@gmail.com', 314699),
('Ayush', 'Ayush@gmail.com', 16301),
('Shreya', 'Shreya@gmail.com', 39000),
('Lucky', 'Lucky@gmail.com', 51000),
('Priya', 'Priya@gmail.com', 31000),
('Amrita', 'Amrita@gmail.com', 399000),
('abhishek', 'abhishek@gmail.com', 19000),
('divya', 'divya@gmail.com', 10000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
