-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2017 at 05:28 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interning`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `aid` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `internship` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`aid`, `user`, `internship`) VALUES
(4, 3, 1),
(5, 3, 2),
(6, 3, 3),
(7, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `comp_name`, `description`, `contact`, `email`, `password`, `category`) VALUES
(1, 'techon', 'A free technical discussion forum for everybody', '2147483647', 'ahujaa.hits@gmail.com', '3f700cf7e7cccd7df002ffdb4b8ce992177c21b8', 2),
(2, 'WorkHour', 'A super workplace startup', '7774441111', 'ahujaa.hits@gmail.comm', '9de8a3f88cced14ddad38c442a86858b13e2d9a2', 2),
(3, 'Random name', 'any short description about your company. Well no one is going to read about it.', '1234567899', 'admin@random.com', 'fa213fbfd3c4bd1e298a01faee0652ce8aece66e', 2);

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `iid` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `stipend` varchar(50) NOT NULL,
  `start` varchar(50) NOT NULL,
  `apply` varchar(50) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `comp_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`iid`, `title`, `description`, `stipend`, `start`, `apply`, `skills`, `duration`, `comp_name`) VALUES
(1, 'Web Development', 'A web development internship where you will need to design a discussion forum from the scratch along with its maintenance and hosting responsibilities', '5000 per month`', 'immediately', '20 june', 'php and mysql', '3 months', 'techon'),
(2, 'asadaf', 'jsjsj', 'jdj', 'jdj', 'jdj', 'djdjdjddjdjjjjj', 'jshjshs', 'techon'),
(3, 'asadaf', 'jsjsj', 'jdj', 'jdj', 'jdj', 'djdjdjddjdjjjjj', 'jshjshs', 'techon'),
(4, 'Marketing', 'Intern will be responsible for marketing of our site in their institutes.', 'performance based.', '!st july', '25th june', 'English proficiency', '6 months (part time)', 'Random name');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `institute` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `gender`, `contact`, `email`, `institute`, `password`, `category`) VALUES
(0, 'Hitesh', 'male', '2147483647', 'ahuja.hits812@yahoo.com', 'ABV-IIITM Gwalior', '8d3fef65d38a88ba05e6efb96fb8de9aade1e0e4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `category` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `category`) VALUES
(3, 'ahuja.hits812@yahoo.com', '8d3fef65d38a88ba05e6efb96fb8de9aade1e0e4', 1),
(4, 'ahujaa.hits@gmail.com', '3f700cf7e7cccd7df002ffdb4b8ce992177c21b8', 2),
(5, 'ahujaa.hits@gmail.comm', '9de8a3f88cced14ddad38c442a86858b13e2d9a2', 2),
(6, 'admin@random.com', 'fa213fbfd3c4bd1e298a01faee0652ce8aece66e', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
