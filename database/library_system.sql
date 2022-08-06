-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 06:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `accession_number_num`
--

CREATE TABLE `accession_number_num` (
  `accession_number_num_id` int(11) NOT NULL,
  `accession_number_num` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accession_number_num`
--

INSERT INTO `accession_number_num` (`accession_number_num_id`, `accession_number_num`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_available_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `admin_available_id`, `first_name`, `middle_name`, `last_name`, `address`, `gender`) VALUES
(3, 'ok', 'ok', 3, 'kjkjk', 'kjkjkj', 'jhhjh', 'jjjj', 'male'),
(6, 'sasuke', 'sasuke', 10, 'boda', 'asa', 'fasfda', 'asdasd', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `admin_available`
--

CREATE TABLE `admin_available` (
  `admin_available_id` int(11) NOT NULL,
  `admin_available` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_available`
--

INSERT INTO `admin_available` (`admin_available_id`, `admin_available`) VALUES
(1, 'USER'),
(2, 'USER'),
(3, 'USER'),
(4, 'USER'),
(5, 'ADMIN'),
(6, 'USER'),
(7, 'ADMIN'),
(8, 'ADMIN'),
(9, 'ADMIN'),
(10, 'ADMIN'),
(11, 'USER'),
(12, 'USER'),
(13, 'USER'),
(14, 'USER'),
(15, 'USER'),
(16, 'USER'),
(17, 'USER'),
(18, 'USER'),
(19, 'USER'),
(20, 'USER'),
(21, 'USER'),
(22, 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `student_student_id` int(11) NOT NULL,
  `time_in` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `student_student_id`, `time_in`) VALUES
(1, 4, 'Tuesday,  March 07,  2017 9:33 pm'),
(3, 5, 'Tuesday,  March 07,  2017 9:48 pm'),
(4, 6, 'Monday,  March 13,  2017 8:48 am'),
(5, 7, 'Saturday,  March 25,  2017 2:07 pm'),
(6, 6, 'Tuesday,  March 21,  2017 3:35 pm'),
(7, 8, 'Wednesday,  March 22,  2017 1:24 pm'),
(8, 8, 'Wednesday,  March 22,  2017 1:27 pm');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `author_num_id` int(11) NOT NULL,
  `author_type_id` int(11) NOT NULL,
  `birthdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `first_name`, `last_name`, `middle_name`, `age`, `gender`, `author_num_id`, `author_type_id`, `birthdate`) VALUES
(1, 'James', 'Gosling', 'P.', 40, 'male', 111715469, 0, '3/6/1997'),
(2, 'Rudyard', 'Kipling', 'U.', 30, 'male', 111715470, 0, '8/11/1994');

-- --------------------------------------------------------

--
-- Table structure for table `author_num`
--

CREATE TABLE `author_num` (
  `author_num_id` int(11) NOT NULL,
  `author_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_num`
--

INSERT INTO `author_num` (`author_num_id`, `author_num`) VALUES
(1, 15468);

-- --------------------------------------------------------

--
-- Table structure for table `author_type`
--

CREATE TABLE `author_type` (
  `author_type_id` int(11) NOT NULL,
  `author_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_type`
--

INSERT INTO `author_type` (`author_type_id`, `author_type`) VALUES
(3, 'Writer');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_number` int(11) NOT NULL,
  `number_of_copies` int(11) NOT NULL,
  `accession_number_id` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `ISBN` varchar(100) NOT NULL,
  `form_id` int(11) NOT NULL,
  `languange_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL COMMENT 'available; not available; damage; lost; reserve',
  `book_type_id` int(11) NOT NULL,
  `filing_book_type_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `book_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_number`, `number_of_copies`, `accession_number_id`, `publisher`, `book_name`, `author_id`, `category_id`, `ISBN`, `form_id`, `languange_id`, `status`, `book_type_id`, `filing_book_type_id`, `supplier_id`, `book_price`) VALUES
(8, 123, 7, '312', 'asdsad', 'naruto shippuden', 10, 2, '13213', 6, 1, 'Available', 0, 0, 0, 0),
(9, 12334, 6, '313', 'asdasd', 'asdasd', 10, 2, '123123', 6, 1, 'Available', 0, 0, 0, 0),
(10, 0, 0, '', '', '', 0, 0, '', 6, 0, 'Available...', 0, 0, 0, 0),
(11, 23434234, 102, '35', 'asfa', 'afafd', 10, 2, '2342134', 6, 3, 'Available...', 6, 6, 3, 1200),
(14, 89878, 10, '38', 'kjhkjh', 'kkkkk', 10, 2, '098908', 6, 3, 'Available...', 8, 6, 3, 120),
(15, 123133, 3, '39', 'asdasd', 'monkey', 11, 2, '131', 6, 3, 'Available...', 8, 6, 3, 129),
(16, 1342434, 2, '40', 'asdasd', 'adasd', 11, 2, '131', 6, 3, 'Available...', 9, 6, 3, 120),
(17, 123131, 16, '411', 'asdasd', 'fushigi yuugi', 11, 2, '234234', 6, 3, 'Damage...', 8, 6, 3, 1200),
(18, 1234567, 5, '1112', 'asdasd', 'tttttt', 11, 2, '132132323', 6, 3, 'Available...', 8, 6, 3, 100),
(21, 11111, 0, '1413', 'asdasd', 'kokoro', 12, 2, '132132323', 8, 3, 'Not available...', 8, 6, 3, 123),
(22, 123445, 11, '1414', 'asdasd', 'nanka', 12, 2, '132132323', 8, 3, 'Available...', 8, 6, 3, 100),
(23, 789987, 11, '1415', 'asdasd', 'yahiko', 12, 2, '132132323', 8, 3, 'Available...', 8, 6, 3, 100),
(24, 12323, 12, '2016', 'asdasd', 'kai', 13, 2, '12312313', 8, 3, 'Damage...', 8, 6, 3, 132),
(25, 5555555, 11, '2317', 'asdasd', 'kado', 12, 2, '132132323', 8, 3, 'Available...', 14, 6, 3, 100),
(27, 5555, 5, '317', 'kjkj', 'lkkj', 11, 4, '90890098', 8, 3, 'Available...', 7, 6, 3, 12345),
(29, 1231232, 4, '419', 'asdsad', 'shounen', 11, 4, '123131', 8, 3, 'Available...', 8, 6, 3, 1200),
(30, 12345, 1, '420', 'asdasd', 'dada', 11, 4, '131232134', 8, 3, 'Available...', 8, 6, 3, 135),
(31, 1234555, 4, '421', 'asdasd', 'sadsad', 11, 4, '3423432442', 8, 3, 'Available...', 8, 6, 3, 123232),
(32, 1212, 32, '422', 'jhjh', 'dada2', 11, 4, '34444', 8, 3, 'Available...', 8, 6, 3, 899),
(33, 7777777, 5, '423', 'jhjhj', 'kkk', 13, 4, '90890098', 8, 3, 'Available...', 8, 6, 3, 100),
(36, 12313, 4, '723', 'asdasd', 'junjou', 13, 4, '12312', 8, 3, 'Available...', 8, 6, 3, 140),
(37, 123213, -1, '824', 'adads', 'adsad', 13, 4, '90890098', 8, 3, 'Available...', 8, 6, 3, 120),
(38, 2232132, 0, '825', 'adasd', 'paopao', 13, 4, '90890098', 8, 3, 'Available...', 8, 6, 3, 120),
(44, 8, 0, '2027', 'gh', 'jhhg', 16, 5, '1-854-682-2', 8, 4, 'Available...', 8, 0, 0, 80),
(45, 9, 0, '2128', 'asd', 'asd', 16, 6, '1-854-682-2', 8, 5, 'Lost...', 8, 0, 0, 40),
(58, 2931, 0, '', 'jun', 'jun', 22, 7, '90890098', 9, 6, 'Available...', 8, 0, 0, 120),
(59, 2828, 0, '', 'Pheonix', 'Computer Programming', 1, 8, '09-8654-8754', 9, 5, 'Available...', 8, 0, 0, 40);

-- --------------------------------------------------------

--
-- Table structure for table `book_borrow`
--

CREATE TABLE `book_borrow` (
  `book_borrow_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date_today` varchar(100) NOT NULL,
  `date_return` varchar(100) NOT NULL,
  `date_value` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'borrow; return',
  `book_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL COMMENT 'borrow; return'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_borrow`
--

INSERT INTO `book_borrow` (`book_borrow_id`, `student_id`, `date_today`, `date_return`, `date_value`, `book_id`, `status`) VALUES
(120, 6, '01/24/2017', '1/25/2017', '2017-01-24 13:50:36', 2, 'return'),
(121, 6, '01/24/2017', '1/27/2017', '2017-01-24 13:50:36', 2, 'return'),
(122, 6, '01/24/2017', '1/27/2017', '2017-01-24 13:36:41', 1, 'return'),
(123, 6, '01/24/2017', '1/1/2017', '2017-01-24 13:36:41', 1, 'return'),
(124, 6, '01/24/2017', '1/27/2017', '2017-01-24 13:50:36', 2, 'return'),
(125, 6, '01/24/2017', '1/25/2017', '2017-01-24 13:58:25', 2, 'return'),
(126, 6, '01/24/2017', '1/25/2017', '2017-01-24 14:12:57', 3, 'return'),
(127, 6, '01/24/2017', '1/27/2017', '2017-01-24 14:15:08', 1, 'return'),
(128, 2, '01/24/2017', '1/25/2017', '2017-01-24 14:49:52', 2, 'return'),
(129, 5, '01/24/2017', '1/25/2017', '2017-01-24 14:59:01', 2, 'return'),
(130, 5, '01/24/2017', '1/25/2017', '2017-01-24 16:35:17', 3, 'return'),
(131, 5, '01/24/2017', '1/25/2017', '2017-01-24 16:35:11', 1, 'return'),
(132, 7, '01/24/2017', '1/25/2017', '2017-01-24 16:34:15', 2, 'return'),
(133, 2, '01/24/2017', '1/28/2017', '2017-01-24 16:38:25', 3, 'return'),
(134, 7, '01/24/2017', '1/27/2017', '2017-01-24 16:41:28', 2, 'return'),
(135, 7, '01/24/2017', '1/27/2017', '2017-01-24 16:42:38', 3, 'return'),
(136, 2, '01/24/2017', '1/25/2017', '2017-01-27 07:38:30', 2, 'return'),
(137, 6, '01/25/2017', '1/26/2017', '2017-01-27 07:38:30', 2, 'return'),
(138, 7, '01/27/2017', '1/28/2017', '2017-01-29 16:20:41', 4, 'return'),
(139, 7, '01/27/2017', '1/28/2017', '2017-01-26 11:25:52', 2, 'return'),
(140, 5, '01/26/2017', '1/27/2017', '2017-01-31 16:38:45', 4, 'return'),
(141, 5, '01/26/2017', '1/27/2017', '2017-02-01 16:15:36', 2, 'return'),
(142, 5, '01/31/2017', '2/4/2017', '2017-01-31 13:59:29', 8, 'return'),
(143, 2, '01/25/2017', '1/26/2017', '2017-01-30 15:08:13', 9, 'return'),
(144, 2, '01/25/2017', '1/26/2017', '2017-02-01 16:14:06', 8, 'return'),
(145, 2, '02/01/2017', '1/4/2017', '2017-02-01 16:16:03', 9, 'return'),
(146, 2, '02/01/2017', '2/2/2017', '2017-02-03 16:18:39', 9, 'return'),
(147, 2, '02/01/2017', '2/2/2017', '2017-02-02 07:30:49', 8, 'return'),
(148, 10, '02/01/2017', '2/2/2017', '2017-02-02 07:30:24', 9, 'return'),
(149, 2, '02/01/2017', '1/3/2017', '2017-02-02 07:30:24', 9, 'return'),
(150, 6, '02/01/2017', '2/5/2017', '2017-02-02 07:30:24', 9, 'return'),
(151, 12, '02/02/2017', '2/3/2017', '2017-02-02 08:08:41', 9, 'return'),
(152, 13, '02/02/2017', '2/5/2017', '2017-02-10 08:42:56', 9, 'return'),
(153, 2, '02/02/2017', '1/1/2017', '2017-02-03 07:06:59', 10, 'return'),
(154, 2, '02/03/2017', '2/4/2017', '2017-02-22 07:08:09', 12, 'return'),
(155, 6, '02/03/2017', '2/4/2017', '2017-02-05 07:17:21', 12, 'return'),
(156, 2, '02/05/2017', '1/1/2017', '2017-02-05 07:20:45', 12, 'return'),
(157, 6, '02/05/2017', '2/5/2017', '2017-02-05 07:25:13', 12, 'return'),
(158, 2, '02/03/2017', '2/7/2017', '2017-02-03 07:28:34', 12, 'return'),
(159, 2, '02/03/2017', '1/1/2017', '2017-02-03 14:26:50', 14, 'return'),
(160, 12, '02/03/2017', '2/4/2017', '2017-02-03 14:28:36', 14, 'borrow'),
(161, 11, '02/03/2017', '2/5/2017', '2017-02-06 14:55:26', 15, 'return'),
(162, 11, '02/10/2017', '2/12/2017', '2017-02-15 04:06:22', 17, 'return'),
(163, 14, '02/10/2017', '2/17/2017', '2017-02-17 04:10:53', 17, 'return'),
(164, 14, '02/10/2017', '2/17/2017', '2017-02-14 10:59:50', 15, 'return'),
(165, 11, '02/10/2017', '2/11/2017', '2017-02-14 10:59:50', 15, 'return'),
(166, 14, '02/10/2017', '2/12/2017', '2017-02-14 10:59:50', 15, 'return'),
(167, 11, '02/10/2017', '2/14/2017', '2017-02-14 10:59:50', 15, 'return'),
(168, 11, '02/14/2017', '1/1/2017', '2017-02-14 10:59:50', 15, 'return'),
(169, 11, '02/14/2017', '1/1/2017', '2017-02-14 10:59:50', 15, 'return'),
(170, 11, '02/14/2017', '1/1/2017', '2017-02-14 10:59:50', 15, 'return'),
(171, 11, '02/14/2017', '2/14/2017', '2017-02-14 10:59:50', 15, 'return'),
(172, 11, '02/14/2017', '2/14/2017', '2017-02-14 11:01:15', 18, 'return'),
(173, 11, '02/14/2017', '2/17/2017', '2017-02-17 11:22:43', 15, 'return'),
(174, 14, '02/14/2017', '1/1/2017', '2017-02-17 09:05:56', 18, 'return'),
(175, 17, '02/14/2017', '2/17/2017', '2017-02-17 11:22:43', 15, 'return'),
(176, 11, '02/17/2017', '2/25/2017', '2017-02-17 09:27:11', 17, 'return'),
(177, 11, '02/17/2017', '2/25/2017', '2017-02-19 10:08:07', 15, 'return'),
(178, 11, '02/23/2017', '2/28/2017', '2017-03-10 11:14:45', 15, 'return'),
(179, 11, '02/23/2017', '2/28/2017', '2017-02-23 08:43:06', 18, 'borrow'),
(180, 8, '02/23/2017', '2/28/2017', '2017-03-10 11:14:45', 15, 'return'),
(181, 8, '02/23/2017', '2/28/2017', '2017-02-23 11:12:59', 18, 'borrow'),
(182, 8, '02/28/2017', '2/30/2017', '2017-03-01 09:43:10', 26, 'return'),
(183, 8, '02/28/2017', '2/30/2017', '2017-02-28 17:43:32', 10, 'borrow'),
(184, 9, '02/28/2017', '2/30/2017', '2017-03-01 09:43:10', 26, 'return'),
(185, 9, '02/28/2017', '2/30/2017', '2017-02-28 17:48:34', 10, 'borrow'),
(186, 9, '02/28/2017', '2/31/2017', '2017-03-01 09:43:10', 26, 'return'),
(187, 9, '02/28/2017', '2/31/2017', '2017-02-28 17:51:49', 10, 'borrow'),
(188, 9, '02/28/2017', '3/7/2017', '2017-03-01 09:43:10', 26, 'return'),
(189, 9, '02/28/2017', '3/7/2017', '2017-02-28 17:57:12', 10, 'borrow'),
(190, 10, '02/28/2017', '2/30/2017', '2017-03-01 09:43:10', 26, 'return'),
(191, 10, '02/28/2017', '2/30/2017', '2017-02-28 17:59:32', 10, 'borrow'),
(192, 10, '02/28/2017', '2/31/2017', '2017-03-01 09:43:10', 26, 'return'),
(193, 10, '02/28/2017', '2/31/2017', '2017-02-28 18:01:29', 10, 'borrow'),
(194, 17, '03/03/2017', '3/8/2017', '2017-03-15 17:05:29', 32, 'return'),
(195, 13, '03/05/2017', '3/9/2017', '2017-03-10 15:30:22', 33, 'return'),
(196, 13, '03/10/2017', '3/15/2017', '2017-03-27 15:35:44', 33, 'return'),
(197, 17, '03/05/2017', '3/7/2017', '2017-03-05 19:49:42', 32, 'return'),
(198, 17, '03/05/2017', '3/7/2017', '2017-03-05 19:55:34', 33, 'return'),
(199, 17, '03/05/2017', '3/11/2017', '2017-03-05 20:17:41', 32, 'return'),
(200, 17, '03/05/2017', '3/11/2017', '2017-03-05 19:55:34', 33, 'return'),
(201, 18, '03/05/2017', '3/8/2017', '2017-03-05 20:17:41', 32, 'return'),
(202, 18, '03/05/2017', '3/8/2017', '2017-03-07 22:57:49', 33, 'return'),
(203, 17, '03/07/2017', '3/14/2017', '2017-03-07 22:44:44', 37, 'return'),
(204, 17, '03/07/2017', '1/1/2017', '2017-03-07 22:48:18', 32, 'return'),
(205, 17, '03/07/2017', '1/1/2017', '2017-03-07 22:57:17', 36, 'return'),
(206, 17, '03/07/2017', '1/1/2017', '2017-03-07 22:57:36', 30, 'return'),
(207, 17, '03/07/2017', '1/1/2017', '2017-03-07 22:48:18', 32, 'return'),
(208, 17, '03/07/2017', '1/1/2017', '2017-03-07 22:57:36', 30, 'return'),
(209, 17, '03/07/2017', '1/1/2017', '2017-03-07 22:57:17', 36, 'return'),
(210, 17, '03/07/2017', '1/1/2017', '2017-03-07 22:57:49', 33, 'return'),
(211, 17, '03/07/2017', '1/1/2017', '2017-03-07 22:57:17', 36, 'return'),
(212, 17, '03/07/2017', '1/1/2017', '2017-03-08 11:32:01', 38, 'return'),
(213, 17, '03/07/2017', '1/1/2017', '2017-03-08 11:38:18', 31, 'return'),
(214, 17, '03/07/2017', '1/1/2017', '2017-03-08 11:45:22', 29, 'return'),
(215, 17, '03/08/2017', '1/1/2017', '2017-03-08 12:07:14', 37, 'return'),
(216, 17, '03/08/2017', '1/1/2017', '2017-03-08 12:16:45', 30, 'return'),
(217, 17, '03/08/2017', '1/1/2017', '2017-03-08 12:16:45', 32, 'return'),
(218, 17, '03/08/2017', '1/1/2017', '2017-03-08 12:16:45', 36, 'return'),
(219, 17, '03/08/2017', '1/1/2017', '2017-03-08 12:16:45', 33, 'return'),
(220, 18, '03/08/2017', '3/17/2017', '2017-03-08 12:22:57', 37, 'return'),
(221, 18, '03/08/2017', '3/17/2017', '2017-03-08 12:22:57', 30, 'return'),
(222, 18, '03/08/2017', '3/17/2017', '2017-03-08 12:22:57', 32, 'return'),
(223, 18, '03/08/2017', '3/17/2017', '2017-03-08 12:22:57', 36, 'return'),
(224, 18, '03/08/2017', '3/17/2017', '2017-03-08 12:22:57', 33, 'return'),
(225, 17, '03/08/2017', '1/1/2017', '2017-03-08 12:51:00', 36, 'return'),
(226, 17, '03/08/2017', '1/1/2017', '2017-03-08 12:51:00', 33, 'return'),
(227, 18, '03/09/2017', '3/11/2017', '2017-03-18 06:03:42', 37, 'return'),
(228, 17, '03/18/2017', '3/13/2017', '2017-03-09 06:09:46', 37, 'return'),
(229, 17, '03/18/2017', '3/13/2017', '2017-03-09 06:09:46', 30, 'return'),
(230, 19, '03/09/2017', '3/15/2017', '2017-03-09 06:57:33', 37, 'return'),
(231, 19, '03/09/2017', '3/15/2017', '2017-03-09 06:57:33', 30, 'return'),
(232, 20, '03/09/2017', '3/1/2017', '2017-03-09 07:04:45', 37, 'return'),
(233, 20, '03/09/2017', '3/1/2017', '2017-03-09 07:04:45', 30, 'return'),
(234, 20, '03/09/2017', '3/1/2017', '2017-03-09 07:04:45', 32, 'return'),
(235, 21, '03/10/2017', '3/17/2017', '2017-03-28 08:48:17', 37, 'return'),
(236, 21, '03/10/2017', '3/17/2017', '2017-03-28 08:48:17', 30, 'return'),
(237, 23, '03/11/2017', '3/13/2017', '2017-03-13 21:54:45', 37, 'return'),
(238, 23, '03/11/2017', '3/13/2017', '2017-03-13 21:54:45', 30, 'return'),
(239, 25, '03/13/2017', '1/1/2017', '2017-03-13 06:37:10', 40, 'return'),
(240, 25, '03/13/2017', '3/15/2017', '2017-03-13 06:48:38', 41, 'return'),
(241, 25, '03/13/2017', '3/14/2017', '2017-03-15 20:06:57', 41, 'return'),
(242, 25, '03/16/2017', '3/17/2017', '2017-03-19 05:37:51', 40, 'return'),
(243, 25, '03/16/2017', '3/17/2017', '2017-03-19 05:37:51', 41, 'return'),
(244, 25, '03/19/2017', '3/21/2017', '2017-03-22 05:41:34', 40, 'return'),
(245, 25, '03/19/2017', '3/21/2017', '2017-03-22 05:41:17', 41, 'return'),
(246, 26, '03/15/2017', '1/1/2017', '2017-03-15 13:43:47', 41, 'return'),
(247, 25, '03/15/2017', '1/1/2017', '2017-03-15 13:57:01', 41, 'return'),
(248, 27, '03/15/2017', '1/1/2017', '2017-03-15 14:21:50', 41, 'return'),
(249, 25, '03/15/2017', '3/20/2017', '2017-03-15 15:03:14', 41, 'return'),
(250, 28, '03/15/2017', '1/1/2017', '2017-03-15 15:07:28', 41, 'return'),
(251, 25, '03/16/2017', '3/18/2017', '2017-03-20 06:39:34', 43, 'return'),
(252, 25, '03/20/2017', '3/21/2017', '2017-03-22 09:20:09', 44, 'return'),
(253, 25, '03/22/2017', '3/17/2017', '2017-03-18 09:56:20', 44, 'return'),
(254, 25, '03/18/2017', '3/19/2017', '2017-03-21 10:08:05', 44, 'return'),
(255, 26, '03/21/2017', '3/22/2017', '2017-03-25 10:39:15', 45, 'return'),
(256, 26, '03/21/2017', '3/22/2017', '2017-03-25 10:39:16', 44, 'return'),
(257, 25, '03/16/2017', '1/1/2017', '2017-03-16 19:54:07', 44, 'return'),
(258, 26, '03/16/2017', '1/1/2017', '2017-03-16 19:55:46', 44, 'return'),
(259, 27, '03/16/2017', '1/1/2017', '2017-03-16 20:13:50', 44, 'return'),
(260, 27, '03/16/2017', '1/1/2017', '2017-03-16 20:57:04', 44, 'return'),
(261, 25, '03/16/2017', '1/1/2017', '2017-03-16 21:05:07', 44, 'return'),
(262, 25, '03/17/2017', '3/18/2017', '2017-03-19 07:27:56', 44, 'return'),
(263, 25, '03/19/2017', '3/20/2017', '2017-03-21 15:33:36', 44, 'return'),
(264, 28, '03/19/2017', '3/20/2017', '2017-03-21 14:20:02', 47, 'return'),
(265, 28, '03/19/2017', '1/1/2017', '2017-03-19 21:50:49', 47, 'return'),
(266, 31, '03/22/2017', '3/23/2017', '2017-03-28 15:05:48', 56, 'return'),
(267, 29, '03/29/2017', '1/1/2017', '2017-03-29 10:28:43', 56, 'return');

-- --------------------------------------------------------

--
-- Table structure for table `book_cost`
--

CREATE TABLE `book_cost` (
  `book_cost_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_type_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_type`
--

CREATE TABLE `book_type` (
  `book_type_id` int(11) NOT NULL,
  `book_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` (`book_type_id`, `book_type`) VALUES
(6, 'General Reference'),
(7, 'Periodicals'),
(8, 'Textbooks'),
(14, 'Thesis');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(5, 'Math'),
(6, 'Encyclopedia'),
(7, 'Science'),
(8, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`) VALUES
(3, 'BSIT'),
(4, 'ASCT'),
(5, 'BSBA'),
(6, 'BSHRM');

-- --------------------------------------------------------

--
-- Table structure for table `damage_lost_book`
--

CREATE TABLE `damage_lost_book` (
  `damage_lost_book_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `damage_quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `damage_lost_book`
--

INSERT INTO `damage_lost_book` (`damage_lost_book_id`, `book_id`, `student_id`, `damage_quantity`, `amount`) VALUES
(3, 11, 2, 0, 0),
(4, 11, 4, 0, 0),
(5, 10, 6, 0, 0),
(6, 10, 7, 0, 0),
(7, 10, 7, 0, 0),
(8, 10, 7, 0, 0),
(9, 10, 9, 0, 0),
(10, 10, 9, 0, 0),
(11, 10, 9, 0, 0),
(12, 10, 9, 0, 0),
(13, 11, 11, 0, 0),
(14, 17, 12, 0, 0),
(18, 17, 12, 0, 0),
(19, 11, 14, 0, 0),
(20, 17, 0, 0, 0),
(21, 17, 15, 0, 0),
(22, 17, 15, 0, 0),
(23, 17, 15, 0, 0),
(24, 17, 12, 0, 0),
(25, 17, 2, 0, 0),
(26, 17, 15, 0, 0),
(27, 17, 15, 0, 0),
(28, 24, 14, 0, 0),
(29, 24, 12, 2, 264),
(30, 17, 14, 2, 2400),
(31, 38, 15, 0, 120),
(32, 38, 12, 0, 120),
(33, 38, 17, 0, 120),
(34, 36, 21, 0, 140),
(35, 41, 28, 0, 40),
(36, 41, 26, 0, 40),
(37, 45, 25, 0, 40);

-- --------------------------------------------------------

--
-- Table structure for table `filing_book_type`
--

CREATE TABLE `filing_book_type` (
  `filing_book_type_id` int(11) NOT NULL,
  `filing_book_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filing_book_type`
--

INSERT INTO `filing_book_type` (`filing_book_type_id`, `filing_book_type`) VALUES
(6, 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `fines_value`
--

CREATE TABLE `fines_value` (
  `fines_value_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `book_borrow_id` int(11) NOT NULL,
  `fines` int(11) NOT NULL,
  `status` varchar(100) NOT NULL COMMENT 'paid; unpaid'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fines_value`
--

INSERT INTO `fines_value` (`fines_value_id`, `book_id`, `student_id`, `book_borrow_id`, `fines`, `status`) VALUES
(106, 44, 25, 253, 5, 'paid'),
(107, 44, 25, 254, 10, 'paid'),
(108, 45, 26, 255, 15, 'paid'),
(109, 44, 26, 255, 15, 'paid'),
(112, 44, 27, 259, 60, 'paid'),
(113, 44, 27, 260, 60, 'paid'),
(114, 44, 25, 261, 60, 'paid'),
(115, 44, 25, 262, 5, 'paid'),
(116, 44, 25, 263, 5, 'paid'),
(117, 47, 28, 264, 10, 'paid'),
(118, 47, 28, 265, 150, 'paid'),
(119, 56, 31, 266, 50, 'paid'),
(120, 56, 29, 267, 250, 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `form_id` int(11) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `currency` varchar(100) NOT NULL,
  `fines` int(11) NOT NULL,
  `school_address` varchar(100) NOT NULL,
  `telephone_number` int(11) NOT NULL,
  `form_header` varchar(100) NOT NULL,
  `form_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`form_id`, `school_name`, `currency`, `fines`, `school_address`, `telephone_number`, `form_header`, `form_footer`) VALUES
(6, 'Kings College', 'Pesos', 5, 'jhghjg', 989090, 'King''s College Inc.', 'This is a copyright 2016'),
(7, 'Kings College', 'Pesos', 98, 'jhh', 9098, '', ''),
(8, 'Kings College', 'Pesos', 5, '55555', 55555, '', ''),
(9, 'Kings College', 'Pesos', 10, 'asdas', 89, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `isbn_num`
--

CREATE TABLE `isbn_num` (
  `ISBN_num_id` int(11) NOT NULL,
  `ISBN_num` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isbn_num`
--

INSERT INTO `isbn_num` (`ISBN_num_id`, `ISBN_num`) VALUES
(1, '978-3-16-148410-0');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `language` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `language`) VALUES
(4, 'Filipino'),
(5, 'Bisaya'),
(6, 'Spanish'),
(7, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `payment_borrowers`
--

CREATE TABLE `payment_borrowers` (
  `payment_borrowers_id` int(11) NOT NULL,
  `fines_value_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_fines` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_borrowers`
--

INSERT INTO `payment_borrowers` (`payment_borrowers_id`, `fines_value_id`, `book_id`, `student_id`, `total_fines`) VALUES
(24, 63, 32, 17, 45),
(25, 68, 32, 18, 10),
(26, 68, 32, 18, 85),
(27, 83, 37, 19, 25),
(28, 84, 37, 20, 40),
(29, 87, 37, 21, 55),
(30, 91, 40, 25, 45),
(31, 91, 40, 25, 45),
(32, 98, 41, 26, 55),
(33, 100, 41, 27, 55),
(34, 102, 41, 28, 55),
(35, 106, 44, 25, 5),
(36, 106, 44, 25, 10),
(37, 108, 45, 26, 15),
(38, 0, 0, 0, 0),
(39, 112, 44, 27, 60),
(40, 112, 44, 27, 60),
(41, 114, 44, 25, 60),
(42, 115, 44, 25, 5),
(43, 116, 44, 25, 5),
(44, 117, 47, 28, 10),
(45, 118, 47, 28, 150),
(46, 119, 56, 31, 50);

-- --------------------------------------------------------

--
-- Table structure for table `penalty_library_card`
--

CREATE TABLE `penalty_library_card` (
  `penalty_library_card_id` int(11) NOT NULL,
  `penalty_library_card` int(11) NOT NULL,
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penalty_library_card`
--

INSERT INTO `penalty_library_card` (`penalty_library_card_id`, `penalty_library_card`, `date_saved`) VALUES
(5, 5, '2017-02-13 23:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `reserved_fines`
--

CREATE TABLE `reserved_fines` (
  `reserved_fines_id` int(11) NOT NULL,
  `reserved_fines` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserved_fines`
--

INSERT INTO `reserved_fines` (`reserved_fines_id`, `reserved_fines`) VALUES
(9, 5);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_book`
--

CREATE TABLE `reserve_book` (
  `reserve_book_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date_reserved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL COMMENT 'reserves; unreserves'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_book`
--

INSERT INTO `reserve_book` (`reserve_book_id`, `book_id`, `student_id`, `date_reserved`, `status`) VALUES
(1, 56, 31, '2017-03-29 18:13:21', 'unreserves'),
(2, 56, 29, '2017-03-29 18:13:21', 'unreserves'),
(3, 56, 28, '2017-03-29 18:13:21', 'unreserves'),
(4, 56, 31, '2017-03-29 18:13:21', 'unreserves'),
(5, 56, 31, '2017-03-29 18:13:21', 'unreserves'),
(6, 56, 29, '2017-03-29 18:13:21', 'unreserves'),
(7, 56, 28, '2017-03-29 18:14:24', 'unreserves'),
(8, 56, 29, '2017-03-29 18:19:50', 'unreserves'),
(9, 57, 31, '2017-03-29 18:20:50', 'unreserves'),
(10, 56, 28, '2017-03-29 18:21:02', 'unreserves'),
(11, 57, 28, '2017-03-29 18:26:39', 'unreserves'),
(12, 56, 28, '2017-03-29 18:23:45', 'unreserves'),
(13, 57, 29, '2017-03-29 18:27:25', 'unreserves'),
(14, 56, 29, '2017-03-29 18:27:25', 'unreserves'),
(15, 57, 31, '2017-03-29 18:29:21', 'unreserves'),
(16, 56, 29, '2017-03-29 18:29:50', 'unreserves'),
(17, 57, 29, '2017-03-29 18:36:31', 'unreserves'),
(18, 57, 31, '2017-03-29 18:39:03', 'unreserves'),
(19, 56, 31, '2017-03-29 18:38:47', 'unreserves'),
(20, 57, 28, '2017-03-29 18:43:09', 'unreserves'),
(21, 56, 28, '2017-03-29 18:43:09', 'unreserves'),
(22, 57, 28, '2017-03-30 16:06:35', 'unreserves'),
(23, 57, 29, '2017-03-30 16:07:23', 'unreserves'),
(24, 56, 29, '2017-03-30 16:07:23', 'unreserves'),
(25, 56, 28, '2017-03-30 16:08:16', 'unreserves'),
(26, 57, 31, '2017-03-30 16:11:10', 'unreserves'),
(27, 56, 31, '2017-03-30 16:11:10', 'unreserves'),
(28, 58, 31, '2017-03-30 16:11:10', 'unreserves'),
(29, 57, 28, '2017-03-30 16:17:35', 'unreserves'),
(30, 56, 29, '2017-03-30 16:18:00', 'unreserves'),
(31, 58, 32, '2017-03-30 16:18:21', 'unreserves'),
(32, 57, 29, '2017-03-30 16:19:13', 'unreserves'),
(33, 56, 29, '2017-03-30 16:19:13', 'unreserves'),
(34, 58, 29, '2017-03-30 16:19:13', 'unreserves'),
(35, 59, 32, '2018-09-06 09:45:44', 'unreserves');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_copies`
--

CREATE TABLE `reserve_copies` (
  `reserve_copies_id` int(11) NOT NULL,
  `reserve_book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `num_copies` int(11) NOT NULL,
  `status` varchar(100) NOT NULL COMMENT 'reserved; unreserved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_copies`
--

INSERT INTO `reserve_copies` (`reserve_copies_id`, `reserve_book_id`, `student_id`, `book_id`, `num_copies`, `status`) VALUES
(76, 7, 14, 33, 1, ''),
(77, 7, 18, 32, 1, ''),
(80, 7, 12, 31, 1, ''),
(81, 7, 6, 30, 1, ''),
(82, 7, 15, 29, 1, ''),
(83, 7, 2, 36, 1, ''),
(84, 0, 7, 37, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section`) VALUES
(2, '302-B'),
(4, '303-D'),
(5, '303-A');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `staff_type_id` int(11) NOT NULL,
  `staff_num_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `middle_name`, `last_name`, `gender`, `contact_number`, `email_address`, `staff_type_id`, `staff_num_id`) VALUES
(7, 'raffa', 'raffa', 'raffar', 'female', 9809, 'asdasd', 3, 412346);

-- --------------------------------------------------------

--
-- Table structure for table `staff_num`
--

CREATE TABLE `staff_num` (
  `staff_num_id` int(11) NOT NULL,
  `staff_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_num`
--

INSERT INTO `staff_num` (`staff_num_id`, `staff_num`) VALUES
(1, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `staff_type`
--

CREATE TABLE `staff_type` (
  `staff_type_id` int(11) NOT NULL,
  `staff_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_type`
--

INSERT INTO `staff_type` (`staff_type_id`, `staff_type`) VALUES
(7, 'Student'),
(8, 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `student_num_id` int(11) NOT NULL,
  `year_level` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `contemporary_year` int(11) NOT NULL,
  `uncontemporary_year` int(11) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `staff_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `middle_name`, `age`, `gender`, `student_num_id`, `year_level`, `address`, `course_id`, `contact_number`, `contemporary_year`, `uncontemporary_year`, `email_address`, `birthdate`, `staff_type_id`) VALUES
(20, 'ragen', 'ragen', 'ragen', 0, 'female', 1710545, 2, 'asdasd', 2, 2147483647, 0, 0, 'asdasd', 'ragen', 6),
(23, 'john', 'john', 'john', 12, 'male', 1710545, 1, 'asdasd', 2, 2147483647, 0, 0, 'asdasd', 'asdad', 5),
(24, 'mkmk', 'mkmk', 'sfaf', 30, 'female', 1710546, 2, 'klkl', 2, 909, 0, 0, 'jjkk', '13 2051 32', 5),
(27, 'nk', 'nk', 'nk', 89, 'male', 1710549, 0, 'ddasd', 0, 8909, 0, 0, 'Banga@yahoo.com', '13 2051 32', 8),
(30, 'miming2', 'miming2', 'miming2', 12, 'female', 1710550, 0, 'asdasd', 0, 2147483647, 0, 0, 'asdasd', '1/1/1990', 8),
(31, 'Ariel', 'Tambukong', 'P.', 34, 'male', 1710549, 3, 'Banga South Cotabato', 3, 987476586, 0, 0, 'Banga@yahoo.com', '12/18/1996', 7),
(32, 'Kesher', 'Magbutong', 'C.', 35, 'male', 1710550, 3, 'Koronadal City', 3, 97534667, 0, 0, 'Kesh@yahoo.com', '6/7/1996', 7);

-- --------------------------------------------------------

--
-- Table structure for table `student_num`
--

CREATE TABLE `student_num` (
  `student_num_id` int(11) NOT NULL,
  `student_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_num`
--

INSERT INTO `student_num` (`student_num_id`, `student_num`) VALUES
(1, 10543);

-- --------------------------------------------------------

--
-- Table structure for table `student_number_num`
--

CREATE TABLE `student_number_num` (
  `student_number_num_id` int(11) NOT NULL,
  `student_number_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_number_num`
--

INSERT INTO `student_number_num` (`student_number_num_id`, `student_number_num`) VALUES
(1, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `student_student`
--

CREATE TABLE `student_student` (
  `student_student_id` int(11) NOT NULL,
  `student_number_num_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_student`
--

INSERT INTO `student_student` (`student_student_id`, `student_number_num_id`, `first_name`, `last_name`, `middle_name`, `gender`, `course_id`, `section_id`) VALUES
(4, 127, 'sdfdg', 'fh', 'fg', 'male', 2, 2),
(5, 12345, 'raf', 'raf', 's', 'male', 2, 2),
(6, 98457, 'Ariel', 'Tambukong', 'P.', 'male', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `suppier_view`
--

CREATE TABLE `suppier_view` (
  `suppier_view_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `supplier_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier`) VALUES
(1, 'Ched');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_type`
--

CREATE TABLE `supplier_type` (
  `supplier_type_id` int(11) NOT NULL,
  `supplier_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accession_number_num`
--
ALTER TABLE `accession_number_num`
  ADD PRIMARY KEY (`accession_number_num_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_available`
--
ALTER TABLE `admin_available`
  ADD PRIMARY KEY (`admin_available_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `author_num`
--
ALTER TABLE `author_num`
  ADD PRIMARY KEY (`author_num_id`);

--
-- Indexes for table `author_type`
--
ALTER TABLE `author_type`
  ADD PRIMARY KEY (`author_type_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_borrow`
--
ALTER TABLE `book_borrow`
  ADD PRIMARY KEY (`book_borrow_id`);

--
-- Indexes for table `book_cost`
--
ALTER TABLE `book_cost`
  ADD PRIMARY KEY (`book_cost_id`);

--
-- Indexes for table `book_type`
--
ALTER TABLE `book_type`
  ADD PRIMARY KEY (`book_type_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `damage_lost_book`
--
ALTER TABLE `damage_lost_book`
  ADD PRIMARY KEY (`damage_lost_book_id`);

--
-- Indexes for table `filing_book_type`
--
ALTER TABLE `filing_book_type`
  ADD PRIMARY KEY (`filing_book_type_id`);

--
-- Indexes for table `fines_value`
--
ALTER TABLE `fines_value`
  ADD PRIMARY KEY (`fines_value_id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `isbn_num`
--
ALTER TABLE `isbn_num`
  ADD PRIMARY KEY (`ISBN_num_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `payment_borrowers`
--
ALTER TABLE `payment_borrowers`
  ADD PRIMARY KEY (`payment_borrowers_id`);

--
-- Indexes for table `penalty_library_card`
--
ALTER TABLE `penalty_library_card`
  ADD PRIMARY KEY (`penalty_library_card_id`);

--
-- Indexes for table `reserved_fines`
--
ALTER TABLE `reserved_fines`
  ADD PRIMARY KEY (`reserved_fines_id`);

--
-- Indexes for table `reserve_book`
--
ALTER TABLE `reserve_book`
  ADD PRIMARY KEY (`reserve_book_id`);

--
-- Indexes for table `reserve_copies`
--
ALTER TABLE `reserve_copies`
  ADD PRIMARY KEY (`reserve_copies_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staff_num`
--
ALTER TABLE `staff_num`
  ADD PRIMARY KEY (`staff_num_id`);

--
-- Indexes for table `staff_type`
--
ALTER TABLE `staff_type`
  ADD PRIMARY KEY (`staff_type_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_num`
--
ALTER TABLE `student_num`
  ADD PRIMARY KEY (`student_num_id`);

--
-- Indexes for table `student_number_num`
--
ALTER TABLE `student_number_num`
  ADD PRIMARY KEY (`student_number_num_id`);

--
-- Indexes for table `student_student`
--
ALTER TABLE `student_student`
  ADD PRIMARY KEY (`student_student_id`);

--
-- Indexes for table `suppier_view`
--
ALTER TABLE `suppier_view`
  ADD PRIMARY KEY (`suppier_view_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `supplier_type`
--
ALTER TABLE `supplier_type`
  ADD PRIMARY KEY (`supplier_type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accession_number_num`
--
ALTER TABLE `accession_number_num`
  MODIFY `accession_number_num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin_available`
--
ALTER TABLE `admin_available`
  MODIFY `admin_available_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `author_num`
--
ALTER TABLE `author_num`
  MODIFY `author_num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `author_type`
--
ALTER TABLE `author_type`
  MODIFY `author_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `book_borrow`
--
ALTER TABLE `book_borrow`
  MODIFY `book_borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;
--
-- AUTO_INCREMENT for table `book_cost`
--
ALTER TABLE `book_cost`
  MODIFY `book_cost_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `book_type`
--
ALTER TABLE `book_type`
  MODIFY `book_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `damage_lost_book`
--
ALTER TABLE `damage_lost_book`
  MODIFY `damage_lost_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `filing_book_type`
--
ALTER TABLE `filing_book_type`
  MODIFY `filing_book_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fines_value`
--
ALTER TABLE `fines_value`
  MODIFY `fines_value_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `isbn_num`
--
ALTER TABLE `isbn_num`
  MODIFY `ISBN_num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `payment_borrowers`
--
ALTER TABLE `payment_borrowers`
  MODIFY `payment_borrowers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `penalty_library_card`
--
ALTER TABLE `penalty_library_card`
  MODIFY `penalty_library_card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reserved_fines`
--
ALTER TABLE `reserved_fines`
  MODIFY `reserved_fines_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reserve_book`
--
ALTER TABLE `reserve_book`
  MODIFY `reserve_book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `reserve_copies`
--
ALTER TABLE `reserve_copies`
  MODIFY `reserve_copies_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `staff_num`
--
ALTER TABLE `staff_num`
  MODIFY `staff_num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff_type`
--
ALTER TABLE `staff_type`
  MODIFY `staff_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `student_num`
--
ALTER TABLE `student_num`
  MODIFY `student_num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_number_num`
--
ALTER TABLE `student_number_num`
  MODIFY `student_number_num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_student`
--
ALTER TABLE `student_student`
  MODIFY `student_student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `suppier_view`
--
ALTER TABLE `suppier_view`
  MODIFY `suppier_view_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier_type`
--
ALTER TABLE `supplier_type`
  MODIFY `supplier_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
