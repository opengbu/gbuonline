-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2015 at 12:36 AM
-- Server version: 10.0.20-MariaDB-log
-- PHP Version: 5.6.11

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
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `status`, `user_id`) VALUES
(17, 'Why Inequality Matters', 'A 700-page treatise on economics translated from French is not exactly a light summer read—even for someone with an admittedly high geek quotient. But this past July, I felt compelled to read Thomas Piketty’s Capital in the Twenty-First Century after reading several reviews and hearing about it from friends.\n\nI’m glad I did. I encourage you to read it too, or at least a good summary, like this one from The Economist. Piketty was nice enough to talk with me about his work on a Skype call last month. As I told him, I agree with his most important conclusions, and I hope his work will draw more smart people into the study of wealth and income inequality—because the more we understand about the causes and cures, the better. I also said I have concerns about some elements of his analysis, which I’ll share below.\n\nI very much agree with Piketty that:\n\n    High levels of inequality are a problem—messing up economic incentives, tilting democracies in favor of powerful interests, and undercutting the ideal that all people are created equal.\n    Capitalism does not self-correct toward greater equality—that is, excess wealth concentration can have a snowball effect if left unchecked.\n    Governments can play a constructive role in offsetting the snowballing tendencies if and when they choose to do so.\n\nTo be clear, when I say that high levels of inequality are a problem, I don’t want to imply that the world is getting worse. In fact, thanks to the rise of the middle class in countries like China, Mexico, Colombia, Brazil, and Thailand, the world as a whole is actually becoming more egalitarian, and that positive global trend is likely to continue.\n\nBut extreme inequality should not be ignored—or worse, celebrated as a sign that we have a high-performing economy and healthy society. Yes, some level of inequality is built in to capitalism. As Piketty argues, it is inherent to the system. The question is, what level of inequality is acceptable? And when does inequality start doing more harm than good? That’s something we should have a public discussion about, and it’s great that Piketty helped advance that discussion in such a serious way.', 1, 5),
(18, 'The Best Business Book I’ve Ever Read', 'Not long after I first met Warren Buffett back in 1991, I asked him to recommend his favorite book about business. He didn’t miss a beat: “It’s Business Adventures, by John Brooks,” he said. “I’ll send you my copy.” I was intrigued: I had never heard of Business Adventures or John Brooks.\r\n\r\nToday, more than two decades after Warren lent it to me—and more than four decades after it was first published—Business Adventures remains the best business book I’ve ever read. John Brooks is still my favorite business writer. (And Warren, if you’re reading this, I still have your copy.)\r\n\r\nA skeptic might wonder how this out-of-print collection of New Yorker articles from the 1960s could have anything to say about business today. After all, in 1966, when Brooks profiled Xerox, the company’s top-of-the-line copier weighed 650 pounds, cost $27,500, required a full-time operator, and came with a fire extinguisher because of its tendency to overheat. A lot has changed since then.\r\n\r\nIt’s certainly true that many of the particulars of business have changed. But the fundamentals have not. Brooks’s deeper insights about business are just as relevant today as they were back then. In terms of its longevity, Business Adventures stands alongside Benjamin Graham’s The Intelligent Investor, the 1949 book that Warren says is the best book on investing that he has ever read.', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `blog_likes`
--

CREATE TABLE IF NOT EXISTS `blog_likes` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_likes`
--

INSERT INTO `blog_likes` (`id`, `blog_id`, `user_id`) VALUES
(8, 17, 5),
(9, 18, 1),
(10, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `id` int(11) NOT NULL,
  `about_us` text NOT NULL,
  `faculty` text NOT NULL,
  `students` text NOT NULL,
  `c_name` varchar(25) NOT NULL,
  `c_full_name` varchar(70) NOT NULL,
  `tagline` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

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
  `id` int(11) NOT NULL,
  `sc_name` varchar(10) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_info` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='sc_name is short name, pick real name from schools';

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `sc_name`, `dept_name`, `book_name`, `book_info`, `user_id`) VALUES
(1, 'soict', 'computer_science', 'operating systems', 'operating system basic concepts', 2314),
(2, 'soict', 'computer_science', 'internet technology', 'how internet works', 3423423),
(3, 'soict', 'electronics', 'basic electronics', '', 4323423);

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
  `school` varchar(35) NOT NULL,
  `club` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(11) NOT NULL,
  `sc_name` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `paper_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `sc_name`, `year`, `paper_name`) VALUES
(1, 'soict', 1, 'java'),
(2, 'soict', 2, 'maths-2');

-- --------------------------------------------------------

--
-- Table structure for table `h_complaint`
--

CREATE TABLE IF NOT EXISTS `h_complaint` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `h_list`
--

CREATE TABLE IF NOT EXISTS `h_list` (
  `hostel_id` int(11) NOT NULL,
  `hostel_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`, `user_id`) VALUES
(3, 'Code-In-GBU', '<span>Online coding competition</span>', '<p id="line1"><span>An online coding competition being organised by the ICT department next Wednesday.So get ready to show your coding skills.Exciting prizes to be won.</span></p>', 1),
(4, 'Change in Grading System', '<p id="line1"><span>Grading System for students of session 2014-2015 and onwards has been changed.</span></p>', '<p id="line1"><span>Grading System for students of session 2014-2015 and onwards has been changed.</span></p>', 1),
(5, 'Imagine Cup', '<span>Microsofts Imagine Cup is the world s most prestigious student technology competition, bringing together student innovator', '<span>Microsofts Imagine Cup is the world s most prestigious student technology competition, bringing together student innovators from all over the world. If you have a </span>', 1),
(6, 'Notification for Odd semester', '<p id="line1"><span>Notification for Odd semester 2015-2016 session</span></p>', 'Hello Team<br><br>Hello Team<br><br>Hello Team<br><br>Hello Team<br><br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br>Hello Team<br><br>', 1);

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
  `placements` text NOT NULL,
  `tagline` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

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
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `profile_picture` varchar(50) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `roll_number` varchar(10) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `confirmation_link` varchar(36) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `type`, `email`, `active`, `profile_picture`, `full_name`, `roll_number`, `phone_number`, `confirmation_link`) VALUES
(1, 'varun', '$2a$08$aHFY8jNP/liqnhKM7a70tOT/UhznZEjxiYhrZO3BCqfC8Qzrn435.', 'admin', 'varun.10@live.com', 1, '', 'Varun Garg', '13 ICS 057', '', ''),
(2, 'user1', '$2a$08$s6oK1VBeGbaNGCdsGKg.sOVq9Lu4BgX1boTZOdXhA1dw8o.RVSG.C', 'user', 'anime.life@hotmail.com', 1, '', 'User 1', '', '', ''),
(3, 'sarthak', '$2a$08$IvYcXuhBaZHTeHY4VG0iiuJmyCd1xO4N4v/6e24wbOUIeNmpvBevq', 'admin', 'gargsarthak30@gmail.com', 1, '', 'Sarthak Garg', '13 ics 047', '', ''),
(5, 'rajat', '$2a$08$89gL0PX4Ewl0/9RbfqBuOO6Jbp.ETHXsk.rDNtzKUkDcFe3SwBKaC', 'admin', 'sunny0rajat@gmail.com', 1, '', 'Rajat Saxena', '13 ics 035', '', ''),
(6, 'shobhit', '$2a$08$c4/t9EJ0rkX7jur.sbhtJ.JA0hEBVC4Md5qk0AH7MBaYZb3WYKQhS', 'admin', 'shobhit95sharma@gmail.com', 1, '', 'Shobhit Sharma', '13 ics 051', '', ''),
(7, 'bhawesh', '$2a$08$QghHh95c4h3GLrBFYN/9xuUrjeY/7xGc88hNv0rldS9wNOQxIJX.C', 'admin', '13ics015@gbu.ac.in', 1, '', 'Bhawesh Chandola', '', '', ''),
(8, 'student1', '$2a$08$YjytProg8gi0nweS2f7cI.b8Dh2ZR4keLzSFXuFNCVAFWlQ3V1nca', 'student', 'sasa@xyz.com', 1, '', 'Student 1', '', '', ''),
(9, 'amit', '$2a$08$UcvspCTXRKOIiZj2FAdGn.z0Grzpd9cWsjH.m0JjQc0cRYmbjtJCu', 'admin', 'amit@gbuonline.in', 1, '', 'Dr. Amit K awasthi', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vnb`
--

CREATE TABLE IF NOT EXISTS `vnb` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `info` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
-- Indexes for table `blog_likes`
--
ALTER TABLE `blog_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_complaint`
--
ALTER TABLE `h_complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `h_list`
--
ALTER TABLE `h_list`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `h_notice`
--
ALTER TABLE `h_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `blog_likes`
--
ALTER TABLE `blog_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `h_complaint`
--
ALTER TABLE `h_complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `h_list`
--
ALTER TABLE `h_list`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `h_notice`
--
ALTER TABLE `h_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
