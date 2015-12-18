-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 03:23 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `satub_4754`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `code` varchar(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `calories` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `code`, `name`, `price`, `description`, `calories`) VALUES
(1, 'WFBG01', 'Belgian Waffles', '$5.95', 'Two of our famous Belgian Waffles with plenty of real maple syrup', 650),
(2, 'WFBG02', 'Strawberry Belgian Waffles', '$7.95', 'Light Belgian waffles covered with strawberries and whipped cream', 900),
(3, 'WFBG03', 'Berry-Berry Belgian Waffles', '$8.95', 'Light Belgian waffles covered with an assortment of fresh berries and whipped cream', 900),
(4, 'TOFR01', 'French Toast', '$4.50', 'Thick slices made from our homemade sourdough bread', 600),
(5, 'BRHO01', 'Homestyle Breakfast', '$6.95', 'Two eggs, bacon or sausage, toast, and our ever-popular hash browns', 950),
(6, 'WFSW01', 'Sweden Waffles', '$6.95', 'Light Sweden waffles covered with cherry and whipped cream', 900);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
