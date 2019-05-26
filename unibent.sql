-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 02:01 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unibent`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_configuration`
--

CREATE TABLE `booking_configuration` (
  `id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `booking_fee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_configuration`
--

INSERT INTO `booking_configuration` (`id`, `location`, `booking_fee`) VALUES
(1, 'Romford Head Office', '150');

-- --------------------------------------------------------

--
-- Table structure for table `site_config`
--

CREATE TABLE `site_config` (
  `id` int(255) NOT NULL,
  `helpline_number` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `site_title` varchar(255) NOT NULL,
  `site_theme` varchar(255) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `logo_footer` varchar(255) NOT NULL,
  `logo_header` varchar(255) NOT NULL,
  `social_fb` varchar(255) NOT NULL,
  `social_tw` varchar(255) NOT NULL,
  `social_go` varchar(255) NOT NULL,
  `social_insta` varchar(255) NOT NULL,
  `social_heart` varchar(255) NOT NULL,
  `footer_about` longtext NOT NULL,
  `maps` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_config`
--

INSERT INTO `site_config` (`id`, `helpline_number`, `address`, `email`, `site_title`, `site_theme`, `footer_text`, `logo_footer`, `logo_header`, `social_fb`, `social_tw`, `social_go`, `social_insta`, `social_heart`, `footer_about`, `maps`) VALUES
(1, '07483320612', 'Suit 2,121 Victoria road<br>\r\nRomford RM1 @LX', 'info@unibent.co.uk', 'Unibent', 'Lets Drive', '&copy; 2019 - All rights reserved by Unibent Ltd, UK.', 'http://www.unibent.co.uk/assets/images/logo.png', 'http://www.unibent.co.uk/assets/images/logo.png', 'https://www.facebook.com/', 'https://twitter.com/', 'https://aboutme.google.com/u/0/?referer=gplus', 'https://www.instagram.com/', 'https://www.heartsocialuk.com/', 'Sometimes it is not so much about the destination, but how you choose to travel there. That is the viewpoint behind The Dream Collection to some of the greatest cars from most iconic manufacturers.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.599067627205!2d0.18669271529828121!3d51.57558311353724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8bb35295bb3af%3A0x1d7ad6675e510831!2sVictoria+Rd%2C+Romford!5e0!3m2!1sen!2suk!4v1558711745061!5m2!1sen!2suk\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_configuration`
--
ALTER TABLE `booking_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_config`
--
ALTER TABLE `site_config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_configuration`
--
ALTER TABLE `booking_configuration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_config`
--
ALTER TABLE `site_config`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
