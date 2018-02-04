-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2016 at 04:45 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lakshya`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`id` int(100) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `description`) VALUES
(4, 'Deepak Raj Priyanshu', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
(5, 'Priyanshu Raj', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
(6, 'Mohit Kumar', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
(7, 'Abhinandan Singh', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
(8, 'Deepak Kumar', 'Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit.');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `title`, `image`) VALUES
(1, '1', '220px-NDA_Insignia-1956.gif'),
(2, '2', '100-secure-website-site-lock-icon-shield.png'),
(3, '3', 'bird_st_columbas_600dpi.png'),
(5, '6', 'deepak (3).jpg'),
(6, '7', 'Ferrari-F80-Concept.jpg'),
(9, '7', 'Horror-Lady-Face-HD-Wallpaper-www.purehdwallpapers.in.jpg'),
(10, '8', 'LaFerrari007.jpg'),
(11, '9', 'maxresdefault.jpg'),
(12, '4', 'unnamed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
`id` int(100) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `content`) VALUES
(5, 'How to create form in html', 'birt.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(9, 'How to create form in html', 'Internet-commerce.idaho_.govcommunitiesinternet-marketing4.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(10, 'How to create form in html', 'students-computer.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(11, 'How to create form in html', 'tumblr_inline_nl1zc1sNUv1t0ni1n.jpg', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(12, 'How to create form in html', 'application.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(13, 'How to create form in html', 'contact (2).png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(14, 'How to create form in html', 'ecommerce (3).png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(15, 'How to create form in html', 'Ecommerce-Website-Development-India1.png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .'),
(16, 'How to create form in html', 'contact-us (1).png', 'in this post we are going to show you how to create frm in html. to create form we always open form tag first then close form tag after that create input text areas .');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'deepak', '12345'),
(3, 'priyanshu12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
