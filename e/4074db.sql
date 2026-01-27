-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2025 at 05:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4074db`
--
CREATE DATABASE IF NOT EXISTS `4074db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `4074db`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `a_id` int(6) NOT NULL,
  `a_position` varchar(255) NOT NULL,
  `a_prefix` varchar(255) NOT NULL,
  `a_firstName` varchar(255) NOT NULL,
  `a_lastName` varchar(255) NOT NULL,
  `a_dob` date NOT NULL,
  `a_education` varchar(255) NOT NULL,
  `a_specialSkills` mediumtext NOT NULL,
  `a_workExperience` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`a_id`, `a_position`, `a_prefix`, `a_firstName`, `a_lastName`, `a_dob`, `a_education`, `a_specialSkills`, `a_workExperience`) VALUES
(1, 'นักวิเคราะห์ข้อมูล', 'นางสาว', 'ธิดารัตน์ ', 'บุญสุภา', '2010-03-04', 'ปริญญาตรี', '-', '-'),
(2, 'นักการตลาดดิจิทัล', 'นางสาว', 'กุลปริยา', 'แก้วตา', '2005-07-07', 'ปริญญาโท', 'เล่นดนตรี', '-'),
(3, 'นักการตลาดดิจิทัล', 'นางสาว', 'อนุสรา', 'แสงขรยาง', '2025-12-16', 'ปริญญาเอก', 'เขียนเว็บ', '5 ปีในบริษัทที่ทำเกี่ยวกับ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(6) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_height` int(6) NOT NULL,
  `r_color` varchar(255) NOT NULL,
  `r_major` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_name`, `r_phone`, `r_height`, `r_color`, `r_major`) VALUES
(1, 'ธิดารัตน์ บุญสุภา', '', 0, '', ''),
(2, 'ธิดารัตน์ บุญสุภา', '', 0, '', ''),
(3, 'กลุปริยา แก้วตา', '', 0, '', ''),
(4, 'อนุสรา แสงขรยาง', '', 0, '', ''),
(5, 'เพ็ญนภา เรืองชม', '', 0, '', ''),
(6, 'วีรญา เลาต๋า', '0899999', 0, '', ''),
(7, 'ธิดาทิพ ใจดี', '08955555', 165, '', ''),
(8, 'สุธิดา แก้วตา', '09365555', 175, '#27f024', 'คอมพิวเตอร์ธุรกิจ'),
(9, 'ธิดารัตน์ บุญสุภา', '093551000', 165, '#f240c2', 'คอมพิวเตอร์ธุรกิจ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `a_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
