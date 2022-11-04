-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 06:37 PM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `natinal` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `course` varchar(255) NOT NULL,
  `addcomment` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `submitdate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `fname`, `lname`, `bday`, `natinal`, `address`, `city`, `state`, `email`, `phone`, `course`, `addcomment`, `gender`, `img`, `submitdate`) VALUES
(31, 'Atikur', 'Rahman', '2022-11-04', 'Bangladeshi', 'South Pirerbag Amtola', 'Dhaka', 'Mirpur', 'nirjon570@gmail.com', '01533134445', 'Computer Engineering', 'I want to addmit your college', 'Male', 'my-passport-photo.jpg', '2022-11-04 23:05:15'),
(32, 'Ashiqur', 'Rahman', '2022-10-05', 'Bangladeshi', 'South Pirerbag Amtola', 'Dhaka', 'Mirpur', 'arniloy6@gmail.com', '01671343660', 'Computer Engineering', 'I want to addmit your college', 'Male', 'dsf.jpg', '2022-11-04 23:06:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
