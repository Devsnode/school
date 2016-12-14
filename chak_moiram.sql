-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2016 at 06:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chak_moiram`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `uri_segment` varchar(255) NOT NULL,
  `has_sub_page` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `uri_segment`, `has_sub_page`) VALUES
(1, 'Home', 'home', NULL),
(2, 'About', 'about', 0),
(3, 'Officials', 'officials', 0),
(4, 'Academic', 'academic', 1),
(5, 'Results', 'results', 0),
(6, 'Gallery', 'gallery', NULL),
(7, 'Contact', '#contact_section', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `school_details`
--

CREATE TABLE `school_details` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `school_details`
--

INSERT INTO `school_details` (`id`, `school_name`, `address`, `phone`, `logo`) VALUES
(1, 'chakma', 'dfghdfgh', '1234', 'backblue2.gif');

-- --------------------------------------------------------

--
-- Table structure for table `single_page_contents`
--

CREATE TABLE `single_page_contents` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `contents` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `single_page_contents`
--

INSERT INTO `single_page_contents` (`id`, `page_id`, `contents`) VALUES
(1, 0, ''),
(2, 0, ''),
(15, 1, '<p>asdfghjklcvbn<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAIAAAADnC86AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDoxMjBBNDNCRTgxQjFFMzExQkI0NkM1NDEzNTdGQUNFMSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozODYyRDYyQjMzMDYxMUU2OTQ0REJCQzI0MUZEMTVDQyIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozODYyRDYyQTMzMDYxMUU2OTQ0REJCQzI0MUZEMTVDQyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkM3MUU3OTQ5NzcyOEU2MTE4Nzk1RjFENDk2RTMyNEUzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjEyMEE0M0JFODFCMUUzMTFCQjQ2QzU0MTM1N0ZBQ0UxIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+ZuDWIwAAARxJREFUeNpi3PbwZ+lpxlc/GOgGxDgYuk3/M2qv+UVPW+F2M9HfViAAWsrEMEBg1OJRi0ctHrWYHhbXqDPtc2UBklSxmIVIdfLsDHkmzECGjhjz4gf/Hv6ko4+//kaQlANG0SW/iPd0rAITVbxLQlADwXw7kGInOSan3X9mmDCrCTICuevv/AtUYRLnZvjym2HznX8tN/9R32IdMUY4G2grhAuMcoiIKAMoEXz8xTD5/j96ZCdglK+7+e/Kq/8QbowWE53y8ZobfzPO/E089AfCVRRgpJPFH8EJjYzkNlpk0g2QkJ3gSRcIbr2Hsh9++Y8pS+WSazSORy0etXjU4lGLB8piMY4BsFWUg4Gpy+S/KH3tluBk6Db5DxBgAM8MWVtxfXQCAAAAAElFTkSuQmCC" /></p>'),
(19, 2, '<p>ghjkl</p>'),
(20, 3, '<p>zxdfgyui</p>');

-- --------------------------------------------------------

--
-- Table structure for table `subpages`
--

CREATE TABLE `subpages` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `sub_page_name` varchar(255) DEFAULT NULL,
  `uri_segment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subpages`
--

INSERT INTO `subpages` (`id`, `page_id`, `sub_page_name`, `uri_segment`) VALUES
(1, 4, 'Student Info', 'student-info'),
(2, 4, 'Student Info', 'student-info'),
(3, 4, 'Student Info', 'student-info'),
(4, 4, 'Student Info', 'student-info');

-- --------------------------------------------------------

--
-- Table structure for table `subpage_contents`
--

CREATE TABLE `subpage_contents` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `contents` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_details`
--
ALTER TABLE `school_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_page_contents`
--
ALTER TABLE `single_page_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subpages`
--
ALTER TABLE `subpages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `subpage_contents`
--
ALTER TABLE `subpage_contents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `school_details`
--
ALTER TABLE `school_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `single_page_contents`
--
ALTER TABLE `single_page_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `subpages`
--
ALTER TABLE `subpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subpage_contents`
--
ALTER TABLE `subpage_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `subpages`
--
ALTER TABLE `subpages`
  ADD CONSTRAINT `subpages_ibfk_1` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
