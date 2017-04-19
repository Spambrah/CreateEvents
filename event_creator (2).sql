-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 02:39 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_creator`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answerid` int(11) NOT NULL,
  `answer` text NOT NULL,
  `answercount` int(11) DEFAULT NULL,
  `questionid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answerid`, `answer`, `answercount`, `questionid`) VALUES
(1, 'Day', 0, 0),
(2, 'Night', 0, 0),
(3, 'Morning', 0, 0),
(4, 'Waffles', 0, 0),
(5, 'Pancakes', 0, 0),
(6, 'bacon', NULL, 23),
(7, 'eggs', NULL, 23),
(8, 'cereal', NULL, 23);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(11) NOT NULL,
  `eventname` text NOT NULL,
  `eventdate` date DEFAULT NULL,
  `eventtime` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `questionsid` text,
  `userid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventname`, `eventdate`, `eventtime`, `status`, `questionsid`, `userid`) VALUES
(1, 'Event one', '2017-03-21', '2017-04-04 04:59:17', 0, '', 1),
(2, 'Event Two', '2017-03-31', '2017-04-04 04:59:22', 0, '', 1),
(3, 'Event three', '2017-03-24', '2017-04-04 04:59:29', 0, '', 2),
(4, 'Event four', '2017-04-06', '2017-04-04 05:55:56', 1, '1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionsid` int(11) NOT NULL,
  `textquestion` text NOT NULL,
  `userid` int(11) NOT NULL,
  `eventid` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionsid`, `textquestion`, `userid`, `eventid`, `count`) VALUES
(1, 'Do you like waffles?', 1, 3, 0),
(2, 'Do you like pancakes?', 2, 1, 0),
(3, 'Outdoors or indoors?', 2, 3, 0),
(4, 'Morning, day or night?', 3, 2, 0),
(5, 'bacon or eggs', 2, 3, NULL),
(6, 'bacon or eggs', 2, 3, NULL),
(7, 'hbrehvbrhj', 2, 4, NULL),
(8, 'hbrehvbrhj', 2, 4, NULL),
(9, 'hbrehvbrhj', 2, 4, NULL),
(10, 'hbrehvbrhj', 2, 4, NULL),
(11, 'hbrehvbrhj', 2, 4, NULL),
(12, 'hbrehvbrhj', 2, 4, NULL),
(13, 'hbrehvbrhj', 2, 4, NULL),
(14, 'hbrehvbrhj', 2, 4, NULL),
(15, 'd vlsd ', 2, 3, NULL),
(16, 'd vlsd ', 2, 3, NULL),
(17, 'd vlsd ', 2, 3, NULL),
(18, 'PINEAPPLE OF COFFEE', 2, 4, NULL),
(19, 'bacon or eggs', 2, 4, NULL),
(20, 'bacon or eggs', 2, 4, NULL),
(21, 'bacon or eggs', 2, 4, NULL),
(22, 'bacon or eggs', 2, 4, NULL),
(23, 'bacon or eggs', 2, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fullname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullname`, `email`, `password`) VALUES
(1, 'Joe Blogs', 'joeblogs@email.com', 'password1'),
(2, 'John Doe', 'johndoe@email.com', 'password2'),
(3, 'Ronald Donald', 'ronalddonald@email.com', 'password3'),
(6, 'tetetetfghfgh', 'happytree@email.com', 'hfhfhfg'),
(7, 'ffsd', 'happytree@email.com', 'fgdgdf'),
(8, 'fulltime', 'work@email.com', 'hello'),
(9, 'fulltime', 'work@email.com', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answerid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionsid`),
  ADD KEY `count` (`count`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
