-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 01:15 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `johnbusco`
--

-- --------------------------------------------------------

--
-- Table structure for table `assesment`
--

CREATE TABLE `assesment` (
  `asses_id` int(11) NOT NULL,
  `stud_code` varchar(50) NOT NULL,
  `subj_id` int(3) NOT NULL,
  `asses_1` varchar(10) NOT NULL,
  `asses_2` varchar(10) NOT NULL,
  `asses_3` varchar(10) NOT NULL,
  `exam` varchar(10) NOT NULL,
  `term` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assesment`
--

INSERT INTO `assesment` (`asses_id`, `stud_code`, `subj_id`, `asses_1`, `asses_2`, `asses_3`, `exam`, `term`) VALUES
(1, 'SJBSI201447', 5, '34', '45', '23', '96', 0),
(2, 'SJBSI202709', 5, '34', '43', '49', '90', 0),
(3, 'SJBSI203799', 5, '45', '87', '45', '76', 0),
(4, 'SJBSI204534', 5, '23', '42', '23', '90', 0),
(5, 'SJBSI205851', 5, '24', '35', '8', '7', 0),
(6, 'SJBSI206109', 5, '10', '7', '11', '10', 0),
(7, 'SJBSI207487', 5, '5', '6', '10', '18', 0),
(8, 'SJBSI201447', 3, '23', '4', '5', '30', 0),
(9, 'SJBSI202709', 3, '3', '4', '5', '30', 0),
(10, 'SJBSI203799', 3, '21', '4', '5', '30', 0),
(11, 'SJBSI204534', 3, '20', '4', '5', '30', 0),
(12, 'SJBSI205851', 3, '19', '4', '5', '30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ass_exe`
--

CREATE TABLE `ass_exe` (
  `ass_exe_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `cl_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `stud_id` int(2) NOT NULL,
  `stud_code` varchar(50) NOT NULL,
  `stud_cl` int(20) NOT NULL,
  `stud_subcl` int(20) NOT NULL,
  `term` int(30) NOT NULL,
  `result_ass` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `dateset` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_de`
--

CREATE TABLE `staff_de` (
  `staff_id` int(11) NOT NULL,
  `staff_code` varchar(15) NOT NULL,
  `staff_cl` int(2) NOT NULL,
  `staff_gander` varchar(15) NOT NULL,
  `staff_mcl` varchar(100) NOT NULL,
  `stud_subj` varchar(50) NOT NULL,
  `date_reg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_de`
--

CREATE TABLE `stud_de` (
  `stud_id` int(11) NOT NULL,
  `stud_code` varchar(15) NOT NULL,
  `stud_cl` int(2) NOT NULL,
  `stud_subcl` int(2) NOT NULL,
  `stud_level` int(2) NOT NULL,
  `stud_term` int(2) NOT NULL,
  `anual_set` int(2) NOT NULL,
  `stud_status` int(2) NOT NULL,
  `stud_note` varchar(1500) NOT NULL,
  `rector_not` varchar(1500) NOT NULL,
  `stud_subj` varchar(100) NOT NULL,
  `date_set` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_de`
--

INSERT INTO `stud_de` (`stud_id`, `stud_code`, `stud_cl`, `stud_subcl`, `stud_level`, `stud_term`, `anual_set`, `stud_status`, `stud_note`, `rector_not`, `stud_subj`, `date_set`) VALUES
(1, 'SJBSI201447', 0, 2, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(2, 'SJBSI202709', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(3, 'SJBSI203799', 0, 2, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(4, 'SJBSI204534', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(5, 'SJBSI205851', 0, 2, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(6, 'SJBSI206109', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(7, 'SJBSI207487', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(8, 'SJBSI208120', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(9, 'SJBSI209702', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(10, 'SJBSI2010911', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(11, 'SJBSI2011725', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(12, 'SJBSI2012822', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(13, 'SJBSI2013479', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(14, 'SJBSI2014579', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(15, 'SJBSI2015768', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(16, 'SJBSI2016910', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(17, 'SJBSI2017272', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(18, 'SJBSI2018676', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(19, 'SJBSI2019683', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(20, 'SJBSI2020734', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(21, 'SJBSI2021747', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(22, 'SJBSI2022935', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(23, 'SJBSI2023142', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(24, 'SJBSI2024668', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(25, 'SJBSI2025882', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(26, 'SJBSI2026638', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(27, 'SJBSI2027900', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(28, 'SJBSI2028135', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(29, 'SJBSI2029519', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(30, 'SJBSI2030677', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(31, 'SJBSI2031231', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(32, 'SJBSI2032849', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(33, 'SJBSI2033183', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(34, 'SJBSI2034621', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(35, 'SJBSI2035948', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(36, 'SJBSI2036993', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(37, 'SJBSI2037242', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(38, 'SJBSI2038866', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(39, 'SJBSI2039543', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(40, 'SJBSI2040549', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(41, 'SJBSI2041623', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(42, 'SJBSI2042789', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(43, 'SJBSI2043325', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(44, 'SJBSI2044747', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(45, 'SJBSI2045608', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(46, 'SJBSI2046856', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(47, 'SJBSI2047437', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(48, 'SJBSI2048382', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(49, 'SJBSI2049148', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(50, 'SJBSI2050453', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(51, 'SJBSI2051124', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(52, 'SJBSI2052484', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(53, 'SJBSI2053610', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(54, 'SJBSI2054624', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(55, 'SJBSI2055939', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(56, 'SJBSI2056359', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(57, 'SJBSI2057127', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(58, 'SJBSI2058864', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(59, 'SJBSI2059913', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(60, 'SJBSI2060158', 0, 1, 3, 2, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020'),
(61, 'SJBSI2083705', 0, 1, 0, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"7\",\"9\",\"13\",\"17\",\"18\"]', '2019/2020'),
(62, 'SJBSI2035870', 0, 1, 3, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"10\",\"14\"]', '2019/2020'),
(63, 'SJBSI2022605', 0, 1, 2, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"8\",\"9\",\"10\",\"15\",\"16\",\"1\"]', '2019/2020'),
(64, 'SJBSI2075953', 0, 1, 1, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '2019/2020'),
(65, 'SJBSI2037923', 0, 1, 2, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '2019/2020'),
(66, 'SJBSI2041186', 0, 1, 3, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"7\",\"8\",\"10\",\"11\",\"13\",\"14\",\"15\",\"16\"]', '2019/2020'),
(67, 'SJBSI2077143', 0, 1, 1, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '2019/2020'),
(68, 'SJBSI2082107', 0, 1, 1, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '2019/2020'),
(69, 'SJBSI2025069', 0, 1, 2, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '2019/2020'),
(70, 'SJBSI2089732', 0, 1, 2, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '2019/2020'),
(71, 'SJBSI2024103', 0, 1, 3, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '2019/2020'),
(72, 'SJBSI2051760', 0, 1, 2, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '2019/2020'),
(73, 'SJBSI2042106', 0, 1, 1, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\"]', '2019/2020'),
(74, 'SJBSI2090858', 0, 1, 2, 1, 0, 0, '0', '', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"11\",\"12\",\"13\",\"15\"]', '2019/2020');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subj_id` int(11) NOT NULL,
  `cl_id` int(11) NOT NULL,
  `subj_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subj_id`, `cl_id`, `subj_name`) VALUES
(1, 1, 'Agricultural Sciences'),
(2, 0, 'Basic Scienced'),
(3, 0, 'Basic Technology'),
(4, 0, 'Business Studies'),
(5, 0, 'Christian Religious Knowledge'),
(6, 0, 'Civic Education'),
(7, 0, 'Computer Science/ICT'),
(8, 0, 'English Language'),
(9, 0, 'Fine Art'),
(10, 0, 'French'),
(11, 0, 'Home Economics'),
(12, 1, 'Igbo'),
(13, 0, 'Latin'),
(14, 0, 'Literature in English'),
(15, 0, 'Liturgy'),
(16, 0, 'Mathematics'),
(17, 0, 'Music'),
(18, 0, 'Physical and Health Education'),
(19, 0, 'Social Studies');

-- --------------------------------------------------------

--
-- Table structure for table `trem_note`
--

CREATE TABLE `trem_note` (
  `id` int(11) NOT NULL,
  `classto` int(2) NOT NULL,
  `comments` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `user_code` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `priority` int(2) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `user_code`, `password`, `full_name`, `gender`, `priority`, `ddate`) VALUES
(1, 'sjbi20123', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'master', 'M', 3, '2020-05-01'),
(64, 'SJBSI201447', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'AFORKA RAPHAEL CHUKWUEMEKA', 'M', 1, '2020-05-03'),
(65, 'SJBSI202709', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'AHANONU JOHNBOSCO OLUEBUBECHUKWU', 'M', 2, '2020-05-03'),
(66, 'SJBSI203799', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'AKANONU STANISLAUS CHIDUBEM', 'M', 1, '2020-05-03'),
(67, 'SJBSI204534', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'AMAEZE CORNELIUS CHUKWUELOKA', 'M', 2, '2020-05-03'),
(68, 'SJBSI205851', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'AMASIOBI CHRISTOPHER MMADUABUCHI', 'M', 1, '2020-05-03'),
(69, 'SJBSI206109', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ANIOFOR RAPHAEL IKECHUKWU', 'M', 2, '2020-05-03'),
(70, 'SJBSI207487', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ANUSIONWU MAC-DAVIS CHIDERA', 'M', 1, '2020-05-03'),
(71, 'SJBSI208120', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ANYIKA AUGUSTINE CHUKWUEMEKA', 'M', 1, '2020-05-03'),
(72, 'SJBSI209702', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ANYOKE PASCHAL CHIEMELIE', 'M', 1, '2020-05-03'),
(73, 'SJBSI2010911', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'CHIGBO JOSEPH CHUKWUNONSO', 'M', 1, '2020-05-03'),
(74, 'SJBSI2011725', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'CHUKWUDI COSMAS OLUOMACHUKWU', 'M', 1, '2020-05-03'),
(75, 'SJBSI2012822', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'COSMAS GODSWILL MMASICHUKWU', 'M', 1, '2020-05-03'),
(76, 'SJBSI2013479', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'DIMUKEJE FRANCIS CHINEMELUM', 'M', 1, '2020-05-03'),
(77, 'SJBSI2014579', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'EJIKEME ROMANUS CHUKWUEBUKA', 'M', 1, '2020-05-03'),
(78, 'SJBSI2015768', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ENECHUKWU EMMANUEL CHIBUIKE', 'M', 1, '2020-05-03'),
(79, 'SJBSI2016910', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ENWEANI CLEMENT ZUKORAIFEIJIBULUCHUKWU', 'M', 1, '2020-05-03'),
(80, 'SJBSI2017272', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ENWEREM KINGSLEY CHINEDU', 'M', 1, '2020-05-03'),
(81, 'SJBSI2018676', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ENYI COLLINS-MARY CHISOM', 'M', 1, '2020-05-03'),
(82, 'SJBSI2019683', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'EZEAGBOGU PETER CHINEDU', 'M', 1, '2020-05-03'),
(83, 'SJBSI2020734', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'EZEAMII REGINALD CHIEMELIE', 'M', 1, '2020-05-03'),
(84, 'SJBSI2021747', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'EZEH AUGUSTINE CHIMEZIE', 'M', 1, '2020-05-03'),
(85, 'SJBSI2022935', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'EZEJI EMMANUEL CHINAEMEREM', 'M', 1, '2020-05-03'),
(86, 'SJBSI2023142', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'EZENAIKE PASCHAL CHUKWUMA', 'M', 1, '2020-05-03'),
(87, 'SJBSI2024668', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'EZENWENYI STEPHEN CHIKAEMEREM', 'M', 1, '2020-05-03'),
(88, 'SJBSI2025882', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'EZEOKAFOR COLLINS KOSISOCHUKWU', 'M', 1, '2020-05-03'),
(89, 'SJBSI2026638', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'IFEJIONU JOHNPAUL CHIDERA', 'M', 1, '2020-05-03'),
(90, 'SJBSI2027900', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'IKECHUKWU SAMUEL IKECHUKWU', 'M', 1, '2020-05-03'),
(91, 'SJBSI2028135', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'IKEGBUSI ATHANASIUS CHIJINDU', 'M', 1, '2020-05-03'),
(92, 'SJBSI2029519', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ILOKA KINGSLEY CHUKWUEBUKA', 'M', 1, '2020-05-03'),
(93, 'SJBSI2030677', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'MADUABUCHI LAWRENCE IFECHUKWU', 'M', 1, '2020-05-03'),
(94, 'SJBSI2031231', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'MADUKA STEPHEN CHIBUIKE', 'M', 1, '2020-05-03'),
(95, 'SJBSI2032849', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'NLEDUM HIMMEL IFEANYI', 'M', 1, '2020-05-03'),
(96, 'SJBSI2033183', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'NNABUIFE ALEXANDER EKENEDIRICHUKWU', 'M', 1, '2020-05-03'),
(97, 'SJBSI2034621', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'NNADI PASCHAL CHIBUZOR', 'M', 1, '2020-05-03'),
(98, 'SJBSI2035948', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'NWAFOR PAULINUS OBIORAH', 'M', 1, '2020-05-03'),
(99, 'SJBSI2036993', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OBIEKWEREM FRANCIS OBIAJURU', 'M', 1, '2020-05-03'),
(100, 'SJBSI2037242', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OBIORA COSMAS CHIDERA', 'M', 1, '2020-05-03'),
(101, 'SJBSI2038866', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ODIRICHUKWU PETER CHINAZONDU', 'M', 1, '2020-05-03'),
(102, 'SJBSI2039543', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OFOEDU AUGUSTINE UGOCHUKWU', 'M', 1, '2020-05-03'),
(103, 'SJBSI2040549', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OGUAJU ROMUALD ELOCHUKWU', 'M', 1, '2020-05-03'),
(104, 'SJBSI2041623', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKAFOR KINGSLEY CHIDERA', 'M', 1, '2020-05-03'),
(105, 'SJBSI2042789', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKEKE CASMIR SOMTOOCHUKWU', 'M', 1, '2020-05-03'),
(106, 'SJBSI2043325', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKEKE EMMANUEL IFEANYICHUKWU', 'M', 1, '2020-05-03'),
(107, 'SJBSI2044747', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKEKE JUDE KENECHUKWU', 'M', 1, '2020-05-03'),
(108, 'SJBSI2045608', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKEKE MELVIN CHIEMELIE', 'M', 1, '2020-05-03'),
(109, 'SJBSI2046856', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKEKE PASCHAL CHIBUIKE', 'M', 1, '2020-05-03'),
(110, 'SJBSI2047437', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKEKE PATRICK CHIWETALU', 'M', 1, '2020-05-03'),
(111, 'SJBSI2048382', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKOYE AUGUSTINE ODINAKA', 'M', 1, '2020-05-03'),
(112, 'SJBSI2049148', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKOYE FRANCIS CHIEDOZIE', 'M', 1, '2020-05-03'),
(113, 'SJBSI2050453', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKOYE HENRY OLISAEMEKA', 'M', 1, '2020-05-03'),
(114, 'SJBSI2051124', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKOYE PETER NZUBECHUKWU', 'M', 1, '2020-05-03'),
(115, 'SJBSI2052484', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKPALA EMMANUEL CHUKWUMA', 'M', 1, '2020-05-03'),
(116, 'SJBSI2053610', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OKPALA SAMUEL CHIDERA', 'M', 1, '2020-05-03'),
(117, 'SJBSI2054624', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ONUNKWO GERALD CHIDERA', 'M', 1, '2020-05-03'),
(118, 'SJBSI2055939', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ONWUEGBUNAM JUDE THADDEUS IFEANYICHUKWU', 'M', 1, '2020-05-03'),
(119, 'SJBSI2056359', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'ORAZULUME EMMANUEL CHIDERA', 'M', 1, '2020-05-03'),
(120, 'SJBSI2057127', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'OZUAH PASCHAL CHIDOZIE', 'M', 1, '2020-05-03'),
(121, 'SJBSI2058864', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'UGORJI KINGSLEY CHUKWUEBUKA', 'M', 1, '2020-05-03'),
(122, 'SJBSI2059913', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'UKACHUKWU EMMANUEL CHIADIKA', 'M', 1, '2020-05-03'),
(123, 'SJBSI2060158', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'UZOBENYI PAUL ELOCHUKWU', 'M', 1, '2020-05-03'),
(124, 'SJBSI2083705', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', '', 'M', 1, '2020-05-10'),
(125, 'SJBSI2035870', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Arinze Ezeozue', 'M', 1, '2020-05-10'),
(126, 'SJBSI2022605', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Arinze Ezeozue', 'M', 1, '2020-05-10'),
(127, 'SJBSI2075953', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Arinze Ezeozue', 'M', 1, '2020-05-10'),
(128, 'SJBSI2037923', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Arinze Ezeozue', 'M', 1, '2020-05-10'),
(129, 'SJBSI2041186', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Arinze Eze', 'M', 1, '2020-05-10'),
(130, 'SJBSI2077143', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'eze arinze', 'M', 1, '2020-05-10'),
(131, 'SJBSI2082107', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Arinze Ezeoz', 'M', 1, '2020-05-10'),
(132, 'SJBSI2025069', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Frau Elena Michos', 'M', 1, '2020-05-10'),
(133, 'SJBSI2089732', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Anthony MacDowall Tulett', 'M', 1, '2020-05-10'),
(134, 'SJBSI2024103', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Frau Elena Mic', 'M', 1, '2020-05-10'),
(135, 'SJBSI2051760', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Herr Peter Heinz', 'M', 1, '2020-05-10'),
(136, 'SJBSI2042106', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Herr Josef SchÃ¶fte', 'M', 1, '2020-05-10'),
(137, 'SJBSI2090858', '94e08334fc2fba099935ca8d975e51767d4c5e2b6e81348d5581b8781de659a8', 'Frau Elena Michos', 'M', 1, '2020-05-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assesment`
--
ALTER TABLE `assesment`
  ADD PRIMARY KEY (`asses_id`);

--
-- Indexes for table `ass_exe`
--
ALTER TABLE `ass_exe`
  ADD PRIMARY KEY (`ass_exe_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `staff_de`
--
ALTER TABLE `staff_de`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `stud_de`
--
ALTER TABLE `stud_de`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subj_id`);

--
-- Indexes for table `trem_note`
--
ALTER TABLE `trem_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assesment`
--
ALTER TABLE `assesment`
  MODIFY `asses_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ass_exe`
--
ALTER TABLE `ass_exe`
  MODIFY `ass_exe_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_de`
--
ALTER TABLE `staff_de`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stud_de`
--
ALTER TABLE `stud_de`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `trem_note`
--
ALTER TABLE `trem_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
