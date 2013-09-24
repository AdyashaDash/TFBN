-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 17, 2013 at 10:39 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.6-1ubuntu1.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `TFBN`
--

-- --------------------------------------------------------

--
-- Table structure for table `Blog_Data`
--

CREATE TABLE IF NOT EXISTS `Blog_Data` (
  `blog_id` int(10) DEFAULT NULL,
  `blog_data` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Blog_Data`
--

INSERT INTO `Blog_Data` (`blog_id`, `blog_data`) VALUES
(1, 'I&#8217;ve come across a lot of people over the years who deeply yearn for a time machine just to go back and revisit the <em>good ol&#8217; days</em>of music. If you&#8217;re one of those people who&#8217;ve been the victim of such a heinous crime by the limitations of technology, there&#8217;s nothing to worry about. Why? Because a Manchester-based band have been rising through the underground music scene with a sound that echoes the heydays of the &#8217;80s music scene, richly doused with their own special blend of flavour.'),
(2, 'So what if I told you Mickey Mouse was a part of the conspiracy that fooled you into believing that first man landed on the moon? A part of the hoaxes staged by NASA and other organizations to fake the Apollo program and the associated Moon landings. Shocked??!! Walt Disney supposedly sponsored the million-dollar hoax of the very first moon landing. Or so says blokes from the Flat Earth Society, who also (not surprisingly) argue that the earth is flat.'),
(3, 'Sure wizards duels are cool, but let us set Harry Potter aside for a moment, and look at some of the awesome-st combat scenes in fantasy movies that pumps up your adrenaline.'),
(4, 'Transfer season is upon and the incessant churning of the rumour mills are already at it&#8217;s peak. Holding true to tradition, transfer sagas involving a wantaway star, a recently triumphant club, and a host of suitors are in full swing. One that has carried on for the past two years has finally come to end with Neymar making a move to Barcelona. Definitely did not see that one coming.'),
(5, '"It''s a magical world, Hobbes, ol'' buddy lets go exploring"');

-- --------------------------------------------------------

--
-- Table structure for table `editcodes`
--

CREATE TABLE IF NOT EXISTS `editcodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `divID` varchar(10) DEFAULT NULL,
  `code` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `editcodes`
--

INSERT INTO `editcodes` (`id`, `divID`, `code`) VALUES
(1, 'newsfeed', '<div class="news news0" id="leftend"><img src="../Blog/Images/1.jpg" /><a href="http://www.thefishbowlnetwork.com/blog/the-1975/" target="_blank">On the Rise : 1975</a></div>\r\n\r\n<div class="news news1" id="left"><img src="../Blog/Images/2.jpg" /><a href="http://www.thefishbowlnetwork.com/blog/moon-landing-hoax/" target="_blank">THE MOON LANDING HOAX</a></div>\r\n\r\n<div class="news news2" id="center"><img src="../Blog/Images/3.jpg" /><a href="http://www.thefishbowlnetwork.com/blog/fantasay-movie-scene/" target="_blank">THE MATRIX</a></div>\r\n\r\n<div class="news news3" id="right"><img src="../Blog/Images/4.jpg" /><a href="http://www.thefishbowlnetwork.com/blog/mario-gomez/" target="_blank">MARIO GOMEZ</a></div>\r\n\r\n<div class="news news4" id="rightend"><img src="../Blog/Images/5.jpg" /><a href="http://www.thefishbowlnetwork.com/blog/magical-world-calvin-hobbes/" target="_blank">CALVIN AND HOBBES</a></div>\r\n'),
(2, 'CSRslider', '<p><img id="topL" src="../CSR/Images/black.png" style="height:150px; width:150px" /> <img id="topR" src="../CSR/Images/green.jpg" style="height:150px; width:150px" /> <img id="downL" src="../CSR/Images/12.png" style="height:150px; width:150px" /> <img id="downR" src="../CSR/Images/13.jpeg" style="height:150px; width:150px" /> <img id="Bigimg" src="" /></p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
