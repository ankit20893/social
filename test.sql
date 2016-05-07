-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 01:27 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `profilePic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `password`, `mobile`, `address`, `gender`, `email`, `profilePic`) VALUES
(1, 'ankit', 'singh', 'gfhdgh', '56', 'hgkgh', 'male', 'hfgdj@d.v', ''),
(13, 'pranjali', 'hjvhbj', 'asdfghj', '2147483647', 'kjfdskhgdkj', 'male', 'pranjali@gmail.com', ''),
(15, 'ankit', 'singh', 'ankitsingh', '8802166479', 'kanpur', 'male', 'ankit@gmail.com', ''),
(19, 'vahid', 'ansari', 'vahid', '1234567890', 'gorakhpur', 'male', 'vahid@gmail.com', ''),
(24, 'vaibhav', 'mishra1', 'vaibhav', '1234567899', 'varanasi', 'male', 'vaibhav@gmail.com', ''),
(25, 'ankit', 'singhvcv', '', '123', 'kanpur', 'male', '', ''),
(28, 'ayush', 'bansal', '66049c07d9e8546699fe0872fd32d8f6', '9045180117', 'mathura', 'male', 'ayush@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
