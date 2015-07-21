-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2015 at 04:03 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gbuonline`
--
CREATE DATABASE IF NOT EXISTS `gbuonline` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gbuonline`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roll_number` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `roll_number`, `title`, `description`, `status`) VALUES
(1, '13ics020', 'asdasd', 'asdasd', 0),
(2, '232323', 'This One is Approved', '', 1),
(3, '12121', 'This one is rejected', '', 2),
(4, '', '', '', 0),
(5, '', '', '', 0),
(6, '', '', '', 0),
(7, '', 'pp', 'pp\r\n', 0),
(8, '', 'pp', 'ppp\r\npp\r\npp\r\npp', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_us` text NOT NULL,
  `faculty` text NOT NULL,
  `students` text NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `c_full_name` varchar(70) NOT NULL,
  `tagline` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `about_us`, `faculty`, `students`, `c_name`, `c_full_name`, `tagline`) VALUES
(1, '            Programming club at Gautam Buddha University is actively involved in all kinds of robotics activities. The club was tasted with the efforts of its faculty coordinator in 2012.            The club had its student coordinators. Today robotics is rapidly growing field as we continue to research, design and build new Intelligent robots. That serves various practical purposes, whether domestically, commercially or solitary. The Robotic club provides a platform to the students to share their views and opinion about the developments of robotic equipments. The endeavor is to develop the analytical and innovating skills among the students. The ultimate aim of robotic club is to develop the design, constitution operation and application of robots and computer systems for their control, sensory feedback and information processing.    ', '<b>Dr. Ela Kumar</b><br>Dean(I/C), School of ICT, Gautam Buddha University<br><br><b>Dr. Om Prakash Sangwan</b><br>School of ICT, Gautam Buddha Universit<br><br><b>Dr. Anurag Singh Bhagel</b><br><dl><dd>School of ICT, Gautam Buddha University</dd></dl>', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', 'programming', 'Programming Club', 'Discover Yourself...'),
(2, '            Robotics club at Gautam Buddha University is actively involved in all kinds of robotics activities. The club was tasted with the efforts of its faculty coordinator in 2012.            The club had its student coordinators. Today robotics is rapidly growing field as we continue to research, design and build new Intelligent robots. That serves various practical purposes, whether domestically, commercially or solitary. The Robotic club provides a platform to the students to share their views and opinion about the developments of robotic equipments. The endeavor is to develop the analytical and innovating skills among the students. The ultimate aim of robotic club is to develop the design, constitution operation and application of robots and computer systems for their control, sensory feedback and information processing.    ', '<b>Dr. Ela Kumar</b><br>Dean(I/C), School of ICT, Gautam Buddha University<br><br><b>Dr. Om Prakash Sangwan</b><br>School of ICT, Gautam Buddha Universit<br><br><b>Dr. Anurag Singh Bhagel</b><br><dl><dd>School of ICT, Gautam Buddha University</dd></dl>', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', 'robotics', ' Robotics Club', 'Discover Yourself...'),
(3, '            Debating club at Gautam Buddha University is actively involved in all kinds of robotics activities. The club was tasted with the efforts of its faculty coordinator in 2012.            The club had its student coordinators. Today robotics is rapidly growing field as we continue to research, design and build new Intelligent robots. That serves various practical purposes, whether domestically, commercially or solitary. The Robotic club provides a platform to the students to share their views and opinion about the developments of robotic equipments. The endeavor is to develop the analytical and innovating skills among the students. The ultimate aim of robotic club is to develop the design, constitution operation and application of robots and computer systems for their control, sensory feedback and information processing.    ', '<b>Dr. Ela Kumar</b><br>Dean(I/C), School of ICT, Gautam Buddha University<br><br><b>Dr. Om Prakash Sangwan</b><br>School of ICT, Gautam Buddha Universit<br><br><b>Dr. Anurag Singh Bhagel</b><br><dl><dd>School of ICT, Gautam Buddha University</dd></dl>', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', 'debating', 'Debating Club ', 'Discover Yourself...'),
(4, 'Art club at Gautam Buddha University is actively involved in all kinds of robotics activities. The club was tasted with the efforts of its faculty coordinator in 2012.            The club had its student coordinators. Today robotics is rapidly growing field as we continue to research, design and build new Intelligent robots. That serves various practical purposes, whether domestically, commercially or solitary. The Robotic club provides a platform to the students to share their views and opinion about the developments of robotic equipments. The endeavor is to develop the analytical and innovating skills among the students. The ultimate aim of robotic club is to develop the design, constitution operation and application of robots and computer systems for their control, sensory feedback and information processing.    ', '<b>Dr. Ela Kumar</b><br>Dean(I/C), School of ICT, Gautam Buddha University<br><br><b>Dr. Om Prakash Sangwan</b><br>School of ICT, Gautam Buddha Universit<br><br><b>Dr. Anurag Singh Bhagel</b><br><dl><dd>School of ICT, Gautam Buddha University</dd></dl>', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', 'art', 'Art Club', 'Discover Yourself...'),
(5, '            Social Service club at Gautam Buddha University is actively involved in all kinds of robotics activities. The club was tasted with the efforts of its faculty coordinator in 2012.            The club had its student coordinators. Today robotics is rapidly growing field as we continue to research, design and build new Intelligent robots. That serves various practical purposes, whether domestically, commercially or solitary. The Robotic club provides a platform to the students to share their views and opinion about the developments of robotic equipments. The endeavor is to develop the analytical and innovating skills among the students. The ultimate aim of robotic club is to develop the design, constitution operation and application of robots and computer systems for their control, sensory feedback and information processing.    ', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', 'ss', 'Social Service Club ', 'Discover Yourself...'),
(6, '            Dramatics club at Gautam Buddha University is actively involved in all kinds of robotics activities. The club was tasted with the efforts of its faculty coordinator in 2012.            The club had its student coordinators. Today robotics is rapidly growing field as we continue to research, design and build new Intelligent robots. That serves various practical purposes, whether domestically, commercially or solitary. The Robotic club provides a platform to the students to share their views and opinion about the developments of robotic equipments. The endeavor is to develop the analytical and innovating skills among the students. The ultimate aim of robotic club is to develop the design, constitution operation and application of robots and computer systems for their control, sensory feedback and information processing.', '<b>Dr. Ela Kumar</b><br>Dean(I/C), School of ICT, Gautam Buddha University<br><br><b>Dr. Om Prakash Sangwan</b><br>School of ICT, Gautam Buddha Universit<br><br><b>Dr. Anurag Singh Bhagel</b><br><dl><dd>School of ICT, Gautam Buddha University</dd></dl>', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', 'dramatics', 'Dramatics club', 'Discover Yourself...'),
(7, 'Adventure club at Gautam Buddha University is actively involved in all kinds of robotics activities. The club was tasted with the efforts of its faculty coordinator in 2012.            The club had its student coordinators. Today robotics is rapidly growing field as we continue to research, design and build new Intelligent robots. That serves various practical purposes, whether domestically, commercially or solitary. The Robotic club provides a platform to the students to share their views and opinion about the developments of robotic equipments. The endeavor is to develop the analytical and innovating skills among the students. The ultimate aim of robotic club is to develop the design, constitution operation and application of robots and computer systems for their control, sensory feedback and information processing.    ', '<b>Dr. Ela Kumar</b><br>Dean(I/C), School of ICT, Gautam Buddha University<br><br><b>Dr. Om Prakash Sangwan</b><br>School of ICT, Gautam Buddha Universit<br><br><b>Dr. Anurag Singh Bhagel</b><br><dl><dd>School of ICT, Gautam Buddha University</dd></dl>', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', 'adventure', 'Adventure Club', 'Discover Yourself...'),
(8, '            Literary club at Gautam Buddha University is actively involved in all kinds of robotics activities. The club was tasted with the efforts of its faculty coordinator in 2012.            The club had its student coordinators. Today robotics is rapidly growing field as we continue to research, design and build new Intelligent robots. That serves various practical purposes, whether domestically, commercially or solitary. The Robotic club provides a platform to the students to share their views and opinion about the developments of robotic equipments. The endeavor is to develop the analytical and innovating skills among the students. The ultimate aim of robotic club is to develop the design, constitution operation and application of robots and computer systems for their control, sensory feedback and information processing.    ', '<b>Dr. Ela Kumar</b><br>Dean(I/C), School of ICT, Gautam Buddha University<br><br><b>Dr. Om Prakash Sangwan</b><br>School of ICT, Gautam Buddha Universit<br><br><b>Dr. Anurag Singh Bhagel</b><br><dl><dd>School of ICT, Gautam Buddha University</dd></dl>', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', 'literary', 'Literary Club ', 'Discover Yourself...'),
(9, '            Protography club at Gautam Buddha University is actively involved in all kinds of robotics activities. The club was tasted with the efforts of its faculty coordinator in 2012.            The club had its student coordinators. Today robotics is rapidly growing field as we continue to research, design and build new Intelligent robots. That serves various practical purposes, whether domestically, commercially or solitary. The Robotic club provides a platform to the students to share their views and opinion about the developments of robotic equipments. The endeavor is to develop the analytical and innovating skills among the students. The ultimate aim of robotic club is to develop the design, constitution operation and application of robots and computer systems for their control, sensory feedback and information processing.    ', '<b>Dr. Ela Kumar</b><br>Dean(I/C), School of ICT, Gautam Buddha University<br><br><b>Dr. Om Prakash Sangwan</b><br>School of ICT, Gautam Buddha Universit<br><br><b>Dr. Anurag Singh Bhagel</b><br><dl><dd>School of ICT, Gautam Buddha University</dd></dl>', '<dl><dt>Lokesh Kumar Sharma                </dt><dd>Position - General Secretary</dd><dd>Reg. No. - 11/PIT/027</dd><br><dt>Umang Kant                </dt><dd>Position - Secretary</dd><dd>Reg. No. - 10/IEC/015</dd><br><dt>Prateek Khurana                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 11/PIT/046</dd><br><dt>Lokesh Kumar Sharma                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 12/IEC/009</dd><br><dt>Vandit Rastogi                </dt><dd>Position - Associate Member</dd><dd>Reg. No. - 13/IEC/054</dd></dl>', 'photography', 'Photography Club', 'Discover Yourself...');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE IF NOT EXISTS `ebooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_name` varchar(10) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_info` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='sc_name is short name, pick real name from schools' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article` text NOT NULL,
  `publishing_date` date NOT NULL,
  `short_desc` text NOT NULL,
  `image_path` text NOT NULL,
  `school` varchar(35) NOT NULL,
  `club` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `article_name`, `user_id`, `article`, `publishing_date`, `short_desc`, `image_path`, `school`, `club`, `type`) VALUES
(5, 'Code In GBU', 1, 'hello world<br>', '2015-06-30', 'Short Description<br><br>', 'resources/user_uploads/ichiruki-bleach-pairings-33886487-1920-1200.png', 'sovsas', '', ''),
(6, 'Abhivyanjana 2016', 6, 'Enter detailed event description', '2015-07-01', ' Example<br /><b>Date:</b> 28 - 01 - 2015 <br><b>Time:</b> 18:30 - 20:00<br/><b>Venue:</b> SOICT', 'resources/user_uploads/1280_800.jpg', 'soict', '%', 'competitio'),
(7, 'Ecocart 2015', 6, 'Ecocart is awesome<br>', '2015-07-01', ' Example<br><b>Date:</b> 28 - 01 - 2015 <br><b>Time:</b> 18:30 - 20:00<br><b>Venue:</b> SOICT', 'resources/user_uploads/1280_800.jpg', 'soict', '', ''),
(8, 'ppppp', 1, 'Enter detailed event description', '2015-07-17', ' Example<br /><b>Date:</b> 28 - 01 - 2015 <br><b>Time:</b> 18:30 - 20:00<br/><b>Venue:</b> SOICT', 'resources/user_uploads/1280_800.jpg', 'soict', 'programming', 'competitio');

-- --------------------------------------------------------

--
-- Table structure for table `h_complaint`
--

CREATE TABLE IF NOT EXISTS `h_complaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `complaint` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `h_list`
--

CREATE TABLE IF NOT EXISTS `h_list` (
  `hostel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hostel_name` text NOT NULL,
  PRIMARY KEY (`hostel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `h_notice`
--

CREATE TABLE IF NOT EXISTS `h_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `title` varchar(60) NOT NULL,
  `issuing_authority` varchar(60) NOT NULL,
  `concerned_hostel` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `h_notice`
--

INSERT INTO `h_notice` (`id`, `date`, `title`, `issuing_authority`, `concerned_hostel`) VALUES
(1, '2015-01-03', 'List of holidays', 'Admin', 'All');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`, `user_id`) VALUES
(1, 'This is title.', 'This_First_News', 'This is body text.', 0),
(2, 'Second Title', 'second_slug', 'Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello Hello .', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_name` varchar(10) NOT NULL,
  `sc_full_name` varchar(70) NOT NULL,
  `about_us` text NOT NULL,
  `course_structure` text NOT NULL,
  `faculty` text NOT NULL,
  `placements` text NOT NULL,
  `tagline` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `sc_name`, `sc_full_name`, `about_us`, `course_structure`, `faculty`, `placements`, `tagline`) VALUES
(12, 'soict', 'School Of Information and Communication  Technology', '<ul>\r\n<li>Department of Computer Science & Engineering</li>\r\n<li>Department of Electronics & Communication Engineering</li>\r\n</ul>\r\n\r\n', '<ul>\r\n<li>Integrated Dual Degree</li>\r\n<li>Post Graduate</li>\r\n<li>Doctrate</li>\r\n</ul>', '<b>    Dr. Ela Kumar</b><br>    Dean(I/C), School of ICT, Gautam Buddha University<br><p class="panel-body"><dl><dt>Dr. Om Prakash Sangwan                </dt><dd>School of ICT, Gautam Buddha University </dd><br><dt>Dr. Anurag Singh Bhagel                </dt><dd>School of ICT, Gautam Buddha University </dd></dl></p>', 'Placement Session will begin from 3rd December and will continue till 28th June.', 'abcedf'),
(13, 'sovsas', 'School Of Vocational Studies And Applied Sciences', '<ul>\r\n<li>Department of Applied Mathematics</li>\r\n<li>Department of Applied Physics</li>\r\n<li>Department of Applied Chemistry</li>\r\n<li>Department of Environmental Sciences</li>\r\n<li>Department of Vocational Studies</li>\r\n<li>Department of Food Processing & Technology</li>\r\n</ul>\r\n\r\n', '<ul><li> Integrated Dual Degree</li><li> Post Graduate</li><li> Doctrate</li></ul>', '<dl><dt>Dr. Ela Kumar                </dt><dd>Dean(I/C), School of ICT, Gautam Buddha University </dd><br><dt>Dr. Om Prakash Sangwan                </dt><dd>School of ICT, Gautam Buddha University </dd><br><dt>Dr. Anurag Singh Bhagel                </dt><dd>School of ICT, Gautam Buddha University </dd></dl>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(15, 'sobt', 'School of Biotechnology', '<ul>\r\n<li>Department of Biotechnology</li>\r\n</ul>\r\n\r\n', '<ul><li>&nbsp;Integrated Dual Degree</li><li>&nbsp;Post Graduate</li><li>Doctrate</li></ul>', '<dl><dt>Dr. Ela Kumar                </dt><dd>Dean(I/C), School of ICT, Gautam Buddha University </dd><br><dt>Dr. Om Prakash Sangwan                </dt><dd>School of ICT, Gautam Buddha University </dd><br><dt>Dr. Anurag Singh Bhagel                </dt><dd>School of ICT, Gautam Buddha University </dd></dl>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(16, 'soe', ' School of Engineering', '<ul>\r\n<li>Department of Civil Engineering</li>\r\n<li>Department of Electrical Engineering</li>\r\n<li>Department of Mechanical Engineering</li>\r\n<li>Department of Architecture & Regional Planning</li>\r\n</ul>\r\n\r\n', '<ul><li>&nbsp;Integrated Dual Degree</li><li>&nbsp;Post Graduate</li><li>&nbsp;Doctrate</li></ul>', '<dl><dt>Dr. Ela Kumar                </dt><dd>Dean(I/C), School of ICT, Gautam Buddha University </dd><br><dt>Dr. Om Prakash Sangwan                </dt><dd>School of ICT, Gautam Buddha University </dd><br><dt>Dr. Anurag Singh Bhagel                </dt><dd>School of ICT, Gautam Buddha University </dd></dl>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(17, 'som', ' School of Management', '<ul>\r\n<li>Department of Bussiness Management</li>\r\n</ul>\r\n\r\n', '<ul><li>&nbsp;Integrated Dual Degree</li><li>&nbsp;Post Graduate</li><li>&nbsp;Doctrate</li></ul>', '<dl><dt>Dr. Ela Kumar                </dt><dd>Dean(I/C), School of ICT, Gautam Buddha University </dd><br><dt>Dr. Om Prakash Sangwan                </dt><dd>School of ICT, Gautam Buddha University </dd><br><dt>Dr. Anurag Singh Bhagel                </dt><dd>School of ICT, Gautam Buddha University </dd></dl>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(18, 'soljg', ' School of Law, Justice and Governance', '', '<ul><li>&nbsp;Integrated Dual Degree</li><li>&nbsp;Post Graduate</li><li>&nbsp;Doctrate</li></ul>', '<dl><dt>Dr. Ela Kumar                </dt><dd>Dean(I/C), School of ICT, Gautam Buddha University </dd><br><dt>Dr. Om Prakash Sangwan                </dt><dd>School of ICT, Gautam Buddha University </dd><br><dt>Dr. Anurag Singh Bhagel                </dt><dd>School of ICT, Gautam Buddha University </dd></dl>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(19, 'sobsc', ' School of Buddhist Studies And Civilization ', '', '<ul><li>&nbsp;Integrated Dual Degree</li><li>&nbsp;Post Graduate</li><li>&nbsp;Doctrate</li></ul>', '<dl><dt>Dr. Ela Kumar                </dt><dd>Dean(I/C), School of ICT, Gautam Buddha University </dd><br><dt>Dr. Om Prakash Sangwan                </dt><dd>School of ICT, Gautam Buddha University </dd><br><dt>Dr. Anurag Singh Bhagel                </dt><dd>School of ICT, Gautam Buddha University </dd></dl>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(20, 'sohss', ' School of Humanities and Social Sciences', '<ol>\n<li>Humanities</li>\n<ul type="disc">\n<li>Department of English and Modern European Languages</li>\n<li>Department of Indian Languages and Literature</li>\n<li>Department of Mass Communication and Media Studies</li>\n</ul><br>\n<li>Social Sciences</li>\n<ul type="disc">\n<li>Department of Economics, Planning and Development</li>\n<li>Department of Education and Training</li>\n<li>Department of History and Civilization</li>\n<li>Department of Political Science and International Relations</li>\n<li>Department of Psychology and Wellbeing</li>\n<li>Department of Public Administration, Governance and Policy Research</li>\n<li>Department of Social Work</li>\n<li>Department of Sociology</li>\n</ul>\n</ol>', '<ul><li>&nbsp;Integrated Dual Degree</li><li>&nbsp;Post Graduate</li><li>&nbsp;Doctrate</li></ul>', '<dl><dt>Dr. Ela Kumar                </dt><dd>Dean(I/C), School of ICT, Gautam Buddha University </dd><br><dt>Dr. Om Prakash Sangwan                </dt><dd>School of ICT, Gautam Buddha University </dd><br><dt>Dr. Anurag Singh Bhagel                </dt><dd>School of ICT, Gautam Buddha University </dd></dl>', 'Placement Session will begin from 3rd December and will continue till 28th June.', '');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_events`
--

CREATE TABLE IF NOT EXISTS `upcoming_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `upcoming_events`
--

INSERT INTO `upcoming_events` (`id`, `event_id`) VALUES
(1, 5),
(2, 6),
(3, 7),
(4, -1),
(5, -1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `profile_picture` varchar(50) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `roll_number` varchar(10) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `confirmation_link` varchar(36) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `type`, `email`, `active`, `profile_picture`, `full_name`, `roll_number`, `phone_number`, `confirmation_link`) VALUES
(1, 'varun', '$2a$08$aHFY8jNP/liqnhKM7a70tOT/UhznZEjxiYhrZO3BCqfC8Qzrn435.', 'admin', 'varun.10@live.com', 1, '', 'Varun Garg', '', '', ''),
(2, 'user1', '$2a$08$s6oK1VBeGbaNGCdsGKg.sOVq9Lu4BgX1boTZOdXhA1dw8o.RVSG.C', 'user', 'anime.life@hotmail.com', 1, '', 'User 1', '', '', ''),
(3, 'sarthak', '$2a$08$IvYcXuhBaZHTeHY4VG0iiuJmyCd1xO4N4v/6e24wbOUIeNmpvBevq', 'admin', 'gargsarthak30@gmail.com', 1, '', 'Sarthak Garg', '', '', ''),
(5, 'rajat', '$2a$08$89gL0PX4Ewl0/9RbfqBuOO6Jbp.ETHXsk.rDNtzKUkDcFe3SwBKaC', 'admin', 'sunny0rajat@gmail.com', 1, '', 'Rajat Saxena', '', '', ''),
(6, 'shobhit', '$2a$08$c4/t9EJ0rkX7jur.sbhtJ.JA0hEBVC4Md5qk0AH7MBaYZb3WYKQhS', 'admin', 'shobhit95sharma@gmail.com', 1, '', 'Shobhit Sharma', '', '', ''),
(7, 'bhawesh', '$2a$08$QghHh95c4h3GLrBFYN/9xuUrjeY/7xGc88hNv0rldS9wNOQxIJX.C', 'admin', '13ics015@gbu.ac.in', 1, '', 'Bhawesh Chandola', '', '', ''),
(8, 'student1', '$2a$08$YjytProg8gi0nweS2f7cI.b8Dh2ZR4keLzSFXuFNCVAFWlQ3V1nca', 'student', 'sasa@xyz.com', 1, '', 'Student 1', '', '', ''),
(9, 'amit', '$2a$08$UcvspCTXRKOIiZj2FAdGn.z0Grzpd9cWsjH.m0JjQc0cRYmbjtJCu', 'admin', 'amit@gbuonline.in', 1, '', 'Dr. Amit K awasthi', '', '', ''),
(10, 'pp', '$2a$08$y/xDX/wvz9SPwzZDHH.g/.wRLjXoLwJcLR9gLw03x6ytbANsGME5K', 'student', 'pp@xyz.com', 0, '', 'pp', 'pp', 'pp', ''),
(11, 'xx', '$2a$08$WRBWtrUhWqr01S8nyZfXHe/6/YQLNAqWay5NDL5SG32gMEr72YDCy', 'student', 'xxx@gmail.com', 0, '', 'xx', '', '', ''),
(12, 'sasasa', '$2a$08$kscnIOxgSg9TUAhdCbFZ2OZfKnhOd/ylYW78k5fbHxWbGpfkSxjr6', 'student', 'varun.10@live.com', 0, '', 'pp@xyz.com', 'p', 'p', '');

-- --------------------------------------------------------

--
-- Table structure for table `vnb`
--

CREATE TABLE IF NOT EXISTS `vnb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `info` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vnb`
--

INSERT INTO `vnb` (`id`, `title`, `info`, `user_id`) VALUES
(1, 'Bar Council of India Approval Letter', 'asdasdasdasdasdasdasdasda', 0),
(2, 'Fellowship for Gate qualified students', 'wqeqweqweqweqw', 0);

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE IF NOT EXISTS `warden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hostel_name` varchar(60) NOT NULL,
  `warden_name` varchar(60) NOT NULL,
  `warden_office` varchar(60) NOT NULL,
  `hostel_contact` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
