table structures for users with test data

-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2017 at 01:37 PM
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mytable_sweepst2`
--

-- --------------------------------------------------------

--
-- Table structure for table `sweep_draw_user_unencrypted`
--

CREATE TABLE IF NOT EXISTS `sweep_draw_user_unencrypted` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `referer` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `street_address` varchar(255) DEFAULT NULL,
  `streetAddress` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `token` varchar(128) DEFAULT NULL,
  `pwd_crypt` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'web/uploads/default.jpg',
  `entries` int(11) NOT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `ip_address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `pointsClick` int(11) NOT NULL DEFAULT '0',
  `pointsShared` int(11) NOT NULL DEFAULT '0',
  `pointsNewSignups` int(11) NOT NULL DEFAULT '0',
  `totalPointsClicked` int(11) NOT NULL DEFAULT '0',
  `totalPointsShared` int(11) NOT NULL DEFAULT '0',
  `totalPointsSignups` int(11) NOT NULL DEFAULT '0',
  `drawsDaily` int(11) NOT NULL DEFAULT '0',
  `drawsWeekly` int(11) NOT NULL DEFAULT '0',
  `drawsMonthly` int(11) NOT NULL DEFAULT '0',
  `blacklist` tinytext,
  `display_hidden_results` tinyint(1) NOT NULL DEFAULT '0',
  `chat_status` varchar(255) DEFAULT 'offline',
  `is_typing_to` int(10) DEFAULT '0',
  `http_referer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_address` (`email_address`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4306 ;


INSERT INTO `sweep_draw_user_unencrypted` (`id`, `fullname`, `username`, `referer`, `email_address`, `phone`, `street_address`, `streetAddress`, `city`, `country`, `password`, `token`, `pwd_crypt`, `state`, `zip`, `picture`, `entries`, `is_active`, `is_super_admin`, `last_login`, `ip_address`, `created_at`, `updated_at`, `gender`, `birthday`, `pointsClick`, `pointsShared`, `pointsNewSignups`, `totalPointsClicked`, `totalPointsShared`, `totalPointsSignups`, `drawsDaily`, `drawsWeekly`, `drawsMonthly`, `blacklist`, `display_hidden_results`, `chat_status`, `is_typing_to`, `http_referer`) VALUES
(4161, 'test test', 'test', '', 'test@here.com', '1-1-1', '123 street', '', 'city', 'asdf', '123123', NULL, '', 'asdf', 'ljkasdf', 'web/uploads/default.jpg', 0, 0, 0, '2016-11-15 00:06:28', '128.0.0.1', '2016-11-15 00:06:28', '2016-11-15 00:06:28', 'female', '0001-01-01', 74, 147, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 'offline', 0, NULL),
(4189, 'test test', 'test', '', 'test@here2.com', '2-2-2', 'asdfljk', '', 'asdflj', 'asdflkj', '123123', NULL, '', 'asdflj', '90210', 'web/uploads/default.jpg', 0, 0, 0, '2016-11-29 22:16:06', '128.0.0.1', '2016-11-29 22:16:06', '2016-11-29 22:16:06', 'female', '0001-01-01', 985, 0, 0, 15, 0, 0, 0, 0, 0, NULL, 0, 'offline', 0, NULL),
(4190, 'test test', '', '', 'test@here3.com', 'j-j-j', 'j', '', 'j', 'j', '123123', NULL, '', 'j', 'j', 'web/uploads/default.jpg', 0, 0, 0, '2016-12-02 01:57:04', '128.0.0.1', '2016-12-02 01:57:04', '2016-12-02 01:57:04', 'female', '0000-00-00', 735, 0, 0, 275, 0, 0, 0, 0, 0, NULL, 0, 'offline', 0, NULL),
(4252, 'test test', 'test', '', 'test234234@here.com', '1-1-1', 'asdflkj', '', 'lkj', 'lkj', '123123', NULL, '', 'lkj', 'ljk', 'web/uploads/default.jpg', 0, 0, 0, '2016-12-22 20:42:53', '128.0.0.1', '2016-12-22 20:42:53', '2016-12-22 20:42:53', 'female', '0001-01-01', 3, 6, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 'offline', 0, NULL),
(4258, 'test test', 'test', '', 'test@somewhere.com', '1-1-1', '123 street', '', 'asldjkf', 'lkj', '123123', NULL, '', 'lj', 'ljk', 'web/uploads/default.jpg', 0, 0, 0, '2016-12-23 16:20:05', '128.0.0.1', '2016-12-23 16:20:05', '2016-12-23 16:20:05', 'female', '0001-01-01', 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 'offline', 0, NULL);


-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2017 at 01:39 PM
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mytable_sweepst2`
--

-- --------------------------------------------------------

--
-- Table structure for table `userLogins`
--

CREATE TABLE IF NOT EXISTS `userLogins` (
  `autoID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `ipAddress` varchar(50) NOT NULL,
  `ipAddressFull` varchar(255) NOT NULL,
  `dateTime` datetime NOT NULL,
  `http_referer` tinytext NOT NULL,
  `userDevice` varchar(255) NOT NULL,
  PRIMARY KEY (`autoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=180618 ;

--
-- Dumping data for table `userLogins`
--

INSERT INTO `userLogins` (`autoID`, `userID`, `fullname`, `ipAddress`, `ipAddressFull`, `dateTime`, `http_referer`, `userDevice`) VALUES
(157642, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-15 00:06:28', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(157643, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-15 00:06:29', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(157661, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-15 07:46:52', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(157783, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-16 11:27:34', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(157784, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-16 11:27:34', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(157796, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-16 13:57:09', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(157802, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-16 16:19:51', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(157916, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-17 16:16:38', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(157942, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-17 22:46:31', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158143, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-19 01:42:23', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158144, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-19 01:53:36', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158289, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-19 10:58:28', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158324, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-19 18:12:27', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158377, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 08:24:00', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158388, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 12:17:03', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158389, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 12:17:53', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158390, 4162, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 12:22:27', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158403, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 14:08:52', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158404, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 14:08:53', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158415, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 15:13:05', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158424, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:18:38', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158425, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:18:38', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158427, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:20:36', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158428, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:20:36', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158430, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:22:55', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158433, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:26:13', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158434, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:26:13', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158436, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:27:45', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158437, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:27:45', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0'),
(158438, 4161, 'test test', '127.0.0.1', 'cabelcustomer.com', '2016-11-20 16:27:50', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0');


-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2017 at 01:41 PM
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mytable_sweepst2`
--

-- --------------------------------------------------------

--
-- Table structure for table `sweep_draw_contest`
--

CREATE TABLE IF NOT EXISTS `sweep_draw_contest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `emailcontact` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `prize_value` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `sponsor` varchar(255) NOT NULL,
  `sponsor_website` varchar(255) NOT NULL,
  `sponsor_logo` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `countries` varchar(255) DEFAULT NULL,
  `states` varchar(255) DEFAULT NULL,
  `ages` varchar(255) DEFAULT NULL,
  `excluding` varchar(255) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `frequency_period` varchar(50) DEFAULT NULL,
  `frequency_options` varchar(50) DEFAULT NULL,
  `types` varchar(50) DEFAULT NULL,
  `category` tinytext,
  `prizes` tinytext,
  `keywords` varchar(255) DEFAULT NULL,
  `entry_link` varchar(255) DEFAULT NULL,
  `rules_link` varchar(255) DEFAULT NULL,
  `winners_link` varchar(255) DEFAULT NULL,
  `approved` datetime DEFAULT NULL,
  `canceled` datetime DEFAULT NULL,
  `popularity` int(11) NOT NULL DEFAULT '-1',
  `votes` int(11) NOT NULL DEFAULT '0',
  `premiumSweepstakes` int(11) NOT NULL DEFAULT '0',
  `captchaSweepstakes` int(11) NOT NULL DEFAULT '0',
  `millionairesSweepstakes` int(11) NOT NULL DEFAULT '0',
  `prize_details` text,
  `prize_bonus` text,
  `hideSweepstakes` int(11) NOT NULL,
  `reviewedBy` varchar(255) NOT NULL,
  `reviewedDate` datetime NOT NULL,
  `reviewedIPAddress` varchar(20) NOT NULL,
  `newExcelListMarker` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`),
  KEY `state` (`approved`,`canceled`,`end_date`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `description` (`description`),
  FULLTEXT KEY `keywords` (`keywords`),
  FULLTEXT KEY `prizes` (`prizes`),
  FULLTEXT KEY `sponsor` (`sponsor`),
  FULLTEXT KEY `category` (`category`),
  FULLTEXT KEY `url_3` (`title`,`description`,`prizes`,`keywords`,`category`),
  FULLTEXT KEY `title_2` (`title`,`description`,`prizes`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=222089 ;

--
-- Dumping data for table `sweep_draw_contest`
--

INSERT INTO `sweep_draw_contest` (`id`, `url`, `emailcontact`, `notes`, `title`, `start_date`, `end_date`, `prize_value`, `image`, `sponsor`, `sponsor_website`, `sponsor_logo`, `description`, `countries`, `states`, `ages`, `excluding`, `frequency`, `frequency_period`, `frequency_options`, `types`, `category`, `prizes`, `keywords`, `entry_link`, `rules_link`, `winners_link`, `approved`, `canceled`, `popularity`, `votes`, `premiumSweepstakes`, `captchaSweepstakes`, `millionairesSweepstakes`, `prize_details`, `prize_bonus`, `hideSweepstakes`, `reviewedBy`, `reviewedDate`, `reviewedIPAddress`, `newExcelListMarker`) VALUES
(222081, 'http://www.goodreads.com/giveaway/show/216823-a-meatloaf-in-every-oven-two-chatty-cooks-one-iconic-dish-and-dozens-o', '', '', 'Goodreads - A Meatloaf in Every Oven Giveaway', '0000-00-00', '2017-01-08', 0, '', '', '', '', '', ',USA,', NULL, NULL, NULL, NULL, ',Once,', NULL, ',online sweepstakes,', ',Books :: Books,', '', NULL, NULL, '', NULL, '2014-01-01 00:00:00', NULL, -1, 0, 0, 0, 0, NULL, NULL, 0, '', '0000-00-00 00:00:00', '', ''),
(222082, 'http://www.goodreads.com/giveaway/show/216820-the-lost-woman', '', '', 'Goodreads - The Lost Woman Giveaway', '0000-00-00', '2017-01-08', 0, '', '', '', '', '', ',USA,', NULL, NULL, NULL, NULL, ',Once,', NULL, ',online sweepstakes,', ',Books :: Books,', '', NULL, NULL, '', NULL, '2014-01-01 00:00:00', NULL, -1, 0, 0, 0, 0, NULL, NULL, 0, '', '0000-00-00 00:00:00', '', ''),
(222083, 'http://www.goodreads.com/giveaway/show/216819-the-year-of-yes-journal', '', '', 'Goodreads - The Year of Yes Journal Giveaway', '0000-00-00', '2017-01-09', 0, '', '', '', '', '', ',USA,', NULL, NULL, NULL, NULL, ',Once,', NULL, ',online sweepstakes,', ',Books :: Books,', '', NULL, NULL, '', NULL, '2014-01-01 00:00:00', NULL, -1, 0, 0, 0, 0, NULL, NULL, 0, '', '0000-00-00 00:00:00', '', ''),
(222084, 'http://www.goodreads.com/giveaway/show/216948-the-analects', '', '', 'Goodreads - The Analects Giveaway', '0000-00-00', '2017-01-18', 0, '', '', '', '', '', ',USA,', NULL, NULL, NULL, NULL, ',Once,', NULL, ',online sweepstakes,', ',Books :: Books,', '', NULL, NULL, '', NULL, '2014-01-01 00:00:00', NULL, -1, 0, 0, 0, 0, NULL, NULL, 0, '', '0000-00-00 00:00:00', '', ''),
(222085, 'http://www.bhg.com/bhg/xfile.jsp?item=/contests/BHG_Grocery0117/bhg_splash_grocery0117&amp;temp=testing&amp;brandsource=bhg&amp;psrc=R701BTA232302A', '', '', 'Better Homes and Gardens - $2,500 Grocery Sweepstakes', '0000-00-00', '2017-03-31', 0, '', '', '', '', '', ',USA,', NULL, NULL, NULL, NULL, ',Daily,', NULL, ',online sweepstakes,', ',Other :: Other,', '', NULL, NULL, '', NULL, '2014-01-01 00:00:00', NULL, -1, 0, 0, 0, 0, NULL, NULL, 0, '', '0000-00-00 00:00:00', '', '');


-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2017 at 01:42 PM
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `mytable_sweepst2`
--

-- --------------------------------------------------------

--
-- Table structure for table `userSearches`
--

CREATE TABLE IF NOT EXISTS `userSearches` (
  `autoID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `dateTime` datetime NOT NULL,
  `ipAddress` varchar(30) NOT NULL,
  `actualSearchQuery` varchar(255) NOT NULL,
  `directoryLink` varchar(255) NOT NULL,
  `userDevice` varchar(255) NOT NULL,
  `httpReferer` varchar(255) NOT NULL,
  PRIMARY KEY (`autoID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=221373 ;

--
-- Dumping data for table `userSearches`
--

INSERT INTO `userSearches` (`autoID`, `userID`, `fullName`, `dateTime`, `ipAddress`, `actualSearchQuery`, `directoryLink`, `userDevice`, `httpReferer`) VALUES
(204150, 4161, 'test test', '2016-11-15 14:42:52', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204152, 4161, 'test test', '2016-11-15 16:28:29', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204153, 4161, 'test test', '2016-11-15 16:32:30', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204154, 4161, 'test test', '2016-11-15 16:36:22', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204155, 4161, 'test test', '2016-11-15 16:37:39', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204156, 4161, 'test test', '2016-11-15 16:37:52', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204157, 4161, 'test test', '2016-11-15 16:38:01', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204158, 4161, 'test test', '2016-11-15 16:38:24', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204159, 4161, 'test test', '2016-11-15 16:38:32', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204160, 4161, 'test test', '2016-11-15 16:38:49', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204161, 4161, 'test test', '2016-11-15 16:39:16', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204162, 4161, 'test test', '2016-11-15 16:39:25', '127.0.0.1', '/directory/automobiles/boats_or_motorboats/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204163, 4161, 'test test', '2016-11-15 16:52:28', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204166, 4161, 'test test', '2016-11-15 16:58:01', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204167, 4161, 'test test', '2016-11-15 16:58:01', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204168, 4161, 'test test', '2016-11-15 16:59:51', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204169, 4161, 'test test', '2016-11-15 17:00:27', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204170, 4161, 'test test', '2016-11-15 17:03:46', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204230, 4162, 'test test', '2016-11-16 11:41:20', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204231, 4162, 'test test', '2016-11-16 11:42:17', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204232, 4162, 'test test', '2016-11-16 11:49:06', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204233, 4162, 'test test', '2016-11-16 11:50:36', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204234, 4162, 'test test', '2016-11-16 11:51:00', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204235, 4162, 'test test', '2016-11-16 11:52:12', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204236, 4162, 'test test', '2016-11-16 11:53:37', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204237, 4162, 'test test', '2016-11-16 11:54:12', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204238, 4162, 'test test', '2016-11-16 11:54:42', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204239, 4162, 'test test', '2016-11-16 12:12:00', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204386, 4162, 'test test', '2016-11-19 01:53:50', '127.0.0.1', '/directory/automobiles/', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', ''),
(204387, 4162, 'test test', '2016-11-19 01:59:44', '127.0.0.1', 'pro-rock.com', '', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0', '');
