-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 08:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seriousgame`
--

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `ID` int(11) NOT NULL,
  `Naam` varchar(20) NOT NULL,
  `Last` varchar(20) NOT NULL,
  `Pass` varchar(256) NOT NULL,
  `gebruikerType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`ID`, `Naam`, `Last`, `Pass`, `gebruikerType`) VALUES
(1, 'Melis', 'Gol', 'dollie', 1),
(2, 'Shaniqua', 'Jordan', 'okdan', 2),
(3, 'meli', 'jaja', '12345', 0),
(9, 'meliis', 'lasjk', '$2y$10$B6R', 1),
(10, 'melmel', 'melmelmel', '$2y$10$X4V', 1),
(11, 'joa', 'boi', '$2y$10$ApL', 1),
(12, 'tis', 'jeboy', '$2y$10$1dxUZa01PaOhjaiXgimnmuxJQm2s4I6u7EP2tybT5FYDiBt5lqOQK', 1),
(13, 'chim', 'joa', '$2y$10$4y11x.xEjDLsJ2BxDT/9Xuk/PrvxnjWylpakOIqkolUXdauPRsn4y', 1),
(14, 'meus', 'mels', '$2y$10$QrhgETQ4rDv5tDhZGsJPQeNbqfy2dSHAG.E/SRoc7Z8bi1AqDqXjy', 2),
(15, 'bliep', 'blap', '$2y$10$rQKRbqToNQVkA/iteIkiTuaVDFTzhCte3PoqmijDjbsKLtXLWvV.K', 1),
(16, 'GareMannie', 'PuntNL', '$2y$10$pXmtue.h7ChfolnZCnR6Z.fxW6xFRnUEUFafjvukfyf0hcsgo5NNa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `studentNaam` (`Naam`),
  ADD UNIQUE KEY `studentLast` (`Last`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
