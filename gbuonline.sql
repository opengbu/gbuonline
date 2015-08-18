-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2015 at 09:46 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `blog_likes`
--

INSERT INTO `blog_likes` (`id`, `blog_id`, `user_id`) VALUES
(8, 17, 5),
(9, 18, 1),
(10, 17, 1),
(11, 18, 5);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='sc_name is short name, pick real name from schools' AUTO_INCREMENT=4 ;

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
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sc_name` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `paper_name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

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
(12, 'soict', 'School Of Information and Communication  Technology', '<ul>\r\n<li>Department of Computer Science & Engineering</li>\r\n<li>Department of Electronics & Communication Engineering</li>\r\n</ul>\r\n\r\n', '<ol><li>Integrated Dual Degree <br></li><ul type="disc"><li>(B.Tech + M.Tech/MBA) - Computer Science and Engineering</li><li>(B.Tech + M.Tech/MBA) - Electronics and Communication Engineering</li></ul><br><li>Post Graduate</li><ul type="disc"><li>M.Tech (ICT) - Intelligent Systems and Robotics</li><li>M.Tech (ICT) - Software Engineering</li><li>M.Tech (ICT) - VLSI Design</li><li>M.Tech (ICT) - Wireless Communication and Networks</li><li>M.Tech - Computer Science</li></ul><br><li>Doctrate Programs</li></ol>', '<br><table height="798" width="522"><tbody><tr><th><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name<br></p><br></th><th>&nbsp;&nbsp; Designation<br><br></th></tr><tr><td>Prof. Anuradha Mishra<br><br></td><td>Professor and Dean<br><br></td></tr><tr><td>Dr. Rajesh Mishra<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Vidushi Sharma<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Om Prakash Sangwan<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Anurag Singh Baghel<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Gurjit Kaur<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Pradeep Tomar<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Neeta Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Sandhya Tarar<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Dr. Arun Solanki<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Mr. Navaid Zafar Rizvi<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Mr. Sandeep Sharma<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Nidhi Gulati<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Mr. Vimlesh Kumar<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Aarti Gautam Dinker<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Mr. Rajendra Bahadur Singh<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Priyanka Goyal</td><td>Research / Faculty Associate</td></tr></tbody></table>', 'Placement Session will begin from 3rd December and will continue till 28th June.', 'abcedf'),
(13, 'sovsas', 'School Of Vocational Studies And Applied Sciences', '<ul><li>Department of Applied Mathematics</li><li>Department of Applied Chemistry</li><li>Department of Applied Physics</li><li>Department of Environmental Sciences</li><li>Department of Vocational Studies</li><li>Department of Food Processing & Technology</li></ul>', '<ol><li>Integrated Dual Degree <br></li><ul type="disc"><li>(B.Tech + M.Tech/MBA) - Food Processing and Technology<br></li></ul><br><li>Post Graduate</li><ul type="disc"><li>M.Tech  - Food Processing and Technology<br></li><li>M.Sc - Applied Mathematics<br></li><li>M.Sc - Applied Chemistry</li><li>M.Sc - Applied Physics</li><li>M.Sc - Environmental Science</li><li>M.Sc - Food Science<br></li></ul><br><li>Doctoral Programs<br></li><ul type="disc"><li>Ph.D - Applied Mathematics</li><li>Ph.D - Applied Chemistry<br></li><li>Ph.D - Applied Physics <br></li></ul></ol>', '<br><table height="798" width="522"><tbody><tr><th><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name<br></p><br></th><th>&nbsp;&nbsp; Designation<br><br></th></tr><tr><td>Prof. Anuradha Mishra<br><br></td><td>Professor and Dean<br><br></td></tr><tr><td>Dr. Anjana Solanki<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Vivek Kumar Shukla<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Vandna Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Vikas Panwar<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Sushil Kumar<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Amit Kumar Awasthi<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Amit Ujlayan<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Upma Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Pratiksha Saxena<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Manmohan Singh Shishodia<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Bhawana Joshi<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Ashish Kumar Keshari<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Rajesh Kumar Gupta<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Dipti Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Mausumi Pohit<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Fahed Zulfeqarr<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Jaya Maitra<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Deepti Goyal<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Tanvi Vats<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Dr. Alpa Yadav<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Mr. Ashish Madhavrao Mohite<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Mr. Kshitiz Kumar<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Mr. Ashish Dixit<br><br></td><td>Research / Faculty Associate<br><br></td></tr></tbody></table>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(15, 'sobt', 'School of Biotechnology', '<ul>\r\n<li>Department of Biotechnology</li>\r\n</ul>\r\n\r\n', '<ol><li>Integrated Dual Degree <br></li><ul type="disc"><li>(B.Tech + M.Tech/MBA) - Biotechnology<br></li></ul><br><li>Post Graduate</li><ul type="disc"><li>M.Tech  - Biotechnology</li></ul><br><li>Doctoral Programs<br></li><ul type="disc"><li>Ph.D - Various areas of Biotechnology</li></ul></ol>', '<br><table height="798" width="522"><tbody><tr><th><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name<br></p><br></th><th>&nbsp;&nbsp; Designation<br><br></th></tr><tr><td>Prof. Anuradha Mishra<br><br></td><td>Professor and Dean<br><br></td></tr><tr><td>Dr. Seema Dwivedi<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Gunjan Garg<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Jai Prakash Muyal<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Shakti Sahi<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Bhupendra Chaudhary<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Rekha Puria<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Nagendra Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Sachin Teotia<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Imteyaz Qamar<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Deepali Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Mohd. Tashfeen Ashraf<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Siya Ram<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Vikrant Nain<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Jitendra Singh Rathore<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Vishwas Tripathi<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Savneet Kaur<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Barkha Singhal<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Bhaswati Banerjee<br><br></td><td>Assistant Professor<br><br></td></tr></tbody></table>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(16, 'soe', ' School of Engineering', '<ul>\r\n<li>Department of Civil Engineering</li>\r\n<li>Department of Electrical Engineering</li>\r\n<li>Department of Mechanical Engineering</li>\r\n<li>Department of Architecture & Regional Planning</li>\r\n</ul>\r\n\r\n', '<ol><li>Integrated Dual Degree <br></li><ul type="disc"><li>(B.Tech + M.Tech/MBA) - Mechanical Engineering</li><li>(B.Tech + M.Tech/MBA) - Electrical Engineering</li><li>(B.Tech + M.Tech/MBA) - Civil Engineering</li></ul><br><li>Post Graduate</li><ul type="disc"><li>M.Plan - Urban and Regional Planning</li><li>M.Tech - Environmental Engineering</li><li>M.Tech - Structural Engineering</li><li>M.Tech - Power System Engineering</li><li>M.Tech - Instrumentation and Control<br></li><li>M.Tech - Power Electronics and Drives<br></li><li>M.Tech - Manufacturing Engineering</li><li>M.Tech - Design Engineering</li><li>M.Tech - Thermal Engineering</li></ul><br><li>Doctoral Programs<br></li><ul type="disc"><li>Ph.D - Electrical Engineering</li><li>Ph.D - Civil Engineering <br></li></ul></ol>', '<br><table height="650" width="520"><tbody><tr><th><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name<br></p><br></th><th>&nbsp;&nbsp; Designation<br><br></th></tr><tr><td>Dr. Anjana Solanki<br><br></td><td>Associate Professor and Dean<br><br></td></tr><tr><td>Dr. Shilpa Pal<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Satpal Sharma<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Ms. Nirmita Mehrotra<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Athar Hussain<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Raghvendra Kumar Mishra<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Yogesh Kumar Chauhan<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Mohd. Ahmad Ansari<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Nidhi Singh Pal<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Shabana Urooj<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Brajesh Tripathi<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Harishchandra Thakur<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Shobharam<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Mr. Anurag Dixit<br><br></td><td>Research / Faculty Associate<br><br></td></tr></tbody></table>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(17, 'som', ' School of Management', '<ul>\r\n<li>Department of Bussiness Management</li>\r\n</ul>\r\n\r\n', '<ol><li>Integrated Dual Degree <br></li><ul type="disc"><li>BBA + MBA<br></li></ul><br><li>Post Graduate</li><ul type="disc"><li>MBA  - Human Resource Management</li><li>MBA  - Finance<br></li><li>MBA  - Marketing<br></li><li>MBA  - Strategy<br></li><li>MBA  - Operations<br></li><li>MBA  - Information Technology<br></li><li>MBA  - Tourism and Travel<br></li></ul><br><li>Doctoral Programs<br></li><ul type="disc"><li>Ph.D - In various areas of Business Management<br></li></ul></ol>', '<br><table height="798" width="522"><tbody><tr><th><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name<br></p><br></th><th>&nbsp;&nbsp; Designation<br><br></th></tr><tr><td>Dr. Shweta Anand<br><br></td><td>Associate Professor and Dean<br><br></td></tr><tr><td>Dr. Neeti Rana<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Indu Uprety<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Dinesh Kumar Sharma<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Lovy Sarikwal<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Manisha Sharma<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Sharadindu Pandey<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Varsha Dixit<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Subhojit Banerjee<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Naveen Kumar<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Ombir Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Rakesh Kumar Srivastava<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Satish Kumar Mittal<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Ms. Kavita Singh<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Samar Raqshin<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Monika Bhati<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Shadma Praveen<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. K. Vijay Chitra<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Dr. Deepika Joshi<br><br></td><td>Research / Faculty Associate<br><br></td></tr></tbody></table>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(18, 'soljg', ' School of Law, Justice and Governance', '<ul><li>Department of Law, Justice and Governance<br></li></ul>', '<ol><li>Integrated Dual Degree <br></li><ul type="disc"><li>BA + LLB</li><li>BBA + LLB<br></li></ul></ol>', '<br><table height="422" width="512"><tbody><tr><th><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name</p></th><th>&nbsp;&nbsp; Designation</th></tr><tr><td>Dr. Indu Uprety</td><td>Associate Professor and Dean</td></tr><tr><td>Dr. Chandrabhanu Bharas</td><td>Assistant Professor</td></tr><tr><td>Dr. Pankaj Deep<br></td><td>Assistant Professor<br></td></tr><tr><td>Dr. Vivek Kumar Mishra<br></td><td>Assistant Professor<br></td></tr><tr><td>Dr. Braham Dev Pandey<br></td><td>Assistant Professor<br></td></tr><tr><td>Dr. Mamta Sharma<br></td><td>Assistant Professor<br></td></tr><tr><td>Dr. Akshay Kumar Singh<br></td><td>Assistant Professor<br></td></tr><tr><td>Dr. Sumitra Huidrom<br></td><td>Assistant Professor<br></td></tr><tr><td>Dr. Himanshu Saxena<br></td><td>Research / Faculty Associate<br></td></tr></tbody></table>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(19, 'sobsc', ' School of Buddhist Studies And Civilization ', '<ul><li>Department of Buddhist Studies And Civilization<br></li></ul>', '<ol><li>Integrated Dual Degree <br></li><ul type="disc"><li>(B.A. + M.A.) - Buddhist Studies and Civilization <br></li></ul><br><li>Post Graduate</li><ul type="disc"><li>M.A.  - Buddhist Studies and Civilization</li><li>M.Phil. - Buddhist Studies and Civilization</li></ul><br><li>Doctoral Programs<br></li><ul type="disc"><li>Ph.D - Buddhist Studies and Civilization</li></ul></ol>', '<br><table height="685" width="522"><tbody><tr><th><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name<br></p><br></th><th>&nbsp;&nbsp; Designation<br><br></th></tr><tr><td>Dr. Neeti Rana<br><br></td><td>Associate Professor and Dean<br><br></td></tr><tr><td>Dr. Anand Singh<br><br></td><td>Associate Professor<br><br></td></tr><tr><td>Dr. Arvind Kumar Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Chandrashekhar Paswan<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Chintala Venkata Siva Sai<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Gurmet Dorjey<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Gyanaditya Shakya<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Indu Girish<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Priyadarsini Mittra<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Priya Sen Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Manish T. Meshram<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Mukesh Kumar Verma<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Sangeeta Wadhwa<br><br></td><td>Research / Faculty Associate<br><br></td></tr></tbody></table>', 'Placement Session will begin from 3rd December and will continue till 28th June.', ''),
(20, 'sohss', ' School of Humanities and Social Sciences', '<ol>\r\n<li>Humanities</li>\r\n<ul type="disc">\r\n<li>Department of English and Modern European Languages</li>\r\n<li>Department of Indian Languages and Literature</li>\r\n<li>Department of Mass Communication and Media Studies</li>\r\n</ul><br>\r\n<li>Social Sciences</li>\r\n<ul type="disc">\r\n<li>Department of Economics, Planning and Development</li>\r\n<li>Department of Education and Training</li>\r\n<li>Department of History and Civilization</li>\r\n<li>Department of Political Science and International Relations</li>\r\n<li>Department of Psychology and Wellbeing</li>\r\n<li>Department of Public Administration, Governance and Policy Research</li>\r\n<li>Department of Social Work</li>\r\n<li>Department of Sociology</li>\r\n</ul>\r\n</ol>', '<ol><li>Post Graduate</li></ol><ol><ul type="disc"><li>M.A. - History and Civilization<br></li><li>M.A. - Economics, Planning and Development <br></li><li>M.A. - English<br></li><li>M.A. - Hindi<br></li><li>M.A. - Urdu <br></li><li>MSW - Masters in Social Work</li><li>M.A. - Applied Psychology</li><li>M.Sc. - Applied Psychology</li><li>M.A. - Political Science and International Relations</li><li>M.A. - Education</li><li>M.Phil. - Clinical Psycholog </li></ul></ol>', '<br><table height="798" width="522"><tbody><tr><th><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name<br></p><br></th><th>&nbsp;&nbsp; Designation<br><br></th></tr><tr><td>Prof. Mahavir Singh<br><br></td><td>Professor and Dean<br><br></td></tr><tr><td>Dr. Indu Uprety<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Om Prakash<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Vinod Kumar Shanwal<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Anand Pratap Singh<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Subhasis Bhadra<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Syed Nadeem Fatmi<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Navras Jat Aafreedi<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Sumitra Huidrom<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Babita Devi<br><br></td><td>Assistant Professor<br><br></td></tr><tr><td>Dr. Obaidul Ghaffar<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Dr. Vibhavari<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Dr. Rehana Sultana<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Dr. Diwakar Garwa<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Dr. Roopali Srivastava<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Dr. Bipasha Som<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Priyanka Singh<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Isha Paul<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Mr. Muhammad Asif<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Mr. Siddaramu B<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Manjri Suman<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Riya Raj<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Sibghat Usmani<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Dr. Prakash Chandra Dilare<br><br></td><td>Research / Faculty Associate<br><br></td></tr><tr><td>Ms. Renu Yadav<br><br></td><td>Research / Faculty Associate<br><br></td></tr></tbody></table>', 'Placement Session will begin from 3rd December and will continue till 28th June.', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `posted_by` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vnb`
--

INSERT INTO `vnb` (`id`, `title`, `link`, `user_id`, `date`, `posted_by`) VALUES
(1, 'Notice for the Scholarship and fee reimbursement of students for Academic Session 2015-16 ', 'resources\\images\\GBU_Academic_Scholarship_Notice_24July2015.jpg', 0, '2015-07-24', ''),
(2, 'Information regarding Full Fee Submission during Registration for Academic Session 2015-16 ', 'resources\\images\\Notice_RegistrationFee_23July2015.jpg', 0, '2015-07-22', ''),
(3, 'MoU between GBU and NSDC for introducing Skill Development Programmes  in University', 'resources\\MOU_NSDC_DOC_1July15.pdf', 0, '2015-06-30', ''),
(5, 'Notification for Late Fee Submission for Odd Semester Registration 2015-16', 'resources\\Notification_Late Fee_Odd SemReg_21July15.pdf', 0, '2015-07-15', ''),
(6, 'Cancellation of Purchase Order for printing of Letter Head and L- Folder awarded to Seven Star Associates-New Delhi', 'resources\\PO_Stores_Cancel_Seven Star_26June15.jpg', 0, '2015-06-26', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE IF NOT EXISTS `stuinfo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(10) NOT NULL,
  `stu_course` varchar(60) NOT NULL,
  `stu_hname` varchar(50) NOT NULL,
  `stu_review` varchar(6) NOT NULL,
  `stu_father` varchar(60) NOT NULL,
  `roll_number` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Student Info' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`id`, `stu_name`, `stu_course`, `stu_hname`, `stu_review`, `stu_father`, `roll_number`) VALUES
(1, 'Ram Sharma', 'Btech', '8.1F', 'bad', 'ABC', ''),
(2, 'Ram Kapoor', 'Mtech', '8.1K', 'good', 'PQR', ''),
(3, 'Mr Manmoha', '232323322323', '23232323', '22', '2222', '13ics0XX'),
(4, 'Ram Kapoor', 'asd', 'ads', 'asdasd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `Title` varchar(128) NOT NULL,
  `Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`Title`, `Link`) VALUES
('C Cleaner', '#'),
('C Cleaner', '#');

-- --------------------------------------------------------

--
-- Table structure for table `placements`
--

CREATE TABLE IF NOT EXISTS `placements` (
  `Title` varchar(60) NOT NULL,
  `Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placements`
--

INSERT INTO `placements` (`Title`, `Link`) VALUES
('', ''),
('Placement 2015', '#'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `stu_chapters`
--

CREATE TABLE IF NOT EXISTS `stu_chapters` (
  `Title` varchar(128) DEFAULT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_chapters`
--

INSERT INTO `stu_chapters` (`Title`, `Description`) VALUES
('IEEE-GBU Student Branch', 'The world''s largest professional association for the advancement of technology.\r\nFor more information visit http://www.ieeegbu.weebly.com/');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
