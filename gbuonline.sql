-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 02, 2015 at 10:42 AM
-- Server version: 10.0.20-MariaDB-log
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gbuonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `roll_number` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `roll_number`, `title`, `description`, `status`) VALUES
(1, '13ics020', 'asdasd', 'asdasd', 0),
(2, '232323', 'This One is Approved', '', 1),
(3, '12121', 'This one is rejected', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE IF NOT EXISTS `blog_comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_likes`
--

CREATE TABLE IF NOT EXISTS `blog_likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='which user liked which blog';

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `article_name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article` text NOT NULL,
  `publishing_date` date NOT NULL,
  `short_desc` text NOT NULL,
  `image_path` text NOT NULL,
  `school` varchar(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `article_name`, `user_id`, `article`, `publishing_date`, `short_desc`, `image_path`, `school`) VALUES
(5, 'New Event', 1, 'hello world<br>', '2015-06-30', 'Short Description<br><br>', 'resources/user_uploads/ichiruki-bleach-pairings-33886487-1920-1200.png', 'sovas'),
(6, 'Abhivyanjana 2016', 6, 'Enter detailed event description', '2015-07-01', ' Example<br /><b>Date:</b> 28 - 01 - 2015 <br><b>Time:</b> 18:30 - 20:00<br/><b>Venue:</b> SOICT', 'resources/user_uploads/1280_800.jpg', 'soict'),
(7, 'Ecocart 2015', 6, 'Enter detailed event description', '2015-07-01', ' Example<br /><b>Date:</b> 28 - 01 - 2015 <br><b>Time:</b> 18:30 - 20:00<br/><b>Venue:</b> SOICT', 'resources/user_uploads/1280_800.jpg', 'soict');

-- --------------------------------------------------------

--
-- Table structure for table `h_complaint`
--

CREATE TABLE IF NOT EXISTS `h_complaint` (
  `roll_number` varchar(60) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h_notice`
--

CREATE TABLE IF NOT EXISTS `h_notice` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(60) NOT NULL,
  `issuing_authority` varchar(60) NOT NULL,
  `concerned_hostel` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_notice`
--

INSERT INTO `h_notice` (`id`, `date`, `title`, `issuing_authority`, `concerned_hostel`) VALUES
(1, '2015-01-03', 'List of holidays', 'Admin', 'All');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL,
  `sc_name` varchar(10) NOT NULL,
  `sc_full_name` varchar(70) NOT NULL,
  `about_us` text NOT NULL,
  `course_structure` text NOT NULL,
  `faculty` text NOT NULL,
  `placements` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `sc_name`, `sc_full_name`, `about_us`, `course_structure`, `faculty`, `placements`) VALUES
(12, 'soict', 'School Of Information and Communication  Technology', 'hmmmm', 'mmmm', 'mmm', 'mmm'),
(13, 'sovas', 'School Of Vocational And Applied Sciences', 'oo', 'oo', 'ooooo', 'oo'),
(15, 'sobt', 'School of Biotechnology', '', '', '', ''),
(16, 'soe', ' School of Engineering', '', '', '', ''),
(17, 'som', ' School of Management', '', '', '', ''),
(18, 'solj', ' School of Law, Justice and Governance', '', '', '', ''),
(19, 'sobsc', ' School of Buddhist Studies And Civilization ', '', '', '', ''),
(20, 'sohss', ' School of Humanities and Social Sciences', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events`
--

CREATE TABLE IF NOT EXISTS `upcoming_events` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upcoming_events`
--

INSERT INTO `upcoming_events` (`id`, `event_id`) VALUES
(1, 6),
(2, 6),
(3, 7),
(4, -1),
(5, -1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profile_picture` varchar(50) NOT NULL,
  `full_name` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `type`, `email`, `profile_picture`, `full_name`) VALUES
(1, 'varun', '$2a$08$aHFY8jNP/liqnhKM7a70tOT/UhznZEjxiYhrZO3BCqfC8Qzrn435.', 'admin', 'varun.10@live.com', '', 'Varun Garg'),
(2, 'user1', '$2a$08$s6oK1VBeGbaNGCdsGKg.sOVq9Lu4BgX1boTZOdXhA1dw8o.RVSG.C', 'user', 'anime.life@hotmail.com', '', ''),
(3, 'sarthak', '$2a$08$IvYcXuhBaZHTeHY4VG0iiuJmyCd1xO4N4v/6e24wbOUIeNmpvBevq', 'admin', 'gargsarthak30@gmail.com', '', 'Sarthak Garg'),
(5, 'rajat', '$2a$08$89gL0PX4Ewl0/9RbfqBuOO6Jbp.ETHXsk.rDNtzKUkDcFe3SwBKaC', 'admin', 'sunny0rajat@gmail.com', '', 'Rajat Saxena'),
(6, 'shobhit', '$2a$08$c4/t9EJ0rkX7jur.sbhtJ.JA0hEBVC4Md5qk0AH7MBaYZb3WYKQhS', 'admin', 'shobhit95sharma@gmail.com', '', 'Shobhit Sharma'),
(7, 'bhawesh', '$2a$08$QghHh95c4h3GLrBFYN/9xuUrjeY/7xGc88hNv0rldS9wNOQxIJX.C', 'admin', '13ics015@gbu.ac.in', '', 'Bhawesh Chandola'),
(8, 'student1', '$2a$08$YjytProg8gi0nweS2f7cI.b8Dh2ZR4keLzSFXuFNCVAFWlQ3V1nca', 'student', 'sasa', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vnb`
--

CREATE TABLE IF NOT EXISTS `vnb` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `info` text NOT NULL,
  `submitted_by` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vnb`
--

INSERT INTO `vnb` (`id`, `title`, `info`, `submitted_by`) VALUES
(1, 'Bar Council of India Approval Letter', 'asdasdasdasdasdasdasdasda', 'xyz'),
(2, 'Fellowship for Gate qualified students', 'wqeqweqweqweqw', 'xyz1');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE IF NOT EXISTS `warden` (
  `id` int(11) NOT NULL,
  `hostel_name` varchar(60) NOT NULL,
  `warden_name` varchar(60) NOT NULL,
  `warden_office` varchar(60) NOT NULL,
  `hostel_contact` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`id`, `hostel_name`, `warden_name`, `warden_office`, `hostel_contact`) VALUES
(1, 'GURU GHASI DAS BOYS HOSTEL', 'DR. SATISH KUMAR MITTAL', '6146', 0),
(2, 'SHRI NARAYAN GURU BOYS HOSTEL', 'DR. ANUJ KUMAR', '4356', NULL),
(4, 'BIRSA MUNDA BOYS HOSTEL', 'DR. VIVEK KUMAR MISHRA', '7009', NULL),
(5, 'SANT KABIR DAS BOYS HOSTEL', 'DR. MUKESH VERMA', 'UNKNOWN', NULL),
(6, 'SANT RAVI DAS BOYS HOSTEL', 'DR. SHARADINDU PANDEY', '6157', NULL),
(7, 'SHRI CHATRAPATI SAHUJI MAHARAJ BOYS HOSTEL', 'DR. OMBIR SINGH', 'UNKNOWN', NULL),
(8, 'TULSIDAS BOYS HOSTEL', 'DR. RAKESH KUMAR SRIVASTAVA', '6159', NULL),
(9, 'RAHEEM BOYS HOSTEL', 'DR. RAJESH GUPTA', '4364', NULL),
(10, 'MALIK MOHD. JAYSI BOYS HOSTEL', 'DR. GURMET DORJAY', '7058', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vnb`
--
ALTER TABLE `vnb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog_likes`
--
ALTER TABLE `blog_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `upcoming_events`
--
ALTER TABLE `upcoming_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `vnb`
--
ALTER TABLE `vnb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `warden`
--
ALTER TABLE `warden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
