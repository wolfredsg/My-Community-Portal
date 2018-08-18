-- phpMyAdmin SQL Dump
-- version 4.0.10.19
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2018 at 04:39 AM
-- Server version: 5.6.36-log
-- PHP Version: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mailing_list`
--

CREATE TABLE IF NOT EXISTS `mailing_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mailing_list`
--

INSERT INTO `mailing_list` (`id`, `firstname`, `lastname`, `email`) VALUES
(1, 'Willy', 'Pajayat', 'wmp417@yahoo.com'),
(2, 'Wilfred', 'Pajayat', 'willy.pajayat@gmail.com'),
(3, 'Nanette', 'Pajayat', 'topspeedsg@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `company` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `is_block` tinyint(1) NOT NULL DEFAULT '0',
  `is_subscribed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `firstname`, `lastname`, `email`, `city`, `country`, `company`, `password`, `is_admin`, `is_block`, `is_subscribed`) VALUES
(1, 'Willy', 'Pajayat', 'wmp417@yahoo.com', 'Manila', 'Philippines', 'ABC Company', '5932477ff12bb1e1092805267bda177d', 1, 0, 1),
(3, 'Michael', 'Jordan', 'willy.pajayat@gmail.com', 'Chicago', 'USA', 'Red Bulls', 'cfcd208495d565ef66e7dff9f98764da', 0, 0, 1),
(4, 'John', 'Bull', 'willy_pajayat@yahoo.com', 'London', 'United Kingdom', 'Great Corp', '3d863b367aa379f71c7afc0c9cdca41d', 0, 0, 1),
(5, 'Nanette', 'Pajayat', 'topspeedsg@outlook.com', 'Singapore', 'Singapore', 'Top Speed', 'e58cc5ca94270acaceed13bc82dfedf7', 0, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
