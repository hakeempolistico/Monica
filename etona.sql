-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2017 at 06:40 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etona`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attend_events`
--

CREATE TABLE `attend_events` (
  `attend_id` int(10) NOT NULL,
  `attending` bit(1) NOT NULL,
  `notattending` bit(1) NOT NULL,
  `pending` int(10) NOT NULL,
  `event_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `usercomment_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `status_id` int(10) NOT NULL,
  `comments` text NOT NULL,
  `comment_date` date NOT NULL,
  `comment_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`usercomment_id`, `idnumber`, `status_id`, `comments`, `comment_date`, `comment_time`) VALUES
(22, 28, 171, 'uy wag snobber', '2017-03-21', '05:47:07'),
(23, 28, 172, 'hello', '2017-03-22', '12:23:15'),
(24, 28, 171, 'di naman po', '2017-03-22', '12:35:15'),
(25, 28, 171, 'opo', '2017-03-22', '12:40:48'),
(26, 28, 171, 'opo', '2017-03-22', '12:40:48'),
(27, 29, 172, 'hello', '2017-03-22', '01:20:19'),
(28, 29, 172, './.', '2017-03-22', '01:20:29'),
(29, 29, 172, 'ano na ', '2017-03-22', '01:20:34'),
(30, 28, 171, 'hello', '2017-03-22', '01:49:30'),
(31, 28, 171, 'oi', '2017-03-22', '02:04:09'),
(32, 28, 169, 'hello', '2017-03-22', '02:04:16'),
(33, 28, 173, 'he', '2017-03-22', '02:05:39'),
(34, 28, 173, 'he', '2017-03-22', '02:05:39'),
(35, 29, 172, 'hoi', '2017-03-22', '02:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `coverphotos`
--

CREATE TABLE `coverphotos` (
  `cover#` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `image_name` varchar(225) NOT NULL,
  `image_path` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coverphotos`
--

INSERT INTO `coverphotos` (`cover#`, `idnumber`, `image_name`, `image_path`) VALUES
(3, 28, 'usercover#28 ', './images/'),
(4, 29, 'usercover#29 ', './images/'),
(5, 28, 'usercover#28 ', './images/'),
(6, 28, 'usercover#28 ', './images/');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `group_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `event_creator` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_place` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `group_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exclusivestatus`
--

CREATE TABLE `exclusivestatus` (
  `exstat_id` int(10) NOT NULL,
  `poster_id` int(10) NOT NULL,
  `userprofile_id` int(10) NOT NULL,
  `text` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exclusivestatus`
--

INSERT INTO `exclusivestatus` (`exstat_id`, `poster_id`, `userprofile_id`, `text`, `post_date`, `post_time`) VALUES
(1, 29, 30, 'hi im aries :)', '2017-03-21', '04:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `group_name` varchar(225) NOT NULL,
  `group_creator` varchar(225) NOT NULL,
  `no_members` int(10) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `idnumber`, `group_name`, `group_creator`, `no_members`, `date_created`) VALUES
(177, 29, 'sdfsf', 'Christian Aries Veracruz Canimo ', 1, '2017-03-21 02:55:41'),
(178, 29, 'anfmsdf', 'Christian Aries Veracruz Canimo ', 2, '2017-03-21 02:55:48'),
(179, 28, 'lels', 'Christine Veracruz Canimo ', 2, '2017-03-21 02:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `grpstatus`
--

CREATE TABLE `grpstatus` (
  `grpstat_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `text` text NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grp_comments`
--

CREATE TABLE `grp_comments` (
  `comment_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `grpstat_id` int(10) NOT NULL,
  `grp_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `mname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `group_id`, `idnumber`, `fname`, `mname`, `lname`) VALUES
(170, 177, 29, 'Christian Aries', 'Veracruz', 'Canimo'),
(171, 178, 29, 'Christian Aries', 'Veracruz', 'Canimo'),
(172, 179, 28, 'Christine', 'Veracruz', 'Canimo'),
(173, 179, 29, 'Christian Aries', 'Veracruz', 'Canimo'),
(174, 178, 28, 'Christine', 'Veracruz', 'Canimo');

-- --------------------------------------------------------

--
-- Table structure for table `notifs`
--

CREATE TABLE `notifs` (
  `notif_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `to_whom` int(10) NOT NULL,
  `stat_id` int(10) NOT NULL,
  `notification` bit(1) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifs`
--

INSERT INTO `notifs` (`notif_id`, `idnumber`, `to_whom`, `stat_id`, `notification`, `datetime`) VALUES
(5, 28, 29, 171, b'1', '0000-00-00 00:00:00'),
(6, 28, 29, 171, b'1', '0000-00-00 00:00:00'),
(7, 29, 28, 172, b'1', '0000-00-00 00:00:00'),
(8, 29, 28, 172, b'1', '0000-00-00 00:00:00'),
(9, 29, 28, 172, b'1', '0000-00-00 00:00:00'),
(10, 28, 29, 171, b'1', '0000-00-00 00:00:00'),
(11, 28, 29, 171, b'1', '0000-00-00 00:00:00'),
(12, 28, 30, 169, b'1', '0000-00-00 00:00:00'),
(13, 28, 28, 173, b'1', '2017-03-21 06:07:12'),
(14, 29, 28, 172, b'1', '2017-03-21 06:31:42');

-- --------------------------------------------------------

--
-- Table structure for table `numberofevents`
--

CREATE TABLE `numberofevents` (
  `primarynum` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `no_events` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numberofevents`
--

INSERT INTO `numberofevents` (`primarynum`, `idnumber`, `no_events`) VALUES
(52, 29, 0),
(53, 28, 0);

-- --------------------------------------------------------

--
-- Table structure for table `numberofgroups`
--

CREATE TABLE `numberofgroups` (
  `primarynum` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `group_id` int(10) NOT NULL,
  `no_groups` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numberofgroups`
--

INSERT INTO `numberofgroups` (`primarynum`, `idnumber`, `group_id`, `no_groups`) VALUES
(132, 29, 179, 3),
(133, 28, 178, 2);

-- --------------------------------------------------------

--
-- Table structure for table `numberofstatus`
--

CREATE TABLE `numberofstatus` (
  `primarynum` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `no_of_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numberofstatus`
--

INSERT INTO `numberofstatus` (`primarynum`, `idnumber`, `no_of_status`) VALUES
(35, 30, 2),
(37, 29, 9),
(39, 28, 8);

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

CREATE TABLE `profilepic` (
  `img_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilepic`
--

INSERT INTO `profilepic` (`img_id`, `idnumber`, `image_name`, `image_path`) VALUES
(8, 29, 'user#29 ', './images/'),
(10, 28, 'user#28 ', './images/');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `stat_id` int(10) NOT NULL,
  `idnumber` int(10) NOT NULL,
  `text` text NOT NULL,
  `post_date` date NOT NULL,
  `post_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`stat_id`, `idnumber`, `text`, `post_date`, `post_time`) VALUES
(138, 28, 'hi :D', '2017-03-16', '09:51:11'),
(139, 29, 'hehehe', '2017-03-16', '10:10:26'),
(140, 30, 'hi :)', '2017-03-17', '02:16:23'),
(141, 28, 'panget ni canimo sobra', '2017-03-17', '02:39:26'),
(142, 28, 'gahahahahaha :)', '2017-03-17', '02:39:42'),
(143, 29, 'panget ni canimo', '2017-03-17', '02:41:13'),
(144, 28, 'hello', '2017-03-18', '06:22:25'),
(145, 28, ' :lol:', '2017-03-18', '06:53:32'),
(146, 29, 'ma', '2017-03-18', '07:06:23'),
(147, 29, ' :long:', '2017-03-19', '01:25:45'),
(148, 29, 'hi hahaha', '2017-03-19', '02:29:11'),
(166, 29, 'isa pa', '2017-03-19', '02:33:30'),
(167, 29, 'hehehe', '2017-03-19', '02:35:52'),
(168, 29, 'hi', '2017-03-19', '03:16:33'),
(169, 30, 'hi tintin ganda\r\n', '2017-03-19', '05:59:02'),
(170, 28, ' :lol: :cheese: :)', '2017-03-21', '01:50:35'),
(171, 29, 'hi', '2017-03-21', '03:58:44'),
(172, 28, 'hehehe hi', '2017-03-21', '04:44:12'),
(173, 28, ' :roll: hi', '2017-03-22', '01:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idnumber` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `emailadd` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `bday` date NOT NULL,
  `date_added` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idnumber`, `fname`, `mname`, `lname`, `username`, `password`, `gender`, `address`, `emailadd`, `contact`, `bday`, `date_added`, `date_updated`) VALUES
(28, 'Christine', 'Veracruz', 'Canimo', 'tintin', 'ten', 'Female', 'Caloocan City', 'canimochristine04@gmail.com', '09974261210', '1998-02-04', '2017-03-16', '2017-03-16'),
(29, 'Christian Aries', 'Veracruz', 'Canimo', 'aries', 'xtian', 'Male', 'Caloocan City', 'christian@gmail.com', '09278730357', '0000-00-00', '2017-03-16', '2017-03-16'),
(30, 'Sherry', 'Villarivera', 'Calzado', 'Sheyshey', 'calzado', 'Female', 'Quezon City', 'sherry@gmail.com', '09876543213', '1997-10-24', '2017-03-17', '2017-03-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `attend_events`
--
ALTER TABLE `attend_events`
  ADD PRIMARY KEY (`attend_id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `idnumber` (`member_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`usercomment_id`),
  ADD KEY `idnumber` (`idnumber`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `coverphotos`
--
ALTER TABLE `coverphotos`
  ADD PRIMARY KEY (`cover#`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `idnumber` (`member_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `group_name` (`group_name`),
  ADD KEY `idnumber_2` (`idnumber`);

--
-- Indexes for table `exclusivestatus`
--
ALTER TABLE `exclusivestatus`
  ADD PRIMARY KEY (`exstat_id`),
  ADD KEY `poster_id` (`poster_id`),
  ADD KEY `userpfrofile_id` (`userprofile_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`),
  ADD KEY `idnumber` (`idnumber`),
  ADD KEY `group_creator` (`group_creator`),
  ADD KEY `no_members` (`no_members`),
  ADD KEY `group_name` (`group_name`);

--
-- Indexes for table `grpstatus`
--
ALTER TABLE `grpstatus`
  ADD PRIMARY KEY (`grpstat_id`),
  ADD KEY `idnumber` (`idnumber`),
  ADD KEY `fname` (`fname`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `mname` (`mname`),
  ADD KEY `lname` (`lname`);

--
-- Indexes for table `grp_comments`
--
ALTER TABLE `grp_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `grpstat_id` (`grpstat_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `idnumber` (`idnumber`,`fname`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `mname` (`mname`),
  ADD KEY `lname` (`lname`),
  ADD KEY `fname` (`fname`);

--
-- Indexes for table `notifs`
--
ALTER TABLE `notifs`
  ADD PRIMARY KEY (`notif_id`),
  ADD KEY `idnumber` (`idnumber`),
  ADD KEY `to whom?` (`to_whom`),
  ADD KEY `where?` (`stat_id`);

--
-- Indexes for table `numberofevents`
--
ALTER TABLE `numberofevents`
  ADD PRIMARY KEY (`primarynum`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `numberofgroups`
--
ALTER TABLE `numberofgroups`
  ADD PRIMARY KEY (`primarynum`),
  ADD KEY `idnumber` (`idnumber`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `numberofstatus`
--
ALTER TABLE `numberofstatus`
  ADD PRIMARY KEY (`primarynum`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `profilepic`
--
ALTER TABLE `profilepic`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`stat_id`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idnumber`),
  ADD KEY `idnumber` (`idnumber`),
  ADD KEY `fname` (`fname`),
  ADD KEY `username` (`username`),
  ADD KEY `mname` (`mname`),
  ADD KEY `lname` (`lname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attend_events`
--
ALTER TABLE `attend_events`
  MODIFY `attend_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `usercomment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `coverphotos`
--
ALTER TABLE `coverphotos`
  MODIFY `cover#` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `exclusivestatus`
--
ALTER TABLE `exclusivestatus`
  MODIFY `exstat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `grpstatus`
--
ALTER TABLE `grpstatus`
  MODIFY `grpstat_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `grp_comments`
--
ALTER TABLE `grp_comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
--
-- AUTO_INCREMENT for table `notifs`
--
ALTER TABLE `notifs`
  MODIFY `notif_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `numberofevents`
--
ALTER TABLE `numberofevents`
  MODIFY `primarynum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `numberofgroups`
--
ALTER TABLE `numberofgroups`
  MODIFY `primarynum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `numberofstatus`
--
ALTER TABLE `numberofstatus`
  MODIFY `primarynum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `profilepic`
--
ALTER TABLE `profilepic`
  MODIFY `img_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `stat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idnumber` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attend_events`
--
ALTER TABLE `attend_events`
  ADD CONSTRAINT `attend_events_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attend_events_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`stat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coverphotos`
--
ALTER TABLE `coverphotos`
  ADD CONSTRAINT `coverphotos_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_3` FOREIGN KEY (`group_name`) REFERENCES `groups` (`group_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_4` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `event_ibfk_5` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exclusivestatus`
--
ALTER TABLE `exclusivestatus`
  ADD CONSTRAINT `exclusivestatus_ibfk_1` FOREIGN KEY (`poster_id`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `exclusivestatus_ibfk_2` FOREIGN KEY (`userprofile_id`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grpstatus`
--
ALTER TABLE `grpstatus`
  ADD CONSTRAINT `grpstatus_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grpstatus_ibfk_4` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`),
  ADD CONSTRAINT `grpstatus_ibfk_5` FOREIGN KEY (`fname`) REFERENCES `users` (`fname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grpstatus_ibfk_6` FOREIGN KEY (`mname`) REFERENCES `users` (`mname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grpstatus_ibfk_7` FOREIGN KEY (`lname`) REFERENCES `users` (`lname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grp_comments`
--
ALTER TABLE `grp_comments`
  ADD CONSTRAINT `grp_comments_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grp_comments_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `members` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grp_comments_ibfk_3` FOREIGN KEY (`grpstat_id`) REFERENCES `grpstatus` (`grpstat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_4` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_5` FOREIGN KEY (`fname`) REFERENCES `users` (`fname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_6` FOREIGN KEY (`mname`) REFERENCES `users` (`mname`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_7` FOREIGN KEY (`lname`) REFERENCES `users` (`lname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifs`
--
ALTER TABLE `notifs`
  ADD CONSTRAINT `notifs_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifs_ibfk_2` FOREIGN KEY (`to_whom`) REFERENCES `users` (`idnumber`),
  ADD CONSTRAINT `notifs_ibfk_3` FOREIGN KEY (`stat_id`) REFERENCES `status` (`stat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `numberofevents`
--
ALTER TABLE `numberofevents`
  ADD CONSTRAINT `numberofevents_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `members` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `numberofgroups`
--
ALTER TABLE `numberofgroups`
  ADD CONSTRAINT `numberofgroups_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `numberofgroups_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `numberofstatus`
--
ALTER TABLE `numberofstatus`
  ADD CONSTRAINT `numberofstatus_ibfk_2` FOREIGN KEY (`idnumber`) REFERENCES `status` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profilepic`
--
ALTER TABLE `profilepic`
  ADD CONSTRAINT `profilepic_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `users` (`idnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
