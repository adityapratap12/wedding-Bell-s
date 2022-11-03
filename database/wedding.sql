-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 11:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$LyCkv5XtLHP45/G9AB9L7uRWbmlvCyVPqUXOM589/exdBmuF/7rDa');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `ddate` date NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `lastname`, `email`, `phone`, `category`, `ddate`, `message`) VALUES
(16, 'Ram', 'Kumar', 'ram@gmail.com', '123', 'Write Your Message', '2022-04-01', 'Couple'),
(17, 'Ram', 'Kumar', 'ram@gmail.com', '123', 'Write Your Message', '2022-04-01', 'Couple');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`) VALUES
(15, 'Marriage Ceremony');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `veneu` varchar(100) NOT NULL,
  `catering` varchar(100) NOT NULL,
  `decoration` varchar(200) NOT NULL,
  `photographer` varchar(100) NOT NULL,
  `sum` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `pid`, `veneu`, `catering`, `decoration`, `photographer`, `sum`) VALUES
(10, '10', '21', '29', '31', '23', 1850000);

-- --------------------------------------------------------

--
-- Table structure for table `package_category`
--

CREATE TABLE `package_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_category`
--

INSERT INTO `package_category` (`id`, `title`, `des`, `image`) VALUES
(10, 'Marriage Ceremony', 'Marriage Ceremony Marriage Ceremony Marriage Ceremony', 'http://localhost/WEDDING/News_Uploads/8d979cd009e0d3a16f5bf780c7f6430a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` bigint(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pid` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `image`, `pid`, `title`, `des`) VALUES
(30, 'http://localhost/WEDDING/Photo_Uploads/2ee6507bc3306e58993b189ac23f49e7.jpg', 15, 'Marriage Ceremony', 'Hello Hello Hello');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `occ` varchar(100) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `pid` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `des` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bamount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `pid`, `title`, `des`, `address`, `bamount`) VALUES
(20, 'http://localhost/WEDDING/Photo_Uploads/ff485386bf492ca633a623bf40f16df7.jpg', '13', 'Gokul Marriage Hall', 'Gokul Marriage Hall is the Best Marriage Hall', 'Mumbai', '175000'),
(21, 'http://localhost/WEDDING/Photo_Uploads/4f815945acc5c03ffd90db7f244ee92b.jpg', '13', 'Phulwari Marriage House', 'Phulwari Marriage House is the Best Marriage Hall', 'Delhi', '144000'),
(23, 'http://localhost/WEDDING/Photo_Uploads/4cbb5dfc1a34c7ee463d441877718905.jpg', '14', 'Rahul Photolgrapher', 'Rahul Photolgrapher Rahul Photolgrapher', 'Vadodara', '1550000'),
(24, 'http://localhost/WEDDING/Photo_Uploads/1fe9bd97df68eeb561703787dbcb59e8.jpg', '14', 'Rohan Photographer', 'Rohan Photographer Rohan Photographer', 'Ghaziabad', '144000'),
(25, 'http://localhost/WEDDING/Photo_Uploads/d7b3b9e1f4269989aa8416894b0933c4.jpg', '15', 'Mohan Wedding Car', 'Mohan Wedding Car Mohan Wedding Car', 'Kanpur', '12000'),
(26, 'http://localhost/WEDDING/Photo_Uploads/cf89c5d2d8b4daf3e10ac430d29e0b15.jpg', '15', 'Sonu Wedding Car', 'Sonu Wedding Car Sonu Wedding Car', 'Surat', '12000'),
(27, 'http://localhost/WEDDING/Photo_Uploads/bc8648389d1cce9ebc9cb7d4feccadb9.jpg', '16', 'Remo Dj Music', 'Remo Dj Music Remo Dj Music', 'Lucknow', '175000'),
(28, 'http://localhost/WEDDING/Photo_Uploads/081572b0dafeba76e9e9ed29710b7d22.jpg', '16', 'Priya Dj Music', 'Priya Dj Music Priya Dj Music', 'Bangalore', '12000'),
(29, 'http://localhost/WEDDING/Photo_Uploads/b40404b5ba1ed758010531ca27833820.jpg', '17', 'Rahul Catering', 'Rahul Catering Rahul Catering', 'Visakhapatnam', '12000'),
(30, 'http://localhost/WEDDING/Photo_Uploads/133e805bd7a342b9c92110c6534606c0.jpg', '17', 'Pinku Catering', 'Pinku Catering Pinku Catering', 'Jaipur', '175000'),
(31, 'http://localhost/WEDDING/Photo_Uploads/28cb0774e59b1375a6cb7db61a0b9adc.jpg', '18', 'Ram Decorations', 'Ram Decorations Ram Decorations', 'Pune', '144000'),
(32, 'http://localhost/WEDDING/Photo_Uploads/86389999986aa4a5463c222c96823b55.jpg', '18', 'Ramu Decorations', 'Ramu Decorations Ramu Decorations', 'Delhi', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `service_category`
--

CREATE TABLE `service_category` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_category`
--

INSERT INTO `service_category` (`id`, `title`) VALUES
(13, 'Venue'),
(14, 'Photographer'),
(15, 'Wedding Car'),
(16, 'Dj Music'),
(17, 'Catering'),
(18, 'Decorations');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `url`) VALUES
(6, 'Marriage Ceremony', 'EBv48eIcwiQ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_category`
--
ALTER TABLE `package_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_category`
--
ALTER TABLE `service_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `package_category`
--
ALTER TABLE `package_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `service_category`
--
ALTER TABLE `service_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
