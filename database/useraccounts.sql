-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 05:52 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `useraccounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `homeaddress` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL,
  `accountype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstname`, `lastname`, `email`, `phonenumber`, `homeaddress`, `password`, `accountype`) VALUES
(1, 'Edgar', 'serica', 'edgardo.serica@yahoo.com', '25685796541', '15 rustic lane', '8a38231f964a73d71277eef0893f9fcb3700b8b5', 0),
(2, 'edgardo', 'serica', 'edgardo.serica@yahoo.com', '0226251607', '15 rustic lane', '7c222fb2927d828af22f592134e8932480637c0d', 0),
(3, 'Edgardo', 'Serica', 'edgardo.serica@gmail.com', '0226251607', '15 Rustic Lane', '12345678', 1),
(4, 'sahil', 'sharma', 'sahir.sharma@gmail.com', '23654789', 'home address', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 0),
(5, 'apple', 'serica', 'apple@mail.com', '65236589', '15 rustic lane', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(6, 'leane', 'serica', 'leane@gmail.com', '25698745', '15 rustic lane', '1234567', 0),
(7, 'jay', 'serica', 'serica@serica.com', '123456', '15 rustic lane', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 0),
(8, 'ivan', 'reynes', 'ivan.reynes@mail.com', '321654987', 'clarence st christchurch', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
