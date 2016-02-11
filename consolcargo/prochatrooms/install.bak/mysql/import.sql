-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2013 at 01:51 PM
-- Server version: 5.5.20-log
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prochatrooms8`
--

-- --------------------------------------------------------

--
-- Table structure for table `prochatrooms_config`
--

CREATE TABLE IF NOT EXISTS `prochatrooms_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminLogin` varchar(32) NOT NULL DEFAULT '',
  `modLogin` varchar(32) NOT NULL DEFAULT '',
  `avatars` text NOT NULL,
  `badwords` text NOT NULL,
  `font_color` text NOT NULL,
  `font_size` text NOT NULL,
  `font_family` text NOT NULL,
  `sfx` text NOT NULL,
  `smilies_text` text NOT NULL,
  `smilies_images` text NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'Male,Female,Couple',
  `profileOn` varchar(3) NOT NULL DEFAULT '',
  `profileUrl` varchar(255) NOT NULL DEFAULT '',
  `profileRef` varchar(3) NOT NULL DEFAULT '',
  `privateOn` varchar(3) NOT NULL DEFAULT '',
  `whisperOn` varchar(3) NOT NULL DEFAULT '',
  `webcamsOn` varchar(3) NOT NULL DEFAULT '',
  `advertsOn` varchar(3) NOT NULL DEFAULT '',
  `enableUrl` varchar(3) NOT NULL DEFAULT '',
  `enableEmail` varchar(3) NOT NULL DEFAULT '',
  `enableShoutFilter` varchar(3) NOT NULL DEFAULT '',
  `floodChat` varchar(3) NOT NULL DEFAULT '',
  `defaultSFX` varchar(25) NOT NULL DEFAULT '',
  `newPm` varchar(10) NOT NULL DEFAULT '',
  `newPmMin` varchar(10) NOT NULL DEFAULT '',
  `refreshRate` varchar(10) NOT NULL DEFAULT '',
  `displayMDiv` varchar(13) NOT NULL DEFAULT '',
  `totalMessages` varchar(3) NOT NULL DEFAULT '',
  `showMessages` varchar(3) NOT NULL DEFAULT '',
  `admin` varchar(255) NOT NULL DEFAULT '',
  `textAdverts` varchar(3) NOT NULL DEFAULT '0',
  `textAdvertsDesc` text NOT NULL,
  `textAdvertsRate` varchar(3) NOT NULL DEFAULT '10',
  `userStatusMes` varchar(50) NOT NULL DEFAULT 'here,brb,away',
  `showTimeStamp` varchar(3) NOT NULL DEFAULT '1',
  `news` text NOT NULL,
  `integrated` varchar(3) NOT NULL DEFAULT '0',
  `eCredits` varchar(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `prochatrooms_config`
--

INSERT INTO `prochatrooms_config` (`id`, `adminLogin`, `modLogin`, `avatars`, `badwords`, `font_color`, `font_size`, `font_family`, `sfx`, `smilies_text`, `smilies_images`, `gender`, `profileOn`, `profileUrl`, `profileRef`, `privateOn`, `whisperOn`, `webcamsOn`, `advertsOn`, `enableUrl`, `enableEmail`, `enableShoutFilter`, `floodChat`, `defaultSFX`, `newPm`, `newPmMin`, `refreshRate`, `displayMDiv`, `totalMessages`, `showMessages`, `admin`, `textAdverts`, `textAdvertsDesc`, `textAdvertsRate`, `userStatusMes`, `showTimeStamp`, `news`, `integrated`, `eCredits`) VALUES
(1, '25e4ee4e9229397b6b17776bfceaf8e7', '', 'couple.gif,female.gif,male.gif,phone.gif,', '', '#000000,#003300,#006600,#009900,#00CC00,#00FF00,#000033,#003333,#006633,#009933,#00CC33,#00FF33,#000066,#003366,#006666,#009966,#00CC66,#00FF66,#000099,#003399,#006699,#009999,#00CC99,#00FF99,#0000CC,#0033CC,#0066CC,#0099CC,#00CCCC,#00FFCC,#0000FF,#0033FF,#0066FF,#0099FF,#00CCFF,#00FFFF,#990000,#993300,#996600,#999900,#99CC00,#99FF00,#990033,#993333,#996633,#999933,#99CC33,#99FF33,#990066,#993366,#996666,#999966,#99CC66,#99FF66,#990099,#993399,#996699,#999999,#99CC99,#99FF99,#9900CC,#9933CC,#9966CC,#9999CC,#99CCCC,#99FFCC,#9900FF,#9933FF,#9966FF,#9999FF,#99CCFF,#99FFFF,#FF0000,#FF3300,#FF6600,#FF9900,#FFCC00,#FFFF00,#FF0033,#FF3333,#FF6633,#FF9933,#FFCC33,#FFFF33,#FF0066,#FF3366,#FF6666,#FF9966,#FFCC66,#FFFF66,#FF0099,#FF3399,#FF6699,#FF9999,#FFCC99,#FFFF99,#FF00CC,#FF33CC,#FF66CC,#FF99CC,#FFCCCC,#FFFFCC,#FF00FF,#FF33FF,#FF66FF,#FF99FF,#FFCCFF,#FFFFFF', '12px,14px,16px,18px,20px,22px', 'Arial,Verdana,Times New Roman,Courier,Comic Sans MS,Georgia', 'bite.mp3,boo.mp3,burp.mp3,cough.mp3,die.mp3,evil.mp3,fart.mp3,giggle.mp3,hiccup.mp3,kiss.mp3,punches.mp3,ricochet.mp3,scream.mp3,slap.mp3,slurp.mp3,smooch.mp3,sneeze.mp3,snore.mp3,yehaw.mp3', ':),;),:P,:7,;(,:(,:V,[(,[x,:h,*R,8),:d,:L,:o,', 'smile.gif,wink.gif,puh2.gif,blush.gif,cry.gif,sadley.gif,confused.gif,frown.gif,frusty.gif,heart.gif,rolleyes.gif,shadey.gif,biggrin.gif,loveit.gif,omg.gif,', 'Male,Female,Couple', '1', 'profiles/?id=', '0', '1', '1', '0', '0', '1', '1', '0', '2', 'beep_high.mp3', '#EDF1FA', '#B9D3EE', '3000', 'chatContainer', '30', '0', 'admin%2C', '1', '1|Visit http://google.com,1|Visit http://msn.com,2|Visit http://yahoo.com', '10', 'select,Here%2CBRB%2CAway', '1', 'Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `prochatrooms_group`
--

CREATE TABLE IF NOT EXISTS `prochatrooms_group` (
  `id` varchar(3) NOT NULL DEFAULT '1',
  `groupName` varchar(64) NOT NULL DEFAULT '0',
  `groupChat` varchar(3) NOT NULL DEFAULT '0',
  `groupPChat` varchar(3) NOT NULL DEFAULT '0',
  `groupCams` varchar(3) NOT NULL DEFAULT '0',
  `groupWatch` varchar(3) NOT NULL DEFAULT '0',
  `groupRooms` varchar(3) NOT NULL DEFAULT '0',
  `groupShare` varchar(3) NOT NULL DEFAULT '0',
  `groupVideo` varchar(3) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prochatrooms_group`
--

INSERT INTO `prochatrooms_group` (`id`, `groupName`, `groupChat`, `groupPChat`, `groupCams`, `groupWatch`, `groupRooms`, `groupShare`, `groupVideo`) VALUES
('2', 'Member', '1', '1', '1', '1', '1', '1', '1'),
('1', 'Guest', '1', '1', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `prochatrooms_message`
--

CREATE TABLE IF NOT EXISTS `prochatrooms_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) NOT NULL DEFAULT '0',
  `mid` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `tousername` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sfx` varchar(50) NOT NULL DEFAULT '',
  `room` varchar(32) NOT NULL DEFAULT '',
  `share` varchar(3) NOT NULL DEFAULT '0',
  `messtime` varchar(20) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prochatrooms_profiles`
--

CREATE TABLE IF NOT EXISTS `prochatrooms_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL DEFAULT '',
  `real_name` varchar(64) NOT NULL DEFAULT '',
  `age` varchar(64) NOT NULL DEFAULT '',
  `gender` varchar(64) NOT NULL DEFAULT '',
  `photo` varchar(64) NOT NULL DEFAULT '',
  `location` varchar(64) NOT NULL DEFAULT '',
  `hobbies` varchar(64) NOT NULL DEFAULT '',
  `aboutme` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prochatrooms_rooms`
--

CREATE TABLE IF NOT EXISTS `prochatrooms_rooms` (
  `id` varchar(10) NOT NULL DEFAULT '0',
  `roomid` varchar(32) NOT NULL DEFAULT '',
  `roomname` varchar(255) NOT NULL DEFAULT '',
  `roomowner` varchar(100) NOT NULL DEFAULT '',
  `roompassword` varchar(100) NOT NULL DEFAULT '',
  `roomusers` varchar(100) NOT NULL DEFAULT '0',
  `roomcreated` varchar(100) NOT NULL DEFAULT '',
  `roombg` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `roomdesc` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prochatrooms_rooms`
--

INSERT INTO `prochatrooms_rooms` (`id`, `roomid`, `roomname`, `roomowner`, `roompassword`, `roomusers`, `roomcreated`, `roombg`, `roomdesc`) VALUES
('1', '', 'Lobby', '1', '', '0', '0', 'default.jpg', 'Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.'),
('2', '', 'Lounge', '1', '', '0', '0', 'default.jpg', 'Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.'),
('3', '', 'Chill+Out', '1', '', '0', '0', 'default.jpg', 'Lorem+ipsum+dolor+sit+amet%2C+consectetur+adipisicing+elit%2C+sed+do+eiusmod+tempor+incididunt+ut+labore+et+dolore+magna+aliqua.+Ut+enim+ad+minim+veniam%2C+quis+nostrud+exercitation+ullamco+laboris+nisi+ut+aliquip+ex+ea+commodo+consequat.+Duis+aute+irure+dolor+in+reprehenderit+in+voluptate+velit+esse+cillum+dolore+eu+fugiat+nulla+pariatur.+Excepteur+sint+occaecat+cupidatat+non+proident%2C+sunt+in+culpa+qui+officia+deserunt+mollit+anim+id+est+laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `prochatrooms_users`
--

CREATE TABLE IF NOT EXISTS `prochatrooms_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `userid` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `userIP` varchar(32) NOT NULL DEFAULT '0',
  `prevroom` varchar(32) NOT NULL DEFAULT '1',
  `room` varchar(32) NOT NULL DEFAULT '',
  `avatar` varchar(50) NOT NULL DEFAULT '',
  `watching` text NOT NULL,
  `webcam` varchar(10) NOT NULL DEFAULT '0',
  `streamID` varchar(50) NOT NULL DEFAULT '0',
  `active` varchar(10) NOT NULL DEFAULT '0',
  `lastActive` varchar(32) NOT NULL DEFAULT '0',
  `kick` varchar(10) NOT NULL DEFAULT '',
  `ban` varchar(3) NOT NULL DEFAULT '',
  `online` varchar(3) NOT NULL DEFAULT '',
  `status` varchar(255) NOT NULL DEFAULT '0',
  `blocked` text NOT NULL,
  `eCredits` varchar(255) NOT NULL DEFAULT '0',
  `eCreditsEarned` varchar(100) NOT NULL DEFAULT '0',
  `points` varchar(100) NOT NULL DEFAULT '0',
  `guest` varchar(3) NOT NULL DEFAULT '0',
  `userGroup` varchar(3) NOT NULL DEFAULT '1',
  `enabled` varchar(12) NOT NULL DEFAULT '0',
  `admin` varchar(3) NOT NULL DEFAULT '0',
  `moderator` varchar(3) NOT NULL DEFAULT '0',
  `speaker` varchar(3) NOT NULL DEFAULT '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
