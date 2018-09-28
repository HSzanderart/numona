-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 10:39 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `numonashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` varchar(10) NOT NULL,
  `user_pass` varchar(20) NOT NULL,
  `user_title` varchar(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_last` varchar(50) NOT NULL,
  `user_sex` varchar(5) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_tel` varchar(10) NOT NULL,
  `user_add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `user_pass`, `user_title`, `user_name`, `user_last`, `user_sex`, `user_mail`, `user_tel`, `user_add`) VALUES
('zanderart', 'zanderart', 'นาย', 'ฮัสซาน', 'ซอหมัด', 'ชาย', 'zan_s37@hotmail.com', '0909233337', '14 ราษฎร์อุทิศ กรุงเทพฯ 10510 0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
