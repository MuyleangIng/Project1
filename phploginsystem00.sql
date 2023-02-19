-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2023 at 02:29 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phploginsystem00`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `usersId` int NOT NULL AUTO_INCREMENT,
  `usersName` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `usersEmail` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `usersUid` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `usersPwd` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`usersId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'den', 'den@sample.com', 'den', '$2y$10$/vWakNJrjZoZTWCwYQr2gObTj8IetkKIEvwnnrDyvJcDYSluKqU2u'),
(2, 'leang', 'leang@sample.com', 'leang', '$2y$10$6ad0hF8xH42yeLWf.20XguQgPOeJF.5QqybwodY4ribJhA9Ne3rou'),
(3, 'channa', 'channa@sample.com', 'channa', '$2y$10$fttw29zaelvLtoLh8fNIwOtAq5FMmXAV7mWUdR6Hn0xF/kem4JkQK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
