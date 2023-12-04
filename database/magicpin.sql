-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 07:12 AM
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
-- Database: `magicpin`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `fname`, `lname`, `address`, `gender`, `email`, `password`, `cpassword`) VALUES
(1, 'pradeep', 'davara', '79,dipmala society.', '', 'davarapradeep@gmail.com', '$2y$10$lIchWT4KLRrezFLtZngq1elF0UXiIC1KWDxbA1WKwwboUV/lQsixy', '$2y$10$CspH9U2fBqs9cRXOVz4/bOGldPT64R2QNWIzBDbbdtCzekj4W6dXS'),
(2, 'davara', 'pradeep', 'dipmala', '', 'pradeep@gmail.com', '$2y$10$MAenTWA51WJQrdGkdll23eUvvXK7F7wXncdiEs3twCoTNTgC.XHDi', '$2y$10$tSGQP9kbtlpmQqz94Bof.OcZfM3Asf17qpEnEagYSTC3ZjZ3YQUAu'),
(3, 'pradeep', 'davara', '79,dipmala society.', '', 'davarapradeep1@gmail.com', '$2y$10$vum3SAFHY3tZJqjnX2Rys.nwVMT80/qKJF1KO0dTuHSmXIG/V0OpO', '$2y$10$PXo.dWrpQWMSHF0uI7Dq5.OiBX6CFZ1Sm/WDP.d9Jc7kzQV9o33um'),
(4, 'prince', 'desai', 'xyz', '', 'sfdsf@gmail.com', '$2y$10$xpU4Rrf2jcV9O9yGXPxZxeqCe.4hFE.XX3hm6guJsPgS1g8MQj/U6', '$2y$10$OKBTdgw827EXbxURX5xwSeQv86l4.LnM8VnZVKGFdK/j6DCndUb6e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
